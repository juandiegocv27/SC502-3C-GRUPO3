<!-- Navbar Inicio -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
            <a href="/admin" class="navbar-brand ml-lg-3">
                <h1 class="m-0 text-uppercase text-primary"> <img src="/build/img/logo.svg" alt="logo" width="50px"
                        height="50px"> Canguro Matematico</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <a href="/admin" class="nav-item nav-link ">Principal</a>
                    <a href="/admin_reportes" class="nav-item nav-link">Reportes</a>
                    <a href="/admin_graficos" class="nav-item nav-link ">Graficos</a>
                    <a href="/admin_calendario" class="nav-item nav-link">Calendario</a>
                    <a href="/admin_registroProfesores" class="nav-item nav-link">Registros</a>
                </div>
                <a href="/logout" class="btn btn-primary py-2 px-4 d-none d-lg-block">Cerrar Sesion</a>
            </div>
        </nav>
    </div>
    <!-- Navbar Final -->

    <!-- <div class="container-fluid justify-content-center">
        <div class="d-flex justify-content-center">
            <div class="box container justify-content-start" id="papa">
                <h1 class="casillas">REGISTRAR NUEVO PROFESOR</h1>
                <form>
                    <h5 class="casillas">Nombre</h5>

                    <input type="nombre" name="PNombre" id="PNombre">
                    <br>
                    <h5 class="casillas">Apellidos</h5>
                    <input type="apellido" name="PApellido" id="PApellido">
                    <br>
                    <h5 class="casillas">Cédula</h5>
                    <input type="cel" name="cedula" id="cedula">
                    <br>
                    <h5 class="casillas">Correo Electronico</h5>
                    <input type="email" name="profemail" id="profemail">
                    <br>
                    <h5 class="casillas">Teléfono</h5>

                    <input type="tel" name="telefono" id="telefono">
                    <br>
                    <h5 class="casillas">Dirección</h5>

                    <input type="text" size="30">
                    <br>
                    <h5 class="casillas">Fecha de nacimiento</h5>
                    <input type="date" name="fecha" id="fecha">
                    <br>
                    <h5 class="casillas">Contraseña</h5>
                    <input type="password" name="contrasena" id="contraseña">
                    <br>
                    <h5 class="casillas">Confirmar Contraseña</h5>
                    <input type="password" name="Ccontrasena" id="Ccontraseña">
                    <br>
                    <input type="checkbox" name="terminos" id="terminos"> He leido los terminos y condiciones.
                    <br>
                    <input type="checkbox" name="terminos" id="terminos"> Quiero recibir notificaciones de Canguro
                    Matematico por Email.
                    <br>
                    <input type="submit" value="Crear Cuenta">

                </form>
            </div>
            <div class="box" id="papa">
                <h1 class="casillas">Canguro Matematico</h1>
                <br>
                <p>
                <h4 class="casillas">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati autem est ad
                    odit odio sit consequatur explicabo doloribus sunt, hic dicta ullam nisi at eveniet quisquam
                    repellat ipsum fuga necessitatibus!</h4>
                </p>
            </div>
        </div>
    </div> -->

    <main class="contenedor seccion contenido-centrado"> 
    <h1>Registro de Profesores</h1>
    <?php
        include_once __DIR__ . "/../templates/alertas.php";
    ?>
    
    <form class="formulario row g-3 my-5" method="POST" action="/admin_registroProfesores" novalidate>
        <div class="col-md-4" >
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" placeholder="Tu Nombre" id="nombre">
            
            <label for="cedula">Cédula</label>
            <input type="text" name="cedula" placeholder="Tu Número de Cédula" id="cedula">

            <label for="email">E-mail</label>
            <input type="email" name="email" placeholder="Tu Email" id="email">
        </div>

        <div class="col-md-4" >
            <label for="apellido1">Primer Apellido</label>
            <input type="text" name="apellido1" placeholder="Tu Primer Apellido" id="apellido1">

            <label for="fechaNacimiento">Fecha de nacimiento</label>
            <input type="datetime-local" id="fechaNacimiento" name="fechaNacimiento">

            <label for="password">Contraseña</label>
            <input type="password" name="password" placeholder="Tu Contraseña" id="password">
        </div>

        <div class="col-md-4" >
            <label for="apellido2">Segundo Apellido</label>
            <input type="text" name="apellido2" placeholder="Tu Segundo Apellido" id="apellido2">

            <label for="telefono">Teléfono</label>
            <input type="tel" id="phtelefonoone" placeholder="99999999" name="telefono" pattern="[0-9]{8}">

            <label for="Cpassword">Confirmar Contraseña</label>
            <input type="password" name="Cpassword" placeholder="Confirme tu contraseña" id="Cpassword">
        </div>

        <div class="col-md-12" >
            <label for="direccion">Dirección</label>
            <input type="text" name="direccion" placeholder="Tu Dirección" id="direccion">
        </div>
            <!-- <input type="checkbox" id="politicas" name="politicas" value="politicas">
            <label for="politicas"> He leido y acepto los terminos de servicio y políticas de privacidad.</label><br>
            
            <input type="checkbox" id="novedades" name="novedades" value="novedades">
            <label for="novedades"> Quiero recibir novedades sobre los servicios de Canguro Matemático por correo.</label><br> -->
        <input type="submit" value="Registrar cuenta" class="boton boton-verde ">
    </form>
</main>


