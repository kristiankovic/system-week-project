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
    <title>Inicio</title>
    <style>
        .nav-link {
            color: white;
        }
        
        .card-img img{
            
        }
    </style>
</head>

<body data-bs-theme="dark">

    <div class="row m-0 p-0 vw-100 position-absolute top-0 start-0 end-0 bottom-0">

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
            </ul>

            <hr>

            <a href="#" class="btn btn-success">Iniciar sesión</a>
        </div>
        <!-- FIN DEL SIDEBAR -->

        <!-- SECCION DE INFORMACION PERSONAL -->
        <div class="col-10 offset-2 p-3 overflow-auto vh-100">

            <div class="container">

                <h3 class="text-center badget bg-primary fs-3 rounded-3 p-2">Bienvenido al Blog personal sobre la <strong>Semana de Sistemas 2025</strong></h3>
                <hr class="mt-5">

                <h2 class="py-2">Sobre mi...</h2>

                <div class="row col-sm-12">

                    <div class="card">

                        <div class="row">
                            <div class="col-lg-5 col-xl-3">
                                <img class="py-2" style="width: 350px; height: auto;" src="/mvc/public/static/img/perfil.JPG" alt="...">
                            </div>

                            <div class="col-lg-7 col-xl-9">

                                <div class="pt-3" style="padding-left: 8rem;">

                                    <h5 class="text-success">Información personal</h5>
                                    <p class="">¡Hola!</p>
                                    <p class="">Mi nombre es Cristian Alexis Ventura Ventura, actualmente estoy cursando el segundo ciclo del tercer año de Universidad.</p>
                                    <p class="">Este trabajo esta orientado a mostrar todas las actividades de la Semana de Sistemas 2025, desde su inaguración hasta su cierre,
                                        para ello se asistio a todas las actividades y se documentaron con fotos y videos, los cuales se encuentran en este blog personal.</p>
                                    <p class="">Espero que la información y todo lo presentado en este blog sirva de guía para poder hacer un
                                        acercamiento a lo que fue la Semana de Sistemas 2025.</p>
                                    </p>

                                    <h3><strong>Medios de contacto:</strong></h3>

                                    <div class="row pt-4">

                                        <div class="col-lg-6 col-sm-6 col-lg-12 col-xl-3 col-xxl-3">
                                            <div class="pt-3 d-flex flex-column align-items-center ">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-reddit" viewBox="0 0 16 16">
                                                    <path d="M6.167 8a.83.83 0 0 0-.83.83c0 .459.372.84.83.831a.831.831 0 0 0 0-1.661m1.843 3.647c.315 0 1.403-.038 1.976-.611a.23.23 0 0 0 0-.306.213.213 0 0 0-.306 0c-.353.363-1.126.487-1.67.487-.545 0-1.308-.124-1.671-.487a.213.213 0 0 0-.306 0 .213.213 0 0 0 0 .306c.564.563 1.652.61 1.977.61zm.992-2.807c0 .458.373.83.831.83s.83-.381.83-.83a.831.831 0 0 0-1.66 0z" />
                                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.828-1.165c-.315 0-.602.124-.812.325-.801-.573-1.9-.945-3.121-.993l.534-2.501 1.738.372a.83.83 0 1 0 .83-.869.83.83 0 0 0-.744.468l-1.938-.41a.2.2 0 0 0-.153.028.2.2 0 0 0-.086.134l-.592 2.788c-1.24.038-2.358.41-3.17.992-.21-.2-.496-.324-.81-.324a1.163 1.163 0 0 0-.478 2.224q-.03.17-.029.353c0 1.795 2.091 3.256 4.669 3.256s4.668-1.451 4.668-3.256c0-.114-.01-.238-.029-.353.401-.181.688-.592.688-1.069 0-.65-.525-1.165-1.165-1.165" />
                                                </svg>
                                                <a class="pt-2 text-warning" href="https://www.reddit.com/user/insolennte/" target="_blank">Reddit</a>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-sm-6 col-lg-12 col-xl-3 col-xxl-3">
                                            <div class="pt-3 d-flex flex-column align-items-center ">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-envelope-at-fill" viewBox="0 0 16 16">
                                                    <path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2zm-2 9.8V4.698l5.803 3.546zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.5 4.5 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586zM16 9.671V4.697l-5.803 3.546.338.208A4.5 4.5 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671" />
                                                    <path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791" />
                                                </svg>
                                                <p class="pt-2">vv23011@ues.edu.sv</a>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-sm-6 col-lg-12 col-xl-3 col-xxl-3">
                                            <div class="pt-3 d-flex flex-column align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                                    <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8" />
                                                </svg>
                                                <a class="pt-2 text-secondary" href="https://github.com/kristiankovic?tab=repositories" target="_blank" class="">Github</a>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-sm-6 col-lg-12 col-xl-3 col-xxl-3">
                                            <div class="pt-3 d-flex flex-column align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                                                </svg>
                                                <a href="#" target="_blank" class=""><span class="badge badge-danger">Facebook</span></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- SECCION SOBRE LAS TECNOLOGIAS USADAS -->
                <hr class="my-5">
                <h3 class="text-center badget bg-primary fs-3 rounded-3 p-2">Tecnologías usadas para la realización de este blog</h3>
                <hr class="my-5">

                <!-- TARJETAS -->
                <div class="row">

                    <div class="col-lg-4 col-sm-12">
                        <div class="card mb-3 mt-3">
                            <img style="height: 300px; width: auto" src="/mvc/public/static/img/docker.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Docker</h5>
                                <p class="card-text">Docker es una plataforma de código abierto que permite a los desarrolladores
                                    crear, empaquetar y ejecutar aplicaciones de forma portable en contenedores. Los contenedores
                                    agrupan el código de una aplicación con todas sus dependencias (bibliotecas, herramientas, etc.)
                                    en una unidad estandarizada, lo que garantiza que la aplicación se ejecute de manera consistente
                                    en cualquier entorno. Este enfoque facilita la implementación rápida y escalable de aplicaciones,
                                    tanto en la nube como localmente. </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-12">
                        <div class="card mb-3 mt-3">
                            <img style="height: 300px; width: auto" src="/mvc/public/static/img/php.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">PHP</h5>
                                <p class="card-text">PHP es un lenguaje de programación de código abierto para el lado del servidor
                                    que se usa principalmente para crear sitios web y aplicaciones dinámicas. Su código se integra
                                    con HTML, se ejecuta en el servidor antes de enviar la página al navegador y permite interactuar
                                    con bases de datos, procesar formularios y generar contenido que cambia según el usuario. Es ampliamente
                                    utilizado, siendo la base de plataformas como WordPress, y destaca por su facilidad para principiantes y
                                    su potencia para profesionales. </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-12">
                        <div class="card mb-3 mt-3">
                            <img style="height: 300px; width: auto" src="/mvc/public/static/img/html+css.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">HTML + CSS</h5>
                                <p class="card-text">HTML y CSS son lenguajes fundamentales para crear páginas web: HTML define la estructura
                                    y el contenido, mientras que CSS se encarga del estilo y la presentación. HTML utiliza etiquetas para
                                    estructurar el contenido (como encabezados, párrafos y listas), y CSS se utiliza para dar formato a ese
                                    contenido, como el color, la fuente y la disposición general. CSS es el lenguaje de hoja de estilos con
                                    el cual estilas la página, para decirle a los navegadores que cambien el color, fuente, diseño y más.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
        </div>
        <!-- FIN DE LA SECCION DE INFORMACION PERSONAL -->
</body>

</html>