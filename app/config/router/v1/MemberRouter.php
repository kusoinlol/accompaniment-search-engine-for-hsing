<?php
/**
 * Api Router
 *
 * @category Router
 * @package  Api
 * @author   JarvisChen <jarvis_chen@hiiir.com>
 *
 */
class InternalRouter extends Phalcon\Mvc\Router\Group
{

    /**
     * Router Group init
     *
     * @return void
     */
    public function initialize()
    {
        // 相容舊版Nginx設定，需做Router判斷
        if (ROUTER_TYPE == "ALL") {
            $this->setPrefix('/backend/member/v2');
        }

        $this->setPaths(
            [
             'namespace' => 'Hiiir\Pns\Controller\Api\Internal\V2',
             'source'    => 'backend',
            ]
        );

        // project
        $this->addGet(
            '/project',
            [
             'controller' => 'project',
             'action'     => 'list',
            ]
        );

        $this->addGet(
            '/project/{projectId:[0-9]+}',
            [
             'controller' => 'project',
             'action'     => 'get',
             'projectId'  => 1,
            ]
        );

        $this->addPatch(
            '/project/{projectId:[0-9]+}/key',
            [
             'controller' => 'project',
             'action'     => 'patchKey',
             'projectId'  => 1,
            ]
        );

        // Register
        $this->addGet(
            '/project/{projectId:[0-9]+}/register',
            [
                'controller' => 'register',
                'action' => 'list',
                'projectId' => 1,
            ]
        );

        $this->addGet(
            '/project/{projectId:[0-9]+}/message/{messageId:[0-9]+}/register',
            [
                'controller' => 'register',
                'action' => 'listOfMessage',
                'projectId' => 1,
                'messageId' => 2,
            ]
        );

        $this->addGet(
            '/project/{projectId:[0-9]+}/register/{registerId:[0-9]+}',
            [
                'controller' => 'register',
                'action' => 'get',
                'projectId' => 1,
                'registerId' => 2,
            ]
        );

        $this->addPost(
            '/project/{projectId:[0-9]+}/register',
            [
                'controller' => 'register',
                'action' => 'post',
                'projectId' => 1,
            ]
        );

        $this->addPut(
            '/project/{projectId:[0-9]+}/register/{registerId:[0-9]+}',
            [
                'controller' => 'register',
                'action' => 'put',
                'projectId' => 1,
                'registerId' => 2,
            ]
        );

        $this->addPut(
            '/project/{projectId:[0-9]+}/register',
            [
                'controller' => 'register',
                'action' => 'put',
                'projectId' => 1,
            ]
        );

        $this->addDelete(
            '/project/{projectId:[0-9]+}/register/{registerId:[0-9]+}',
            [
                'controller' => 'register',
                'action' => 'delete',
                'projectId' => 1,
                'registerId' => 2,
            ]
        );

        // Message
        $this->addGet(
            '/project/{projectId:[0-9]+}/message',
            [
                'controller' => 'message',
                'action' => 'list',
                'projectId' => 1,
            ]
        );

        $this->addGet(
            '/project/{projectId:[0-9]+}/message/{messageId:[0-9]+}',
            [
                'controller' => 'message',
                'action' => 'get',
                'projectId' => 1,
                'messageId' => 2,
            ]
        );

        $this->addPost(
            '/project/{projectId:[0-9]+}/message',
            [
                'controller' => 'message',
                'action' => 'post',
                'projectId' => 1,
            ]
        );

        $this->addPost(
            '/project/{projectId:[0-9]+}/message/{messageId:[0-9]+}/target',
            [
                'controller' => 'message-target',
                'action' => 'post',
                'projectId' => 1,
                'messageId' => 2,
            ]
        );

        $this->addPatch(
            '/project/{projectId:[0-9]+}/message/{messageId:[0-9]+}',
            [
                'controller' => 'message',
                'action' => 'patch',
                'projectId' => 1,
                'messageId' => 2,
            ]
        );

        $this->addPatch(
            '/project/{projectId:[0-9]+}/message/{messageId:[0-9]+}/target',
            [
                'controller' => 'message-target',
                'action' => 'patch',
                'projectId' => 1,
                'messageId' => 2,
            ]
        );

        $this->addDelete(
            '/project/{projectId:[0-9]+}/message/{messageId:[0-9]+}',
            [
                'controller' => 'message',
                'action' => 'delete',
                'projectId' => 1,
                'messageId' => 2,
            ]
        );

        $this->addGet(
            '/project/{projectId:[0-9]+}/message/{messageId:[0-9]+}/target',
            [
                'controller' => 'message-target',
                'action' => 'list',
                'projectId' => 1,
                'messageId' => 2,
            ]
        );
    }
}