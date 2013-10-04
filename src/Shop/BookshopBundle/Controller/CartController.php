<?php

// src/Blogger/BlogBundle/Controller/CartController.php

namespace Shop\BookshopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Request;


class CartController extends Controller
{
    public function cartSidebarAction()
    {
        $em = $this->getDoctrine()
                ->getManager();

        $userId=1;
        
        $cart = $em->getRepository('ShopBookshopBundle:Cart')
                ->getCartByUser($userId);

        return $this->render('ShopBookshopBundle:Cart:cartSidebar.html.twig', array(
                    'cart' => $cart));
    }
}