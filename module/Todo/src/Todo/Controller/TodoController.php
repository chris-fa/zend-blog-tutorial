<?php

namespace Todo\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class TodoController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
}
