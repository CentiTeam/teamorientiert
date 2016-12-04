<?php


namespace GroupPay;

use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;

return [
		'controllers' => [
				'factories' => [
						Controller\GroupPayController::class => InvokableFactory::class,
				],
		],
		 'router' => [
        'routes' => [
            'groupPay' => [
                'type'    => Segment::class,
                'options' => [
                    'route' => '/groupPay[/:action[/:id]]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ],
                    'defaults' => [
                        'controller' => Controller\GroupPayController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],
		
		'view_manager' => [
				'display_not_found_reason' => true,
				'display_exceptions'       => true,
				'doctype'                  => 'HTML5',
				'not_found_template'       => 'error/404',
				'exception_template'       => 'error/index',
				'template_map' => [
						'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
						'groupPay/groupPay/index' => __DIR__ . '/../view/groupPay/groupPay/index.phtml',
				],
				
				'template_path_stack' => [
						'groupPay' => __DIR__ . '/../view',
				],
		],
];