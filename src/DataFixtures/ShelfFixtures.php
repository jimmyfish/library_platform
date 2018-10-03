<?php

namespace App\DataFixtures;

use App\Entity\Shelf;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class ShelfFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create();

        for ($i = 0; $i < 100; $i++) {
            $shelf = new Shelf();

            $shelf->setShelfIdentifier('ASD-'.$faker->numberBetween(1, 100));
            $shelf->setFloor($faker->numberBetween(1,20));

            $manager->persist($shelf);
        }

        $manager->flush();
    }
}
