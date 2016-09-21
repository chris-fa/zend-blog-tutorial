<?php

return [
	'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
	'controllers' => [
		'invokables' => [
			'Blog\Controller\List' => 'Blog\Controller\ListController',
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
						'action' 	 => 'index',
					],
				],
			],
		],
	],
];