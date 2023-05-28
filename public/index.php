<?php
use \wfm\App;

if (PHP_MAJOR_VERSION < 8) {
    die('Hello, for the application to work correctly, please use php 8 or higher. Thanks');
}

require_once dirname(__DIR__) . '/config/init.php';
require_once HELPERS . '/functions.php';
require_once WEB . '/routes.php';

new App();


//Database settings in folder ./config/databese.php
//Site settings in folder ./config/init.php