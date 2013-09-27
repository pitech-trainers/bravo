<?php

namespace Shop\BookshopBundle\DataFixtures\ORM;

use Hautelook\AliceBundle\Alice\DataFixtureLoader;
use Nelmio\Alice\Fixtures;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Shop\BookshopBundle\Entity\Categories;
use Symfony\Component\Finder\Finder;

class CategoriesFixtures implements FixtureInterface
{

    public function load(ObjectManager $manager)
    {

        $finder = new Finder();
        $finder->files()->name('categories.yml')->in('src/Shop/BookshopBundle/Resources');

        foreach ($finder as $file) {
            // Print the absolute path
            $path = $file->getRealpath();
        }

        $loader = new \Nelmio\Alice\Loader\Yaml();
        $objects = $loader->load($path);

        $persister = new \Nelmio\Alice\ORM\Doctrine($manager);
        $persister->persist($objects);

        $manager->flush();
    }

}