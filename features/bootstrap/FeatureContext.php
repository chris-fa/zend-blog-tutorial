<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\MinkExtension\Context\MinkContext;

/* define('APPLICATION_ENV', 'testing'); */
/* define('APPLICATION_PATH', dirname(__FILE__) . '/../..'); */

/* set_include_path('.' . PATH_SEPARATOR . APPLICATION_PATH . '/../library' */
/*     . PATH_SEPARATOR . get_include_path()); */

require_once dirname(__FILE__) . '/../application/ControllerTestCase.php';

/* use Blog\AcceptanceTests\ControllerTestCase; */

class FeatureContext extends MinkContext
{
    protected $app;

    public function __construct()
    {
        $this->app = new ControllerTestCase();
        $this->app->setUp();
    }

    /**
     * @Given There are :arg1 blog entries
     */
    public function thereAreBlogEntries($arg1)
    {
        $a = $this->app->db();
        $var_dump($a);
    }
}
