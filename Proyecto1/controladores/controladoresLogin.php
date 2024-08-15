<?php

// session_start();

include("../conexiones/conexion.php");

$conexion = conectar();


if (isset($_POST['enviar'])) {

    if ($_POST['usuario'] !==  "" && $_POST['contraseña'] !== "") {


        $nombre = $_POST['usuario'];
        $pass = $_POST['contraseña'];

        $consulta = "INSERT INTO usuario(nombre,contraseña) VALUES ('$nombre', '$pass')";



        $existencia = mysqli_query($conexion, "SELECT * FROM usuario WHERE nombre='$nombre' and contraseña='$pass'");

        if (mysqli_num_rows($existencia) > 0) {
            $_SESSION['nombre'] = $nombre;
            $_SESSION['pass'] = $pass;
          

            header("location: ../pages/pagina.html");
        } else {

            echo ("<div id='nombreR' class=' alert alert-danger p-1 mb-0 text-center' role='alert' >EL usuario No existe</div> <br>");
        }
    } else {

        echo ("<div id='nombreR' class=' alert alert-danger p-1 mb-0 text-center' role='alert' >Debes llenar los campos/div> <br>");
    }
}

mysqli_close($conexion);