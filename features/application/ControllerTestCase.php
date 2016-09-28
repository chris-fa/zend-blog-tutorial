<?php
use Zend\Mvc\Application;
use Zend\Test\PHPUnit\Controller\AbstractControllerTestCase;

class ControllerTestCase extends AbstractControllerTestCase
{
    public function setUp()
    {
        $this->setApplicationConfig(include __DIR__ . '/../../config/application.config.php');
        parent::setUp();
    }

    public function db()
    {
        return $this->getApplicationServiceLocator()->get('Doctrine\ORM\EntityManager');
    }
}
