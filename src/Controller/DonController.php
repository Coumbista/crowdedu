<?php

namespace App\Controller;

use App\Entity\Don;
use App\Form\Don1Type;
use App\Repository\DonRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/don")
 */
class DonController extends Controller
{
    /**
     * @Route("/", name="don_index", methods="GET")
     */
    public function index(DonRepository $donRepository): Response
    {
        return $this->render('dashboard/don/index.html.twig', ['dons' => $donRepository->findAll()]);
    }

    /**
     * @Route("/new", name="don_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $don = new Don();
        $form = $this->createForm(Don1Type::class, $don);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($don);
            $em->flush();

            return $this->redirectToRoute('don_index');
        }

        return $this->render('don/new.html.twig', [
            'don' => $don,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="don_show", methods="GET")
     */
    public function show(Don $don): Response
    {
        return $this->render('dashboard/don/show.html.twig', ['don' => $don]);
    }

    /**
     * @Route("/{id}/edit", name="don_edit", methods="GET|POST")
     */
    public function edit(Request $request, Don $don): Response
    {
        $form = $this->createForm(Don1Type::class, $don);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('don_edit', ['id' => $don->getId()]);
        }

        return $this->render('dashboard/don/edit.html.twig', [
            'don' => $don,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="don_delete", methods="DELETE")
     */
    public function delete(Request $request, Don $don): Response
    {
        if ($this->isCsrfTokenValid('delete'.$don->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($don);
            $em->flush();
        }

        return $this->redirectToRoute('don_index');
    }
}
