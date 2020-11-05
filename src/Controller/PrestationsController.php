<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Prestations;
use App\Form\PrestationsType;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/prestations")
 */
class PrestationsController extends AbstractController
{
    private $security;

    public function __construct(Security $security)
    {
        // Avoid calling getUser() in the constructor: auth may not
        // be complete yet. Instead, store the entire Security object.
        $this->security = $security;
    }
    /**
     * @Route("/new", name="prestations_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $user = $this->security->getUser();

        $prestation = new Prestations();
        $form = $this->createForm(PrestationsType::class, $prestation);
        $form->handleRequest($request);

        $prestation->setPrestataire($user);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($prestation);
            $entityManager->flush();

            return $this->redirectToRoute('profile');
        }
        return $this->render('prestations/new.html.twig', [
            'prestation' => $prestation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="prestations_show", methods={"GET"})
     */
    public function show(Prestations $prestation): Response
    {
        return $this->render('prestations/show.html.twig', [
            'prestation' => $prestation,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="prestations_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Prestations $prestation): Response
    {
        $form = $this->createForm(PrestationsType::class, $prestation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('profile');
        }

        return $this->render('prestations/edit.html.twig', [
            'prestation' => $prestation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="prestations_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Prestations $prestation): Response
    {
        if ($this->isCsrfTokenValid('delete'.$prestation->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($prestation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('profile');
    }
}
