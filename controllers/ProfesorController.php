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

    public static function perfil (Router $router) {
        session_start();

        isAuth();
 
        $router->render('profesor/profesor_perfil', [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function reportes (Router $router) {
        session_start();

        isAuth();
 
        $router->render('profesor/profesor_reportes', [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function calendario (Router $router) {
        session_start();

        isAuth();
 
        $router->render('profesor/profesor_calendario', [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }
}