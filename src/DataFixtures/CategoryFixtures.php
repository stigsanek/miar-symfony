<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    private $categorys = [
        'Не указано',
        'Земли сельскохозяйственного назначения',
        'Земли населенных пунктов',
        'Земли промышленности, энергетики, транспорта, связи, радиовещания, телевидения, информатики, земли для обеспечения космической деятельности, земли обороны, безопасности и земли иного специального назначения',
        'Земли особо охраняемых территорий и объектов',
        'Земли лесного фонда',
        'Земли водного фонда',
        'Земли запаса',
        'Категория не установлена'
    ];

    public function load(ObjectManager $manager)
    {
        foreach ($this->categorys as $item) {
            $category = new Category();
            $category->setName($item);

            $manager->persist($category);
        }

        $manager->flush();
    }
}
