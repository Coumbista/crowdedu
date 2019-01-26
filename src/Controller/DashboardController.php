<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\UserRepository;
use App\Repository\DonRepository;
use App\Repository\ProjetRepository;
use App\Form\Projet1Type;
use App\Entity\Projet;

class DashboardController extends Controller
{
    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function index(UserRepository $userRepository)
    {
        $listuser = $userRepository->findAll();
        return $this->render('dashboard/index.html.twig', [
            'controller_name' => 'DashboardController','users' =>  $listuser
        ]);
    }
    
    /**
     * @Route("/dashboard/projet_index", name="projet_index")
     */
    public function allProjet(ProjetRepository $projetRepository)
    {
        $listprojet = $projetRepository->findAll();
        foreach($listprojet as $key=>$value)
        {
            $value->setPhoto(base64_encode(stream_get_contents($value->getPhoto())));
        }
        return $this->render('dashboard/projet.html.twig', [
           'projets' =>  $listprojet
        ]);
    }
    //  /**
    //  * @Route("/{id}", name="projet_show", methods="GET")
    //  */
    // public function show(Projet $projet): Response
    // {
    //     $projet->setPhoto(base64_encode(stream_get_contents($projet->getPhoto())));
    //     return $this->render('dashboard/showProjet.html.twig', ['projet' => $projet]);
    // }
     /**
     * @Route("/{id}/edit", name="projet_edit", methods="GET|POST")
     */
    public function edit(Request $request, Projet $projet): Response
    {
        $form = $this->createForm(Projet1Type::class, $projet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('projet_index', ['id' => $projet->getId()]);
        }

        return $this->render('dashboard/editProjet.html.twig', [
            'projet' => $projet,
            'form' => $form->createView(),
        ]);
    }
     /**
     * @Route("/{id}", name="projet_delete",methods="DELETE")
     * 
     */
    public function delete(Request $request, ProjetRepository $projetRepository,$id): Response
    {
        $projet = $projetRepository->find($id);
        // dump($projet);
        // die();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($projet);
            $entityManager->flush();   
        

        return $this->redirectToRoute('projet_index');
    }
     /**
     * @Route("/new", name="projet_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $projet = new Projet();
        $form = $this->createForm(ProjetType::class, $projet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($projet);
            $em->flush();

            return $this->redirectToRoute('projet_index');
        }

        return $this->render('dashboard/newProjet.html.twig', [
            'projet' => $projet,
            'form' => $form->createView(),
        ]);
    }
     /**
     * @Route("/", name="don_index", methods="GET")
     */
    public function allDon(DonRepository $donRepository): Response
    {
        return $this->render('dashboard/don/index.html.twig', ['dons' => $donRepository->findAll()]);
    }
}
