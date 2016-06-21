<?php
define("ROOT_PATH", (realpath(__DIR__ . "/../../") . '/'));
define("APP_PATH", ROOT_PATH . "app/");
define("PATH_APP", ROOT_PATH . "app/");
define("STATIC_PATH", ROOT_PATH . "static/");
define("PATH_CACHE", realpath( __DIR__ . "/../../../") . "/tmp/" );
define("EXTERNAL_VERSION", "v2");
define("PAGE_VERSION", "v2");

// for jenkins
$env = !get_cfg_var("APPLICATION_ENV") ?
    getenv("APPLICATION_ENV") : get_cfg_var("APPLICATION_ENV");
?>