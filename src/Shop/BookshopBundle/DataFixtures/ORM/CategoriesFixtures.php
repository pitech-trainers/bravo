<?php
// src/Blogger/BlogBundle/DataFixtures/ORM/BlogFixtures.php

namespace Blogger\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Shop\BookshopBundle\Entity\Categories;

class BlogFixtures implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
         
        $category1 = new Categories();
        $category1->setLabel('Arta');
        $manager->persist($category1);
        
        $category2 = new Categories();
        $category2->setLabel('Beletristica');
        $manager->persist($category2);
        
        $category3 = new Categories();
        $category3->setLabel('Dictionare');
        $manager->persist($category3);
        
        $category4 = new Categories();
        $category4->setLabel('Medicina');
        $manager->persist($category4);
        
        $category5 = new Categories();
        $category5->setLabel('Economie');
        $manager->persist($category5);
        
        $category6 = new Categories();
        $category6->setLabel('Psihologie');
        $manager->persist($category6);
        
        $category7 = new Categories();
        $category7->setLabel('Stiinta si Tehnica');
        $manager->persist($category7);
        
        $category8 = new Categories();
        $category8->setLabel('Manuale Scolare');
        $manager->persist($category8);
        
        $category9 = new Categories();
        $category9->setLabel('Limbi Straine');
        $manager->persist($category9);
        
        $category10 = new Categories();
        $category10->setLabel('Istorie');
        $manager->persist($category10);
        
        $manager->flush();
    }
}