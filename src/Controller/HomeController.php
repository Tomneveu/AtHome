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

        $massage = $prestationsRepository->findByName('massage');
        $beaute = $prestationsRepository->findByName('beauté');
        $coiffure = $prestationsRepository->findByName('coiffure');

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'massage' => $massage,
            'beaute' => $beaute,
            'coiffure' => $coiffure,
        ]);
    }

    /**
     * @Route("/massage", name="massage")
     */
    public function massage(PrestationsRepository $prestationsRepository): Response
    {
        $massage = $prestationsRepository->findByName('massage');

        return $this->render('home/massage.html.twig', [
            'controller_name' => 'HomeController',
            'massage' => $massage,
        ]);
    }

    /**
     * @Route("/beaute", name="beaute")
     */
    public function beaute(PrestationsRepository $prestationsRepository): Response
    {
        $beaute = $prestationsRepository->findByName('beauté');

        return $this->render('home/beaute.html.twig', [
            'controller_name' => 'HomeController',
            'beaute' => $beaute,
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
