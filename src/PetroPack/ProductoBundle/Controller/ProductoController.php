<?php

namespace PetroPack\ProductoBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use PetroPack\ProductoBundle\Entity\Producto;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use PetroPack\ProductoBundle\Entity;

class ProductoController extends Controller
{

    /**
     * @Route("/producto/list/page/{page}")
     */
    public function getListAction($page)
    {
        $cant_items_pagina = $this->getParameter('cant_items_pagina');
        $repository = $this->getDoctrine()->getRepository('PetroPackProductoBundle:Producto');

        $cant_prodcutos = $repository->createQueryBuilder('p')
            ->select('count(p.id)')
            ->getQuery()
            ->getSingleScalarResult();

        $productos_obj = $repository->findBy(
            array(),
            array("descripcion" => "ASC"),
            $cant_items_pagina,
            $page * $cant_items_pagina
        );

        foreach ($productos_obj as $key => $producto_obj) {
            $producto['id'] = $producto_obj->getId();
            $producto['descripcion'] = $producto_obj->getDescripcion();
            $producto['presentacion'] = $producto_obj->getPresentacion();
            $producto['precio_unidad'] = $producto_obj->getPrecioUnidad();
            $producto['tipo'] = $producto_obj->getTipo();
            $producto['cantidad'] = $producto_obj->getCantidad();
            $producto['cod_producto'] = $producto_obj->getCodProducto();
            $producto_array[] = $producto;
        }

        return $this->render(
            'PetroPackProductoBundle:Producto:list.html.twig',
            array(
                "productos" => $producto_array
            )
        );

    }




    /**
     * @Route("/producto/paginado/section/{section}")
     * @return Response
     */

    public function getPaginadoSectionAction($section){

        $productos_por_pagina= $this->getParameter('productos_por_pagina');
        $secciones_por_pagina= $this->getParameter('secciones_por_pagina');
        $repository = $this->getDoctrine()->getRepository('PetroPackProductoBundle:Producto');

        $cant_prodcutos = $repository->createQueryBuilder('p')
            ->select('count(p.id)')
            ->getQuery()
            ->getSingleScalarResult();

        $cant_paginas = round($cant_prodcutos/$productos_por_pagina);
        $cant_paginas_array = range(0,$cant_paginas);

        $cant_paginas_array = array_chunk($cant_paginas_array,$secciones_por_pagina);

        $paginado = $this->render('PetroPackProductoBundle:Producto:paginado_producto.html.twig', array(
            "paginas"=>$cant_paginas_array[$section],
            "next"=>$section+1,
            "prev"=>$section-1,
            "disabled_prev"=>""
        ));

        return new Response(
            json_encode(
                array("paginas"=>$paginado->getContent())
            ));

    }

    /**
     * @Route("/producto/all")
     */

    public function getAllAction()
    {
        $repository = $this->getDoctrine()->getRepository('PetroPackProductoBundle:Producto');

        $productos = $repository->findAll();

        foreach ($productos as $key => $producto){
            $producto_array['id']= $producto->getId();
            $producto_array['descripcion']= $producto->getDescripcion();
            $producto_array['presentacion']= $producto->getPresentacion();
            $producto_array['precio_unidad']= $producto->getPrecioUnidad();
            $producto_array['tipo']= $producto->getTipo();
            $producto_array['cantidad']= $producto->getCantidad();
            $producto_array['cod_producto']= $producto->getCodProducto();
            $producto_view[] = $producto_array ;
        }

        $data = array("data"=>$producto_view);
        return new Response(json_encode($data));

    }

    /**
     * @Route("/producto/actions")
     * @Template()
     * @return Response
     */

    public function actionsAction(Request $request)
    {
        $respuesta = array();

        if(!isset($_POST['action'])|| !isset($_POST['data'])){
            $respuesta['estado'] = 0 ;
            $respuesta['mje']    = "No hay datos" ;
        } else {
            //$respuesta[] = $_POST['action'] ;
            $respuesta[] = $_POST['data'];
            $action = $_POST['action'];
            $producto = new Producto();
            $em = $this->getDoctrine()->getManager();
            $id = isset($_POST['data'][0]['id'])?$_POST['data'][0]['id']:"";

            switch ($action) {
                case 'create':
                    $producto->setDescripcion($_POST['data'][0]['descripcion']);
                    $producto->setPresentacion($_POST['data'][0]['presentacion']);
                    $producto->setPrecioUnidad($_POST['data'][0]['precio_unidad']);
                    $producto->setTipo($_POST['data'][0]['tipo']);
                    $producto->setCantidad($_POST['data'][0]['cantidad']);
                    $producto->setCodProducto($_POST['data'][0]['cod_producto']);

                    // tells Doctrine you want to (eventually) save the Product (no queries yet)
                    $em->persist($producto);

                    // actually executes the queries (i.e. the INSERT query)
                    $em->flush();

                    $respuesta['estado'] = 1;
                    $respuesta['action'] = 'create';
                    $respuesta['data'] = $_POST['data'][0]['id'] ;

                    break;
                case 'remove':
                    foreach ($_POST['data'] as $id => $datos) {
                        $producto = $em->getRepository('PetroPackProductoBundle:Producto')->find($id);
                        if (!$producto) {
                            throw $this->createNotFoundException(
                                'No se encontro un producto con el id '.$id
                            );
                        }
                        $em->remove($producto);
                        // actually executes the queries (i.e. the INSERT query)
                        $em->flush();
                    }
                    $respuesta['estado'] = 1;
                    $respuesta['action'] = 'remove';
                    break;
                case 'edit':
                    foreach ($_POST['data'] as $id => $datos) {
                        $producto = $em->getRepository('PetroPackProductoBundle:Producto')->find($id);
                        if (!$producto) {
                            throw $this->createNotFoundException(
                                'No se encontro un producto con el id '.$id
                            );
                        }
                        $producto->setDescripcion($datos['descripcion']);
                        $producto->setPresentacion($datos['presentacion']);
                        $producto->setPrecioUnidad($datos['precio_unidad']);
                        $producto->setTipo($datos['tipo']);
                        $producto->setCantidad($datos['cantidad']);
                        $producto->setCodProducto($datos['cod_producto']);
                        // actually executes the queries (i.e. the INSERT query)
                        $em->flush();
                    }
                    $respuesta['estado'] = 1;
                    $respuesta['action'] = 'edit';
                    break;
                default :
                    break;
            }
        }
        return new Response(json_encode($respuesta));
    }

