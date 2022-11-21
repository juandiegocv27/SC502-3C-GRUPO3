<?php

namespace Controllers;

use MVC\Router;

class EstudianteController {
    public static function index (Router $router) {
        session_start();

        isAuth();
 
        $router->render('estudiante/estudiante_principal', [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }
}