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

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/services", name="services")
     */
    public function services(PrestationsRepository $prestationsRepository): Response
    {

        return $this->render('home/services.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/service1", name="service1")
     */
    public function service1(PrestationsRepository $prestationsRepository): Response
    {
        $service1 = $prestationsRepository->findByName('soins');

        return $this->render('home/service1.html.twig', [
            'controller_name' => 'HomeController',
            'service1' => $service1,
        ]);
    }

    /**
     * @Route("/service2", name="service2")
     */
    public function service2(PrestationsRepository $prestationsRepository): Response
    {
        $service2 = $prestationsRepository->findByName('esthetique');

        return $this->render('home/service2.html.twig', [
            'controller_name' => 'HomeController',
            'service2' => $service2,
        ]);
    }

    /**
     * @Route("/service3", name="service3")
     */
    public function service3(PrestationsRepository $prestationsRepository): Response
    {
        $service3 = $prestationsRepository->findByName('coiffure');

        return $this->render('home/service3.html.twig', [
            'controller_name' => 'HomeController',
            'service3' => $service3,
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
