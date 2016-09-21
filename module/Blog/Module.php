<?php

namespace Blog;

use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\ModuleManager\Feature\ConfigProviderInterface;

class Module implements
	AutoloaderProviderInterface,
	ConfigProviderInterface
{
	public function getAutoloaderConfig()
	{
		return [
			'Zend\Loader\StandardAutoloader' => [
				'namespaces' => [
					// Autoload all classes from namespace 'Blog' from /module/Blog/src/Blog
					__NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
				],
			],
		];
	}

	public function getConfig()
	{
		return include __DIR__ . '/config/module.config.php';
	}
}