    /**
     * @Route("/producto/edit/{id}")
     */

    public function editAction($id)
    {
        $rep_imagen_producto = $this->getDoctrine()->getRepository('PetroPackProductoBundle:ImagenProducto');
        $imagenes = $rep_imagen_producto->findBy(array('producto_id'=> $id),array('orden'=>'asc'));

        $producto = $this->getDoctrine()->getRepository('PetroPackProductoBundle:Producto')->find($id);

        foreach ($imagenes as $key => $imagen){
            $imagen_array['id']= $imagen->getId();
            $imagen_array['producto_id']= $imagen->getProductoId();
            $imagen_array['url']= $imagen->getUrl();
            $imagen_array['nombre']= $imagen->getNombre();
            $imagen_array['orden']= $imagen->getOrden();
            $imagenes_producto[] = $imagen_array ;
        }

        return $this->render('PetroPackProductoBundle:Producto:edit.html.twig', array(
            "producto_id"=>$id,
            "imagenes"=>$imagenes_producto,
            "id"=>$producto->getId(),
            "codigo"=>$producto->getCodProducto(),
            "nombre"=>$producto->getNombre(),
            "descripcion"=>$producto->getDescripcion(),
            "precio"=>$producto->getPrecioUnidad(),
            "cantidad"=>$producto->getCantidad()
        ));
    }

    /**
     * @Route("/producto/file/upload/{id}")
     */

    public function uploadAction($id)
    {

        $nombre  = $_FILES['file']['name'] ;
        $url     = $this->getParameter('url_img')."producto/".$id ."/".$nombre;
        $path    = $this->getParameter('path_img')."producto\\".$id."\\";

        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        $nombre_archivo = $path.$nombre;

        $em = $this->getDoctrine()->getManager();
        $imagen_producto  = new Entity\ImagenProducto();
        $imagen_producto->setProductoId($id);
        $imagen_producto->setUrl($url);
        $imagen_producto->setNombre($nombre);
        $imagen_producto->setPath($path);
        $imagen_producto->setOrden(NULL);
        $em->persist($imagen_producto);
        $em->flush();

        if (move_uploaded_file($_FILES['file']['tmp_name'], $nombre_archivo)){
            $info = "El archivo ha sido cargado correctamente.";
        }else{
            $info ="Ocurrió algún error al subir el fichero. No pudo guardarse.";
        }

        return new Response(json_encode(array("msg"=>$info)));
    }

    /**
     * @Route("/producto/imagen/{id}/orden/{orden}")
     */

    function changeOrdenAction($id,$orden){
        $em = $this->getDoctrine()->getManager();
        $imagen = $this->getDoctrine()->getRepository('PetroPackProductoBundle:ImagenProducto')->find($id);
        $imagen->setOrden($orden);
        $em->persist($imagen);
        $em->flush();
        return new Response(json_encode(array("id"=>$id, "orden"=>$orden)));
    }

    /**
     * @Route("/producto/{producto_id}/imagen/remove/{id}")
     */

    function removeAction($id,$producto_id){

        $em = $this->getDoctrine()->getManager();
        $imagen = $this->getDoctrine()->getRepository('PetroPackProductoBundle:ImagenProducto')->find($id);
        $em->remove($imagen);
        $em->flush();

        $rep_imagen_producto = $this->getDoctrine()->getRepository('PetroPackProductoBundle:ImagenProducto');
        $imagenes = $rep_imagen_producto->findBy(array('producto_id'=> $producto_id),array('orden'=>'asc'));

        foreach ($imagenes as $key => $imagen){
            $imagen_array['id']= $imagen->getId();
            $imagen_array['producto_id']= $imagen->getProductoId();
            $imagen_array['url']= $imagen->getUrl();
            $imagen_array['nombre']= $imagen->getNombre();
            $imagen_array['orden']= $imagen->getOrden();
            $imagenes_producto[] = $imagen_array ;
        }

        $lista_imagenes_productos = $this->render('PetroPackProductoBundle:Producto:imagenes_productos.html.twig',
                            array(
                                "imagenes"=>$imagenes_producto,
                            ));
        return new Response(
                            json_encode(
                                array("id"=>$id,
                                      "lista_imagenes_productos"=>$lista_imagenes_productos->getContent())
                            ));

    }

}
