<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.rememberme.services.simplehash.main' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/security/Http/RememberMe/RememberMeServicesInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Http/Logout/LogoutHandlerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Http/RememberMe/AbstractRememberMeServices.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Http/RememberMe/TokenBasedRememberMeServices.php';

return $this->privates['security.authentication.rememberme.services.simplehash.main'] = new \Symfony\Component\Security\Http\RememberMe\TokenBasedRememberMeServices(array(0 => ($this->privates['security.user.provider.concrete.database_users'] ?? $this->load('getSecurity_User_Provider_Concrete_DatabaseUsersService.php'))), $this->getEnv('APP_SECRET'), 'main', array('lifetime' => 604800, 'path' => '/', 'name' => 'REMEMBERME', 'domain' => NULL, 'secure' => false, 'httponly' => true, 'always_remember_me' => false, 'remember_me_parameter' => '_remember_me'), ($this->privates['monolog.logger.security'] ?? $this->load('getMonolog_Logger_SecurityService.php')));
