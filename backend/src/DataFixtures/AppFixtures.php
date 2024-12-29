<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{

    public function __construct(
        private UserPasswordHasherInterface $passwordHasher
    ) {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager): void
    {
        $user = (new User())
            ->setEmail('lucas.detling@gmail.com')
            ->setFirstname('Lucas')
            ->setLastname('Detling')
            ->setPhone('+33668372876')
            ->setRoles(['ROLE_ADMIN']);
        $password = $this->passwordHasher->hashPassword($user, 'admin');
        $user->setPassword($password);
        $manager->persist($user);

        $manager->flush();
    }
}
