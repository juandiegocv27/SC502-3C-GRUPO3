<?php

namespace Controllers;

use Model\Tutoria;
use MVC\Router;

class ProfesorController {
    public static function index (Router $router) {
        session_start();

        isProf();
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $tutoria = new Tutoria;
            $tutoria->sincronizar($_POST);
            $tutoria->id_Profesor = $_SESSION['id'];
            $tutoria->profesorNombre = $_SESSION['nombre'];
            $alertas = $tutoria->validarNuevaCuenta();
            
            if(empty($alertas)) {
                $resultado = $tutoria->existeTutoria();
                if($resultado->num_rows) {
                    $alertas = Tutoria::getAlertas();
                } else {
                    $tutoria->guardar();
                }
            }
        }
 
        $router->render('profesor/profesor_principal', [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function perfil (Router $router) {
        session_start();

        isProf();
 
        $router->render('profesor/profesor_perfil', [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function reportes (Router $router) {
        session_start();

        isProf();
 
        $router->render('profesor/profesor_reportes', [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function calendario (Router $router) {
        session_start();

        isProf();
 
        $router->render('profesor/profesor_calendario', [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }
}