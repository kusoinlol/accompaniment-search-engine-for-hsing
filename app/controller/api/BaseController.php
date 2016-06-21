<?php

namespace Anthony\Hsing\Controller\Api;

use ReflectionClass;

/**
 * Controller Base
 */
class BaseController extends \Phalcon\Mvc\Controller
{
    /**
     * [initialize description]
     * @return [type] [description]
     */
    protected function initialize()
    {
        $action = $this->dispatcher->getActionName();
        $controllerRefClass = new ReflectionClass($this->dispatcher->getHandlerClass());
        $controller         = $controllerRefClass->getShortName();
    }

}