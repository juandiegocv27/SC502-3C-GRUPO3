<?php

require_once __DIR__ . '/includes/app.php';
use Controllers\LoginController;

use MVC\Router;

$router = new Router();

$router->GET('/login',[LoginController::class,'login']);
$router->POST('/login',[LoginController::class,'login']);
$router->GET('/logout',[LoginController::class,'logout']);

$router->GET('/registro',[LoginController::class,'crear']);
$router->POST('/registro',[LoginController::class,'crear']);

$router->comprobarRutas();

?>
