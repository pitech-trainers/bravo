<?php

namespace Shop\BookshopBundle\DataFixtures\ORM;

use Hautelook\AliceBundle\Alice\DataFixtureLoader;
use Nelmio\Alice\Fixtures;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Shop\BookshopBundle\Entity\Categories;

class CategoriesFixtures implements FixtureInterface {
    
    protected static $path = "/home/aburian/Sites/bravo/src/Shop/BookshopBundle/Resources/config/Fixtures/categories.yml";
        
    public function load(ObjectManager $manager) {
        $loader = new \Nelmio\Alice\Loader\Yaml();
        $objects = $loader->load(static::$path);

        $persister = new \Nelmio\Alice\ORM\Doctrine($manager);
        $persister->persist($objects);

        $manager->flush();
    }
}