<?php
$host = "localhost";
$user= "root";
$bd = "login_p";

$conection = mysqli_connect($host,$user,'',$bd);

$go = "Conexion establecida";

if($conection != true){

    mysqli_error($conection);

}
