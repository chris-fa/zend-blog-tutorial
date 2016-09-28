<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\MinkExtension\Context\MinkContext;

use MvLabs\Zf2Extension\Context\Zf2AwareContextInterface;

use Zend\Mvc\Application;

// TODO: use PSR-4 import
require_once dirname(__FILE__) . '/../application/ControllerTestCase.php';

class FeatureContext extends MinkContext implements Zf2AwareContextInterface
{
    protected $app;
    protected $params;
    protected $moduleService;

    public function __construct(array $params = [])
    {
        $this->params = $params;
    }

    /**
     * Sets HttpKernel instance.
     * This method will be automatically called by Zf2Extension ContextInitializer.
     *
     * @param Zend\Mvc\Application $zf2MvcApplication
     */
    public function setZf2App(Application $zf2MvcApplication)
    {
        $this->app = $zf2MvcApplication;
    }

    /**
     * @Given There are :arg1 blog entries
     */
    public function thereAreBlogEntries($arg1)
    {
        // TODO: stub
    }
}
