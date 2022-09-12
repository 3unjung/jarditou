<?php

namespace App\DataFixtures;

use App\Entity\Categories;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use phpDocumentor\Reflection\Types\Null_;

class CategoriesFixtures extends Fixture
{
    public static function getGroups(): array {

        return ['CategoriesFixtures'];
    }
    public function load(ObjectManager $manager): void
    {
        $category = new Categories();
        $category->setParent(null);
        $category->setName("Processeur");
        $manager->persist($category);
    
        $manager->flush();
    
    }
}
