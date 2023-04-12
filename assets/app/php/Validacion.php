<?php
// Establecer la conexion

include_once('conexion.php');
// Extracción de datos

$Email = $_POST['Email'];
$Contrasena = $_POST['Contraseña'];
// Validacion de datos

$validacion = "SELECT*FROM usuarios WHERE Correo = '$Email' AND Contrasena = '$Contrasena'";
// validacion de datos de conexion y comparacion

$query = mysqli_query($conection, $validacion);

$row = mysqli_fetch_array($query);
if(mysqli_num_rows($query) !=1){

    echo "<h1> Usuario y contraseña son incorrectos</h1>";
}
else{
    header('Location:../public/validado.html');
}