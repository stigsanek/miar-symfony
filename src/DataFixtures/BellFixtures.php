<?php

namespace App\DataFixtures;

use App\Entity\Bell;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class BellFixtures extends Fixture
{
    private $bells = [
        'Не требуется',
        'Сделан звонок',
        'Необходим звонок'
    ];

    public function load(ObjectManager $manager)
    {
        foreach ($this->bells as $item) {
            $bell = new Bell();
            $bell->setName($item);

            $manager->persist($bell);
        }

        $manager->flush();
    }
}
