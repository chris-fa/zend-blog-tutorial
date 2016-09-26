<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\MinkExtension\Context\MinkContext;

class FeatureContext extends MinkContext
{

    /**
     * @Given There are :arg1 blog entries
     */
    public function thereAreBlogEntries($arg1)
    {
        throw new PendingException();
    }
}
