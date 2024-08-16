
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../styles/style.css">
</head>

<body id="login">
    <header>

    </header>
    <main>
        <div class="form-container">
            
            <div class="card p-4" style="width: 100%; max-width: 450px; height: 350px;">
                <h3 class="text-center mb-4">Registrate</h3>
                <form method="post">
                <?php include ("../controladores/controladorRegistro.php") ?>

              

                    <div class="mb-3">
                        <label for="username" class="form-label">Nombre de Usuario</label>
                        <input type="text" name="usuario" class="form-control entrada entrada" id="username" placeholder="Ingresa tu usuario">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" name="contraseña" class="form-control entrada" id="password" placeholder="Ingresa tu contraseña">
                    </div>
                    <div class="d-grid boton">
                        <button type="submit" name="enviar" class="btn btn-primary">Iniciar Sesión</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
