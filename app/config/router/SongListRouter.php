<?php
/**
 * Api Router
 *
 * @category Router
 * @package  Api
 * @author   Anthonyhsiao
 */
class SongListRouter extends Phalcon\Mvc\Router\Group
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
             'namespace' => 'Anthony\Hsing\Controller\Songlist',
            ]
        );

        $this->addGet(
            '/songlist',
            [
             'controller' => 'Search',
             'action'     => 'getInfo',
            ]
        );
        
    }
}