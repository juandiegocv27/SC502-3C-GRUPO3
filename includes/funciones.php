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