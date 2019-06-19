<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class ProductFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');
        for ($i = 0; $i < 50; $i++ ){
            $product = new Product();
            $product
                ->setName($faker->words(2, true))
                ->setPrice($faker->numberBetween(20,350))
                ->setDescription($faker->sentence(2, true));
             $manager->persist($product);
        }
        $manager->flush();
    }
}
