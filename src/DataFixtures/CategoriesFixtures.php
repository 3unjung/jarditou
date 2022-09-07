<?php

namespace App\DataFixtures;

use App\Entity\Categories;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoriesFixtures extends Fixture
{
    public static function getGroups(): array {

        return ['CategoriesFixtures'];
    }
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $parent = $this->createCategory('INTEL', null, manager: $manager);

        $this->createCategory('Memoires', $parent, $manager);
        $this->createCategory('Cartes Graphiques', $parent, $manager);
        $this->createCategory('Mini-PC', $parent, $manager);

        $manager->flush();
    }

    public function createCategory(string $name, Categories $parent = null,ObjectManager $manager)
    {
        $category = new Categories();
        $category->setName($name);
        $category->setParent($parent);
        $manager->persist($category);

        return $category;
    }
}
