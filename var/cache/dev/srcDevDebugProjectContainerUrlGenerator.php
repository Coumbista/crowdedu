<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'dashboard' => array(array(), array('_controller' => 'App\\Controller\\DashboardController::index'), array(), array(array('text', '/dashboard')), array(), array()),
        'projet_index' => array(array(), array('_controller' => 'App\\Controller\\DashboardController::allProjet'), array(), array(array('text', '/dashboard/projet_index')), array(), array()),
        'projet_edit' => array(array('id'), array('_controller' => 'App\\Controller\\DashboardController::edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id')), array(), array()),
        'projet_delete' => array(array('id'), array('_controller' => 'App\\Controller\\DashboardController::delete'), array(), array(array('variable', '/', '[^/]++', 'id')), array(), array()),
        'projet_new' => array(array(), array('_controller' => 'App\\Controller\\DashboardController::new'), array(), array(array('text', '/new')), array(), array()),
        'don_index' => array(array(), array('_controller' => 'App\\Controller\\DonController::index'), array(), array(array('text', '/don/')), array(), array()),
        'don_new' => array(array(), array('_controller' => 'App\\Controller\\DonController::new'), array(), array(array('text', '/don/new')), array(), array()),
        'don_show' => array(array('id'), array('_controller' => 'App\\Controller\\DonController::show'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/don')), array(), array()),
        'don_edit' => array(array('id'), array('_controller' => 'App\\Controller\\DonController::edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id'), array('text', '/don')), array(), array()),
        'don_delete' => array(array('id'), array('_controller' => 'App\\Controller\\DonController::delete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/don')), array(), array()),
        'front' => array(array(), array('_controller' => 'App\\Controller\\FrontController::findallProjet'), array(), array(array('text', '/front')), array(), array()),
        'findID' => array(array('id'), array('_controller' => 'App\\Controller\\FrontController::findID'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/finID')), array(), array()),
        'mapage' => array(array(), array('_controller' => 'App\\Controller\\FrontController::mescampagne'), array(), array(array('text', '/mapage')), array(), array()),
        'campagne' => array(array(), array('_controller' => 'App\\Controller\\FrontController::SaveProjet'), array(), array(array('text', '/campagne')), array(), array()),
        'fairedon' => array(array('id'), array('_controller' => 'App\\Controller\\FrontController::faireDon'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/fairedon')), array(), array()),
        'edit_projet' => array(array('id'), array('_controller' => 'App\\Controller\\FrontController::edit'), array(), array(array('text', '/edit_projet'), array('variable', '/', '[^/]++', 'id')), array(), array()),
        'send_mail' => array(array(), array('_controller' => 'App\\Controller\\FrontController::index'), array(), array(array('text', '/mail')), array(), array()),
        'change_mdp' => array(array(), array('_controller' => 'App\\Controller\\FrontController::modifMPD'), array(), array(array('text', '/change_mdp')), array(), array()),
        'paiement' => array(array(), array('_controller' => 'App\\Controller\\PaiementController::index'), array(), array(array('text', '/paiement')), array(), array()),
        'user_registration' => array(array(), array('_controller' => 'App\\Controller\\RegistrationController::register'), array(), array(array('text', '/register')), array(), array()),
        'login' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::login'), array(), array(array('text', '/login')), array(), array()),
        'security_logout' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::logout'), array(), array(array('text', '/logout')), array(), array()),
        'user_index' => array(array(), array('_controller' => 'App\\Controller\\UserController::index'), array(), array(array('text', '/user/')), array(), array()),
        'user_new' => array(array(), array('_controller' => 'App\\Controller\\UserController::new'), array(), array(array('text', '/user/new')), array(), array()),
        'user_show' => array(array('id'), array('_controller' => 'App\\Controller\\UserController::show'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/user')), array(), array()),
        'user_edit' => array(array('id'), array('_controller' => 'App\\Controller\\UserController::edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id'), array('text', '/user')), array(), array()),
        'user_delete' => array(array('id'), array('_controller' => 'App\\Controller\\UserController::delete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/user')), array(), array()),
        '_twig_error_test' => array(array('code', '_format'), array('_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code' => '\\d+'), array(array('variable', '.', '[^/]++', '_format'), array('variable', '/', '\\d+', 'code'), array('text', '/_error')), array(), array()),
        '_wdt' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::toolbarAction'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/_wdt')), array(), array()),
        '_profiler_home' => array(array(), array('_controller' => 'web_profiler.controller.profiler::homeAction'), array(), array(array('text', '/_profiler/')), array(), array()),
        '_profiler_search' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchAction'), array(), array(array('text', '/_profiler/search')), array(), array()),
        '_profiler_search_bar' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchBarAction'), array(), array(array('text', '/_profiler/search_bar')), array(), array()),
        '_profiler_phpinfo' => array(array(), array('_controller' => 'web_profiler.controller.profiler::phpinfoAction'), array(), array(array('text', '/_profiler/phpinfo')), array(), array()),
        '_profiler_search_results' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array(), array(array('text', '/search/results'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_open_file' => array(array(), array('_controller' => 'web_profiler.controller.profiler::openAction'), array(), array(array('text', '/_profiler/open')), array(), array()),
        '_profiler' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::panelAction'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_router' => array(array('token'), array('_controller' => 'web_profiler.controller.router::panelAction'), array(), array(array('text', '/router'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_exception' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::showAction'), array(), array(array('text', '/exception'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_exception_css' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::cssAction'), array(), array(array('text', '/exception.css'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        'logout' => array(array(), array(), array(), array(array('text', '/security_logout')), array(), array()),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && (self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
            unset($parameters['_locale']);
            $name .= '.'.$locale;
        } elseif (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
