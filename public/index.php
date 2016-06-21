<?php

// for php built-in server
if (!isset($_GET['_url'])) {
  $_GET['_url'] = str_replace('/api/v3', "", $_SERVER['SCRIPT_NAME']);
}
// remote code coverage
$env = !get_cfg_var("APPLICATION_ENV") ?
    getenv("APPLICATION_ENV") : get_cfg_var("APPLICATION_ENV");

if ("development" == $env || empty($env)) {
    include __DIR__ . "/../c3.php";
}

use Phalcon\Mvc\Application;
use Phalcon\Http\Response;
use Phalpro\HttpException;
use Phalcon\Mvc\Url as UrlResolver;
use Phalcon\DI\FactoryDefault;
use Phalcon\Http\Request;
use Phalcon\Mvc\View;

try {
    date_default_timezone_set("Asia/Taipei");
    $config = include __DIR__ . '/../app/config/define.php';

    // Read auto-loader
    $loader = include PATH_APP . '/config/loader.php';
    
    // Read the configuration
    $config = include PATH_APP . '/config/config.php';

    // Read routes
    $router = include PATH_APP . '/config/router.php';

    // Read services
    $di = new FactoryDefault();
    include PATH_APP . '/config/service.php';

    // Setting
    $di->set('config', $config);
    $di->set('loader', $loader);
    $di->set('router', $router, true);

    $request = new Request();
    $di->set("request", $request);
    $response = new Response();
    $response->setContentType("application/json", "UTF-8");
    $response->setHeader("Access-Control-Allow-Origin", "*");
    $response->setHeader("Access-Control-Allow-Headers", "Content-Type, APPKEY, AUTHORIZATION");
    $response->setHeader("Access-Control-Allow-Methods", "GET, POST, DELETE, PUT, PATCH, OPTIONS");
    $di->set("response", $response);

    // Handle the request
    $application = new \Phalcon\Mvc\Application($di);

    // Setting up the view component
    $application->useImplicitView(false);
    $di->getResponse()->setContentType("application/json", "UTF-8");
    echo $application->handle()->getContent();
} catch (Exception $e) {
    if (strpos($e->getMessage(), "Duplicate") !== false) {
        $response = new stdClass();
        $response->register = "Duplicate Token";
        $response->status = "ok";
        $response->create = false;
        \Hiiir\Helper\APIHelper::addHeader(200);
        \Hiiir\Helper\APIHelper::output($response, "JSON");
        return $response;
    } else {
        \Hiiir\Helper\APIHelper::exceptionHandler($e);
    }
}//end try
?>