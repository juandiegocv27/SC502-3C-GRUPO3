<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Canguro Matemático - Tutorias Online</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap"
        rel="stylesheet" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="/build/lib/owlcarousel/assets/owl.carousel.min.css">
    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="/build/css/style.css">
    <!-- <link rel="stylesheet" href="css/app.css"> -->
    <link rel="stylesheet" href="/build/lib/fullCalendar/main.css">
    <script src="/build/lib/fullCalendar/main.js"></script>
    <script>

        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: "dayGridMonth",
                headerToolbar: {
                left: "prev,next today",
                center: "title",
                right: "dayGridMonth,timeGridWeek,timeGridDay"},
                events: [
                {
                    title: "All Day Event",
                    start: "2022-12-01"
                }]
            });
            calendar.render();
        });

    </script>
</head>

<body>
    <!-- Navbar Inicio -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
            <a href="/profesor_principal" class="navbar-brand ml-lg-3">
                <h1 class="m-0 text-uppercase text-primary">
                    <img src="/build/img/logo.svg" alt="logo" width="50px" height="50px" />
                    Canguro Matematico
                </h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <a href="/profesor_principal" class="nav-item nav-link ">Tutorias</a>
                    <a href="/profesor_reportes" class="nav-item nav-link active">Reportes</a>
                    <a href="/profesor_calendario" class="nav-item nav-link">Calendario</a>
                    <a href="/profesor_perfil" class="nav-item nav-link">Perfil Profesor</a>
                </div>
                <a href="/logout" class="btn btn-primary py-2 px-4 d-none d-lg-block">Cerrar sesión</a>
            </div>
        </nav>
    </div>
    <!-- Navbar Final -->

    <!-- CALENDARIO INICIO -->
    <div class="container mt-5">
        <div id='calendar'></div>
    </div>
    <!-- CALENDARIO FIN -->

    <!-- Footer Start -->
    <div class="container-fluid position-relative overlay-top bg-dark text-white-50 py-5" style="margin-top: 90px;">
        <div class="container mt-5 pt-5">
            <div class="d-flex justify-content-center">
                <div class="col-md-8 mb-5">
                    <a href="/" class="navbar-brand">
                        <h1 class="mt-n2 text-uppercase text-white"><img src="/build/img/logo.svg" width="32px" height="32px"
                                alt=""> Canguro Matematico</h1>
                    </a>
                    <p class="m-0">Canguro Matemático es un programa integral para el desarrollo del razonamiento y el
                        acompañamiento de estudiantes. Cimentado en principios de responsabilidad y excelencia
                        académica, ofrece la posibilidad de que los estudiantes participen en una prueba internacional
                        de razonamiento, así como acceso a programas para apoyo en el desarrollo del razonamiento. Las
                        actividades que se desarrollan son tanto a nivel individual como a nivel institucional. </p>
                </div>
            </div>
            <div class="d-flex justify-content-center ">
                <div class="col-md-4 mb-5">
                    <h3 class="text-white mb-4">Ponte en Contacto</h3>
                    <p><i class="fa fa-map-marker-alt mr-2"></i>Oreamuno, Cartago, Costa Rica </p>
                    <p><i class="fa fa-phone-alt mr-2"></i>+506 7266 9211</p>
                    <p><i class="fa fa-envelope mr-2"></i>cangurocr@gmail.com</p>
                    <div class="d-flex justify-content-start mt-4">
                        <!-- <a class="text-white mr-4" href="#"><i class="fab fa-2x fa-twitter"></i></a> -->
                        <a class="text-white mr-4" href="https://www.facebook.com/CanguroMatematicoCR"
                            target="_blank"><i class="fab fa-2x fa-facebook-f"></i></a>
                        <!-- <a class="text-white mr-4" href="#"><i class="fab fa-2x fa-linkedin-in"></i></a> -->
                        <a class="text-white"
                            href="https://instagram.com/canguromatematicocostarica?igshid=YmMyMTA2M2Y="
                            target="_blank"><i class="fab fa-2x fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h3 class="text-white mb-4">Enlaces Rápidos</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-white-50 mb-2" href="index_reglamento.html"><i
                                class="fa fa-angle-right mr-2"></i>Reglamento</a>
                        <a class="text-white-50 mb-2" href="index_inscripcion.html"><i
                                class="fa fa-angle-right mr-2"></i>Inscripción</a>
                        <a class="text-white-50 mb-2" href="index_preguntasFrecuentes.html"><i
                                class="fa fa-angle-right mr-2"></i>Preguntas Frecuentes</a>
                        <a class="text-white-50 mb-2" href="index_patrocinadores.html"><i
                                class="fa fa-angle-right mr-2"></i>Patrocinadores</a>
                        <a class="text-white-50" href="index_contacto.html"><i
                                class="fa fa-angle-right mr-2"></i>Contacto</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white-50 border-top py-4"
        style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                    <p class="m-0">Copyright &copy; <a class="text-white" href="#">Canguro Matematico</a>. All Rights
                        Reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary rounded-0 btn-lg-square back-to-top"><i
            class="fa fa-angle-double-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="/build/lib/easing/easing.min.js"></script>
    <script src="/build/lib/waypoints/waypoints.min.js"></script>
    <script src="/build/lib/counterup/counterup.min.js"></script>
    <script src="/build/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="/build/js/main.js"></script>

</body>

</html>