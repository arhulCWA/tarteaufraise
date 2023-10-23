<?php

namespace IronMan\SyliusProductOnDemandPlugin\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class testController extends AbstractController
{
    public function index()
    {
        return $this->render("test.html.twig");
    }
}
