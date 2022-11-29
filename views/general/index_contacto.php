<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Canguro Matemático - Tutorias Online</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="../../public/build/lib/owlcarousel/assets/owl.carousel.min.css">
    
    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="../../public/build/css/style.css">
    
</head>

<body>
    <!-- Navbar Inicio -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
            <a href="/" class="navbar-brand ml-lg-3">
                <h1 class="m-0 text-uppercase text-primary"> <img src="../../public/build/img/logo.svg" alt="logo" width="50px" height="50px"> Canguro Matematico</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <a href="/" class="nav-item nav-link active">Home</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Competencia</a>
                        <div class="dropdown-menu m-0">
                            <a href="/index_reglamento" class="dropdown-item">Reglamento</a>
                            <a href="/index_inscripcion" class="dropdown-item">Inscripción</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Quienes Somos </a>
                        <div class="dropdown-menu m-0">
                            <a href="/index_nuestraAsociacion" class="dropdown-item">Nuestra Asociacion</a>
                            <a href="/index_historia" class="dropdown-item">Historia</a>
                            <a href="/index_patrocinadores" class="dropdown-item">Patrocinadores</a>
                        </div>
                    </div>
                    <a href="/index_contacto" class="nav-item nav-link">Contáctanos</a>
                </div>
                <a href="login" class="btn btn-primary py-2 px-4 d-none d-lg-block">Iniciar sesión</a>
            </div>
        </nav>
    </div>
    <!-- Navbar Final -->

    <!-- Contacto Inicio -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <div class="bg-light d-flex flex-column justify-content-center px-5" style="height: 450px;">
                        <div class="d-flex align-items-center mb-5">
                            <div class="btn-icon bg-primary mr-4">
                                <i class="fa fa-2x fa-map-marker-alt text-white"></i>
                            </div>
                            <div class="mt-n1">
                                <h4>Nuestra Ubicacion</h4>
                                <p class="m-0">Oreamuno, Cartago, Costa Rica </p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-5">
                            <div class="btn-icon bg-secondary mr-4">
                                <i class="fa fa-2x fa-phone-alt text-white"></i>
                            </div>
                            <div class="mt-n1">
                                <h4>Llamanos</h4>
                                <p class="m-0">+506 7266 9211</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="btn-icon bg-warning mr-4">
                                <i class="fa fa-2x fa-envelope text-white"></i>
                            </div>
                            <div class="mt-n1">
                                <h4>Envianos un correo</h4>
                                <p class="m-0">cangurocr@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Necesitas Ayuda?</h6>
                        <h1 class="display-4">Envianos un mensaje</h1>
                    </div>
                    <div class="contact-form">
                        <form action="https://formsubmit.co/joey_quiros13@hotmail.com" method="POST"> 
                            <div class="row">
                                <div class="col-6 form-group">
                                    <input type="text"
                                        class="form-control border-top-0 border-right-0 border-left-0 p-0"
                                        placeholder="Nombre" required="required" name="name">
                                </div>
                                <div class="col-6 form-group">
                                    <input type="email"
                                        class="form-control border-top-0 border-right-0 border-left-0 p-0"
                                        placeholder="Correo" required="required" name="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control border-top-0 border-right-0 border-left-0 p-0"
                                    placeholder="Asunto" required="required" name="asunto">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control border-top-0 border-right-0 border-left-0 p-0" rows="5"
                                    placeholder="Mensaje" required="required" name="mensaje"></textarea>
                            </div>
                            <div>
                                <button class="btn btn-primary py-3 px-5" type="submit">Enviar Mensaje</button>
                            </div>
                            <input type="hidden" name="_next" value="http://127.0.0.1:5500/Proyecto_Final/index.html">
                            <input type="hidden" name="_captcha" value="false">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contacto Final -->

    <!-- Footer Inicio -->
   
    <!-- Footer Fin -->

    <!-- Boton - Back to Top -->
    <a href="#" class="btn btn-lg btn-primary rounded-0 btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="../../public/build/lib/easing/easing.min.js"></script>
    <script src="../../public/build/lib/waypoints/waypoints.min.js"></script>
    <script src="../../public/build/lib/counterup/counterup.min.js"></script>
    <script src="../../public/build/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="../../public/build/js/main.js"></script>
</body>

</html>