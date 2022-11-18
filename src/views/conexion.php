<?php
function conectar() {
    $usuario = 'root';
    $pass = '';
    $servidor = 'localhost';
    $db = 'bd';

    $conexion = new mysqli($servidor, $usuario, $pass, $db);

    if ($conexion -> connect_errno) {
        echo "Error, no conectado";
    } else {
        echo "\n\nConectado :D";
    }
    return $conexion;
}   
?>