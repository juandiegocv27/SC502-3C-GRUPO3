 <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
            <a href="index.html" class="navbar-brand ml-lg-3">
                <h1 class="m-0 text-uppercase text-primary"> <img src="/build/img/logo.svg" alt="logo" width="50px"
                        height="50px"> Canguro Matematico</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                <a href="/estudiante_principal" class="nav-item nav-link active">Principal</a>
                    <a href="/estudiante_informacionTutorias" class="nav-item nav-link ">Mis Tutorias</a>
                    <a href="/estudiante_matricularTutoria" class="nav-item nav-link ">Matricular Tutorias</a>
                    <a href="/estudiante_calendario" class="nav-item nav-link">Calendario</a>
                    <a href="/estudiante_perfil" class="nav-item nav-link">Perfil Estudiante</a>
                    <!-- <a href="contact.html" class="nav-item nav-link">Contact</a> -->
                </div>
                <a href="/logout" class="btn btn-primary py-2 px-4 d-none d-lg-block">Cerrar Sesion</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid position-relative overlay-bottom" style="margin-bottom: 90px;">
        <div class="container text-center my-5 py-5">
            <h1 class="text-white mt-4 mb-4 texto_blanco">Canguro Matemático Costa Rica </h1>
            <h1 class="text-white display-1 mb-5 texto_blanco"> Información Tutoria </h1>
        </div>
    </div>
    <!-- Header End -->

    <!-- Courses Start -->
    <div class="container-fluid px-0 py-5">
        <div class="row mx-0 justify-content-center pt-5">
            <div class="col-lg-6">
                <div class="section-title text-center position-relative mb-4">
                    <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Cursos</h6>
                </div>
            </div>
        </div>
       
    <!-- Courses End -->

    <!-- INICIO LISTA DE CURSOS -->

    <section class="pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col my-4">
            <h1 class="display-4">Lista de Tutorias</h1>    
         </div>
            <div class="col-12">
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <?php
                                use Model\Tutoria;
                                use Model\Usuario;
                                $usuarios = new Usuario($_GET);
                                    $tuto = new Tutoria($_GET);
                                    $resultado = $tuto->getTutoriasbyEstudiante();
                                    $contador = 0;
                                    while (($obj = mysqli_fetch_object($resultado))) {
                                        
                                    
                                ?> 
                                <span id = "idM<?php echo $obj->id_tutoria?>" hidden> <?php echo $obj->id_tutoria ?> </span>
                                <span id = "nombreM<?php echo $obj->id_tutoria?>" hidden> <?php echo $obj->nombre ?> </span>
                                <span id = "descripcionM<?php echo $obj->id_tutoria?>" hidden> <?php echo $obj->descripcion ?> </span>
                                <span id = "materialM<?php echo $obj->id_tutoria?>" hidden> <?php echo $obj->material ?> </span>
                                <span id = "tipoM<?php echo $obj->id_tutoria?>" hidden> <?php echo $obj->tipo ?> </span>
                                <span id = "nivelM<?php echo $obj->id_tutoria?>" hidden> <?php echo $obj->nivel ?> </span>
                                <span id = "profesorNombre<?php echo $obj->id_tutoria?>" hidden> <?php echo $obj->profesorNombre ?> </span>
                                <span id = "fechaTutoriaM<?php echo $obj->id_tutoria?>" hidden> <?php echo $obj->fechaTutoria ?> </span>
                                <span id = "enlaceZoomM<?php echo $obj->id_tutoria?>" hidden> <?php echo $obj->enlaceZoom ?> </span>
                                <span id = "id2M<?php echo $obj->id_tutoria?>" hidden> <?php echo $obj->id ?> </span>

                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1517760444937-f6397edcbbcd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=42b2d9ae6feb9c4ff98b9133addfb698">
                                        <div class="card-body">
                                            <h4 class="card-title"><?php echo $obj->nombre .' ('.$obj->id_tutoria.')' ?></h4>
                                            <p class="card-text">Descripción: <?php echo $obj->descripcion ?></p>
                                            <p class="card-text">
                                                
                                                Tipo: <span id = "tipoM<?php echo $obj->id_tutoria?>"> <?php echo $obj->tipo ?> </span> <br> Nivel: <?php echo $obj->nivel ?> <br> Profesor: <?php echo $obj->profesorNombre ?> <br>
                                                <a href="<?php echo $obj->enlaceZoom ?>">Enlace de Zoom</a> <br> Fecha: <?php echo $obj->fechaTutoria ?>
                                            </p>
                                            
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <?php }?>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
