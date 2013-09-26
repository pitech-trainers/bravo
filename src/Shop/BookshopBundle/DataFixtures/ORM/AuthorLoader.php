<?php

namespace Shop\BookshopBundle\DataFixtures\ORM;

use Hautelook\AliceBundle\Alice\DataFixtureLoader;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Nelmio\Alice\Fixtures;

class AuthorLoader implements FixtureInterface {

    protected static $path = "/home/dcoman/Sites/bravo/src/Shop/BookshopBundle/Resources/config/Fixtures/Author.yml";

    public function load(ObjectManager $manager) {

        $loader = new \Nelmio\Alice\Loader\Yaml();

        $objects = $loader->load(static::$path);

        $persister = new \Nelmio\Alice\ORM\Doctrine($manager);
        $persister->persist($objects);

        $manager->flush();
        
    }

}