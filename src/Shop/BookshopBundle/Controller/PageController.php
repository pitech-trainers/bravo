<?php

// src/Blogger/BlogBundle/Controller/DefaultController.php

namespace Shop\BookshopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class PageController extends Controller
{

    public function indexAction()
    {

        $em = $this->getDoctrine()
                ->getManager();

        $latestProd = $em->getRepository('ShopBookshopBundle:Product')
                ->getLatestProducts(6);

        return $this->render('ShopBookshopBundle:Homepage:index.html.twig', array(
                    'latestProd' => $latestProd));
    }

    public function categoryAction($cid)
    {
        $em = $this->getDoctrine()
                ->getManager();

        if (isset($_GET['direction']))
            $direction = $_GET['direction'];
        else
            $direction = 'asc';

        if (isset($_GET['sortBy']))
            $sortBy = $_GET['sortBy'];
        else
            $sortBy = 'title';
        
        if (isset($_GET['st']))
            $stock = $_GET['st'];
        else 
            $stock = null;
        
        if (isset($_GET['pr']))
            $price = $_GET['pr'];
        else
            $price = null;
        
        $products = $em->getRepository('ShopBookshopBundle:Product')->getProductsByCategory($sortBy, $direction, $cid, $stock, $price);
        
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $products, $this->get('request')->query->get('page', 1)/* page number */, 3/* limit per page */
        );

        return $this->render('ShopBookshopBundle:Page:category.html.twig', array('products' => $pagination));
    }

}