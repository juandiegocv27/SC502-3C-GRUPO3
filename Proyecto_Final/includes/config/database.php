<?php 

function conectarDB() : mysqli {
    $db = mysqli_connect('localhost', 'root', '', 'Canguro_DB');

    if(!$db) {
        echo "Error no se pudo conectar";
        exit;
    } 

    return $db;
    
}