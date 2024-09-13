<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citas</title>
    <link rel="stylesheet" href="../styles/estilosTabla.css">

</head>

<body>
    <h1> Citas </h1>
    <table >
        <thead>
            <tr>

                <th>Fecha</th>
                <th>Hora</th>
                <th>TIempo Restante</th>

            </tr>
        </thead>
        <tbody>
            <?php

            include("../conexiones/conexion.php");
            session_start();

            $conexion = conectar();

            echo  $_SESSION['nombre'];
            $consulta = "SELECT * FROM citas WHERE usuario_id = " . $_SESSION['usuario_id'];
            $resultado = mysqli_query($conexion, $consulta);
            // Asegúrate de establecer la zona horaria de tu sistema
            date_default_timezone_set('America/Mexico_City'); // Ajusta esto según tu zona horaria

            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo "<tr>";
                echo "<td>" . $fila['fecha'] . "</td>";
                echo "<td>" . $fila['hora'] . "</td>";

                // Concatenar la fecha y hora de la cita
                $fechaHoraCita = $fila['fecha'] . ' ' . $fila['hora'];

                // Convertir la fecha y hora de la cita al formato DateTime, usando la zona horaria establecida
                $fechaHoraCita = DateTime::createFromFormat('Y-m-d H:i:s', $fechaHoraCita);

                // Obtener la fecha y hora actual en la misma zona horaria
                $fechaHoraActual = new DateTime('now', new DateTimeZone(date_default_timezone_get()));

                // Calcular la diferencia de tiempo entre la cita y la fecha actual
                if ($fechaHoraCita !== false) {
                    $intervalo = $fechaHoraActual->diff($fechaHoraCita);

                    // Mostrar tiempo restante en formato "Xh Ym"
                    if ($fechaHoraCita > $fechaHoraActual) {
                        echo "<td>" . $intervalo->format('%h') . "h " . $intervalo->format('%i') . "m</td>";
                    } else {
                        echo "<td>La cita ha pasado</td>";
                    }
                } else {
                    echo "<td>Error en la fecha/hora</td>";
                }

                echo "</tr>";
            }

            ?>
        </tbody>
    </table>
    <a href="pagina.php" class="btn-volver">Volver</a>
</body>

</html>