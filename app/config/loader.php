<?php
if (file_exists(ROOT_PATH . 'vendor/autoload.php')) {
    include_once ROOT_PATH . 'vendor/autoload.php';
}

$loader = new \Phalcon\Loader();

$loader->registerDirs(
    [
        PATH_APP . '/tasks/'
    ]
)->register();

$loader->registerNamespaces(
    [
     "redis" => PATH_APP . "model/cache/redis",
    ]
)->register();
return $loader;
?>