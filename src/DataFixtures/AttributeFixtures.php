<?php

namespace App\DataFixtures;

use App\Entity\Attribute;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AttributeFixtures extends Fixture
{
    private $attributes = [
        'Не указано',
        'Сохранение',
        'Удаление',
        'Обсуждение',
        'Карантин'
    ];

    public function load(ObjectManager $manager)
    {
        foreach ($this->attributes as $item) {
            $attribute = new Attribute();
            $attribute->setName($item);

            $manager->persist($attribute);
        }

        $manager->flush();
    }
}
