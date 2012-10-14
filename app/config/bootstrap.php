<?php

defined('ROOT_PATH') or define('ROOT_PATH', realpath(dirname(dirname(__DIR__))) );

defined('LIB_PATH') or define('LIB_PATH', realpath(ROOT_PATH . '/lib'));

defined('APP_PATH') or define('APP_PATH', realpath(ROOT_PATH . '/app'));

defined('CFG_PATH') or define('CFG_PATH', realpath(APP_PATH . '/config'));

require_once realpath(LIB_PATH . '/autoload.php');

// Bootstrap and configure in `app/config/slim.php`
$app = new \Slim\Slim(array(
    'templates.path' => realpath(APP_PATH . '/views'),
));

// Bootstrap and configure in `app/config/activerecord.php`
new ActiveRecord\Config;

// Bootstrap and configure in `app/config/elastica.php`
new Elastica_Client;

