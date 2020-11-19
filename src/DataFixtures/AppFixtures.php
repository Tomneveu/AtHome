<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setEmail('admin@mail.fr');
        $user->setRoles(['ROLE_ADMIN']);
        $user->setPassword('$argon2id$v=19$m=65536,t=4,p=1$clJmam9SdGRBaHByY3NKWg$e9Am1oPiW2xp5usBCEe1h+9fAr6H+ls6wUuZdhncdDU');
        $user->setFirstName('admin');
        $user->setLastName('admin');

        $manager->persist($user);

        $manager->flush();
    }
}
