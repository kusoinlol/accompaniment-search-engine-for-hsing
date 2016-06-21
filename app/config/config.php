<?php

$config = new Phalcon\Config\Adapter\Yaml(PATH_APP."config/config.yml");

return $config;
?>