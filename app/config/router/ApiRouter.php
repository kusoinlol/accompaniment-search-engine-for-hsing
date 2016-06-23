<?php
/**
 * Api Router
 *
 * @category Router
 * @package  Api
 * @author   Anthonyhsiao
 */
class ApiRouter extends Phalcon\Mvc\Router\Group
{

    /**
     * Router Group init
     *
     * @return void
     */
    public function initialize()
    {
        // $this->setPrefix('/api');
        $this->setPaths(
            [
             'namespace' => 'Anthony\Hsing\Controller\Api',
            ]
        );

        $this->addGet(
            '/demo',
            [
             'controller' => 'Test',
             'action'     => 'demo',
            ]
        );

        $this->addGet(
            '/123',
            [
             'controller' => 'Test',
             'action'     => '123',
            ]
        );
        
    }
}