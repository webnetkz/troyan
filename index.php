<?php

require "app/lib/decode.php";

use app\core\Router;
use app\controllers\AccountController;

 // Автозагрузка классов
spl_autoload_register(function($class){
	$path = str_replace('\\', '/', $class.'.php');
	
	if (file_exists($path) ) {
		require_once $path;
	}
});

session_start();

$router = new Router;
$router->run();


    



