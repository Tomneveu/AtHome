<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use App\Repository\PrestationsRepository;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProfileController extends AbstractController
{
    private $security;

    public function __construct(Security $security)
    {
        // Avoid calling getUser() in the constructor: auth may not
        // be complete yet. Instead, store the entire Security object.
        $this->security = $security;
    }
    /**
     * @Route("/profile", name="profile")
     */
    public function index(UserRepository $userRepository, PrestationsRepository $prestationsRepository)
    {
        $user = $this->security->getUser();

        $presta = $prestationsRepository->findByprestataire($user);

        return $this->render('security/profile.html.twig', [
            'prestations' => $presta,
        ]);
    }
}
