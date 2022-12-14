<?php

namespace Model;

class Tutoria extends ActiveRecord {
    //Base Datos
    protected static $tabla = 'tutorias';
    protected static $columnasDB = ['id_tutoria','nombre','descripcion','material','tipo','nivel','profesorNombre','fechaTutoria','enlaceZoom', 'id_Profesor','id'];
    
    public $id_tutoria;
    public $nombre;
    public $descripcion;
    public $material;
    public $tipo;
    public $nivel;
    public $profesorNombre;
    public $fechaTutoria;
    public $enlaceZoom;
    public $id_Profesor;
    public $id;

    public function __construct($args = []) {
        $this->id_tutoria = $args['id_tutoria'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->descripcion = $args['descipcion'] ?? '';
        $this->material = $args['material'] ?? '';
        $this->tipo = $args['tipo'] ?? '0';
        $this->nivel = $args['nivel'] ?? '0';
        $this->profesorNombre = $args['profesorNombre'] ?? '';
        $this->fechaTutoria = $args['fechaTutoria'] ?? '';
        $this->enlaceZoom = $args['enlaceZoom'] ?? '';
        $this->id_Profesor = $args['id_Profesor'] ?? '';
        $this->id = $args['id'] ?? '';
    }

    // Mensajes de validación para la creación de una cuenta
    public function validarNuevaCuenta() {
        if(!$this->id_tutoria) {
            self::$alertas['error'][] = 'El ID es Obligatorio';
        }
        if(!$this->nombre) {
            self::$alertas['error'][] = 'El Nombre es Obligatorio';
        }
        if(!$this->descripcion) {
            self::$alertas['error'][] = 'La descripcion es Obligatoria';
        }
        if(!$this->material) {
            self::$alertas['error'][] = 'El Material es Obligatorio';
        }
        if(!$this->tipo) {
            self::$alertas['error'][] = 'El Tipo es Obligatorio';
        }
        if(!$this->nivel) {
            self::$alertas['error'][] = 'El Nivel es Obligatorio';
        }
        if(!$this->fechaTutoria) {
            self::$alertas['error'][] = 'La Fecha de tutoría es Obligatoria';
        }
        if(!$this->enlaceZoom) {
            self::$alertas['error'][] = 'El enlace es Obligatorio';
        }
        return self::$alertas;
    }

    // Revisa si el usuario ya existe
    public function getTutoriasbyProfesor() {
        echo '<script>console.log("'. $_SESSION['id'] .'"); </script>';
        $query = " SELECT * FROM " . self::$tabla . " WHERE id_Profesor = " . $_SESSION['id'];

        $resultado = self::$db->query($query);

        return $resultado;
    }

    public function getTutoriasGeneral() {
        echo '<script>console.log("'. $_SESSION['id'] .'"); </script>';
        $query = " SELECT * FROM " . self::$tabla ;

        $resultado = self::$db->query($query);

        return $resultado;
    }

    public function getTutoriasbyEstudiante() {
        echo '<script>console.log("'. $_SESSION['id'] .'"); </script>';
        $query = " SELECT * FROM " . self::$tabla . " WHERE id = " . $_SESSION['id'];

        $resultado = self::$db->query($query);

        return $resultado;
    }

    public function existeTutoria() {
        $query = " SELECT * FROM " . self::$tabla . " WHERE id_tutoria = '" . $this->id_tutoria . "' LIMIT 1";

        $resultado = self::$db->query($query);

        if($resultado->num_rows) {
            self::$alertas['error'][] = 'El Usuario ya esta registrado'; // Cambiar el mensaje 
        }

        return $resultado;
    }

    public function actualizarTutoria(){
        // Sanitizar los datos
        $atributos = $this->sanitizarAtributos();

        // Iterar para ir agregando cada campo de la BD
        $valores = [];
        foreach($atributos as $key => $value) {
            $valores[] = "{$key}='{$value}'";
        }

        // Consulta SQL
        $query = "UPDATE " . static::$tabla ." SET ";
        $query .=  join(', ', $valores );
        $query .= " WHERE id_tutoria = '" . self::$db->escape_string($this->id_tutoria) . "' ";
        $query .= " LIMIT 1 "; 

        // Actualizar BD
        $resultado = self::$db->query($query);
        return $resultado;
    }

    public function actualizarTutoria2(){

        // Sanitizar los datos

        $atributos = $this->sanitizarAtributos();

       // debuguear( $atributos );

        // Iterar para ir agregando cada campo de la BD

        $valores = [];

        $test= $_SESSION['id'];

        foreach($atributos as $key => $value) {

            $valores[] = "{$key}='{$value}'";

        }



        // Consulta SQL

        $query = "UPDATE " . static::$tabla ." SET ";

        $query .=  join(', ', $valores );

        $query .=  ", id='$test'";

        $query .= " WHERE id_tutoria = '" . self::$db->escape_string($this->id_tutoria) . "' ";

        $query .= " LIMIT 1 ";





        // Actualizar BD

       

        $resultado = self::$db->query($query);

       

        return $resultado;

    }

    public function Matricula(){
        // Sanitizar los datos
        $atributos = $this->sanitizarAtributos();

        // Iterar para ir agregando cada campo de la BD
        $valores = [];
        foreach($atributos as $key => $value) {
            $valores[] = "{$key}='{$value}'";
        }

        // Consulta SQL
        $query = "UPDATE " . static::$tabla ." SET ";
        $query .=  join(', ', $valores );
        $query .= " WHERE id_tutoria = '" . self::$db->escape_string($this->id_tutoria) . "' ";
        $query .= " LIMIT 1 "; 

        // Actualizar BD
        $resultado = self::$db->query($query);
        return $resultado;
    }
}