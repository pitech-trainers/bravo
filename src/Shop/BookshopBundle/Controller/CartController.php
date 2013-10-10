<?php

// src/Blogger/BlogBundle/Controller/CartController.php

namespace Shop\BookshopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Request;
use Shop\BookshopBundle\Entity\CartItem;

class CartController extends Controller
{

    public function cartSidebarAction()
    {
        $em = $this->getDoctrine()
                ->getManager();

        $userId = 1;

        $cart = $em->getRepository('ShopBookshopBundle:Cart')
                ->getCartByUser($userId);

        return $this->render('ShopBookshopBundle:Cart:cartSidebar.html.twig', array(
                    'cart' => $cart));
    }

    public function cartPageAction()
    {
        $em = $this->getDoctrine()
                ->getManager();

        $userId = 1;

        $cart = $em->getRepository('ShopBookshopBundle:Cart')
                ->getCartByUser($userId);

        return $this->render('ShopBookshopBundle:Cart:cartPage.html.twig', array(
                    'cart' => $cart));
    }

    public function removeItemAction(CartItem $cartItem)
    {
        //var_dump($cartItem); die();

        if (!$cartItem) {
            throw $this->createNotFoundException('No product found');
        }


        $em = $this->getDoctrine()->getManager();

        $em->remove($cartItem);

        $em->flush();

        return $this->redirect($this->generateUrl('ShopBookshopBundle:Cart:cartPage.html.twig'));
    }

}
