<?php

namespace IronMan\SyliusProductOnDemandPlugin\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class testController extends AbstractController
{
    public function index(): \Symfony\Component\HttpFoundation\Response
    {
        return $this->render("test.html.twig");
    }
}
