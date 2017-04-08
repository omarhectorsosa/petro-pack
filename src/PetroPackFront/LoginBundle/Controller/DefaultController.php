<?php

namespace PetroPackFront\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/login")
     */
    public function indexAction()
    {
        return $this->render('PetroPackFrontLoginBundle:Default:index.html.twig');
    }
}
