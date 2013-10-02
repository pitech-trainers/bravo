<?php

// src/Blogger/BlogBundle/Controller/DefaultController.php

namespace Shop\BookshopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Request;

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

    public function categoryAction()
    {
        $stock = null;    
        $price = null;
        $cid = 0;
        $str='';
        $sortBy = 'title';
        $direction = 'asc';
        
        $request = Request::createFromGlobals();
        
        if($request->query->get('direction')!= null)
            $direction = $request->query->get('direction');
        
        if($request->query->get('sortBy')!= null)
            $sortBy = $request->query->get('sortBy');
        
        if($request->query->get('st')!= null)
            $stock = $request->query->get('st');
            
        if($request->query->get('pr')!= null)
            $price = $request->query->get('pr');
        
        if($request->query->get('cid')!= null)
            $cid = $request->query->get('cid');
        
        if($request->query->get('search')!= null)
            $str = $request->query->get('search');
        $em = $this->getDoctrine()
                ->getManager();
        
        $products = $em->getRepository('ShopBookshopBundle:Product')->getProducts($sortBy, $direction , $cid, $stock, $price, $str);
        
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $products, $this->get('request')->query->get('page', 1)/* page number */, 3/* limit per page */
        );

        return $this->render('ShopBookshopBundle:Page:category.html.twig', array('products' => $pagination));
    }
    
}
