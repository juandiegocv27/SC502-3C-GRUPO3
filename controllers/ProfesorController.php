<?php

namespace Controllers;

use Model\Tutoria;
use Model\Usuario;
use MVC\Router;

class ProfesorController {
    public static function index (Router $router) {
        session_start();

        isProf();
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $tutoria = new Tutoria;
            $tutoria->sincronizar($_POST);
            if (!$tutoria->id_tutoria){
                $tutoria->eliminarTutoria($_POST['delete_tutoria']);
            }
            $tutoria->id_Profesor = $_SESSION['id'];
            $tutoria->profesorNombre = $_SESSION['nombre'];
            $alertas = $tutoria->validarNuevaCuenta();
            
            if(empty($alertas)) {
                $resultado = $tutoria->existeTutoria();
                if($resultado->num_rows) {
                    $tutoria->actualizarTutoria();
                } else {
                    $tutoria->crear();
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
        
        $usuario = new Usuario();
        $usuario = Usuario::where('id', $_SESSION['id']);
        $alertas = []; 
       
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario->sincronizar($_POST);
            $alertas = $usuario->validarNuevaCuenta();

            // Revisar que alerta este vacio
            if(empty($alertas)) {
                $resultado = $usuario->actualizar();
                Usuario::setAlerta('exito', 'Se han registrado los nuevos datos correctamente'); 
            }
        }
        
        $alertas = Usuario::getAlertas();
        
        $router->render('profesor/profesor_perfil', [
            'usuario' => $usuario,
            'alertas' => $alertas,
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

    public static function mensaje(Router $router) {
        $router->render('profesor/profesor_mensaje');
    }
}