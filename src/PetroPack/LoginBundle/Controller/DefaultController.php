<?php

namespace PetroPack\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PetroPackLoginBundle:Login:login.html.twig', array(
            // ...
        ));
    }
}
