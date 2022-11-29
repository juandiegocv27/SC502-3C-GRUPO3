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

    public static function calendario (Router $router) {
        session_start();

        isAuth();

        $router->render('estudiante/estudiante_calendario');
     }

    public static function perfil (Router $router) {
       session_start();

       isAuth();

    $router->render('estudiante/estudiante_perfil', [
        'nombre' => $_SESSION['nombre'],
        'id' => $_SESSION['id']
    ]);

 
}


public static function Matricular (Router $router) {
    session_start();

    isAuth();

 $router->render('estudiante/estudiante_matricularTutoria', [
     'nombre' => $_SESSION['nombre'],
     'id' => $_SESSION['id']
 ]);


}

public static function Informacion (Router $router) {
    session_start();

    isAuth();

 $router->render('estudiante/estudiante_informacionTutorias', [
     'nombre' => $_SESSION['nombre'],
     'id' => $_SESSION['id']
 ]);


}

}
