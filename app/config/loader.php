<?php

if (file_exists(ROOT_PATH . 'vendor/autoload.php')) {
    include_once ROOT_PATH . 'vendor/autoload.php';
}

$loader = new \Phalcon\Loader();

$loader->registerDirs([APP_PATH . '/tasks/'])->register();

$loader->registerNamespaces(
    [
     'Anthony\Hsing\Controller'          => APP_PATH . '/controller/',
     'Anthony\Hsing\Controller\Api'      => APP_PATH . '/controller/api/',
     'Anthony\Hsing\Controller\Songlist' => APP_PATH . '/controller/SongList/',
     'Anthony\Hsing\Task'                => APP_PATH . "/tasks",
     "Anthony\Hsing\Model\Db"            => APP_PATH . "/model/db/",
     "Anthony\Hsing\Model\Dao"           => APP_PATH . "/model/dao/",
     "Anthony\Hsing\Model\Service"       => APP_PATH . "/model/service/",
    ]
)->register();

return $loader;