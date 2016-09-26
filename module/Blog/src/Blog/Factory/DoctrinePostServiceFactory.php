<?php

namespace Blog\Factory;

use Blog\Service\DoctrinePostService;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class DoctrinePostServiceFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        return new DoctrinePostService($serviceLocator->get('Doctrine\ORM\EntityManager'));
    }
}
