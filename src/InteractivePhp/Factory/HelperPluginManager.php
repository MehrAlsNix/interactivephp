<?php

namespace MehrAlsNix\InteractivePhp\Factory;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Config;
use Zend\View\HelperPluginManager;

class HelperPluginManagerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $manager = new HelperPluginManager($container);

        $config = $container->has('config') ? $container->get('config') : [];
        $config = isset($config['view_helpers']) ? $config['view_helpers'] : [];
        (new Config($config))->configureServiceManager($manager);

        return $manager;
    }
}