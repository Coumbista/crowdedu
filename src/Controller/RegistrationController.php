<?php

namespace App\Controller;

use App\Form\UserType;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Repository\UserRepository ;


class RegistrationController extends Controller
{
     /**
     * @Route("/register", name="user_registration")
     */
    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
       
        // 1) construire le formulaire
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        
        // 2)gérer la soumission (ne se produira que sur le POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {          

            // 3) Encoder le mot de passe (vous pouvez aussi le faire via l'écouteur Doctrine)
           
            $password = $passwordEncoder->encodePassword($user, $user->getPassword());
            $user->setPassword($password);
            $user->setIsActive(true);
            $user->setRoles(['ROLE_USER']);
           

            // 4) sauvegarder l'utilisateur!
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            // faire un autre travail - comme envoyer un email, etc.
            // peut-être définir un message de réussite "flash" pour l'utilisateur
            $this->addFlash('success', 'Votre compte à bien été enregistré.');

            return $this->redirectToRoute('login');
        }

        return $this->render(
            'registration/index.html.twig',
            array('form' => $form->createView())
        );
    }
    
}

