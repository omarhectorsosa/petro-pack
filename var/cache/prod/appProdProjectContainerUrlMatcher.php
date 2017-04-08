<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/backend')) {
            // petropack_paginado_paginado_showsection
            if (0 === strpos($pathinfo, '/backend/paginado/class') && preg_match('#^/backend/paginado/class/(?P<class>[^/]++)/section/(?P<section>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'petropack_paginado_paginado_showsection')), array (  '_controller' => 'PetroPack\\PaginadoBundle\\Controller\\PaginadoController::showSectionAction',));
            }

            // petropackfront_paginado_default_index
            if (rtrim($pathinfo, '/') === '/backend') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'petropackfront_paginado_default_index');
                }

                return array (  '_controller' => 'PetroPackFront\\PaginadoBundle\\Controller\\DefaultController::indexAction',  '_route' => 'petropackfront_paginado_default_index',);
            }

        }

        if (0 === strpos($pathinfo, '/frontend')) {
            // petropackfront_producto_producto_listhome
            if (rtrim($pathinfo, '/') === '/frontend') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'petropackfront_producto_producto_listhome');
                }

                return array (  '_controller' => 'PetroPackFront\\ProductoBundle\\Controller\\ProductoController::listHomeAction',  '_route' => 'petropackfront_producto_producto_listhome',);
            }

            // petropackfront_menu_menu_items
            if ($pathinfo === '/frontend/menu/items') {
                return array (  '_controller' => 'PetroPackFront\\MenuBundle\\Controller\\MenuController::itemsAction',  '_route' => 'petropackfront_menu_menu_items',);
            }

            // petropackfront_login_default_index
            if ($pathinfo === '/frontend/login') {
                return array (  '_controller' => 'PetroPackFront\\LoginBundle\\Controller\\DefaultController::indexAction',  '_route' => 'petropackfront_login_default_index',);
            }

        }

        if (0 === strpos($pathinfo, '/backend')) {
            if (0 === strpos($pathinfo, '/backend/menu')) {
                // petropack_menu_default_index
                if ($pathinfo === '/backend/menu') {
                    return array (  '_controller' => 'PetroPack\\MenuBundle\\Controller\\DefaultController::indexAction',  '_route' => 'petropack_menu_default_index',);
                }

                // petropack_menu_menu_items
                if ($pathinfo === '/backend/menu/items') {
                    return array (  '_controller' => 'PetroPack\\MenuBundle\\Controller\\MenuController::itemsAction',  '_route' => 'petropack_menu_menu_items',);
                }

            }

            if (0 === strpos($pathinfo, '/backend/venta')) {
                // petropack_venta_venta_getlist
                if ($pathinfo === '/backend/venta/list') {
                    return array (  '_controller' => 'PetroPack\\VentaBundle\\Controller\\VentaController::getListAction',  '_route' => 'petropack_venta_venta_getlist',);
                }

                // petropack_venta_venta_getall
                if ($pathinfo === '/backend/venta/all') {
                    return array (  '_controller' => 'PetroPack\\VentaBundle\\Controller\\VentaController::getAllAction',  '_route' => 'petropack_venta_venta_getall',);
                }

            }

            // petropack_venta_venta_new
            if ($pathinfo === '/backend/new') {
                return array (  '_controller' => 'PetroPack\\VentaBundle\\Controller\\VentaController::newAction',  '_route' => 'petropack_venta_venta_new',);
            }

            if (0 === strpos($pathinfo, '/backend/item')) {
                // petropack_venta_venta_itemadd
                if ($pathinfo === '/backend/item/add') {
                    return array (  '_controller' => 'PetroPack\\VentaBundle\\Controller\\VentaController::itemAddAction',  '_route' => 'petropack_venta_venta_itemadd',);
                }

                if (0 === strpos($pathinfo, '/backend/item/form')) {
                    // petropack_venta_venta_itemform
                    if ($pathinfo === '/backend/item/form') {
                        return array (  '_controller' => 'PetroPack\\VentaBundle\\Controller\\VentaController::itemFormAction',  '_route' => 'petropack_venta_venta_itemform',);
                    }

                    // petropack_venta_venta_itemformremove
                    if ($pathinfo === '/backend/item/form/remove') {
                        return array (  '_controller' => 'PetroPack\\VentaBundle\\Controller\\VentaController::itemFormRemoveAction',  '_route' => 'petropack_venta_venta_itemformremove',);
                    }

                }

            }

            // petropack_venta_venta_actions
            if ($pathinfo === '/backend/venta/actions') {
                return array (  '_controller' => 'PetroPack\\VentaBundle\\Controller\\VentaController::actionsAction',  '_route' => 'petropack_venta_venta_actions',);
            }

            if (0 === strpos($pathinfo, '/backend/cliente')) {
                // petropack_cliente_cliente_getlist
                if ($pathinfo === '/backend/cliente/list') {
                    return array (  '_controller' => 'PetroPack\\ClienteBundle\\Controller\\ClienteController::getListAction',  '_route' => 'petropack_cliente_cliente_getlist',);
                }

                if (0 === strpos($pathinfo, '/backend/cliente/a')) {
                    // petropack_cliente_cliente_actions
                    if ($pathinfo === '/backend/cliente/actions') {
                        return array (  '_controller' => 'PetroPack\\ClienteBundle\\Controller\\ClienteController::actionsAction',  '_route' => 'petropack_cliente_cliente_actions',);
                    }

                    // petropack_cliente_cliente_getall
                    if ($pathinfo === '/backend/cliente/all') {
                        return array (  '_controller' => 'PetroPack\\ClienteBundle\\Controller\\ClienteController::getAllAction',  '_route' => 'petropack_cliente_cliente_getall',);
                    }

                }

            }

            // petropack_login_login_login
            if ($pathinfo === '/backend/login') {
                return array (  '_controller' => 'PetroPack\\LoginBundle\\Controller\\LoginController::loginAction',  '_route' => 'petropack_login_login_login',);
            }

            // petropack_login_login_auth
            if ($pathinfo === '/backend/auth') {
                return array (  '_controller' => 'PetroPack\\LoginBundle\\Controller\\LoginController::authAction',  '_route' => 'petropack_login_login_auth',);
            }

            if (0 === strpos($pathinfo, '/backend/producto')) {
                // petropack_producto_producto_getlist
                if (0 === strpos($pathinfo, '/backend/producto/list/page') && preg_match('#^/backend/producto/list/page/(?P<page>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'petropack_producto_producto_getlist')), array (  '_controller' => 'PetroPack\\ProductoBundle\\Controller\\ProductoController::getListAction',));
                }

                // petropack_producto_producto_getpaginadosection
                if (0 === strpos($pathinfo, '/backend/producto/paginado/section') && preg_match('#^/backend/producto/paginado/section/(?P<section>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'petropack_producto_producto_getpaginadosection')), array (  '_controller' => 'PetroPack\\ProductoBundle\\Controller\\ProductoController::getPaginadoSectionAction',));
                }

                if (0 === strpos($pathinfo, '/backend/producto/a')) {
                    // petropack_producto_producto_getall
                    if ($pathinfo === '/backend/producto/all') {
                        return array (  '_controller' => 'PetroPack\\ProductoBundle\\Controller\\ProductoController::getAllAction',  '_route' => 'petropack_producto_producto_getall',);
                    }

                    // petropack_producto_producto_actions
                    if ($pathinfo === '/backend/producto/actions') {
                        return array (  '_controller' => 'PetroPack\\ProductoBundle\\Controller\\ProductoController::actionsAction',  '_route' => 'petropack_producto_producto_actions',);
                    }

                }

                // petropack_producto_producto_edit
                if (0 === strpos($pathinfo, '/backend/producto/edit') && preg_match('#^/backend/producto/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'petropack_producto_producto_edit')), array (  '_controller' => 'PetroPack\\ProductoBundle\\Controller\\ProductoController::editAction',));
                }

                // petropack_producto_producto_upload
                if (0 === strpos($pathinfo, '/backend/producto/file/upload') && preg_match('#^/backend/producto/file/upload/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'petropack_producto_producto_upload')), array (  '_controller' => 'PetroPack\\ProductoBundle\\Controller\\ProductoController::uploadAction',));
                }

                // petropack_producto_producto_changeorden
                if (0 === strpos($pathinfo, '/backend/producto/imagen') && preg_match('#^/backend/producto/imagen/(?P<id>[^/]++)/orden/(?P<orden>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'petropack_producto_producto_changeorden')), array (  '_controller' => 'PetroPack\\ProductoBundle\\Controller\\ProductoController::changeOrdenAction',));
                }

                // petropack_producto_producto_remove
                if (preg_match('#^/backend/producto/(?P<producto_id>[^/]++)/imagen/remove/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'petropack_producto_producto_remove')), array (  '_controller' => 'PetroPack\\ProductoBundle\\Controller\\ProductoController::removeAction',));
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
