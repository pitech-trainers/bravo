<?php

namespace Shop\BookshopBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware
{

    public function headerMenuGuest(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $menu->setChildrenAttributes(array('class' => 'links'));

        $menu->addChild('Home', array('route' => 'shop_bookshop_homepage'));
        $menu->addChild('My cart', array('route' => 'shop_bookshop_homepage'));
        $menu->addChild('Checkout', array('route' => 'shop_bookshop_homepage'));
        $menu->addChild('Log in', array('route' => 'shop_bookshop_homepage'));

        return $menu;
    }

    public function headerMenuUser(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $menu->setChildrenAttributes(array('class' => 'links'));

        $menu->addChild('Home', array('route' => 'shop_bookshop_homepage'));
        $menu->addChild('My cart', array('route' => 'shop_bookshop_homepage'));
        $menu->addChild('Checkout', array('route' => 'shop_bookshop_homepage'));
        $menu->addChild('My Account', array('route' => 'shop_bookshop_homepage'));
        $menu->addChild('Logout', array('route' => 'shop_bookshop_homepage'));

        return $menu;
    }

    public function headerMenuCategories(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('menu');
        $menu->setChildrenAttributes(array('id' => 'nav'));

        $em = $this->container->get('doctrine')
                ->getManager();

        $categories = $em->getRepository('ShopBookshopBundle:Categories')
                ->getCategories();

        foreach ($categories as $category) {
            $menu->addChild($category->getLabel(), array('route' => 'shop_bookshop_homepage'));
        }

        return $menu;
    }

}
