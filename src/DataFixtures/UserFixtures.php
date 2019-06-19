<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');

        for ($i = 0; $i < 10; $i++ ){
            $user = new User();
            $user
                ->setUsername($faker->words(1, true))
                ->setEmail($faker->email)
                ->setEnabled(true)
                ->setPlainPassword('test')
                ->setRoles(array('ROLE_USER'));
            $manager->persist($user);
        }

        $user = new User();
        $user
            ->setUsername('disko')
            ->setEmail('disko@disko.fr')
            ->setEnabled(true)
            ->setPlainPassword('disko')
            ->setRoles(array('ROLE_USER'));
        $manager->persist($user);

        $manager->flush();
    }
}
