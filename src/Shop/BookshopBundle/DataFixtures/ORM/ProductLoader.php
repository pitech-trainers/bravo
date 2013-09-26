<?php

namespace Shop\BookshopBundle\DataFixtures\ORM;

use Hautelook\AliceBundle\Alice\DataFixtureLoader;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Nelmio\Alice\Fixtures;
use Symfony\Component\Finder\Finder;

class ProductLoader implements FixtureInterface {
    
    protected static $path = "/home/dcoman/Sites/bravo/src/Shop/BookshopBundle/Resources/config/Fixtures/Product.yml";

    public function load(ObjectManager $manager) {

        $loader = new \Nelmio\Alice\Loader\Yaml();

        $faker = new \Faker\Generator();
        $p = new \Shop\BookshopBundle\Faker\Provider\ProductProvider($faker);
        $faker->addProvider($p);

        Fixtures::load(static::$path, $manager, array('providers' => array($p)));
    }

}