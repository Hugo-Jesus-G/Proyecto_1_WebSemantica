<?php

session_start();

?>



<!DOCTYPE html>

<html lang="es  ">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Tursmo, Cultura, religion, San Andres cholula"/>
    <meta name="author" content="Hugo GC Y Marlem MC"/>
    <meta name="description"
        content="Turismo y cultura de San Andres cholulas, conoce los barrios y visitalos por medio de  nuestras citas" />

    <link rel="shortcut icon" href="../assets/icono.webp" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- iconos -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Karla:ital,wght@0,200..800;1,200..800&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Overpass:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Playwrite+FR+Moderne&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Karla:ital,wght@0,200..800;1,200..800&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Overpass:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Playwrite+FR+Moderne&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="../styles/style.css">
    <title>San Andres Cholula</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg  fixed-top" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand roboto-mono" href="#"><img src="../assets/Huma.svg" height="55px" alt="huma"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active roboto-mono" aria-current="page" href="#">Reserva</a>
                        </li>
                        <li class="nav-item roboto-mono">
                            <a class="nav-link" href="#">Barrios</a>
                        </li>
                        <li class="nav-item roboto-mono">
                            <a class="nav-link" href="#">Ubicación</a>
                        </li>
                        <li class="nav-item roboto-mono">
                            <a class="nav-link disabled" aria-disabled="true">Contactanos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="intro py-5 text-center container-fluid">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light text-white playwrite-fr-moderne">San Andres Cholula</h1>

                    <a href="https://maps.app.goo.gl/ZgG5LCo8maFiXkif7" target="_blank"
                        class="btn btn-primary my-3">Ubicación</a>
                    <h3 class="fw-light text-white playwrite-fr-moderne">!Ven y conoce!</h3>

                </div>
            </div>
        </section>

        <div class="album py-5 bg-body-tertiary">
            <div class="container">
                <h3 class="playwrite-fr-moderne">Los barrios de San Andres Cholula</h3>

                <p class="lead mb-4 mt-4 roboto-mono"> Cholula es una ciudad histórica en Puebla, México, conocida por
                    su Gran Pirámide, la más grande en volumen del mundo, coronada por la Iglesia de Nuestra Señora
                    de los Remedios. Combina su rica herencia prehispánica con la arquitectura colonial, y es un
                    centro cultural vibrante con vistas a los volcanes Popocatépetl e Iztaccíhuatl.
                    Cholula es una de las ciudades más fascinantes de México. Desde sus orígenes ha sido un importante
                    satuario</p>
                <p>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 roboto-mono">
                    <div class="col">
                        <div class="card shadow-sm h-100 overflow-hidden rounded-4 shadow-lg">
                            <img src="../assets/SanJuan.jpg" alt="">

                            <div class="card-body">
                                <p class="card-text">San Juan Aquiahuac es uno de los barrios tradicionales de San
                                    Andrés Cholula, Puebla. Este barrio tiene una rica historia y es conocido por sus
                                    festividades religiosas, especialmente en honor a San Juan Bautista, su santo
                                    patrono. Las celebraciones suelen incluir procesiones, misas, danzas tradicionales,
                                    y eventos culturales que reúnen a la comunidad.</p>
                                <div class="d-flex justify-content-between align-items-center">

                                    <small class="text-body-secondary">Barrio de San Juan Aquiahuac</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm h-100 overflow-hidden rounded-4 shadow-lg">
                            <img src="../assets/SanMiguel.jpg" alt="">

                            <div class="card-body">
                                <p class="card-text">Este es uno de los barrios más antiguos y tradicionales de San
                                    Andrés Cholula. El nombre "Xochimehuacan" proviene del náhuatl y se refiere a un
                                    lugar donde abundan las flores. El barrio es conocido por su devoción a San Miguel
                                    Arcángel, a quien celebran con festividades llenas de tradiciones indígenas y
                                    religiosas.</p>
                                <div class="d-flex justify-content-between align-items-center">

                                    <small class="text-body-secondary">Barrio de San Miguel Xochimehuacan</small>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col">
                        <div class="card shadow-sm h-100 overflow-hidden rounded-4 shadow-lg">
                            <img src="../assets/SantaMaria.jpg" alt="">

                            <div class="card-body">
                                <p class="card-text">Este barrio lleva el nombre de la Virgen María, en honor a quien
                                    se celebran importantes festividades religiosas. "Cuaco" es un término que puede
                                    referirse a la tierra de cultivo, reflejando la historia agrícola de la región.
                                    Santa María Cuaco conserva muchas de sus costumbres tradicionales.</p>
                                <div class="d-flex justify-content-between align-items-center">

                                    <small class="text-body-secondary">Barrio de Santa María Cuaco</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm h-100 overflow-hidden rounded-4 shadow-lg">
                            <img src="../assets/SanPedro.jpeg" alt="">

                            <div class="card-body">
                                <p class="card-text">San Pedro Colomochco es un barrio con una profunda herencia
                                    indígena. El nombre "Colomochco" tiene raíces náhuatl, y la comunidad es conocida
                                    por su devoción a San Pedro Apóstol. Este barrio mantiene vivas muchas tradiciones
                                    prehispánicas, que se mezclan con las prácticas religiosas católicas.</p>
                                <div class="d-flex justify-content-between align-items-center">

                                    <small class="text-body-secondary">Barrio de San Pedro Colomochco</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm h-100 overflow-hidden rounded-4 shadow-lg">
                            <img src="../assets/SantoNiño.jpg" alt="">

                            <div class="card-body">
                                <p class="card-text">Santo Niño Macuila es un barrio que honra al Santo Niño como su
                                    patrono. Este barrio es conocido por sus celebraciones religiosas y su ambiente
                                    familiar. Las fiestas patronales suelen incluir danzas tradicionales, música, y una
                                    comunidad unida que participa activamente en las festividades.</p>
                                <div class="d-flex justify-content-between align-items-center">

                                    <small class="text-body-secondary">Barrio de Santo Niño Macuila</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm h-100 overflow-hidden rounded-4 shadow-lg">
                            <img src="../assets/Santisima.jpeg" alt="">

                            <div class="card-body">
                                <p class="card-text">El barrio de La Santísima está dedicado a la devoción de la
                                    Santísima Virgen María. Es un barrio con profundas raíces religiosas, y sus
                                    festividades suelen ser de las más significativas en la comunidad. La devoción
                                    mariana es un aspecto clave en la vida de los habitantes de este barrio.</p>
                                <div class="d-flex justify-content-between align-items-center">

                                    <small class="text-body-secondary">Barrio La Santisima</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm h-100 overflow-hidden rounded-4 shadow-lg">
                            <img src="../assets/Santiago.jpg" alt="">

                            <div class="card-body">
                                <p class="card-text">Santiago Xicotenco es un barrio que lleva el nombre de Santiago
                                    Apóstol, su santo patrono. "Xicotenco" proviene del náhuatl y significa "en el
                                    rincón de los ocotes". Este barrio combina su herencia prehispánica con la
                                    influencia colonial, celebrando fiestas llenas de tradición, donde las danzas y
                                    rituales ancestrales tienen un papel importante.</p>
                                <div class="d-flex justify-content-between align-items-center">

                                    <small class="text-body-secondary">Barrio Santiago Xicotenco</small>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <h3 class="playwrite-fr-moderne">Ubicación</h3>
            <div class="text-center mt-3 mb-3">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60345.88543580006!2d-98.33596052092531!3d19.036554382644976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfc7c5f1be4ca9%3A0xf2c359adbc992fec!2sSan%20Andr%C3%A9s%20Cholula%2C%20Pue.!5e0!3m2!1ses-419!2smx!4v1723774949094!5m2!1ses-419!2smx"
                    width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>

