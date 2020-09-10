<?php

namespace App\DataFixtures;

use App\Entity\Classifier;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ClassifierFixtures extends Fixture
{
    private $classifiers = [
        ['name' => 'Не указано', 'minPrice' => 0, 'maxPrice' => 50000],
        ['name' => 'АЗС', 'minPrice' => 300, 'maxPrice' => 40000],
        ['name' => 'Водные объекты', 'minPrice' => 0.5, 'maxPrice' => 300],
        ['name' => 'Гаражи индивидуальные', 'minPrice' => 20, 'maxPrice' => 4000],
        ['name' => 'Сервис придорожный', 'minPrice' => 100, 'maxPrice' => 10000],
        ['name' => 'ИЖС', 'minPrice' => 20, 'maxPrice' => 15000],
        ['name' => 'Лес', 'minPrice' => 0, 'maxPrice' => 50000],
        ['name' => 'ЛПХ', 'minPrice' => 2, 'maxPrice' => 4000],
        ['name' => 'Многолетние сады', 'minPrice' => 0.3, 'maxPrice' => 50],
        ['name' => 'Многоэтажная застройка', 'minPrice' => 300, 'maxPrice' => 40000],
        ['name' => 'Недропользование, обеспечение правопорядка', 'minPrice' => 10, 'maxPrice' => 4000],
        ['name' => 'Огородничество', 'minPrice' => 2, 'maxPrice' => 4000],
        ['name' => 'Предпринимательство', 'minPrice' => 300, 'maxPrice' => 40000],
        ['name' => 'Полигоны ТБО', 'minPrice' => 2, 'maxPrice' => 4000],
        ['name' => 'Производственное использование', 'minPrice' => 20, 'maxPrice' => 4000],
        ['name' => 'Рекреация', 'minPrice' => 30, 'maxPrice' => 10000],
        ['name' => 'Ритуальное использование', 'minPrice' => 2, 'maxPrice' => 4000],
        ['name' => 'Рыбоводство', 'minPrice' => 0.5, 'maxPrice' => 100],
        ['name' => 'Садоводство', 'minPrice' => 20, 'maxPrice' => 15000],
        ['name' => 'Сельхозпроизводство', 'minPrice' => 2, 'maxPrice' => 300],
        ['name' => 'Сельхозугодья', 'minPrice' => 0.3, 'maxPrice' => 40],
        ['name' => 'Склад', 'minPrice' => 20, 'maxPrice' => 4000],
        ['name' => 'Общественное использование', 'minPrice' => 200, 'maxPrice' => 10000],
        ['name' => 'Спортивные объекты', 'minPrice' => 200, 'maxPrice' => 10000],
        ['name' => 'Стоянки', 'minPrice' => 150, 'maxPrice' => 5000],
        ['name' => 'Торговое', 'minPrice' => 300, 'maxPrice' => 40000],
        ['name' => 'Энергетика, транспорт', 'minPrice' => 10, 'maxPrice' => 4000],
        ['name' => 'Гостиницы', 'minPrice' => 400, 'maxPrice' => 7000],
        ['name' => 'Реклама', 'minPrice' => 300, 'maxPrice' => 3000],
        ['name' => 'ГСК, паркинги', 'minPrice' => 100, 'maxPrice' => 1000]
    ];

    public function load(ObjectManager $manager)
    {
        foreach ($this->classifiers as $item) {
            $classifier = new Classifier();
            $classifier->setName($item['name']);
            $classifier->setMinPrice($item['minPrice']);
            $classifier->setMaxPrice($item['maxPrice']);

            $manager->persist($classifier);
        }

        $manager->flush();
    }
}
