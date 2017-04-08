<?php

namespace PetroPackFront\MenuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MenuController extends Controller
{

    /**
     * @Route("/menu/items")
     */
    public function itemsAction()
    {

        $menues[] = array("nombre"=>"Home","ref"=>"/pp-frontend/cliente/list");
        $menues[] = array("nombre"=>"Productos","ref"=>"/pp-frontend/producto/list");
        $menues[] = array("nombre"=>"Contacto","ref"=>"/pp-frontend/");
        $menues[] = array("nombre"=>"Quienes somos","ref"=>"/pp-frontend/");

        return $this->render('PetroPackFrontMenuBundle:Menu:items.html.twig', array(
            'menues'=>$menues
        ));
    }
}
