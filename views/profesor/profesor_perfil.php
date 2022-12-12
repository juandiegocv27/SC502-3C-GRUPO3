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

    <!-- PERFIL -->
    <main class="contenedor seccion contenido-centrado"> 
        
        <?php
            include_once __DIR__ . "/../templates/alertas.php";
        ?>

        <div class="d-flex justify-content-center" style="height: 100%">
            <div class="col-md-9">
                <div class="container content clear-fix">
                    <h2 class="mt-5 mb-5">Perfil Profesor</h2>

                    <div class="row" style="height: 100%">
                        <div class="col-md-3">
                            <div href="#" class="d-inline">
                                <img src="https://image.flaticon.com/icons/svg/236/236831.svg" width="130px"
                                    style="margin: 0" /><br />
                                <p class="pl-2 mt-2">
                                    <a href="#" class="btn" style="color: #8f9096; font-weight: 600">Editar Foto</a>
                                </p>
                            </div>
                        </div>

                        <div class="col-md-9">
                            <div class="container">

                                <form class="formulario row g-3 my-5" method="POST" action="/profesor_perfil" novalidate>
                             
                                        <label for="nombre">Nombre</label>
                                        <input type="text" name="nombre" placeholder="Tu Nombre" id="nombre" value="<?php echo $usuario->nombre ?>">
                                       
                                        <label for="apellido1">Primer Apellido</label>
                                        <input type="text" name="apellido1" placeholder="Tu Primer Apellido" id="apellido1" value="<?php echo $usuario->apellido1 ?>">

                                        <label for="apellido2">Segundo Apellido</label>
                                        <input type="text" name="apellido2" placeholder="Tu Segundo Apellido" id="apellido2" value="<?php echo $usuario->apellido2 ?>">

                                        <label for="cedula">Cédula</label>
                                        <input type="text" name="cedula" placeholder="Tu Número de Cédula" id="cedula" value="<?php echo $usuario->cedula  ?>">

                                        <label for="email">E-mail</label>
                                        <input type="email" name="email" placeholder="Tu Email" id="email" value="<?php echo $usuario->email?>" readonly>
                            
                                        <!-- <label for="fechaNacimiento">Fecha de nacimiento</label>
                                        <input type="datetime-local" id="fechaNacimiento" name="fechaNacimiento" value="<?php echo date("Y-m-d", strtotime($usuario->fechaNacimiento)); ?>"/> -->

                                        <label for="telefono">Teléfono</label>
                                        <input type="tel" id="phtelefonoone" placeholder="99999999" name="telefono" pattern="[0-9]{8}" value="<?php echo $usuario->telefono  ?>">

                                        <label for="direccion">Dirección</label>
                                        <input type="text" name="direccion" placeholder="Tu Dirección" id="direccion" value="<?php echo $usuario->direccion  ?>">
                                    
                                    <input type="submit" value="Guardar" class="boton boton-verde ">
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>



