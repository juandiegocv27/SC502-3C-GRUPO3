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
}