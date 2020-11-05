<?php

namespace App\Controller;

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
}
