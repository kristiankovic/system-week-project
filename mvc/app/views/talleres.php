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
    <title>Talleres</title>
    <style>
        .nav-link {
            color: white;

        }

        .section img {
            max-width: 100%;
            width: 100%;
            height: 400px;
            object-fit: cover;
            display: block;
        }

        .card-body-scroll {
            overflow: scroll;
        }
    </style>
</head>

<body data-bs-theme="dark">

    <div class="row m-0 p-0 vw-100 position-absolute top-0 start-0 end-0 bottom-0 ">

        <!-- SIDEBAR -->
        <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark col-2 position-fixed top-0 bottom-0 vh-100 bg-body-tertiary">

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

        <!-- SECCION DE TARJETAS -->
        <div class="col-10 offset-2 p-3 overflow-auto vh-100">

            <div class="container">

                <h3 class="text-center badget bg-primary fs-3 rounded-3 p-2 mb-4">Talleres que se impartieron en la Semana de Sistemas 2025</h3>
                <hr class="mt-5">

                <p class="fs-4">Se llevaron a cabo varios talleres, a los cuales solo pude entrar a 2.</p>

                <div class="card mb-3 border-0">
                    <div class="row g-0">
                        <div class="col-md-4 p-3">
                            <img src="/mvc/public/static/img/taller1.jpg" class="img-fluid rounded-start" alt="...">
                        </div>

                        <!-- SECCION DEL TALLER 1 -->
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Taller #1: Toma de decisiones estratégicas basadas en datos</h5>
                                <p class="card-text">En el entorno empresarial actual, la capacidad de tomar decisiones informadas y estratégicas marca
                                    la diferencia entre el éxito y el estancamiento. Este taller te sumergirá en el fascinante mundo del análisis de datos
                                    aplicado a la toma de decisiones gerenciales, educativas y de consultoría.</p>
                                <p>¿Cómo Ayudan los Datos en la Toma de Decisiones?</p>
                                <ul>
                                    <li><strong>Eliminan la Incertidumbre.</strong></li>
                                    <li><strong>Optimizan Recursos</strong></li>
                                    <li><strong>Fundamentan Decisiones Estratégicas</strong></li>
                                    <li><strong>Fomentan la Cultura de Mejora Continua</strong></li>
                                </ul>
                                <p>En la era digital, los datos son el nuevo petróleo, pero solo quienes saben refinarlos y aplicarlos estratégicamente
                                    obtienen verdadero valor. Este taller te dará las herramientas para convertir información en acción, números en estrategia,
                                    y análisis en resultados tangibles.</p>
                                <p class="card-text"><small class="text-body-secondary">Dirigido por: MSc. Enrique Cortez</small></p>
                            </div>
                        </div>
                        <!-- FIN DE LA SECCION DEL TALLER 1 -->

                    </div>
                </div>

                <!-- SECCION DE FEEDBACK DEL TALLER 1 -->
                <h3>Feedback sobre el taller #1...</h3>

                <section class="my-3">

                    <div class="row">

                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-6 p-2 section">
                            <img class="rounded-4" src="/mvc/public/static/img/taller1_1.png" alt="Visualizacion del taller de forma virtual">
                        </div>

                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-6 p-2 section">
                            <img class="rounded-4" src="/mvc/public/static/img/taller1-2.png" alt="Visualizacion del taller de forma virtual">
                        </div>
                    </div>

                </section>
                <!-- FIN DE LA SECCION DE FEEDBACK DEL TALLER 1 -->

                <hr class="mt-5">

                <!-- SECCION DEL TALLER 2 -->
                <div class="card mb-3 border-0">
                    <div class="row g-0">

                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Taller #2: Construyendo un CRUD en minutos con Laravel y Filament</h5>
                                <p class="card-text">En este taller se usaron tecnologías para el desarrollo web, mas especificamente
                                    para el frontend.</p>
                                <p>¿Por Qué Laravel y Filament Revolucionan el Desarrollo?</p>
                                <ul>
                                    <li><strong>Velocidad de Desarrollo.</strong></li>
                                    <li><strong>Código Elegante y Mantenible</strong></li>
                                    <li><strong>Ecosistema Completo</strong></li>
                                    <li><strong>Interfaces Profesionales Instantáneas</strong></li>
                                    <li><strong>Características Empresariales</strong></li>

                                </ul>
                                <p>En la era digital, los datos son el nuevo petróleo, pero solo quienes saben refinarlos y aplicarlos estratégicamente
                                    obtienen verdadero valor. Este taller te dará las herramientas para convertir información en acción, números en estrategia,
                                    y análisis en resultados tangibles.</p>
                                <p class="card-text"><small class="text-body-secondary">Dirigido por Ing. Gabriel Castillo</small></p>
                            </div>
                        </div>

                        <div class="col-md-4 p-3">
                            <img src="/mvc/public/static/img/taller2.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                    </div>
                </div>
                <!-- FIN DE LA SECCION DEL TALLER 2 -->

                <!-- SECCION DE FEEDBACK DEL TALLER 2 -->
                <h3>Feedback sobre el taller #2...</h3>

                <section class="my-3">

                    <div class="container">

                        <!-- SECCION DE CARDS -->
                        <div class="row">

                            <!-- PRIMERA COLUMNA -->
                            <!-- <div class="col-sm-12 col-md-12 col-lg-6 col-xl-4 col-xxl-4 p-2">
                                <div class="card shadow-sm">
                                    <img src="/mvc/public/static/img/taller2-evidencia.JPG">
                                    <div class="card-body">
                                        <p class="card-text">Visualización del taller de forma virtual.</p>
                                    </div>
                                </div>
                            </div> -->

                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 ">

                                <div class="card mb-3">
                                    <div class="row g-0">
                                        <div class="col-md-4 p-3">
                                            <img src="/mvc/public/static/img/taller2-evidencia.JPG" class="img-fluid rounded-start">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">Visualización del taller de forma virtual.</h5>
                                                <p class="card-text">Ya que no se pudo realizar como se esperaba, el evento del martes 14 de octubre se llevo a cabo de
                                                    manera virtual.
                                                </p>

                                                <p class="card-text">En el taller se hablo de la importancia de las diferentes tecnologías
                                                    que se utilizan para el desarrollo web, entre ellas Filament y Laravel.
                                                </p>
                                                <p class="card-text"><small class="text-body-secondary">Dirigido por Ing. Gabriel Castillo</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- FIN DE LA PRIMERA COLUMNA -->

                            <!-- SEGUNDA COLUMNA -->
                            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6 p-2">

                                <div class="card shadow-sm">
                                    <img src="/mvc/public/static/img/filament.png">
                                    <div class="card-body" style="height: auto">
                                        <p class="card-text"><strong class="text-primary">Filament</strong> es un framework de interfaz de usuario completo para
                                            Laravel que permite crear paneles de administración modernos de manera rápida y
                                            sencilla. Utiliza un conjunto de componentes "full-stack" para desarrollar interfaces
                                            intuitivas para gestionar datos, usuarios y flujos de trabajo, simplificando la creación
                                            de back offices sin necesidad de escribir gran cantidad de código de frontend</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FIN DE LA PRIMERA COLUMNA-->

                            <!-- TERCERA COLUMNA -->
                            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6 p-2">

                                <div class="card shadow-sm">
                                    <img src="/mvc/public/static/img/laravel.jpg" alt="Laravel Framework">
                                    <div class="card-body card-body-scroll" style="height: 300px;">
                                        <p class="card-text"><strong class="text-primary">Laravel</strong> es un popular framework de código abierto para desarrollar aplicaciones
                                            web en PHP que facilita la creación de aplicaciones de manera rápida y elegante. Utiliza la arquitectura
                                            Modelo-Vista-Controlador (MVC) y proporciona herramientas para tareas comunes como el enrutamiento, la
                                            validación, la autenticación, el almacenamiento en caché y el acceso a bases de datos a través de su ORM
                                            (Eloquent)

                                        <p><strong>Características principales: </strong></p>

                                        <ul>
                                            <li>PHP y código abierto: Está construido sobre PHP y es de código abierto, lo que significa que es
                                                gratuito y tiene una gran comunidad de desarrolladores.
                                            </li>

                                            <br>
                                            <li>
                                                Arquitectura MVC: Sigue el patrón de arquitectura Modelo-Vista-Controlador (MVC) para separar
                                                las responsabilidades y hacer el código más organizado.
                                            </li><br>

                                            <li>
                                                Simplifica el desarrollo: Ofrece herramientas y funciones integradas para simplificar tareas comunes,
                                                como la autenticación, la gestión de bases de datos (mediante migraciones y Eloquent) y el manejo de rutas.
                                            </li><br>

                                            <li>
                                                Motor de plantillas <strong>Blade</strong>: Incluye un potente motor de plantillas llamado Blade que permite crear
                                                vistas dinámicas de una manera sencilla y elegante.
                                            </li><br>

                                            <li>
                                                Flexibilidad: Permite crear aplicaciones complejas con un código limpio y moderno, y es lo suficientemente flexible
                                                para adaptarse a diferentes enfoques de desarrollo, como la creación de APIs.
                                            </li>
                                        </ul>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- FIN DE LA TERCERA COLUMNA -->

                        </div>
                    </div>
                </section>
                <!-- FIN DE LA SECCION DE FEEDBACK DEL TALLER 2 -->

            </div>
        </div>
    </div>
    <!-- FIN DEL SIDEBAR -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>