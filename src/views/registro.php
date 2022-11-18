<?php

print_r($_POST);

include("conexion.php");

$conexion = conectar();

$sentenciaSQL = "INSERT INTO usuario (nombre, apellido) VALUES ('$_POST[nombre]', '$_POST[apellido]')";

if (mysqli_query($conexion, $sentenciaSQL)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sentenciaSQL . "<br>" . mysqli_error($conexion);
}


// echo '<h1>Datos del usuario:</h1>';

// echo '<p>Nombre: ' .$_POST["nombre"]. '</p>';
// echo '<p>Apellido: ' .$_POST["apellido"]. '</p>';
// echo '<p>Sexo: ' .$_POST["sexo"]. '</p>';
// echo '<p>Lenguajes preferidos: </p>';
// checkbox();
// echo '<p>Ciudad: ' .$_POST["ciudad"]. '</p>';
// echo '<p>Usuario: ' .$_POST["usuario"]. '</p>';
// echo '<p>Contraseña: ' .$_POST["contrasenia"]. '</p>';

// function checkbox() {
//     if(!empty($_POST['lenguaje'])){
//         foreach($_POST['lenguaje'] as $selected){
//             echo '<ol>'.$selected.'</ol>';
//         }
//     }
// }
?>