<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\MinkExtension\Context\MinkContext;

use Alteris\BehatZendFrameworkExtension\Context\ContextAwareInterface;

use Zend\Mvc\ApplicationInterface;


class FeatureContext extends MinkContext implements ContextAwareInterface
{
    protected $app;

    public function setApplication(ApplicationInterface $app)
    {
        $this->app = $app;
    }

    /**
     * @Given There are :arg1 blog entries
     */
    public function thereAreBlogEntries($arg1)
    {
        // TODO: stub
    }
}
