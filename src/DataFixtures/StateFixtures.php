<?php

namespace App\DataFixtures;

use App\Entity\State;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class StateFixtures extends Fixture
{
    private $states = [
        'Не указано',
        'Обработан',
        'Не обработан'
    ];

    public function load(ObjectManager $manager)
    {
        foreach ($this->states as $item) {
            $state = new State();
            $state->setName($item);

            $manager->persist($state);
        }

        $manager->flush();
    }
}
