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
    <style>
        .nav-link {
            color: white;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            padding: 20px 0;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 15px;
            aspect-ratio: 4/3;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .gallery-item:hover {
            transform: scale(1.05);
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .gallery-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(transparent, rgba(0, 0, 0, 0.8));
            padding: 20px;
            transform: translateY(100%);
            transition: transform 0.3s ease;
        }

        .gallery-item:hover .gallery-overlay {
            transform: translateY(0);
        }

        .carousel-item img {
            height: 600px;
            object-fit: cover;
            object-position: center;
        }

        .card img {
            height: 350px;
            object-fit: cover;
            object-position: center;
        }

        .card-hackaton {
            height: 450px;
        }
    </style>
</head>

<body data-bs-theme="dark">

    <div class=" row m-0 p-0 vw-100 position-absolute top-0 start-0 end-0 bottom-0">

        <!-- SIDEBAR -->
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
                    <a href="/mvc/public/" class="nav-link <?= ($current == '/mvc/public/' ? 'bg-secondary' : 'text-white'); ?>">
                        Inicio
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/mvc/public/inaguracion" class="nav-link <?= ($current == '/mvc/public/inaguracion' ? 'bg-secondary' : 'text-white'); ?>">
                        Inaguración, Ponencias y Hackaton
                    </a>
                </li>

                <li>
                    <a href="/mvc/public/talleres" class="nav-link <?= ($current == '/mvc/public/talleres' ? 'bg-secondary' : 'text-white'); ?>">
                        Talleres
                    </a>
                </li>

                <li>
                    <a href="/mvc/public/torneo" class="nav-link <?= ($current == '/mvc/public/torneo' ? 'bg-secondary' : 'text-white'); ?>">
                        Torneo de Fútbol
                    </a>
                </li>
                <li>
                    <a href="/mvc/public/feria-logros" class="nav-link <?= ($current == '/mvc/public/feria-logros' ? 'bg-secondary' : 'text-white'); ?>">
                        Feria de logros y Pupuseada
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

                <h3 class="text-center badget bg-primary fs-3 rounded-3 p-2">Inicio de la Semana de Sistemas 2025</h3>
                <hr class="my-5">

                <div class="container">
                    <div class="pb-3">
                        <p class="fs-4">El lunes 13 de octubre, dio inicio la Semana de Sistemas el acto se realizo en el Auditorio 1.</p>
                    </div>

                    <section class="mb-5">
                        <div class="gallery-grid">
                            <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#imageModal">
                                <img src="/mvc/public/static/img/IMG_6602.JPG" alt="Imagen 1">
                                <div class="gallery-overlay">
                                    <h5>Momentos antes de iniciar...</h5>
                                    <p class="small">Preparativos finales</p>
                                </div>
                            </div>
                            <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#imageModal">
                                <img src="/mvc/public/static/img/IMG_6747.JPG" alt="Imagen 2">
                                <div class="gallery-overlay">
                                    <h5>Ceremonia de apertura</h5>
                                    <p class="small">Inicio oficial del evento</p>
                                </div>
                            </div>
                            <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#imageModal">
                                <img src="/mvc/public/static/img/IMG_6746.JPG" alt="Imagen 3">
                                <div class="gallery-overlay">
                                    <h5>Asistentes al evento</h5>
                                    <p class="small">Audiencia participante</p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <!-- SECCION DE PONENCIAS -->
                <hr class="my-5">
                <h3 class="text-center badget bg-primary fs-3 rounded-3 p-2">Ponencias...</h3>
                <hr class="my-5">

                <section class="d-flex flex-row justify-content-evenly mb-5" style="padding-bottom: 20px;">

                    <div class="card" style="width: 35rem;">
                        <img style="height: 400px" src="/mvc/public/static/img/IMG_6748.JPG" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text fs-5">La primera ponencia estuvo a cargo de Luis Contreras, con el tema “El ABC de Bitcoin”,
                                donde abordó los fundamentos de las criptomonedas, su funcionamiento y el impacto de la tecnología blockchain
                                en la economía digital actual. Su exposición permitió comprender los retos y oportunidades que ofrece esta
                                nueva forma de intercambio financiero.</p>
                        </div>
                    </div>

                    <div class="card" style="width: 35rem;">
                        <img style="height: 400px" src="/mvc/public/static/img/IMG_6745.JPG" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text fs-5">Posteriormente, Rodrigo Pineda presentó la conferencia
                                “Inteligencia Artificial Generativa: de la idea a la acción”, en la que
                                exploró cómo los modelos de IA pueden transformar la creatividad humana,
                                automatizar procesos y generar soluciones innovadoras para distintos sectores.
                                Su ponencia inspiró a los asistentes a adentrarse en el mundo de la inteligencia
                                artificial con una visión práctica y responsable.</p>
                        </div>
                    </div>
                </section>
                <!-- FIN DE LA SECCION DE PONENCIAS -->

                <hr class="my-5">
                <h3 class="text-center badget bg-primary fs-3 rounded-3 p-2">Hackaton</h3>
                <hr class="my-5">

                <div class="container-fluid">
                    <p class="fs-4 my-3">En el día de la inaguración tambien se llevo a cabo un <strong class="text-success">Hackaton</strong>, donde participaron estudiantes para demostrar
                        sus habilidades con el lenguaje de C#
                    </p>
                </div>

                <!-- SECCION DEL HACKATON -->
                <div class="py-5">
                    <div class="container">

                        <!-- SECCION DE CARDS -->
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
                            <div class="col">
                                <div class="card card-hackaton shadow-sm">
                                    <img src="/mvc/public/static/img/hackaton.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">Preparación preliminar para posteriormente dar inicio al evento.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card card-hackaton shadow-sm">
                                    <img src="/mvc/public/static/img/hackaton2.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">Estudiantes que participaron en la actividad listos para mostrar sus actividades.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card card-hackaton shadow-sm">
                                    <img src="/mvc/public/static/img/hackaton3.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">Desarrollo de la actividad y puesta en marcha de todos los ejercicios.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card card-hackaton shadow-sm">
                                    <img src="/mvc/public/static/img/hackaton4.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">Estudiantes orgullosos de su trabajo en el desarrollo del evento.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card card-hackaton shadow-sm">
                                    <img src="/mvc/public/static/img/hackaton5.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">MI TIGEREEE DANDO CATEDRAAAA LOCO FAACK 🧑‍🍳.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card card-hackaton shadow-sm">
                                    <img src="/mvc/public/static/img/hackaton6.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">🧑‍🍳🧑‍🍳COOKING COOKING COOKING THE GOOOAT 🐐🐐🐐.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- FIN DE LA SECCION DEL HACKATON -->
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>