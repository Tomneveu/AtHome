<?php

namespace App\Controller;

use App\Entity\Prestations;
use App\Repository\PrestationsRepository;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(AuthenticationUtils $authenticationUtils, PrestationsRepository $prestationsRepository): Response
    {
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        $soins = $prestationsRepository->findByName('soins');
        $esthétique = $prestationsRepository->findByName('esthétique');
        $coiffure = $prestationsRepository->findByName('coiffure');
        $réseaux = $prestationsRepository->findByName('réseaux');

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'soins' => $soins,
            'esthétique' => $esthétique,
            'coiffure' => $coiffure,
            'réseaux' => $réseaux,
            
        ]);
    }

    /**
     * @Route("/soins", name="soins")
     */
    public function soins(PrestationsRepository $prestationsRepository): Response
    {
        $soins = $prestationsRepository->findByName('soins');

        return $this->render('home/soins.html.twig', [
            'controller_name' => 'HomeController',
            'soins' => $soins,
        ]);
    }

    /**
     * @Route("/esthétique", name="esthétique")
     */
    public function esthétique(PrestationsRepository $prestationsRepository): Response
    {
        $esthétique = $prestationsRepository->findByName('esthétique');

        return $this->render('home/esthétique.html.twig', [
            'controller_name' => 'HomeController',
            'esthétique' => $esthétique,
        ]);
    }

    /**
     * @Route("/coiffure", name="coiffure")
     */
    public function coiffure(PrestationsRepository $prestationsRepository): Response
    {
        $coiffure = $prestationsRepository->findByName('coiffure');

        return $this->render('home/coiffure.html.twig', [
            'controller_name' => 'HomeController',
            'coiffure' => $coiffure,
        ]);
    }

    /**
     * @Route("/search/{id}", name="search_show", methods={"GET"})
     */
    public function prestaShow(Prestations $prestation): Response
    {
        return $this->render('prestations/show.html.twig', [
            'prestation' => $prestation,
        ]);
    }
}
