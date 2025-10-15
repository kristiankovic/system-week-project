<?php
// filepath: c:\Users\USER\Desktop\tarea\system-week-project\mvc\app\views\inaguracion.php
$current = $_SERVER['REQUEST_URI'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Inaguracion</title>
</head>

<body data-bs-theme="dark">

    <div class=" row m-0 p-0 vw-100 position-absolute top-0 start-0 end-0 bottom-0 ">

        <!-- SIDEBAR -->
        <div class=" row m-0 p-0 vw-100 position-absolute top-0 start-0 end-0 bottom-0 ">

            <div class=" d-flex flex-column flex-shrink-0 p-3 text-white bg-dark col-2 position-fixed top-0 bottom-0 vh-100 bg-body-tertiary">

                <a href="/mvc/public" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <div class="fs-4 mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                        </svg>
                        Menú
                    </div>
                </a>

                <hr>
                <ul class="menu nav nav-pills flex-column mb-auto">

                    <li class="nav-item">
                        <a href="/mvc/public/" class="nav-link <?= ($current == '/mvc/public/' ? 'active' : 'text-white'); ?>">
                            Inicio
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/mvc/public/inaguracion" class="nav-link <?= ($current == '/mvc/public/inaguracion' ? 'active' : 'text-white'); ?>">
                            Inaguración y Ponencias
                        </a>
                    </li>

                    <li>
                        <a href="/mvc/public/talleres" class="nav-link <?= ($current == '/mvc/public/talleres' ? 'active' : 'text-white'); ?>">
                            Talleres y Hackaton
                        </a>
                    </li>

                    <li>
                        <a href="/mvc/public/torneo" class="nav-link <?= ($current == '/mvc/public/torneo' ? 'active' : 'text-white'); ?>">
                            Torneo de Fútbol
                        </a>
                    </li>
                    <li>
                        <a href="/mvc/public/pupuseada" class="nav-link <?= ($current == '/mvc/public/pupuseada' ? 'active' : 'text-white'); ?>">
                            Pupuseada
                        </a>
                    </li>
                </ul>

                <hr>

                <a href="#" class="btn btn-success">Iniciar sesión</a>
            </div>
            <!-- FIN DEL SIDEBAR -->

            <!-- SECCION DE CONTENIDO -->

            <div class="col-10 offset-2 p-3 overflow-auto vh-100">

                <div class="container-fluid">

                    <div class="pb-3">
                        <h3 class="text-center bg-white text-black rounded-4 p-2">Inaguración de la Semana de Sistemas 2025</h3>

                        <p class="fs-4 pt-3">El lunes 13 de octubre, dio inicio la Semana de Sistemas el acto se realizo en el Auditorio 1.</p>
                    </div>

                    <div id="carouselExampleCaptions" class="carousel slide col-sm-12">

                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>

                        <div class="carousel-inner rounded-4">
                            <div class="carousel-item active">
                                <img style="height: 700px;" src="/mvc/public/static/img/IMG_6602.JPG" class="d-block w-100" alt="">
                                <div class="carousel-caption d-none d-md-block text-white">
                                    <h5><strong>Momentos antes de iniciar...</strong></h5>
                                    <p>Preparativos finales antes de dar inicio.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img style="height: 700px;" src="/mvc/public/static/img/IMG_6747.JPG" class="d-block w-100" alt="...">

                            </div>
                            <div class="carousel-item">
                                <img style="height: 700px;" src="/mvc/public/static/img/IMG_6746.JPG" class="d-block w-100" alt="...">

                            </div>
                        </div>
                        <button class="carousel-control-prev text-white" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior</span>
                        </button>
                        <button class="carousel-control-next text-white" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Siguiente</span>
                        </button>
                    </div>

                    <h3 class="p-3">Ponencias...</h3>

                    <section class="d-flex flex-row justify-content-evenly">

                        <div class="card" style="width: 35rem;">
                            <img style="height: 400px" src="/mvc/public/static/img/IMG_6748.JPG" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">La primera ponencia estuvo a cargo de Luis Contreras, con el tema “El ABC de Bitcoin”,
                                    donde abordó los fundamentos de las criptomonedas, su funcionamiento y el impacto de la tecnología blockchain
                                    en la economía digital actual. Su exposición permitió comprender los retos y oportunidades que ofrece esta
                                    nueva forma de intercambio financiero.</p>
                            </div>
                        </div>

                        <div class="card" style="width: 35rem;">
                            <img style="height: 400px" src="/mvc/public/static/img/IMG_6745.JPG" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Posteriormente, Rodrigo Pineda presentó la conferencia
                                    “Inteligencia Artificial Generativa: de la idea a la acción”, en la que
                                    exploró cómo los modelos de IA pueden transformar la creatividad humana,
                                    automatizar procesos y generar soluciones innovadoras para distintos sectores.
                                    Su ponencia inspiró a los asistentes a adentrarse en el mundo de la inteligencia
                                    artificial con una visión práctica y responsable.</p>
                            </div>
                        </div>
                    </section>

                </div>

                <p></p>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>