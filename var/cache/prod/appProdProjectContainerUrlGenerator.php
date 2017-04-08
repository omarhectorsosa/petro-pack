<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'petropack_paginado_paginado_showsection' => array (  0 =>   array (    0 => 'class',    1 => 'section',  ),  1 =>   array (    '_controller' => 'PetroPack\\PaginadoBundle\\Controller\\PaginadoController::showSectionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'section',    ),    1 =>     array (      0 => 'text',      1 => '/section',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'class',    ),    3 =>     array (      0 => 'text',      1 => '/backend/paginado/class',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'petropackfront_paginado_default_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PetroPackFront\\PaginadoBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/backend/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'petropackfront_producto_producto_listhome' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PetroPackFront\\ProductoBundle\\Controller\\ProductoController::listHomeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/frontend/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'petropackfront_menu_menu_items' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PetroPackFront\\MenuBundle\\Controller\\MenuController::itemsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/frontend/menu/items',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'petropackfront_login_default_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PetroPackFront\\LoginBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/frontend/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'petropack_menu_default_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PetroPack\\MenuBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/backend/menu',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'petropack_menu_menu_items' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PetroPack\\MenuBundle\\Controller\\MenuController::itemsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/backend/menu/items',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'petropack_venta_venta_getlist' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PetroPack\\VentaBundle\\Controller\\VentaController::getListAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/backend/venta/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'petropack_venta_venta_getall' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PetroPack\\VentaBundle\\Controller\\VentaController::getAllAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/backend/venta/all',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'petropack_venta_venta_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PetroPack\\VentaBundle\\Controller\\VentaController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/backend/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'petropack_venta_venta_itemadd' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PetroPack\\VentaBundle\\Controller\\VentaController::itemAddAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/backend/item/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'petropack_venta_venta_itemform' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PetroPack\\VentaBundle\\Controller\\VentaController::itemFormAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/backend/item/form',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'petropack_venta_venta_itemformremove' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PetroPack\\VentaBundle\\Controller\\VentaController::itemFormRemoveAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/backend/item/form/remove',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'petropack_venta_venta_actions' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PetroPack\\VentaBundle\\Controller\\VentaController::actionsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/backend/venta/actions',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'petropack_cliente_cliente_getlist' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PetroPack\\ClienteBundle\\Controller\\ClienteController::getListAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/backend/cliente/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'petropack_cliente_cliente_actions' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PetroPack\\ClienteBundle\\Controller\\ClienteController::actionsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/backend/cliente/actions',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'petropack_cliente_cliente_getall' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PetroPack\\ClienteBundle\\Controller\\ClienteController::getAllAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/backend/cliente/all',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'petropack_login_login_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PetroPack\\LoginBundle\\Controller\\LoginController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/backend/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'petropack_login_login_auth' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PetroPack\\LoginBundle\\Controller\\LoginController::authAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/backend/auth',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'petropack_producto_producto_getlist' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    '_controller' => 'PetroPack\\ProductoBundle\\Controller\\ProductoController::getListAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/backend/producto/list/page',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'petropack_producto_producto_getpaginadosection' => array (  0 =>   array (    0 => 'section',  ),  1 =>   array (    '_controller' => 'PetroPack\\ProductoBundle\\Controller\\ProductoController::getPaginadoSectionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'section',    ),    1 =>     array (      0 => 'text',      1 => '/backend/producto/paginado/section',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'petropack_producto_producto_getall' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PetroPack\\ProductoBundle\\Controller\\ProductoController::getAllAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/backend/producto/all',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'petropack_producto_producto_actions' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'PetroPack\\ProductoBundle\\Controller\\ProductoController::actionsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/backend/producto/actions',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'petropack_producto_producto_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'PetroPack\\ProductoBundle\\Controller\\ProductoController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/backend/producto/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'petropack_producto_producto_upload' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'PetroPack\\ProductoBundle\\Controller\\ProductoController::uploadAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/backend/producto/file/upload',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'petropack_producto_producto_changeorden' => array (  0 =>   array (    0 => 'id',    1 => 'orden',  ),  1 =>   array (    '_controller' => 'PetroPack\\ProductoBundle\\Controller\\ProductoController::changeOrdenAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'orden',    ),    1 =>     array (      0 => 'text',      1 => '/orden',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    3 =>     array (      0 => 'text',      1 => '/backend/producto/imagen',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'petropack_producto_producto_remove' => array (  0 =>   array (    0 => 'producto_id',    1 => 'id',  ),  1 =>   array (    '_controller' => 'PetroPack\\ProductoBundle\\Controller\\ProductoController::removeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/imagen/remove',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'producto_id',    ),    3 =>     array (      0 => 'text',      1 => '/backend/producto',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
