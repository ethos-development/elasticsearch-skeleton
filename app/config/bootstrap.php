<?php

defined('APP_ENV') or define('APP_ENV', getenv('DEPLOYMENT') ?: 'development' );

defined('ROOT_PATH') or define('ROOT_PATH', realpath(dirname(dirname(__DIR__))) );

defined('LIB_PATH') or define('LIB_PATH', realpath(ROOT_PATH . '/lib'));

defined('APP_PATH') or define('APP_PATH', realpath(ROOT_PATH . '/app'));

defined('CFG_PATH') or define('CFG_PATH', realpath(APP_PATH . '/config'));

require_once realpath(LIB_PATH . '/autoload.php');

$GLOBALS['config'] = require __DIR__ . '/spyc.php';

$GLOBALS['app'] = require __DIR__ . '/slim.php';

$GLOBALS['activerecord'] = require __DIR__ . '/activerecord.php';

$GLOBALS['elastica'] = require __DIR__ . '/elastica.php';

