<?php

namespace PetroPack\MenuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MenuController extends Controller
{
    /**
     * @Route("/menu/items")
     */
    public function itemsAction()
    {

        $menues[] = array("nombre"=>"Cliente","ref"=>"/backend/cliente/list");
        $menues[] = array("nombre"=>"Producto","ref"=>"/backend/producto/list/page/1");
        $menues[] = array("nombre"=>"Venta","ref"=>"/backend/new");
        $venta[]   = array("nombre"=>"Crear","ref"=>"/backend/new");
        $venta[]   = array("nombre"=>"Listar","ref"=>"/backend/venta/list");
        $venta[]   = array("nombre"=>"Reporte","ref"=>"/backend/venta/report");
        $menues[] = $venta ;

        return $this->render('PetroPackMenuBundle:Menu:items.html.twig', array(
            'menues'=>$menues
        ));
    }

}
