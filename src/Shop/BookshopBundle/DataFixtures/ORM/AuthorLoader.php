<?php

namespace Shop\BookshopBundle\DataFixtures\ORM;

use Hautelook\AliceBundle\Alice\DataFixtureLoader;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Finder\Finder;
use Nelmio\Alice\Fixtures;

class AuthorLoader implements FixtureInterface
{

    public function load(ObjectManager $manager)
    {

        $loader = new \Nelmio\Alice\Loader\Yaml();

        $finder = new Finder();
        $finder->files()->name('Author.yml')->in('src/Shop/BookshopBundle/Resources');

        foreach ($finder as $file) {
            $path = $file->getRealpath();
        }


        $objects = $loader->load($path);

        $persister = new \Nelmio\Alice\ORM\Doctrine($manager);
        $persister->persist($objects);

        $manager->flush();
    }

}