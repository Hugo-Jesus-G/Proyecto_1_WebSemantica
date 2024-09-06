<?php
session_start();

include("../conexiones/conexion.php");

$conexion = conectar();

if (isset($_POST['enviar'])) {
    if (!empty($_POST['usuario']) && !empty($_POST['contraseña'])) {
        $nombre = $_POST['usuario'];
        $pass = $_POST['contraseña'];

        // Consulta para verificar la existencia del usuario
        $consulta = "SELECT * FROM usuarios WHERE nombre='$nombre' AND contraseña='$pass'";
        $resultado = mysqli_query($conexion, $consulta);

        if (mysqli_num_rows($resultado) > 0) {
            // Obtener el usuario desde el resultado
            $usuario = mysqli_fetch_assoc($resultado);

            // Almacenar el ID del usuario en la sesión
            $_SESSION['usuario_id'] = $usuario['id'];  // Suponiendo que la columna 'id' es el ID del usuario
            $_SESSION['nombre'] = $usuario['nombre'];  // Suponiendo que la columna 'id' es el ID del usuario

            // Redirigir al usuario a la página deseada
            header("Location: ../pages/pagina.php");
            exit();
        } else {
            echo "<div class='alert alert-danger p-1 mb-0 text-center' role='alert'>El usuario no existe o la contraseña es incorrecta</div><br>";
        }
    } else {
        echo "<div class='alert alert-danger p-1 mb-0 text-center' role='alert'>Debes llenar los campos</div><br>";
    }
}

mysqli_close($conexion);
