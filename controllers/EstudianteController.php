<?php

namespace Controllers;

use MVC\Router;

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

       isAuth();
       isStud();

    $router->render('estudiante/estudiante_perfil', [
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
