<?php

namespace Shop\BookshopBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware
{
    public function headerMenuGuest(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $menu->addChild('My cart', array('route' => 'shop_bookshop_homepage'));
        $menu->addChild('Checkout', array('route' => 'shop_bookshop_homepage'));
        $menu->addChild('Log in', array('route' => 'shop_bookshop_homepage'));
        
    

        return $menu;
    }
     public function headerMenuUser(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

       
        $menu->addChild('My cart', array('route' => 'shop_bookshop_homepage'));
        $menu->addChild('Checkout', array('route' => 'shop_bookshop_homepage'));
        $menu->addChild('My account', array('route' => 'shop_bookshop_homepage'));
        $menu->addChild('Log out', array('route' => 'shop_bookshop_homepage'));
        
      

        return $menu;
    }
}
