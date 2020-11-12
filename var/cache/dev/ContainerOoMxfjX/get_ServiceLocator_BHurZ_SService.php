<?php

namespace ContainerOoMxfjX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BHurZ_SService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.BHurZ.s' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.BHurZ.s'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AdminUsersController::createUser' => ['privates', '.service_locator.j5_bHjD', 'get_ServiceLocator_J5BHjDService', true],
            'App\\Controller\\AdminUsersController::deleteUser' => ['privates', '.service_locator.FXD6KYr', 'get_ServiceLocator_FXD6KYrService', true],
            'App\\Controller\\AdminUsersController::index' => ['privates', '.service_locator.FXD6KYr', 'get_ServiceLocator_FXD6KYrService', true],
            'App\\Controller\\AdminUsersController::updateUser' => ['privates', '.service_locator.YWClx0k', 'get_ServiceLocator_YWClx0kService', true],
            'App\\Controller\\ContactController::index' => ['privates', '.service_locator.g8Ohtqp', 'get_ServiceLocator_G8OhtqpService', true],
            'App\\Controller\\HomeController::coiffure' => ['privates', '.service_locator.fuQ02w4', 'get_ServiceLocator_FuQ02w4Service', true],
            'App\\Controller\\HomeController::esthétique' => ['privates', '.service_locator.fuQ02w4', 'get_ServiceLocator_FuQ02w4Service', true],
            'App\\Controller\\HomeController::index' => ['privates', '.service_locator.etsIbWG', 'get_ServiceLocator_EtsIbWGService', true],
            'App\\Controller\\HomeController::prestaShow' => ['privates', '.service_locator.Zn6tQVw', 'get_ServiceLocator_Zn6tQVwService', true],
            'App\\Controller\\HomeController::soins' => ['privates', '.service_locator.fuQ02w4', 'get_ServiceLocator_FuQ02w4Service', true],
            'App\\Controller\\PrestationsController::delete' => ['privates', '.service_locator.Zn6tQVw', 'get_ServiceLocator_Zn6tQVwService', true],
            'App\\Controller\\PrestationsController::edit' => ['privates', '.service_locator.Zn6tQVw', 'get_ServiceLocator_Zn6tQVwService', true],
            'App\\Controller\\PrestationsController::show' => ['privates', '.service_locator.Zn6tQVw', 'get_ServiceLocator_Zn6tQVwService', true],
            'App\\Controller\\ProfileController::index' => ['privates', '.service_locator.j6gDZDo', 'get_ServiceLocator_J6gDZDoService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.ztkjRWS', 'get_ServiceLocator_ZtkjRWSService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.L4Awewv', 'get_ServiceLocator_L4AwewvService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'App\\Controller\\AdminUsersController:createUser' => ['privates', '.service_locator.j5_bHjD', 'get_ServiceLocator_J5BHjDService', true],
            'App\\Controller\\AdminUsersController:deleteUser' => ['privates', '.service_locator.FXD6KYr', 'get_ServiceLocator_FXD6KYrService', true],
            'App\\Controller\\AdminUsersController:index' => ['privates', '.service_locator.FXD6KYr', 'get_ServiceLocator_FXD6KYrService', true],
            'App\\Controller\\AdminUsersController:updateUser' => ['privates', '.service_locator.YWClx0k', 'get_ServiceLocator_YWClx0kService', true],
            'App\\Controller\\ContactController:index' => ['privates', '.service_locator.g8Ohtqp', 'get_ServiceLocator_G8OhtqpService', true],
            'App\\Controller\\HomeController:coiffure' => ['privates', '.service_locator.fuQ02w4', 'get_ServiceLocator_FuQ02w4Service', true],
            'App\\Controller\\HomeController:esthétique' => ['privates', '.service_locator.fuQ02w4', 'get_ServiceLocator_FuQ02w4Service', true],
            'App\\Controller\\HomeController:index' => ['privates', '.service_locator.etsIbWG', 'get_ServiceLocator_EtsIbWGService', true],
            'App\\Controller\\HomeController:prestaShow' => ['privates', '.service_locator.Zn6tQVw', 'get_ServiceLocator_Zn6tQVwService', true],
            'App\\Controller\\HomeController:soins' => ['privates', '.service_locator.fuQ02w4', 'get_ServiceLocator_FuQ02w4Service', true],
            'App\\Controller\\PrestationsController:delete' => ['privates', '.service_locator.Zn6tQVw', 'get_ServiceLocator_Zn6tQVwService', true],
            'App\\Controller\\PrestationsController:edit' => ['privates', '.service_locator.Zn6tQVw', 'get_ServiceLocator_Zn6tQVwService', true],
            'App\\Controller\\PrestationsController:show' => ['privates', '.service_locator.Zn6tQVw', 'get_ServiceLocator_Zn6tQVwService', true],
            'App\\Controller\\ProfileController:index' => ['privates', '.service_locator.j6gDZDo', 'get_ServiceLocator_J6gDZDoService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.ztkjRWS', 'get_ServiceLocator_ZtkjRWSService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.L4Awewv', 'get_ServiceLocator_L4AwewvService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
        ], [
            'App\\Controller\\AdminUsersController::createUser' => '?',
            'App\\Controller\\AdminUsersController::deleteUser' => '?',
            'App\\Controller\\AdminUsersController::index' => '?',
            'App\\Controller\\AdminUsersController::updateUser' => '?',
            'App\\Controller\\ContactController::index' => '?',
            'App\\Controller\\HomeController::coiffure' => '?',
            'App\\Controller\\HomeController::esthétique' => '?',
            'App\\Controller\\HomeController::index' => '?',
            'App\\Controller\\HomeController::prestaShow' => '?',
            'App\\Controller\\HomeController::soins' => '?',
            'App\\Controller\\PrestationsController::delete' => '?',
            'App\\Controller\\PrestationsController::edit' => '?',
            'App\\Controller\\PrestationsController::show' => '?',
            'App\\Controller\\ProfileController::index' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\AdminUsersController:createUser' => '?',
            'App\\Controller\\AdminUsersController:deleteUser' => '?',
            'App\\Controller\\AdminUsersController:index' => '?',
            'App\\Controller\\AdminUsersController:updateUser' => '?',
            'App\\Controller\\ContactController:index' => '?',
            'App\\Controller\\HomeController:coiffure' => '?',
            'App\\Controller\\HomeController:esthétique' => '?',
            'App\\Controller\\HomeController:index' => '?',
            'App\\Controller\\HomeController:prestaShow' => '?',
            'App\\Controller\\HomeController:soins' => '?',
            'App\\Controller\\PrestationsController:delete' => '?',
            'App\\Controller\\PrestationsController:edit' => '?',
            'App\\Controller\\PrestationsController:show' => '?',
            'App\\Controller\\ProfileController:index' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
