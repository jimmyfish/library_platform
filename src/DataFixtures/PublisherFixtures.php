<?php

namespace App\DataFixtures;

use App\Entity\Publisher;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;
use Faker\Provider\Company;

class PublisherFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('id_ID');

        for ($i = 0;$i < 50;$i++) {
            $publisher = new Publisher();

            $publisher->setCompanyName($faker->company);
            $publisher->setCompanyAddress($faker->address);
            $publisher->setCompanyPhoneNumber($faker->phoneNumber);

            $manager->persist($publisher);
        }

        $manager->flush();
    }
}
