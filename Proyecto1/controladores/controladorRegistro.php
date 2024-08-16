<?php

session_start();

include("../conexiones/conexion.php");

$conexion = conectar();


if (isset($_POST['enviar'])) {





    if ($_POST['nombre'] !== "" && $_POST['contraseña'] !== "") {


        $nombre = $_POST['usuario'];
     
        $pass = $_POST['contraseña'];

        $consulta = "INSERT INTO usuario(nombre, contraseña) VALUES ('$nombre', '$pass')";


        $nombreValidar = false;

        $verificar_nombre = mysqli_query($conexion, "SELECT * FROM usuario WHERE nombre='$nombre'");

        if (mysqli_num_rows($verificar_nombre) > 0) {




            echo ("<div id='nombreR' class=' alert alert-danger p-1 mb-0 text-center' role='alert' >EL nombre de usuario ya ha sido registrado</div> <br>");
        } else {

            $nombreValidar = true;
        }
       


        if ($nombreValidar) {



            $respuesta = mysqli_query($conexion, $consulta);

            if ($respuesta) {


                echo ("<div id='exito' class='alert alert-success text-center mb-0' role='alert'>Registrado correctamente</div> ");
            } else {


                echo ("<br><div class='alert alert-danger text-center' role='alert'>Ocurrido un Error</div> <br>");
            }
        }
    } else {

        echo ("<br><div class='alert alert-danger p-1 text-center my-0 d-none'>Debes llenar todos los campos </div> <br>");
    }
}
mysqli_close($conexion);