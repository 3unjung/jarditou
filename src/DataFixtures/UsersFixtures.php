<?php

namespace App\DataFixtures;

use App\Entity\Users;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Faker;

class UsersFixtures extends Fixture
{
    public function __construct(private UserPasswordHasherInterface $passwordEncoder)
    {
        //$this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $admin = new Users();
        $admin->setEmail('anti@symfony.com');
        $admin->setRoles(['ROLE_ADMIN']);
        $admin->setPassword($this->passwordEncoder->hashPassword($admin, 'antiSymfony6'));
        $admin->setFirstname('Symfony');
        $admin->setLastname('Anti');
        $manager->persist($admin);

        $faker = Faker\Factory::create('fr_fr');

        for ($i=1; $i<=69;$i++) {
            $user = new Users();
            $user->setEmail($faker->email);
            $user->setRoles(['ROLE_ADMIN']);
            $user->setPassword($this->passwordEncoder->hashPassword($user, "ya deux possibilités soit je taide et tu essayes ce que je dis et pas 1h plus tard
                soit tu veux pas daide et je te laisse tranquille"));
            $user->setFirstname($faker->firstName());
            $user->setLastname($faker->lastname());
            $manager->persist($user);

        }

        $manager->flush();
    }
}