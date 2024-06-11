<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "login";

//$conexion = mysqli_connect($host, $user, $pass, $db);

//if (!$conexion) {
// echo "Conexión fallida";

   $conexion = mysqli_connect($host, $user, $pass, $db);

if (!$conexion) {
    echo "Conexión fallida";
}
