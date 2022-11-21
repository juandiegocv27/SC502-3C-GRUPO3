<?php

// require 'app.php';

// function incluirTemplate( string  $nombre, bool $inicio = false ) {
//     include TEMPLATES_URL . "/${nombre}.php"; 
// }

// function estaAutenticado() : bool {
//     session_start();

//     $auth = $_SESSION['login'];
//     if($auth) {
//         return true;
//     }
//     return false;
// }

function debuguear($variable) : string {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

// Escapa / Sanitizar el HTML
function s($html) : string {
    $s = htmlspecialchars($html);
    return $s;
}

function esUltimo(string $actual, string $proximo): bool {

    if($actual !== $proximo) {
        return true;
    }
    return false;
}

// Función que revisa que el usuario este autenticado
function isAuth() : void {
    if(!isset($_SESSION['login'])) {
        header('Location: /');
    }
}

function isAdmin() : void {
    if(!isset($_SESSION['admin'])) {
        header('Location: /');
    }
}