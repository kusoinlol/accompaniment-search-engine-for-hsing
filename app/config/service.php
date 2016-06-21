<?php

use Phalcon\DI\FactoryDefault;
use Phalcon\Mvc\Url as UrlResolver;
use Phalcon\Events\Manager as EventsManager;

$uniqueId = uniqid();
$di->set(
    "uniqueId",
    function () use ($uniqueId) {
        return $uniqueId;
    }
);

$di->set(
    "startTime",
    function () {
        return microtime();
    }
);

$di->set(
    "db",
    function () use ($config) {
        $connection = new \Phalcon\Db\Adapter\Pdo\Mysql(
            array(
             "host"     => $config->database->host,
             "username" => $config->database->username,
             "password" => $config->database->password,
             "dbname"   => $config->database->dbname,
            )
        );
        $dbEventsManager = new EventsManager();
        $dbEventsManager->attach(
            'db:beforeQuery',
            function ($event, $connection) {
                // echo $connection->getSQLStatement() . PHP_EOL;
            }
        );
        $connection->setEventsManager($dbEventsManager);

        return $connection;
    }
);

$di->set(
    "modelsManager",
    function () {
        return new Phalcon\Mvc\Model\Manager();
    }
);