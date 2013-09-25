<?php
// src/Blogger/BlogBundle/Controller/DefaultController.php

namespace Shop\BookshopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('ShopBookshopBundle:Homepage:index.html.twig');
    }
}