<<<<<<< HEAD:Proyecto1/pages/pagina.html
        <div class="container mb-5">
            <h3 class="playwrite-fr-moderne mb-3 mt-3">¡Agenda ahora!</h3>

            <form id="agendaForm">
                <label class="agenda mt-3 mb-3 roboto-mono">
                    Selecciona tu día de viaje:
                    <input type="datetime-local" id="agenda" name="agenda">
                    <input type="submit" value="Enviar">
                </label>
            </form>

=======
        <div class="container">
            <h3 class="playwrite-fr-moderne mb-3">¡Agenda ahora!</h3>


            <?php

            echo "Usuario ID: " . $_SESSION['usuario_id'] . "<br>";

            include("../controladores/controlador_guardar_cita.php");
            $horas_disponibles = [
                "09:00",
                "10:00",
                "11:00",
                "12:00",
                "13:00",
                "14:00",
                "15:00",
                "16:00",
                "17:00",
                "18:00"
            ];
            ?>


            <form id="agendaForm" method="post">

                <label for="fecha">Fecha de la cita:</label>
                <input type="date" id="fecha" name="fecha" required>

                <label for="hora">Hora de la cita:</label>
                <select id="hora" name="hora" required>
                    <?php
                    foreach ($horas_disponibles as $hora) {
                        echo "<option value=\"$hora\">$hora</option>";
                    }
                    ?>
                </select><br>


                <button type="submit" name="enviar-cita">Registrar Cita</button>
            </form>

            <a href="mostrarCitas.php">Mostrar Citas</a>
            <a href="login.php">Salir</a>


>>>>>>> 8fe725eaa8d377be61bfc99fd2ddb1ff3daab73b:Proyecto1/pages/pagina.php

        </div>


    </main>

    <footer id="contacto">
        
        <h4 class="text-center text-body-secondary mt-5 mb-3">"San Andrés Cholula es un tesoro cultural lleno de historia y
            vida local."</h4>
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">

            <li class="nav-item">
                <a href="https://github.com/Marleemm" target="_blank" class="nav-link px-2 text-body-secondary">
                    <i class="bi bi-github fs-2"></i>
                </a>
            </li>

            <li class="nav-item">
                <a href="mailto:marlemmartinezc@gmail.com" target="_blank"
                    class="nav-link px-2 text-body-secondary fs-2">
                    <i class="bi bi-envelope"></i>
                </a>
            </li>


            <li class="nav-item">
                <a href="https://github.com/Hugo-Jesus-G" target="_blank" class="nav-link px-2 text-body-secondary">
                    <i class="bi bi-github fs-2 text-white"></i>
                </a>
            </li>

            <li class="nav-item">
                <a href="mailto:hugogcc19@gmail.com" target="_blank" class="nav-link px-2 text-body-secondary fs-2">
                    <i class="bi bi-envelope-open text-white"></i>
                </a>
            </li>

            <!-- <li class="nav-item">
                <a href="https://www.linkedin.com/in/marlem-mart%C3%ADnez-castillo-b7a8792aa/" target="_blank"
                    class="nav-link px-2 text-body-secondary">
                    <i class="bi bi-linkedin fs-2"></i>
                </a>
            </li> -->




        </ul>

        <p class="text-center text-body-secondary ">©2024, HuMa</p>

    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<<<<<<< HEAD:Proyecto1/pages/pagina.html
    <script>
        document.getElementById("agendaForm").addEventListener("submit", function (event) {
            event.preventDefault(); // Prevenir el envío automático del formulario

            // Obtener la hora seleccionada
            const horaSeleccionada = document.getElementById("agenda").value;
=======
>>>>>>> 8fe725eaa8d377be61bfc99fd2ddb1ff3daab73b:Proyecto1/pages/pagina.php

</body>

</html>