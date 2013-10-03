<?php

namespace Shop\BookshopBundle\DataFixtures\ORM;

use Hautelook\AliceBundle\Alice\DataFixtureLoader;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Nelmio\Alice\Fixtures;
use Symfony\Component\DependencyInjection\ContainerAware;

class ProductLoader extends ContainerAware implements FixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $faker = new \Faker\Generator();
        $prov = new \Shop\BookshopBundle\Faker\Provider\ProductProvider($faker);
        $faker->addProvider($prov);


       $finder = $this->container->get("finder");
       $finder->files()->name('product.yml')->in('src/Shop/BookshopBundle/Resources');     

        foreach ($finder as $file) {
            $path = $file->getRealpath();
        }
        

        Fixtures::load($path, $manager, array('providers' => array($prov)));

        $manager->flush();
    }

}