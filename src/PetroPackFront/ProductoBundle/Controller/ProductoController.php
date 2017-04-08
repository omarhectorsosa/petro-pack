<?php

namespace PetroPackFront\ProductoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ProductoController extends Controller
{
    /**
     * @Route("/")
     */
    public function listHomeAction()
    {
        return $this->render('PetroPackFrontProductoBundle:Producto:list_home.html.twig', array(
            // ...
        ));
    }

}
