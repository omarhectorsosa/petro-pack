<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/backend')) {
            // petropack_paginado_default_index
            if (rtrim($pathinfo, '/') === '/backend') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'petropack_paginado_default_index');
                }

                return array (  '_controller' => 'PetroPack\\PaginadoBundle\\Controller\\DefaultController::indexAction',  '_route' => 'petropack_paginado_default_index',);
            }

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
            if (rtrim($pathinfo, '/') === '/backend') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'petropack_venta_venta_new');
                }

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

            if (0 === strpos($pathinfo, '/backend/c')) {
                // petropack_customer_customer_getall
                if ($pathinfo === '/backend/cliente') {
                    return array (  '_controller' => 'PetroPack\\CustomerBundle\\Controller\\CustomerController::getAllAction',  '_route' => 'petropack_customer_customer_getall',);
                }

                if (0 === strpos($pathinfo, '/backend/customer')) {
                    // petropack_customer_customer_create
                    if (0 === strpos($pathinfo, '/backend/customer/create/nombre') && preg_match('#^/backend/customer/create/nombre/(?P<nombre>[^/]++)/direccion/(?P<direccion>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'petropack_customer_customer_create')), array (  '_controller' => 'PetroPack\\CustomerBundle\\Controller\\CustomerController::createAction',));
                    }

                    // petropack_customer_customer_show
                    if (0 === strpos($pathinfo, '/backend/customer/show') && preg_match('#^/backend/customer/show/(?P<clienteId>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'petropack_customer_customer_show')), array (  '_controller' => 'PetroPack\\CustomerBundle\\Controller\\CustomerController::showAction',));
                    }

                    // petropack_customer_customer_update
                    if (0 === strpos($pathinfo, '/backend/customer/update/cliente') && preg_match('#^/backend/customer/update/cliente/(?P<clienteId>[^/]++)/nombre/(?P<nombre>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'petropack_customer_customer_update')), array (  '_controller' => 'PetroPack\\CustomerBundle\\Controller\\CustomerController::updateAction',));
                    }

                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
