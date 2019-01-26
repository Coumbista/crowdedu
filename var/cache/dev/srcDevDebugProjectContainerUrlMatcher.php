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

    public function match($pathinfo)
    {
        $allow = $allowSchemes = array();
        if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
            return $ret;
        }
        if ($allow) {
            throw new MethodNotAllowedException(array_keys($allow));
        }
        if (!in_array($this->context->getMethod(), array('HEAD', 'GET'), true)) {
            // no-op
        } elseif ($allowSchemes) {
            redirect_scheme:
            $scheme = $this->context->getScheme();
            $this->context->setScheme(key($allowSchemes));
            try {
                if ($ret = $this->doMatch($pathinfo)) {
                    return $this->redirect($pathinfo, $ret['_route'], $this->context->getScheme()) + $ret;
                }
            } finally {
                $this->context->setScheme($scheme);
            }
        } elseif ('/' !== $pathinfo) {
            $pathinfo = '/' !== $pathinfo[-1] ? $pathinfo.'/' : substr($pathinfo, 0, -1);
            if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
                return $this->redirect($pathinfo, $ret['_route']) + $ret;
            }
            if ($allowSchemes) {
                goto redirect_scheme;
            }
        }

        throw new ResourceNotFoundException();
    }

    private function doMatch(string $rawPathinfo, array &$allow = array(), array &$allowSchemes = array()): ?array
    {
        $allow = $allowSchemes = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $context = $this->context;
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        switch ($pathinfo) {
            default:
                $routes = array(
                    '/dashboard' => array(array('_route' => 'dashboard', '_controller' => 'App\\Controller\\DashboardController::index'), null, null, null),
                    '/dashboard/projet_index' => array(array('_route' => 'projet_index', '_controller' => 'App\\Controller\\DashboardController::allProjet'), null, null, null),
                    '/don/' => array(array('_route' => 'don_index', '_controller' => 'App\\Controller\\DonController::index'), null, array('GET' => 0), null),
                    '/don/new' => array(array('_route' => 'don_new', '_controller' => 'App\\Controller\\DonController::new'), null, array('GET' => 0, 'POST' => 1), null),
                    '/user/' => array(array('_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'), null, array('GET' => 0), null),
                    '/user/new' => array(array('_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'), null, array('GET' => 0, 'POST' => 1), null),
                    '/_profiler/' => array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null),
                    '/_profiler/search' => array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null),
                    '/_profiler/search_bar' => array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null),
                    '/_profiler/phpinfo' => array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null),
                    '/_profiler/open' => array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null),
                );

                if (!isset($routes[$pathinfo])) {
                    break;
                }
                list($ret, $requiredHost, $requiredMethods, $requiredSchemes) = $routes[$pathinfo];

                $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                    if ($hasRequiredScheme) {
                        $allow += $requiredMethods;
                    }
                    break;
                }
                if (!$hasRequiredScheme) {
                    $allowSchemes += $requiredSchemes;
                    break;
                }

                return $ret;
        }

        $matchedPathinfo = $pathinfo;
        $regexList = array(
            0 => '{^(?'
                    .'|/([^/]++)(?'
                        .'|/edit(*:24)'
                        .'|(*:31)'
                    .')'
                    .'|/new(*:43)'
                    .'|/don/([^/]++)(?'
                        .'|(*:66)'
                        .'|/edit(*:78)'
                        .'|(*:85)'
                    .')'
                    .'|/f(?'
                        .'|ront(*:102)'
                        .'|inID/([^/]++)(*:123)'
                        .'|airedon/([^/]++)(*:147)'
                    .')'
                    .'|/mapage(*:163)'
                    .'|/campagne(*:180)'
                    .'|/([^/]++)/edit_projet(*:209)'
                    .'|/mail(*:222)'
                    .'|/paiement(*:239)'
                    .'|/register(*:256)'
                    .'|/log(?'
                        .'|in(*:273)'
                        .'|out(*:284)'
                    .')'
                    .'|/user/([^/]++)(?'
                        .'|(*:310)'
                        .'|/edit(*:323)'
                        .'|(*:331)'
                    .')'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:371)'
                        .'|wdt/([^/]++)(*:391)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:437)'
                                .'|router(*:451)'
                                .'|exception(?'
                                    .'|(*:471)'
                                    .'|\\.css(*:484)'
                                .')'
                            .')'
                            .'|(*:494)'
                        .')'
                    .')'
                    .'|/security_logout(*:520)'
                .')$}sD',
        );

        foreach ($regexList as $offset => $regex) {
            while (preg_match($regex, $matchedPathinfo, $matches)) {
                switch ($m = (int) $matches['MARK']) {
                    default:
                        $routes = array(
                            24 => array(array('_route' => 'projet_edit', '_controller' => 'App\\Controller\\DashboardController::edit'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            31 => array(array('_route' => 'projet_delete', '_controller' => 'App\\Controller\\DashboardController::delete'), array('id'), array('DELETE' => 0), null),
                            43 => array(array('_route' => 'projet_new', '_controller' => 'App\\Controller\\DashboardController::new'), array(), array('GET' => 0, 'POST' => 1), null),
                            66 => array(array('_route' => 'don_show', '_controller' => 'App\\Controller\\DonController::show'), array('id'), array('GET' => 0), null),
                            78 => array(array('_route' => 'don_edit', '_controller' => 'App\\Controller\\DonController::edit'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            85 => array(array('_route' => 'don_delete', '_controller' => 'App\\Controller\\DonController::delete'), array('id'), array('DELETE' => 0), null),
                            102 => array(array('_route' => 'front', '_controller' => 'App\\Controller\\FrontController::findallProjet'), array(), null, null),
                            123 => array(array('_route' => 'findID', '_controller' => 'App\\Controller\\FrontController::findID'), array('id'), array('GET' => 0), null),
                            147 => array(array('_route' => 'fairedon', '_controller' => 'App\\Controller\\FrontController::faireDon'), array('id'), null, null),
                            163 => array(array('_route' => 'mapage', '_controller' => 'App\\Controller\\FrontController::mescampagne'), array(), null, null),
                            180 => array(array('_route' => 'campagne', '_controller' => 'App\\Controller\\FrontController::SaveProjet'), array(), null, null),
                            209 => array(array('_route' => 'edit_projet', '_controller' => 'App\\Controller\\FrontController::edit'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            222 => array(array('_route' => 'send_mail', '_controller' => 'App\\Controller\\FrontController::index'), array(), null, null),
                            239 => array(array('_route' => 'paiement', '_controller' => 'App\\Controller\\PaiementController::index'), array(), null, null),
                            256 => array(array('_route' => 'user_registration', '_controller' => 'App\\Controller\\RegistrationController::register'), array(), null, null),
                            273 => array(array('_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'), array(), null, null),
                            284 => array(array('_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout'), array(), null, null),
                            310 => array(array('_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'), array('id'), array('GET' => 0), null),
                            323 => array(array('_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            331 => array(array('_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'), array('id'), array('DELETE' => 0), null),
                            371 => array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null),
                            391 => array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null),
                            437 => array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null),
                            451 => array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null),
                            471 => array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null),
                            484 => array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null),
                            494 => array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null),
                            520 => array(array('_route' => 'logout'), array(), null, null),
                        );

                        list($ret, $vars, $requiredMethods, $requiredSchemes) = $routes[$m];

                        foreach ($vars as $i => $v) {
                            if (isset($matches[1 + $i])) {
                                $ret[$v] = $matches[1 + $i];
                            }
                        }

                        $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                        if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                            if ($hasRequiredScheme) {
                                $allow += $requiredMethods;
                            }
                            break;
                        }
                        if (!$hasRequiredScheme) {
                            $allowSchemes += $requiredSchemes;
                            break;
                        }

                        return $ret;
                }

                if (520 === $m) {
                    break;
                }
                $regex = substr_replace($regex, 'F', $m - $offset, 1 + strlen($m));
                $offset += strlen($m);
            }
        }
        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        return null;
    }
}
