<?php

namespace Controllers;

use Classes\Email;
use Model\Usuario;
use MVC\Router;

class AdminController {
    public static function index (Router $router) {
        session_start();

        isAdmin();
 
        $router->render('admin/admin_principal', [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function calendario (Router $router) {
        session_start();

        isAdmin();
 
        $router->render('admin/admin_calendario', [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function graficos (Router $router) {
        session_start();

        isAdmin();
 
        $router->render('admin/admin_graficos', [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }

    public static function registroProfesores (Router $router) {
        session_start();
        isAdmin();
        $usuario = new Usuario;
        //Alertas vacias
         $alertas = [];
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario->sincronizar($_POST);
            $alertas = $usuario->validarNuevaCuenta();
            
            // Revisar que alerta este vacio
            if(empty($alertas)) {
                // Verificar que el usuario no este registrado
                $resultado = $usuario->existeUsuario();

                if($resultado->num_rows) {
                    $alertas = Usuario::getAlertas();
                } else {
                    // Hashear el Password
                    $usuario->hashPassword();

                     // Generar un Token único
                     $usuario->crearToken();

                     // Enviar el Email
                     $email = new Email($usuario->nombre, $usuario->email, $usuario->token);
                     $email->enviarConfirmacionProfesor();
 
                     $usuario->rol = "2";

                     // Crear el usuario
                     $resultado = $usuario->guardar();

                     if($resultado) {
                         header('Location: /admin_mensaje');
                     }
                }
            }
            
        }

        $router->render('admin/admin_registroProfesores', [
            'usuario' => $usuario,
            'alertas' => $alertas,
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    
       

    }

    public static function mensaje(Router $router) {
        $router->render('admin/admin_mensaje');
    }

    public static function reportes (Router $router) {
        session_start();

        isAdmin();
 
        $router->render('admin/admin_reportes', [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }
    
}