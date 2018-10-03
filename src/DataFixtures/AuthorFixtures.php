<?php

namespace App\DataFixtures;

use App\Entity\Author;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class AuthorFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('id_ID');

        for ($i = 0; $i < 25; $i++) {
            $author = new Author();

            $author->setFirstName($faker->firstName);
            $author->setLastName($faker->lastName);
            $author->setBirthdate(new \DateTime('1980-01-01 00:00:00'));
            $author->setBirthplace($faker->city);
            $author->setNationality($faker->country);

            $manager->persist($author);
        }

        $manager->flush();
    }
}
