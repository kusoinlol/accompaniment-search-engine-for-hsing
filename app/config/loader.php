<?php

if (file_exists(ROOT_PATH . 'vendor/autoload.php')) {
    include_once ROOT_PATH . 'vendor/autoload.php';
}

$loader = new \Phalcon\Loader();

$loader->registerDirs([APP_PATH . '/tasks/'])->register();

$loader->registerNamespaces(
    [
     'Anthony\Hsing\Controller'     => APP_PATH . '/controller/',
     'Anthony\Hsing\Controller\Api' => APP_PATH . '/controller/api/',
     'Anthony\Hsing\Task'           => APP_PATH . "/tasks",
    ]
)->register();

return $loader;