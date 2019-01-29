<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Repository\ProjetRepository ;
use App\Repository\UserRepository ;
use App\Repository\DonRepository ;
use App\Form\ContactType;
use App\Form\ProjetType;
use App\Form\Projet1Type;
use App\Entity\Categorie;
use App\Entity\Contact;
use App\Entity\Projet;
use App\Form\DonType;
use App\Entity\User;
use App\Entity\Don;
use App\Form\User1Type;


class FrontController extends Controller
{
   /**
     * @Route("/front", name="front")
     */
    public function findallProjet(Request $request,ProjetRepository $listprojets,DonRepository $donRepo):Response
    {
        $p= new Projet();
        $projet = $p->getId();
        $projets = $listprojets->findAll();     
        foreach($projets as $key=>$value){
            $value->setPhoto(base64_encode(stream_get_contents($value->getPhoto())));  
            }
            $paginator  = $this->get('knp_paginator');
            // paginer les projets
            $projet = $paginator->paginate($projets,$request->query->getInt('page', 1),6);
        return $this->render('front/index.html.twig', array('projet' => $projet));
    }   
    
    /**
     * @Route("/finID/{id}", name="findID", methods="GET")
     */
    public function findID($id ,ProjetRepository $projetRepo,Request $request): Response
    {
        $projet = $projetRepo->find($id);
        $entityManager = $this->getDoctrine()->getManager();
        $dons = $entityManager->getRepository(Don::class)->findActive(new \DateTime('-30 day'));
        $donsE = $entityManager->getRepository(Don::class)->findEleves('1000');        
        $som= $entityManager->getRepository(Don::class)->som($projet);
        // dump($som);
        // die();
        
            $projet->setPhoto(base64_encode(stream_get_contents($projet->getPhoto())));      
        return $this->render('front/detail.html.twig', array('projet' => $projet,'don'=>$dons,'donEL'=>$donsE,'som'=>$som));
    }
     /**
     * @Route("/mapage", name="mapage")
     */
    public function mescampagne(UserRepository $userRepo)
    {
        $user = $this->getUser();
        $p = $userRepo->find($user);
        foreach($p->getProjets() as $key=>$value){
            $value->setPhoto(base64_encode(stream_get_contents($value->getPhoto())));
        }
            return $this->render('front/pageEtudiant.html.twig',['user'=>$p]);
    }
    /**
     * @Route("/campagne", name="campagne")
     */
    public function SaveProjet(Request $request,UserRepository $userRepo): Response
    {
        $user = $this->getUser();
    
        // 1) construire le formulaire
        $entityManager = $this->getDoctrine()->getManager();
        $projet = new Projet();        
        $form = $this->createForm(ProjetType::class, $projet);
        // 2)gérer la soumission (ne se produira que sur le POST)
         $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $file = $projet->getPhoto();           
            $fileName = file_get_contents($file);
            $projet->setPhoto( $fileName);
            $projet->setUser($user);           
            // 4) sauvegarder le projet!
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($projet);
            $entityManager->flush();           

            return $this->redirectToRoute('front');
        }              
        return $this->render(
            'front/campagne.html.twig',
            array('form' => $form->createView())
        );    
    }
      /**
     * @return string
     */
    private function generateUniqueFileName()
    {
        // md5() reduces the similarity of the file names generated by
        // uniqid(), which is based on timestamps
        return md5(uniqid());
    }
        /**
         * @Route("/fairedon/{id}", name="fairedon")
         */
        public function faireDon(Request $request,\Swift_Mailer $mailer,ProjetRepository $projetchoice,$id): Response
        {
            
            $projet_id = $projetchoice->find($id);
            // $random = random_bytes(5);
            // $rand = bin2hex($random);
            $projet_id->setAffichePhoto(base64_encode(stream_get_contents( $projet_id->getPhoto()))); 
            $entityManager = $this->getDoctrine()->getManager();
            $don = new Don();        
            $form = $this->createForm(DonType::class, $don);
            // 2)gérer la soumission (ne se produira que sur le POST)
             $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $don->setDate(new \DateTime());
                $don->setProjet($projet_id);
                // $don->setCodePermenant($rand);
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($don);
                $entityManager->flush(); 
                $message = (new \Swift_Message('Faire don'))
                ->setFrom('crowdeud.edu@gmail.com')
                ->setTo($don->getEmail())
                ->setBody($this->renderView(
                        'front/donrecu.html.twig',[
                            'nom' => $don->getNom(), 
                            'prenom'=>$don->getPrenom()
                        ]
                    ),
                    'text/html'
                );
                $mailer->send($message);
                // $this->addFlash('success', 'I envoyées à '.$user->getEmail());
           
            }
        return $this->render(
            'front/don.html.twig',
            array('form' => $form->createView(),'projt'=>$projet_id)
        );
        }
        	
    //  /**
    //  * @Route("/random", name="random")
    //  */
    // public function generersouscode(Request $request)
    // {
    //     $random = random_bytes(5);
    //     $rand = bin2hex($random);
       
    // return $this->render('front/exemple.html.twig', ['random' => $rand]);
    //     }
        /**
     * @Route("/{id}/edit_projet", name="edit_projet", methods="GET|POST")
     */
    public function edit(Request $request, Projet $projet): Response
    {
        
        $form = $this->createForm(Projet1Type::class, $projet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('mapage', ['id' => $projet->getId()]);
        }

        return $this->render('front/edit_Projet.html.twig', [
            'projet' => $projet,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/mail", name="send_mail")
     */ 
    public function index(Request $request,\Swift_Mailer $mailer,UserRepository $userRepo)
    {
        $form = $this->createFormBuilder()
            ->add('email', EmailType::class)
            // ->add('save', SubmitType::class, ['label' => 'Demander un nouveau mot de passe'])
            ->getForm();
    
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $email = $data['email'];
            $user = $userRepo->findOneBy(['email'=>$email]);
            if(!$user) {
                $this->addFlash('danger', 'votre email n\'existe pas!');
                return $this->render('front/registration.html.twig', [ 'form' => $form->createView(),]);
            }
            $message = (new \Swift_Message('Réinitialisation de mot de passe demandée'))
            ->setFrom('crowdeud.edu@gmail.com')
            ->setTo($user->getEmail())
            ->setBody($this->renderView(
                    'front/resetmdp.html.twig',[
                        'nom' => $user->getNom(), 
                        'prenom'=>$user->getPrenom()
                    ]
                ),
                'text/html'
            );
            $mailer->send($message);
            $this->addFlash('success', 'Instructions de réinitialisation envoyées à '.$user->getEmail());
        }
        return $this->render('front/registration.html.twig', [
            'form' => $form->createView(),
        ]);        
    }
     /**
     * @Route("/change_mdp", name="change_mdp")
     */ 
    public function modifMPD(Request $request,UserPasswordEncoderInterface $passwordEncoder)
    {
        
        $user = new User();
        $form = $this->createForm(User1Type::class, $user);
        
        // 2)gérer la soumission (ne se produira que sur le POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {  
           
            // 3) Encoder le mot de passe (vous pouvez aussi le faire via l'écouteur Doctrine)
           
            $password = $passwordEncoder->encodePassword($user, $user->getPassword());
            $user->getEmail();
            $user->setPassword($password);
            $this->getDoctrine()->getManager()->flush();
        }
        return $this->render('front/changemdp.html.twig', [
            'form' => $form->createView(),
        ]);          
    
}
}
