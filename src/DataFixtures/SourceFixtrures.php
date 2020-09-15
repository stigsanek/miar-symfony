<?php

namespace App\DataFixtures;

use App\Entity\Source;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class SourceFixtrures extends Fixture
{
    private $sources = [
        'Не указано',
        'Комиссии_1',
        'Предложения',
        'Предложения (volga info)',
        'Предложения_1',
        'Предложения (torgi.gov.ru) - из доп файла_1',
        'Предложения (torgi.gov.ru)_1',
        'Предложения (torgi.gov.ru)_2',
        'Предложения (torgi.gov.ru)_2 (не состоялись)',
        'Сделки (torgi.gov.ru)_1',
        'Сделки (ОМС)_1',
        'Сделки (ОМС-2ч)_1',
        'Сделки (пр.выкуп)_1',
        'Сделки (РР)_1',
        'Суды_1',
        'Сделки (пр.выкуп)',
        'Суды'
    ];

    public function load(ObjectManager $manager)
    {
        foreach ($this->sources as $item) {
            $source = new Source();
            $source->setName($item);

            $manager->persist($source);
        }

        $manager->flush();
    }
}
