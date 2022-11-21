<?php

require_once __DIR__ . '/../includes/app.php';

use Controllers\AdminController;
use Controllers\EstudianteController;
use Controllers\LoginController;
use Controllers\ProfesorController;
use MVC\Router;

$router = new Router();
// Redireccionar a la principal
$router->GET('/',[LoginController::class,'principal']);

// Iniciar Sesión
$router->GET('/login',[LoginController::class,'login']);
$router->POST('/login',[LoginController::class,'login']);
$router->GET('/logout',[LoginController::class,'logout']);

// Recuperar Password
$router->get('/olvide', [LoginController::class, 'olvide']);
$router->post('/olvide', [LoginController::class, 'olvide']);
$router->get('/recuperar', [LoginController::class, 'recuperar']);
$router->post('/recuperar', [LoginController::class, 'recuperar']);

// Crear Cuenta
$router->GET('/registro',[LoginController::class,'crear']);
$router->POST('/registro',[LoginController::class,'crear']);

// Confirmar cuenta
$router->GET('/confirmar-cuenta',[LoginController::class,'confirmar']);
$router->GET('/mensaje',[LoginController::class,'mensaje']);

//Areas por tipo de usuario
$router->GET('/estudiante_principal',[EstudianteController::class,'index']);
$router->GET('/profesor_principal',[ProfesorController::class,'index']);
$router->GET('/admin', [AdminController::class, 'index']);


// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();

?>

