<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    // Define categories as class-level constant
    private const CATEGORIES = [
        'Action',
        'Aventure',
        'Animation',
        'Fantastique',
        'Horreur',
    ];

    public function load(ObjectManager $manager)
    {
        // Iterate over categories
        foreach (self::CATEGORIES as $categoryName) {
            // Create a new Category object
            $category = new Category();
            // Set the category name
            $category->setName($categoryName);
            // Persist the category
            $manager->persist($category);
        }

        // Flush changes to the database
        $manager->flush();
    }
}
