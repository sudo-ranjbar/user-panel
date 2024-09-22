<?php

define('ROOT_PATH', dirname(__FILE__));
define('ROOT_URL', 'http://localhost:8888');

require_once ROOT_PATH . '/App/Lib/AutoLoad.php';

AutoLoad::_instance();
$init = new Router;
