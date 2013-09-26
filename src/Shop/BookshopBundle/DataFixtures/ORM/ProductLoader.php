<?php

namespace Shop\BookshopBundle\DataFixtures\ORM;

use Hautelook\AliceBundle\Alice\DataFixtureLoader;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Nelmio\Alice\Fixtures;
use Symfony\Component\Finder\Finder;

class ProductLoader implements FixtureInterface {

    public function load(ObjectManager $manager) {

        $loader = new \Nelmio\Alice\Loader\Yaml();

        $faker = new \Faker\Generator();
        $p = new \Shop\BookshopBundle\Faker\Provider\ProductProvider($faker);
        $faker->addProvider($p);

        $finder = new Finder();
        $finder->files()->name('Product.yml')->in('src/Shop/BookshopBundle/Resources');

        foreach ($finder as $file) {
            $path = $file->getRealpath();
        };

        Fixtures::load($path, $manager, array('providers' => array($p)));
    }

}