<?php

namespace Controllers;

use Model\Tutoria;
use MVC\Router;
use Model\Usuario;

class EstudianteController {
    public static function index (Router $router) {
        session_start();

        // isAuth();
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


public static function matricular (Router $router) {
    session_start();
    isStud();

  //  $tutoria = Tutoria::where('id_tutoria', $_SESSION['id_tutoria']);
  $tutoria = new Tutoria;
  $alertas = []; 

  if($_SERVER['REQUEST_METHOD'] === 'POST') {
      $tutoria->sincronizar($_POST);
      $alertas = $tutoria->validarNuevaCuenta();
        // debuguear($tutoria);
      if(empty($alertas)) {
          $resultado =  $tutoria->actualizarTutoria2();
      }
  }

 $router->render('estudiante/estudiante_matricularTutoria', [
     'nombre' => $_SESSION['nombre'],
     'id' => $_SESSION['id']
 ]);


}

public static function informacion (Router $router) {
    session_start();

   // isAuth();
    isStud();

    $tutoria = new Tutoria;
    $tutoria = Tutoria::where('id', $_SESSION['id']);
    $alertas = []; 

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $tutoria->sincronizar($_POST);
        $alertas = $tutoria->validarNuevaCuenta();

        if(empty($alertas)) {
            $resultado =  $tutoria->actualizarTutoria();
        }
    }

 $router->render('estudiante/estudiante_informacionTutorias', [
     'nombre' => $_SESSION['nombre'],
     'id' => $_SESSION['id']
 ]);


}

}
