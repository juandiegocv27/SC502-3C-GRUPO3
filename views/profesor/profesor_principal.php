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
                <button class="btn btn-primary " type="button" style="width: 100%;" style = "border-radius: 300px;" data-toggle="modal" data-target="#exampleModal">Crear Nueva Tutoría</button>
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
                                    $resultado = $tuto->getTutoriasbyProfesor();
                                    
                                    $contador = 0;
                                    while (($obj = mysqli_fetch_object($resultado))) {
    
                                    
                                ?> 
                                    <span id = "idM<?php echo $obj->id_tutoria?>" hidden> <?php echo $obj->id_tutoria ?> </span>
                                    <span id = "nombreM<?php echo $obj->id_tutoria?>" hidden> <?php echo $obj->nombre ?> </span>
                                    <span id = "descripcionM<?php echo $obj->id_tutoria?>" hidden> <?php echo $obj->descripcion ?> </span>
                                    <span id = "materialM<?php echo $obj->id_tutoria?>" hidden> <?php echo $obj->material ?> </span>
                                    <span id = "tipoM<?php echo $obj->id_tutoria?>" hidden> <?php echo $obj->tipo ?> </span>
                                    <span id = "nivelM<?php echo $obj->id_tutoria?>" hidden> <?php echo $obj->nivel ?> </span>
                                    <span id = "fechaTutoriaM<?php echo $obj->id_tutoria?>" hidden> <?php echo $obj->fechaTutoria ?> </span>
                                    <span id = "enlaceZoomM<?php echo $obj->id_tutoria?>" hidden> <?php echo $obj->enlaceZoom ?> </span>


                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://agendaeducativa.org/wp-content/uploads/2020/08/Matem%C3%A1tica-P%C3%A1ginas-web-850x560.jpg">
                                        <div class="card-body">
                                            <h4 class="card-title"><?php echo $obj->nombre .' ('.$obj->id_tutoria.')' ?></h4>
                                            <p class="card-text">Descripción: <?php echo $obj->descripcion ?></p>
                                            <p class="card-text">
                                                
                                                Tipo: <span id = "tipoM<?php echo $obj->id_tutoria?>"> <?php echo $obj->tipo ?> </span> <br> Nivel: <?php echo $obj->nivel ?> <br>
                                                <a href="<?php echo $obj->enlaceZoom ?>">Enlace de Zoom</a> <br> Fecha: <?php echo $obj->fechaTutoria ?>
                                            </p>
                                            <span id = "listaM<?php echo $obj->id_tutoria?>" hidden>
                                            <?php
                                            $resul = $usuarios->usuariosPorTutoria($obj->id_tutoria);
                                            $contador = 0;
                                            $lista = "";
                                            while (($est = mysqli_fetch_object($resul))) {
                                                $contador++;
                                                $lista = $lista . strval($contador) . ". Estudiante: " . $est->nombre . " " . $est->apellido1 . "(" . $est->email . ") \n";
                                            }
                                            echo $lista;
                                            ?> 
                                            </span>
                                            <button class="btn btn-primary estbtn" type="button" value = "view" id = <?php echo $obj->id_tutoria?> >Estudiantes</button>
                                            <button class="btn btn-primary editbtn" type="button" value = "view" id = <?php echo $obj->id_tutoria?>>Editar</button>
                                            <button class="btn btn-primary elmbtn" type="button" value = "view" id = <?php echo $obj->id_tutoria?>>Eliminar</button>
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


<script>
    $(document).ready(function(){
        $('.estbtn').on('click', function(){
            
            var id = $(this).attr("id");
            console.log(id);
            console.log($('#listaM' + id).text().trim())
            if ($('#listaM' + id).text().trim() == ""){
                $('#lista').val("No hay Estudiantes Matriculados");
            } else {
                $('#lista').val($('#listaM' + id).text().trim());
            }
            $('#estudiantes').modal('show');
        })
    })
</script>

<script>
    $(document).ready(function(){
        $('.editbtn').on('click', function(){
            
            var id = $(this).attr("id");
            console.log(id);
            $('#id_tutoria').val($('#idM' + id).text().trim());
            $('#nombre').val($('#nombreM' + id).text().trim());
            $('#descripcion').val($('#descripcionM' + id).text().trim());
            $('#material').val($('#materialM' + id).text().trim());
            $('#tipo').val($('#tipoM' + id).text().trim());
            $('#nivel').val($('#nivelM' + id).text().trim());
            $('#fechaTutoria').val($('#fechaTutoriaM' + id).text().trim());
            $('#enlaceZoom').val($('#enlaceZoomM' + id).text().trim());
            
            $('#exampleModal').modal('show');
        })
    })
</script>

<script>
$(document).ready(function(){
        $('.elmbtn').on('click', function(){
            
            var id = $(this).attr("id");
            console.log(id);
            $('#delete_tutoria').val($('#idM' + id).text().trim());
            
            $('#eliminarModal').modal('show');
        })
    })
</script>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nueva Tutoria</h5>
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
            </div>
            <div class="row">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" placeholder="Tu Nombre" id="nombre">
            </div>  <div class="row">  
                <label for="descripcion">Descripción</label>
                <input type="text" name="descripcion" placeholder="Describe la tutoría" id="descripcion">
            </div>  <div class="row">
                <label for="material">Material</label>
                <input type="text" name="material" placeholder="¿Qué libro se utulizará?" id="material">
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
</div>

<!-- Modal -->
<div class="modal fade" id="estudiantes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Estudiantes Inscritos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="row">
      <div class="col-1"></div>
      <div class="col">
        <textarea name="lista" id="lista" style = "width: 100%" disabled> </textarea>
      </div>
      <div class="col-1"></div>
      </div>
      <div class="row offset-4">
            <button type="button" class="boton boton-verde" data-dismiss="modal">Aceptar</button>
        </div>
    </div>
  </div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="eliminarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nueva Tutoria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="formulario row g-3 my-5" method="POST" action="/profesor_principal" novalidate>
        <div class="col-2"></div>
        <div class="col" >
            <h2>¿Quiere Eliminar esta tutoría?</h2>
            <div class="row" hidden>
                <label for="delete_tutoria">ID Tutoria</label>
                <input type="number" name="delete_tutoria" placeholder="Un ID" id="delete_tutoria">
            </div>
        </div>
        <div class="col-1"></div>
        <div class="row">
            <div class="col offset-3">
                <input type="submit" value = "Eliminar Tutoria" class="boton boton-verde">
                <button type="button" class="boton boton-rojo" data-dismiss="modal">Cancelar</button></div>
        </div>
    </form>
    </div>
  </div>
</div>
</div>