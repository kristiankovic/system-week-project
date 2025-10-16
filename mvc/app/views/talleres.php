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

        .section img{
            height: 400px;
            width: 630px;
        }
    </style>
</head>

<body data-bs-theme="dark">

    <div class=" row m-0 p-0 vw-100 position-absolute top-0 start-0 end-0 bottom-0">

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

        </div>
        <!-- FIN DEL SIDEBAR -->

        <!-- SECCION DE TARJETAS -->
        <div class="col-10 offset-2 p-3 overflow-auto vh-100">

            <h3 class="text-center badget bg-primary fs-3 rounded-3 p-2">Talleres que se impartieron en la Semana de Sistemas 2025</h3>

            <div class="py-4">

                <div class="container">

                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4 p-3">
                                <img src="/mvc/public/static/img/taller1.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
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
                        </div>
                    </div>

                    <h3>Feedback sobre el taller #1...</h3>

                    <section>
                        <div class="row section my-4">
                            <div class="col-6">
                                <img src="/mvc/public/static/img/taller1_1.png" alt="">
                            </div>
                            <div class="col-6">
                                <img src="/mvc/public/static/img/taller1-2.png" alt="">
                            </div>
                        </div>
                    </section>

                    <div class="card mb-3">
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
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>