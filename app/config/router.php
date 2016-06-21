<?php
$router = new Phalcon\Mvc\Router(false);
$router->clear();
$router->removeExtraSlashes(true);

// 相容舊版Nginx設定，需做Router判斷，ALL:從根index進入，其他一律從子目錄index進入
    // include __DIR__.'/router/InternalRouter.php';
    // $router->mount(new InternalRouter());
    
    include __DIR__.'/router/v1/ApiRouter.php';
    $router->mount(new ApiRouterV1());

$router->notFound(
    [
        'namespace' => 'Controller\Api\External\V2',
        'controller' => 'index',
        'action' => 'notFound'
    ]
);
return $router;