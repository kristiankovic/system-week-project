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
    <title>Feria de logros y Pupuseada</title>
    <style>
        .nav-link {
            color: white;
        }

        .card img {
            height: 250px;
            object-fit: cover;
            object-position: center;
        }

        .card-hackaton {
            height: 350px;
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
                <li>
                    <a href="/mvc/public/bingo" class="nav-link <?= ($current == '/mvc/public/bingo' ? 'bg-secondary' : 'text-white'); ?>">
                        Bingo y torneo de videojuegos
                    </a>
                </li>
            </ul>

            <hr>

            <a href="#" class="btn btn-success">Iniciar sesión</a>
        </div>
        <!-- FIN DEL SIDEBAR -->

        <!-- SECCION DE CONTENIDO -->
        <div class="col-10 offset-2 p-3 overflow-auto vh-100">

            <div class="container">

                <h3 class="text-center badget bg-primary fs-3 rounded-3 p-2">Feria de logros de la Semana de Sistemas 2025.</h3>
                <hr class="mt-5">

                <p class="fs-5">El viernes 17 de octubre se llevaron a cabo los últimos eventos de la Semana de Sistemas 2025. El primero fue un Bingo
                    donde se hicieron presente la mayoría de estudiantes para poder participar.</p>

                <!-- SECCION DEL BINGO -->
                <div class="py-3">

                    <!-- SECCION DE CARDS -->
                    <div class="row">

                        <div class="col p-3">
                            <div class="card h-100 rounded-3">
                                <img src="/mvc/public/static/img/bingo1.jpg">
                                <div class="card-body">
                                    <p class="card-text">Preparando todo para dar inicio.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col p-3">
                            <div class="card h-100 rounded-3">
                                <img src="/mvc/public/static/img/bingo2.jpg">
                                <div class="card-body">
                                    <p class="card-text">Público presente en el evento.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col p-3">
                            <div class="card h-100 rounded-3">
                                <img src="/mvc/public/static/img/bingo3.jpg">
                                <div class="card-body">
                                    <p class="card-text">Ganadora de 2 premios en el Bingo.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- FIN DE LA SECCION DE CARDS -->

                </div>
                <!-- FIN DE LA SECCION DEL BINGO -->

                <!-- SECCION DEL TORNEO -->
                <hr class="mb-5">
                <h3 class="text-center badget bg-primary fs-3 rounded-3 p-2">Torneo de Videojuegos</h3>
                <hr class="mt-5">

                <section class="row">
                    <div class="col-12 col-sm-12 col-lg-12 col-xl-12 col-xxl-12">
                        <p class="fs-5">Tambien ese día se llevo a cabo un torneo de videjuegos entre los cuales estaban Mario Kart, Clash Royale
                            entre etros.
                        </p>
                        
                    </div>

                    <div class="py-4">

                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4 text-center">

                            <div class="col">
                                <div class="card shadow-sm">
                                    <img src="/mvc/public/static/img/" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card shadow-sm">
                                    <img src="/mvc/public/static/img/" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card shadow-sm">
                                    <img src="/mvc/public/static/img/" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>

                <!-- FIN DE LA SECCION DEL TORNEO -->
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>