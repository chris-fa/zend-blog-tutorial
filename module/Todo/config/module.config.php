<?php

return [
    /* 'service_manager' => [ */
    /*     /1* 'invokables' => [ *1/ */
    /*     /1*     'Blog\Service\PostServiceInterface' => 'Blog\Service\PostService', *1/ */
    /*     /1* ], *1/ */
    /*     'factories' => [ */
    /*         'Blog\Service\PostServiceInterface' => 'Blog\Factory\DoctrinePostServiceFactory', */
    /*     ], */
    /* ], */
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    'controllers' => [
        'invokables' => [
            'Todo\Controller\Todo' => 'Todo\Controller\TodoController',
        ],
    ],
    'router' => [
        'routes' => [
            'todo' => [
                'type' => 'literal',
                'options' => [
                    'route' => '/todo',
                    'defaults' => [
                        'controller' => 'Todo\Controller\Todo',
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],
];
