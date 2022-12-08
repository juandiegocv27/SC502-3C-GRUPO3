<?php

namespace Model;

class Usuario extends ActiveRecord {
    //Base Datos
    protected static $tabla = 'usuarios';
    protected static $columnasDB = ['id', 'email', 'password', 'token', 'confirmado', 'rol', 'fechaNacimiento', 'direccion', 'cedula', 'telefono', 'apellido2', 'apellido1','nombre', 'imagen'];
    
    public $id;
    public $email;
    public $password;
    public $token;
    public $confirmado;
    public $rol;
    public $fechaNacimiento;
    public $direccion;
    public $cedula;
    public $telefono;
    public $apellido2;
    public $apellido1;
    public $nombre;
    public $imagen;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->email = $args['email'] ?? '';
        $this->password = $args['password'] ?? '';
        $this->token = $args['token'] ?? '';
        $this->confirmado = $args['confirmado'] ?? '0';
        $this->rol = $args['rol'] ?? '0';
        $this->fechaNacimiento = $args['fechaNacimiento'] ?? '';
        $this->direccion = $args['direccion'] ?? '';
        $this->cedula = $args['cedula'] ?? '';
        $this->telefono = $args['telefono'] ?? '';
        $this->apellido1 = $args['apellido1'] ?? '';
        $this->apellido2 = $args['apellido2'] ?? '';
        $this->nombre = $args['nombre'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
    }

    // Mensajes de validación para la creación de una cuenta
    public function validarNuevaCuenta() {
        if(!$this->nombre) {
            self::$alertas['error'][] = 'El Nombre es Obligatorio';
        }
        if(!$this->apellido1) {
            self::$alertas['error'][] = 'El Primer Apellido es Obligatorio';
        }
        if(!$this->apellido2) {
            self::$alertas['error'][] = 'El Segundo Apellido es Obligatorio';
        }
        if(!$this->cedula) {
            self::$alertas['error'][] = 'La Cédula es Obligatoria';
        }
        if(!$this->email) {
            self::$alertas['error'][] = 'El Email es Obligatorio';
        }
        if(!$this->telefono) {
            self::$alertas['error'][] = 'El Teléfono es Obligatorio';
        }
        if(strlen($this->telefono) === 7) {
            self::$alertas['error'][] = 'El Telefono debe contener 8 caracteres';
        }
        if(!$this->direccion) {
            self::$alertas['error'][] = 'La Dirección es Obligatoria';
        }
        if(!$this->fechaNacimiento) {
            self::$alertas['error'][] = 'La fecha de Nacimiento es Obligatoria';
        }
        if(!$this->password) {
            self::$alertas['error'][] = 'El Password es Obligatorio';
        }
        if(strlen($this->password) < 6) {
            self::$alertas['error'][] = 'El password debe contener al menos 6 caracteres';
        }
        return self::$alertas;
    }

    public function validarLogin() {
        if(!$this->email) {
            self::$alertas['error'][] = 'El email es Obligatorio';
        }
        if(!$this->password) {
            self::$alertas['error'][] = 'El Password es Obligatorio';
        }

        return self::$alertas;
    }
    public function validarEmail() {
        if(!$this->email) {
            self::$alertas['error'][] = 'El email es Obligatorio';
        }
        return self::$alertas;
    }

    public function validarPassword() {
        if(!$this->password) {
            self::$alertas['error'][] = 'El Password es obligatorio';
        }
        if(strlen($this->password) < 6) {
            self::$alertas['error'][] = 'El Password debe tener al menos 6 caracteres';
        }

        return self::$alertas;
    }

    // Revisa si el usuario ya existe
    public function existeUsuario() {
        $query = " SELECT * FROM " . self::$tabla . " WHERE email = '" . $this->email . "' LIMIT 1";

        $resultado = self::$db->query($query);

        if($resultado->num_rows) {
            self::$alertas['error'][] = 'El Usuario ya esta registrado';
        }

        return $resultado;
    }

    public function hashPassword() {
        $this->password = password_hash($this->password, PASSWORD_BCRYPT);
    }

    public function crearToken() {
        $this->token = uniqid();
    }

    public function comprobarPasswordAndVerificado($password) {
        $resultado = password_verify($password, $this->password);
        if(!$resultado || !$this->confirmado) {
            self::$alertas['error'][] = 'Password Incorrecto o tu cuenta no ha sido confirmada';
        } else {
            return true;
        }
    }

    // Revisa si el usuario ya existe
    public function usuariosPorTutoria($id_tutoria) {
        $query = " SELECT * FROM " . self::$tabla . " WHERE rol = 0 AND id_tutoria = " .$id_tutoria;

        $resultado = self::$db->query($query);

        if($resultado->num_rows) {
            self::$alertas['error'][] = 'El Usuario ya esta registrado';
        }

        return $resultado;
    }
}