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

    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid position-relative overlay-bottom" style="margin-bottom: 90px">
        <div class="container text-center my-5 py-5">
            <h1 class="text-white display-1 mb-5 texto_blanco">Tutorias</h1>
        </div>
    </div>

    <!-- INICIO LISTA DE CURSOS -->
    <div class="row mx-0 justify-content-center pt-5">
        <div class="col-lg-6">
            <div class="section-title text-center position-relative mb-4">
                <h1 class="display-4">Tus Tutorias</h1>
            </div>
        </div>
    </div>
    <section class="pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col my-4">
                <button class="btn btn-primary " type="button" style="width: 100%;" data-toggle="modal" data-target="#exampleModal">Crear Nueva Tutoría</button>
            </div>
            <div class="col-12">
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <?php
                                use Model\Tutoria;
                                    $tuto = new Tutoria($_GET);
                                    $resultado = $tuto->getTutoriasbyProfesor();
                                    $contador = 0;
                                    while (($obj = mysqli_fetch_object($resultado))) {
                                        //echo '<script>console.log("'. $obj->id_tutoria .'"); </script>';
                                    
                                ?> 

                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1517760444937-f6397edcbbcd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=42b2d9ae6feb9c4ff98b9133addfb698">
                                        <div class="card-body">
                                            <h4 class="card-title"><?php echo $obj->nombre .' ('.$obj->profesorNombre.')' ?> </h4>
                                            <p class="card-text">Descripción: <?php echo $obj->descripcion ?></p>
                                            <p class="card-text">
                                                Tipo: <?php echo $obj->tipo ?> <br> Nivel: <?php echo $obj->nivel ?> <br>
                                                <a href="<?php echo $obj->enlaceZoom ?>">Enlace de Zoom</a> <br> Fecha: <?php echo $obj->fechaTutoria ?>
                                            </p>
                                            <button class="btn btn-primary " type="button">Estudiantes</button>
                                            <button class="btn btn-primary " type="button">Editar</button>

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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="formulario row g-3 my-5" method="POST" action="/profesor_principal" novalidate>
        <div class="col-2"></div>
        <div class="col" >
            <div class="row">
                <label for="id_tutoria">ID Tutoria</label>
                <input type="number" name="id_tutoria" placeholder="Un ID" id="id_tutoria">
            </div><div class="row">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" placeholder="Tu Nombre" id="nombre">
            </div>  <div class="row">  
                <label for="descripcion">Descripción</label>
                <input type="text" name="descripcion" placeholder="Describe la tutoría" id="descripcion">
            </div>  <div class="row">
                <label for="material">Material</label>
                <input type="text" name="material" placeholder="¿Qué libro se utilizará?" id="material">
            </div>  <div class="row">
                <label for="tipo">Tipo</label>
                <input type="text" name="tipo" placeholder="Tipo de tutoría" id="tipo">
            </div>  <div class="row">
                <label for="nivel">Nivel</label>
                <input type="text" id="nivel" placeholder="Bajo-Medio-Alto" name="nivel">
            </div>  <div class="row">
            <label for="fechaTutoria">Fecha de Tutoría</label>
                <input type="datetime-local" id="fechaTutoria" name="fechaTutoria">
            </div>  <div class="row">
                <label for="enlaceZoom">Enlace de Zoom</label>
                <input type="text" name="enlaceZoom" placeholder="Enlace para la tutoría" id="enlaceZoom">
            </div>
            
        </div>
        <div class="col-1"></div>
        <div class="row">
            <div class="col offset-3">
                <input type="submit" value = "Registrar Tutoria" class="boton boton-verde">
                <button type="button" class="boton boton-rojo" data-dismiss="modal">Cancelar</button></div>
        </div>
    </form>
    </div>
  </div>
</div>