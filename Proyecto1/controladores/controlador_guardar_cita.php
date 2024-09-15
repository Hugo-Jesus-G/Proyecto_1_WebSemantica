<?php

include("../conexiones/conexion.php");

$conexion = conectar();

// Verifica si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario_id'])) {
    header("Location: ../pages/login.php");  // Redirige al login si el usuario no ha iniciado sesión
    exit();
}

$usuario_id = $_SESSION['usuario_id'];

if (isset($_POST['enviar-cita'])) {
    if (!empty($_POST['fecha']) && !empty($_POST['hora'])) {
        $fecha = $_POST['fecha'];
        $hora = $_POST['hora'];

        $consulta = "INSERT INTO citas (`id`,`usuario_id`, `fecha`, `hora`) VALUES (NULL,'$usuario_id', '$fecha', '$hora')";
        
        if (mysqli_query($conexion, $consulta)) {
            echo "<div class='alert alert-success'>Cita registrada con éxito</div>";
        } else {
            echo "<div class='alert alert-danger'>Error al registrar la cita: " . mysqli_error($conexion) . "</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>Todos los campos son obligatorios.</div>";
    }
}

mysqli_close($conexion);
?>
