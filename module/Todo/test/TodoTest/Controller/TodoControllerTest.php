<?php

namespace TodoTest\Controller;

use Zend\Test\PHPUnit\Controller\AbstractHttpControllerTestCase;

class TodoTestController extends AbstractHttpControllerTestCase
{
    public function setUp()
    {
        $this->setApplicationConfig(
            include __DIR__ . '/../../../../../config/application.config.php'
            /* include '/var/www/blog-tutorial/config/application.config.php' */
        );
        parent::setUp();
    }

    public function testIndexActionCanBeAccessed()
    {
        // Act
        $this->dispatch('/todo');

        // Assert
        $this->assertResponseStatusCode(200);
    }
}
