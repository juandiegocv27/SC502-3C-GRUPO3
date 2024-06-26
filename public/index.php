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

//Pagina de Inicio
$router->GET('/index_contacto',[LoginController::class,'contacto']);
$router->GET('/index_historia',[LoginController::class,'Historia']);
$router->GET('/index_inscripcion',[LoginController::class,'inscripcion']);
$router->GET('/index_nuestraAsociacion',[LoginController::class,'nuestraAsociacion']);
$router->GET('/index_patrocinadores',[LoginController::class,'Patrocinadores']);
$router->GET('/index_reglamento',[LoginController::class,'Reglamento']);
$router->GET('/descargaFile',[LoginController::class,'descargar']);

$router->GET('/index_inicioSesion',[LoginController::class,'inicioSesion']);

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
//Estudiante
$router->POST('/estudiante_principal',[EstudianteController::class,'index']);
$router->GET('/estudiante_principal',[EstudianteController::class,'index']);
$router->GET('/estudiante_informacionTutorias',[EstudianteController::class,'informacion']);
$router->POST('/estudiante_informacionTutorias',[EstudianteController::class,'informacion']);
$router->GET('/estudiante_matricularTutoria',[EstudianteController::class,'matricular']);
$router->POST('/estudiante_matricularTutoria',[EstudianteController::class,'matricular']);
$router->GET('/estudiante_calendario',[EstudianteController::class,'calendario']);
$router->GET('/estudiante_perfil',[EstudianteController::class,'perfil']);
$router->POST('/estudiante_perfil',[EstudianteController::class,'perfil']);

//Profesor
$router->POST('/profesor_principal',[ProfesorController::class,'index']);
$router->GET('/profesor_principal',[ProfesorController::class,'index']);
$router->GET('/profesor_perfil',[ProfesorController::class,'perfil']);
$router->POST('/profesor_perfil',[ProfesorController::class,'perfil']);
$router->GET('/profesor_reportes',[ProfesorController::class,'reportes']);
$router->GET('/profesor_calendario',[ProfesorController::class,'calendario']);
$router->GET('/profesor_mensaje',[ProfesorController::class,'mensaje']);

//Administrador
$router->GET('/admin', [AdminController::class, 'index']);
$router->GET('/admin_calendario', [AdminController::class, 'calendario']);
$router->GET('/admin_graficos', [AdminController::class, 'graficos']);
$router->GET('/admin_registroProfesores', [AdminController::class, 'registroProfesores']);
$router->POST('/admin_registroProfesores', [AdminController::class, 'registroProfesores']);
$router->GET('/admin_reportes', [AdminController::class, 'reportes']);
$router->GET('/admin_mensaje',[AdminController::class,'mensaje']);



// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();

?>

