<?php

namespace PetroPack\VentaBundle\Controller;

use PetroPack\ProductoBundle\Entity\Producto;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use PetroPack\VentaBundle\Entity\Venta;
use PetroPack\VentaBundle\Entity\ItemVenta;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\Request;

class VentaController extends Controller
{

    /**
     * @Route("/venta/list")
     * @Template()
     */

    public function getListAction()
    {
        return $this->render('PetroPackVentaBundle:Venta:list.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/venta/all")
     */

    public function getAllAction()
    {
        $repository = $this->getDoctrine()->getRepository('PetroPackVentaBundle:Venta');

        $ventas = $repository->findAll();

        foreach ($ventas as $key => $venta){
            $venta_array['id']= $venta->getId();
            $venta_array['cliente_id']= $venta->getClienteId();
            $venta_array['fecha_venta']= date("Y-m-d",$venta->getFechaVenta()->getTimestamp());
            $venta_array['deuda']= $venta->getDeuda();
            $venta_array['importe']= $venta->getImporte();
            $venta_array['total']= $venta->getTotal();
            $venta_array['descuento']= $venta->getDescuento();
            $venta_array['pago']= $venta->getPago();
            $venta_view[] = $venta_array ;
        }

        $data = array("data"=>$venta_view);
        return new Response(json_encode($data));

    }

    /**
     * @Route("/new")
     * @Template()
     * Este action funciona como HOME del backend
     */

    public function newAction()
    {
        $clientes  = $this->getDoctrine()->getRepository('PetroPackClienteBundle:Cliente')->findBy([], ['nombre' => 'ASC']);

        foreach ($clientes as $key => $cliente){
            $aux['id']= $cliente->getId();
            $aux['dni']= $cliente->getDni();
            $aux['nombre']= $cliente->getNombre();
            $aux['direccion']= $cliente->getDireccion();
            $aux['email']= $cliente->getEmail();
            $clientes_array[] = $aux ;
        }

        $productos = $this->getDoctrine()->getRepository('PetroPackProductoBundle:Producto')->findBy([], ['descripcion' => 'ASC']);

        foreach ($productos as $key => $producto){
            $aux['id']= $producto->getId();
            $aux['descripcion']= $producto->getDescripcion();
            $aux['presentacion']= $producto->getPresentacion();
            $aux['precio_unidad']= $producto->getPrecioUnidad();
            $aux['tipo']= $producto->getTipo();
            $aux['cantidad']= $producto->getCantidad();
            $aux['cod_producto']= $producto->getCodProducto();
            $productos_array[] = $aux ;
        }

        return $this->render('PetroPackVentaBundle:Venta:new.html.twig', array(
            "clientes"=>$clientes_array,
            "productos"=>$productos_array
        ));
    }

    /**
     * @Route("/item/add")
     * @Template()
     */

    public function itemAddAction(Request $request)
    {
        //---------- AGREGAMOS EL ITEM Y HACEMOS LOS CALCULOS (SUBTOTALES Y TOTALES)-------------------------
        $em = $this->getDoctrine()->getManager();
        $id_producto = $request->request->get("id_producto");
        $id_venta    = $request->request->get("id_venta");
        $id_cliente  = $request->request->get("id_cliente");
        $cantidad    = $request->request->get("cantidad");
        $descuento   = $request->request->get("descuento");

        $producto = $this->getDoctrine()->getRepository('PetroPackProductoBundle:Producto')->find($id_producto);
        $subtotal = round($cantidad * $producto->getPrecioUnidad(), 3);

        if(empty($id_venta)){
            $venta  = new Venta();
            $venta->setClienteId($id_cliente);
            $em->persist($venta);
            $em->flush();
            $id_venta = $venta->getId();
        } else {
            $venta = $this->getDoctrine()->getRepository('PetroPackVentaBundle:Venta')->find($id_venta);
        }

        $total    = $subtotal + $venta->getTotal();
        $venta->setTotal($total);
        $em->persist($venta);
        $em->flush();

        $itemVenta  = new ItemVenta();
        $itemVenta->setVentaId($id_venta);
        $itemVenta->setProductoId($id_producto);
        $itemVenta->setDescuento($descuento);
        $itemVenta->setCantidad($cantidad);
        $itemVenta->setPrecioFinal($subtotal);
        $em->persist($itemVenta);
        $em->flush();

        //-------------------------- RETORNAMOS LOS ITEMS DE VENTAS -----------------------------------
        $items_venta = $this->getDoctrine()
                                ->getRepository('PetroPackVentaBundle:ItemVenta')
                                    ->findBy(array('venta_id'=>$id_venta),array('create_at'=>'asc')) ;

        foreach ($items_venta as $key=>$item_venta) {
                $producto = $this->getDoctrine()
                                 ->getRepository('PetroPackProductoBundle:Producto')
                                 ->find($item_venta->getProductoId());

                $aux['id']                    = $item_venta->getId();
                $aux['venta_id']              = $item_venta->getVentaId();
                $aux['cantidad']              = $item_venta->getCantidad();
                $aux['producto_id']           = $item_venta->getProductoId();
                $aux['precio_final']          = $item_venta->getPrecioFinal();
                $aux['descuento']             = $item_venta->getDescuento();
                $aux['descripcion_producto']  = $producto->getDescripcion();
                $aux['presentacion_producto'] = $producto->getPresentacion();
                $aux['cod_producto']          = $producto->getCodProducto();
                $aux['precio_unidad']         = $producto->getPrecioUnidad();
                $item_venta_a[]               = $aux;
        }

        $items_venta  = $this->render('PetroPackVentaBundle:Venta:item_venta.html.twig', array(
                                "items_venta"=>$item_venta_a,
                             ));

        return new Response(json_encode(
            array(
                "id_venta"=>$id_venta,
                "items_venta"=>$items_venta->getContent()
            )));
    }

    /**
     * @Route("/item/form")
     *
     * @Template()
     */

    public function itemFormAction()
    {
        $clientes  = $this->getDoctrine()->getRepository('PetroPackClienteBundle:Cliente')->findBy([],array('nombre'=>'ASC'));

        foreach ($clientes as $key => $cliente){
            $aux['id']= $cliente->getId();
            $aux['dni']= $cliente->getDni();
            $aux['nombre']= $cliente->getNombre();
            $aux['direccion']= $cliente->getDireccion();
            $aux['email']= $cliente->getEmail();
            $clientes_array[] = $aux ;
        }

        $productos = $this->getDoctrine()->getRepository('PetroPackProductoBundle:Producto')->findBy([],array('descripcion'=>'ASC'));

        foreach ($productos as $key => $producto){
            $aux['id']= $producto->getId();
            $aux['descripcion']= $producto->getDescripcion();
            $aux['presentacion']= $producto->getPresentacion();
            $aux['precio_unidad']= $producto->getPrecioUnidad();
            $aux['tipo']= $producto->getTipo();
            $aux['cantidad']= $producto->getCantidad();
            $aux['cod_producto']= $producto->getCodProducto();
            $productos_array[] = $aux ;
        }

        return $this->render('PetroPackVentaBundle:Venta:item_form.html.twig',array(
            "clientes"=>$clientes_array,
            "productos"=>$productos_array
        ));

    }

    /**
     * @Route("/item/form/remove")
     *
     * @Template()
     */

    public function itemFormRemoveAction()
    {
        return $this->render('PetroPackVentaBundle:Venta:item_form_remove.html.twig');
    }

    /**
     * @Route("/venta/actions")
     * @Template()
     * @return Response
     */

    public function actionsAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $venta = new Venta();
        $venta->setClienteId($request->request->get('action'));

        // tells Doctrine you want to (eventually) save the Product (no queries yet)
        //$em->persist($venta);

        // actually executes the queries (i.e. the INSERT query)
        //$em->flush();

        //$respuesta['estado'] = 1;
        $respuesta['action'] = 'create';


        return new Response(json_encode($respuesta));
    }
}
