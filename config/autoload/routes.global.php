<?php

use MehrAlsNix\InteractivePhp\Action\CommandExecutorAction;
use MehrAlsNix\InteractivePhp\Action\CommandExecutorFactory;
use MehrAlsNix\InteractivePhp\Action\HomePageAction;
use MehrAlsNix\InteractivePhp\Action\HomePageFactory;

return [
    'dependencies' => [
        'invokables' => [
            Zend\Expressive\Router\RouterInterface::class => Zend\Expressive\Router\ZendRouter::class,
        ],
        'factories' => [
            HomePageAction::class => HomePageFactory::class,
            CommandExecutorAction::class => CommandExecutorFactory::class,
        ],
    ],

    'routes' => [
        [
            'name' => 'home',
            'path' => '/',
            'middleware' => HomePageAction::class,
            'allowed_methods' => ['GET'],
        ],
        [
            'name' => 'command-executor',
            'path' => '/command-executor',
            'middleware' => CommandExecutorAction::class,
            'allowed_methods' => ['GET'],
        ]
    ],
];
