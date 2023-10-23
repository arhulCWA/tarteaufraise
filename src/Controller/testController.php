<?php

namespace IronMan\SyliusProductOnDemandPlugin\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class testController extends AbstractController
{
    public function index(): Response
    {
        return $this->render("@IronManSyliusProductOnDemandPlugin/test.html.twig");
    }
}
