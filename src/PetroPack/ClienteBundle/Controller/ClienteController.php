<?php

namespace PetroPack\ClienteBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use PetroPack\ClienteBundle\Entity\Cliente;
use Symfony\Component\HttpFoundation\Response;

class ClienteController extends Controller
{
    /**
     * @Route("/cliente/list")
     */

    public function getListAction()
    {
        return $this->render('PetroPackClienteBundle:Cliente:list.html.twig');
    }

    /**
     * @Route("/cliente/actions")
     * @Template()
     * @return Response
     */

    public function actionsAction()
    {
        $respuesta = array();

        if(!isset($_POST['action'])|| !isset($_POST['data'])){
            $respuesta['estado'] = 0 ;
            $respuesta['mje']    = "No hay datos" ;
        } else {
            //$respuesta[] = $_POST['action'] ;
            $respuesta[] = $_POST['data'];
            $action = $_POST['action'];
            $cliente = new Cliente();
            $em = $this->getDoctrine()->getManager();
            $id = isset($_POST['data'][0]['id'])?$_POST['data'][0]['id']:"";

            switch ($action) {
                case 'create':
                    $cliente->setNombre($_POST['data'][0]['nombre']);
                    $cliente->setDni($_POST['data'][0]['dni']);
                    $cliente->setDireccion($_POST['data'][0]['direccion']);
                    $cliente->setEmail($_POST['data'][0]['email']);

                    // tells Doctrine you want to (eventually) save the Product (no queries yet)
                    $em->persist($cliente);

                    // actually executes the queries (i.e. the INSERT query)
                    $em->flush();

                    $respuesta['estado'] = 1;
                    $respuesta['action'] = 'create';
                    $respuesta['data'] = $_POST['data'][0]['id'] ;

                break;
                case 'remove':
                    foreach ($_POST['data'] as $id => $datos) {
                        $cliente = $em->getRepository('PetroPackClienteBundle:Cliente')->find($id);
                        if (!$cliente) {
                            throw $this->createNotFoundException(
                                'No se encontro un cliente con el id '.$id
                            );
                        }
                        $em->remove($cliente);
                        // actually executes the queries (i.e. the INSERT query)
                        $em->flush();
                    }
                    $respuesta['estado'] = 1;
                    $respuesta['action'] = 'remove';
                    break;
                case 'edit':
                     foreach ($_POST['data'] as $id => $datos) {
                         $cliente = $em->getRepository('PetroPackClienteBundle:Cliente')->find($id);
                         if (!$cliente) {
                            throw $this->createNotFoundException(
                                'No se encontro un cliente con el id '.$id
                            );
                         }
                        $cliente->setNombre($datos['nombre']);
                        $cliente->setDni($datos['dni']);
                        $cliente->setDireccion($datos['direccion']);
                        $cliente->setEmail($datos['email']);
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
     * @Route("/cliente/all")
     */

    public function getAllAction()
    {
        $repository = $this->getDoctrine()->getRepository('PetroPackClienteBundle:Cliente');

        $clientes = $repository->findAll();

        foreach ($clientes as $key => $cliente){
            $cliente_array['id']= $cliente->getId();
            $cliente_array['dni']= $cliente->getDni();
            $cliente_array['nombre']= $cliente->getNombre();
            $cliente_array['direccion']= $cliente->getDireccion();
            $cliente_array['email']= $cliente->getEmail();
            $clientes_view[] = $cliente_array ;
        }

        $data = $clientes_view;
        return new Response(json_encode($data));

    }

}
