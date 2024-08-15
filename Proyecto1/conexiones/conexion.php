<?php

function conectar(){


$usuario = "root";
$pass = "";
$host = "localhost";
$nombreBase = "login";
$conexion = mysqli_connect($host, $usuario, $pass,$nombreBase);
return $conexion;

}
?>