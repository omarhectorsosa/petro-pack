<?php

namespace PetroPack\MenuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/menu")
     */
    public function indexAction()
    {
        return $this->render('PetroPackMenuBundle:Default:index.html.twig');
    }

}
