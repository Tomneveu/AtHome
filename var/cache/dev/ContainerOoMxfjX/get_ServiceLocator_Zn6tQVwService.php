<?php

namespace ContainerOoMxfjX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Zn6tQVwService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Zn6tQVw' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Zn6tQVw'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'prestation' => ['privates', '.errored..service_locator.Zn6tQVw.App\\Entity\\Prestations', NULL, 'Cannot autowire service ".service_locator.Zn6tQVw": it references class "App\\Entity\\Prestations" but no such service exists.'],
        ], [
            'prestation' => 'App\\Entity\\Prestations',
        ]);
    }
}
