<?php
session_start();

include("../conexiones/conexion.php");

$conexion = conectar();

// Verifica si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario_id'])) {
    header("Location: ../pages/index.php");  // Redirige al login si el usuario no ha iniciado sesión
    exit();
}

// Obtener el usuario_id desde la sesión
$usuario_id = $_SESSION['usuario_id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['fecha']) && !empty($_POST['hora'])) {
        $fecha = $_POST['fecha'];
        $hora = $_POST['hora'];

        // Consulta para insertar la cita en la base de datos
        $consulta = "INSERT INTO citas (usuario_id, fecha, hora) VALUES ('$usuario_id', '$fecha', '$hora')";
        
        if (mysqli_query($conexion, $consulta)) {
            echo "<div class='alert alert-success'>Cita registrada con éxito</div>";
            // Redirige a otra página o muestra una confirmación
        } else {
            echo "<div class='alert alert-danger'>Error al registrar la cita: " . mysqli_error($conexion) . "</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>Todos los campos son obligatorios.</div>";
    }
}

mysqli_close($conexion);
?>
