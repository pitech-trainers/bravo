<?php

namespace Shop\BookshopBundle\DataFixtures\ORM;

use Hautelook\AliceBundle\Alice\DataFixtureLoader;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAware;
use Nelmio\Alice\Fixtures;

class AuthorLoader extends ContainerAware implements FixtureInterface
{

    public function load(ObjectManager $manager)
    {

        $loader = new \Nelmio\Alice\Loader\Yaml();

        $finder = $this->container->get("finder");
        $finder->files()->name('author.yml')->in('src/Shop/BookshopBundle/Resources');

        foreach ($finder as $file) {
            $path = $file->getRealpath();
        }

        $objects = $loader->load($path);

        $persister = new \Nelmio\Alice\ORM\Doctrine($manager);
        $persister->persist($objects);

        $manager->flush();
    }

}