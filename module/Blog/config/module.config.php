<?php

return [
    'service_manager' => [
        /* 'invokables' => [ */
        /*     'Blog\Service\PostServiceInterface' => 'Blog\Service\PostService', */
        /* ], */
        'factories' => [
            'Blog\Service\PostServiceInterface' => 'Blog\Factory\DoctrinePostServiceFactory',
        ],
    ],
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    'controllers' => [
        'factories' => [
            'Blog\Controller\List' => 'Blog\Factory\ListControllerFactory',
        ],
    ],
    'router' => [
        'routes' => [
            'post' => [
                'type' => 'literal',
                'options' => [
                    'route' => '/blog',
                    'defaults' => [
                        'controller' => 'Blog\Controller\List',
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],
];
