<?php

namespace Controllers;

use Model\Tutoria;
use MVC\Router;
use Model\Usuario;

class EstudianteController {
    public static function index (Router $router) {
        session_start();

        isAuth();
        isStud();
        
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $tutoria = new Tutoria;
            $tutoria->sincronizar($_POST);
            $tutoria->id = $_SESSION['id'];
            $tutoria->nombre = $_SESSION['nombre'];
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

 
        $router->render('estudiante/estudiante_principal', [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);

     
    }

    public static function calendario (Router $router) {
        session_start();

        isAuth();
        isStud();

        $router->render('estudiante/estudiante_calendario');
    }

    public static function perfil (Router $router) {
       session_start();
        //    isAuth();
       isStud();

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

        $router->render('estudiante/estudiante_perfil', [
            'usuario' => $usuario,
            'alertas' => $alertas,
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
 
    }


public static function Matricular (Router $router) {
    session_start();

    isAuth();
    isStud();

 $router->render('estudiante/estudiante_matricularTutoria', [
     'nombre' => $_SESSION['nombre'],
     'id' => $_SESSION['id']
 ]);


}

public static function Informacion (Router $router) {
    session_start();

    isAuth();
    isStud();

 $router->render('estudiante/estudiante_informacionTutorias', [
     'nombre' => $_SESSION['nombre'],
     'id' => $_SESSION['id']
 ]);


}

}
