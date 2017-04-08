<?php

namespace PetroPack\PaginadoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class PaginadoController extends Controller
{
    /**
     * Paginado de los listados
     * Llamado desde un Template
     *
     * @param $class
     * @param $section
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function showAction($class,$section)
    {

        $cant_items_pagina= $this->getParameter('cant_items_pagina');
        $grupo_pagina= $this->getParameter('grupo_pagina');

        $repository = $this->getDoctrine()->getRepository('PetroPack'.$class.'Bundle:'.$class);

        $cant_productos = $repository->createQueryBuilder('p')
            ->select('count(p.id)')
            ->getQuery()
            ->getSingleScalarResult();

        $cant_paginas = round($cant_productos/$cant_items_pagina);
        $cant_paginas_array = range(0,$cant_paginas);

        $cant_paginas_array = array_chunk($cant_paginas_array,$grupo_pagina);

        return $this->render('PetroPackPaginadoBundle:Paginado:show.html.twig', array(
            "paginas"=>$cant_paginas_array[$section],
            "next"=>1,
            "prev"=>0,
            "disabled_prev"=>"disabled",
            "nombre_clase"=>$class
        ));
    }

    /**
     * Paginado de un paginado
     * Llamado desde un script via ajax
     *
     * @Route("/paginado/class/{class}/section/{section}")
     */

    public function showSectionAction($class,$section)
    {
        $cant_items_pagina = $this->getParameter('cant_items_pagina');
        $grupo_pagina = $this->getParameter('grupo_pagina');

        $repository = $this->getDoctrine()->getRepository('PetroPack'.$class.'Bundle:'.$class);

        $cant_productos = $repository->createQueryBuilder('p')
            ->select('count(p.id)')
            ->getQuery()
            ->getSingleScalarResult();

        $cant_paginas = round($cant_productos / $cant_items_pagina);
        $cant_paginas_array = range(0, $cant_paginas);

        $cant_paginas_array = array_chunk($cant_paginas_array, $grupo_pagina);

        $paginado = $this->render('PetroPackPaginadoBundle:Paginado:show.html.twig', array(
            "paginas"=>$cant_paginas_array[$section],
            "next"=>$section+1,
            "prev"=>$section-1,
            "disabled_prev"=>"",
            "nombre_clase"=>$class
        ));

        return new Response(
            json_encode(
                array("paginas"=>$paginado->getContent())
            ));
    }

}
