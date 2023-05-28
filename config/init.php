<?php
//Must be replaced with true for error output
define("DEBUG", false);

define("ROOT", dirname(__DIR__));
define("WWW", ROOT . '/public');
define("APP", ROOT . '/app');
define("CORE", ROOT . '/vendor/wfm');
define("CACHE", ROOT . '/tmp/cache');
define("LOGS", ROOT . '/tmp/logs');
define("CONFIG", ROOT . '/config');
define("WEB", ROOT . '/web');
define("LAYOUT", 'main');

//Write your domain name
define("PATH", '...');

define("HELPERS", ROOT . '/vendor/wfm/helpers' );


require_once ROOT . '/vendor/autoload.php';
