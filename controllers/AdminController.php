<?php

namespace Controllers;

use MVC\Router;

class AdminController {
    public static function index (Router $router) {
        session_start();

        isAuth();
 
        $router->render('admin/admin_principal', [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function calendario (Router $router) {
        session_start();

        isAuth();
 
        $router->render('admin/admin_calendario', [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function graficos (Router $router) {
        session_start();

        isAuth();
 
        $router->render('admin/admin_graficos', [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function registroProfesores (Router $router) {
        session_start();

        isAuth();
 
        $router->render('admin/admin_registroProfesores', [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function reportes (Router $router) {
        session_start();

        isAuth();
 
        $router->render('admin/admin_reportes', [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }
    
}