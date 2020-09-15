<?php

namespace App\DataFixtures;

use App\Entity\District;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class DistrictFixtures extends Fixture
{
    private $districts = [
        ['name' => 'Не указано', 'cadastralCode' => ''],
        ['name' => 'г. Самара Железнодорожный р-н', 'cadastralCode' => '63:01:01'],
        ['name' => 'г. Самара Кировский р-н', 'cadastralCode' => '63:01:02'],
        ['name' => 'г. Самара Красноглинский р-н', 'cadastralCode' => '63:01:03'],
        ['name' => 'г. Самара Куйбышевский р-н', 'cadastralCode' => '63:01:04'],
        ['name' => 'г. Самара Ленинский р-н', 'cadastralCode' => '63:01:05'],
        ['name' => 'г. Самара Октябрьский р-н', 'cadastralCode' => '63:01:06'],
        ['name' => 'г. Самара Промышленный р-н', 'cadastralCode' => '63:01:07'],
        ['name' => 'г. Самара Самарский р-н', 'cadastralCode' => '63:01:08'],
        ['name' => 'г. Самара Советский р-н', 'cadastralCode' => '63:01:09'],
        ['name' => 'г. Самара остальное', 'cadastralCode' => '63:01:00'],
        ['name' => 'г. Жигулевск', 'cadastralCode' => '63:02:00'],
        ['name' => 'г. Кинель', 'cadastralCode' => '63:03:00'],
        ['name' => 'г. Новокуйбышевск', 'cadastralCode' => '63:04:00'],
        ['name' => 'г. Октябрьск', 'cadastralCode' => '63:05:00'],
        ['name' => 'г. Отрадный', 'cadastralCode' => '63:06:00'],
        ['name' => 'г. Похвистнево', 'cadastralCode' => '63:07:00'],
        ['name' => 'г. Сызрань', 'cadastralCode' => '63:08:00'],
        ['name' => 'г. Тольятти Автозаводский р-н', 'cadastralCode' => '63:09:01'],
        ['name' => 'г. Тольятти Комсомольский р-н', 'cadastralCode' => '63:09:02'],
        ['name' => 'г. Тольятти Центральный р-н', 'cadastralCode' => '63:09:03'],
        ['name' => 'г. Тольятти остальное', 'cadastralCode' => '63:09:00'],
        ['name' => 'г. Чапаевск', 'cadastralCode' => '63:10:00'],
        ['name' => 'Алексеевский район', 'cadastralCode' => '63:11:00'],
        ['name' => 'Безенчукский район', 'cadastralCode' => '63:12:00'],
        ['name' => 'Богатовский район', 'cadastralCode' => '63:13:00'],
        ['name' => 'Большеглушицкий район', 'cadastralCode' => '63:14:00'],
        ['name' => 'Большечерниговский район', 'cadastralCode' => '63:15:00'],
        ['name' => 'Борский район', 'cadastralCode' => '63:16:00'],
        ['name' => 'Волжский район', 'cadastralCode' => '63:17:00'],
        ['name' => 'Елховский район', 'cadastralCode' => '63:18:00'],
        ['name' => 'Исаклинский район', 'cadastralCode' => '63:19:00'],
        ['name' => 'Камышлинский район', 'cadastralCode' => '63:20:00'],
        ['name' => 'Клявлинский район', 'cadastralCode' => '63:21:00'],
        ['name' => 'Кинельский район', 'cadastralCode' => '63:22:00'],
        ['name' => 'Кинель-Черкасский район', 'cadastralCode' => '63:23:00'],
        ['name' => 'Кошкинский район', 'cadastralCode' => '63:24:00'],
        ['name' => 'Красноармейский район', 'cadastralCode' => '63:25:00'],
        ['name' => 'Красноярский район', 'cadastralCode' => '63:26:00'],
        ['name' => 'Нефтегорский район', 'cadastralCode' => '63:27:00'],
        ['name' => 'Пестравский район', 'cadastralCode' => '63:28:00'],
        ['name' => 'Похвистневский район', 'cadastralCode' => '63:29:00'],
        ['name' => 'Приволжский район', 'cadastralCode' => '63:30:00'],
        ['name' => 'Сергиевский район', 'cadastralCode' => '63:31:00'],
        ['name' => 'Ставропольский район', 'cadastralCode' => '63:32:00'],
        ['name' => 'Сызранский район', 'cadastralCode' => '63:33:00'],
        ['name' => 'Хворостянский район', 'cadastralCode' => '63:34:00'],
        ['name' => 'Челно-Вершинский район', 'cadastralCode' => '63:35:00'],
        ['name' => 'Шенталинский район', 'cadastralCode' => '63:36:00'],
        ['name' => 'Шигонский район', 'cadastralCode' => '63:37:00']
    ];

    public function load(ObjectManager $manager)
    {
        foreach ($this->districts as $item) {
            $district = new District();
            $district->setName($item['name']);
            $district->setCadastralCode($item['cadastralCode']);

            $manager->persist($district);
        }

        $manager->flush();
    }
}
