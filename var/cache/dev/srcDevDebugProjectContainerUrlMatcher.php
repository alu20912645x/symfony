<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // tienda_carro
        if (0 === strpos($pathinfo, '/carro') && preg_match('#^/carro/(?P<accion>[^/]++)/(?P<id>id\\d+)/(?P<cantidad>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tienda_carro')), array (  '_controller' => 'App\\Controller\\carroController::carro',));
        }

        // tienda_categoria
        if (0 === strpos($pathinfo, '/categorias') && preg_match('#^/categorias/(?P<nombre>[^/]++)/(?P<page>\\d+)(?:/(?P<currentpage>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tienda_categoria')), array (  'currentpage' => 1,  '_controller' => 'App\\Controller\\categoriaController::categoria',));
        }

        // tienda_index
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'App\\Controller\\indexController::index',  '_route' => 'tienda_index',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'tienda_index'));
            }

            return $ret;
        }

        // tienda_producto
        if (0 === strpos($pathinfo, '/productos') && preg_match('#^/productos/(?P<nombre>\\D+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tienda_producto')), array (  '_controller' => 'App\\Controller\\productoController::producto',));
        }

        if (0 === strpos($pathinfo, '/login')) {
            // tienda_login
            if ('/login' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_tienda_login;
                }

                return array (  '_controller' => 'App\\Controller\\sesionController::login',  '_route' => 'tienda_login',);
            }
            not_tienda_login:

            // tienda_login_usuario
            if ('/login/nombreusu' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_tienda_login_usuario;
                }

                return array (  '_controller' => 'App\\Controller\\sesionController::login_usu',  '_route' => 'tienda_login_usuario',);
            }
            not_tienda_login_usuario:

        }

        // tienda_register
        if ('/register' === $pathinfo) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_tienda_register;
            }

            return array (  '_controller' => 'App\\Controller\\sesionController::register',  '_route' => 'tienda_register',);
        }
        not_tienda_register:

        // index
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'App\\Controller\\DefaultController::index',  '_route' => 'index',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'index'));
            }

            return $ret;
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
