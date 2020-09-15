<?php

namespace App\DataFixtures;

use App\Entity\Communication;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CommunicationFixtures extends Fixture
{
    private $communications = [
        'Не указано',
        'Нет',
        'Да'
    ];

    public function load(ObjectManager $manager)
    {
        foreach ($this->communications as $item) {
            $communication = new Communication();
            $communication->setName($item);

            $manager->persist($communication);
        }

        $manager->flush();
    }
}
