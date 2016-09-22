<?php

namespace BlogTest\Controller;

use Zend\Test\PHPUnit\Controller\AbstractHttpControllerTestCase;

class BlogTestController extends AbstractHttpControllerTestCase
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
        $mock = $this->getMockBuilder('Blog\Service\PostServiceInterface')
                        ->getMock();

        $mock->expects($this->once())
            ->method('findAllPosts')
            ->will($this->returnValue([]));

        $sm = $this->getApplicationServiceLocator();
        $sm->setAllowOverride(true);
        $sm->setService('Blog\Service\PostServiceInterface', $mock);

        $this->dispatch('/blog');
        $this->assertResponseStatusCode(200);
        $this->assertModuleName('Blog');
        $this->assertControllerName('Blog\Controller\List');
        $this->assertMatchedRouteName('post');
    }
}
