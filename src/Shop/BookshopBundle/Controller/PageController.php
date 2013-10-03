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

        return $this->render('ShopBookshopBundle:Page:index.html.twig', array(
                    'latestProd' => $latestProd));
    }

    public function productPageAction($id)
    {
        $em = $this->getDoctrine()
                ->getManager();

        $product = $em->getRepository('ShopBookshopBundle:Product')->find($id);
        $randProd = $em->getRepository('ShopBookshopBundle:Product')->getRandomProd($product->getCategory()->getId(), 4);
        
        return $this->render('ShopBookshopBundle:Page:product.html.twig', array("product" => $product, "randProd" => $randProd));
    }

}