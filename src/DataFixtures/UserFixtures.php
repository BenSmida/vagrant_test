<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker;
use App\Entity\User;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create('fr_FR');
	
		for ($i=0; $i<20; $i++) {
			$user = (new User())
				->setName($faker->name)
				->setEmail($faker->email)
				->setAddress($faker->streetAddress)
				->setCity($faker->city)
				->setZip((int)$faker->postcode)
				->setDescription($faker->text);
			$manager->persist($user);
		}

        $manager->flush();
    }
}
