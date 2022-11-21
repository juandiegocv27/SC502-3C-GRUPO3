<?php

namespace Controllers;

use MVC\Router;

class ProfesorController {
    public static function index (Router $router) {
        session_start();

        isAuth();
 
        $router->render('profesor/profesor_principal', [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }
}