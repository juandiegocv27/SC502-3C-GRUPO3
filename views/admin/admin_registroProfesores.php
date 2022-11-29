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

    <div class="container-fluid justify-content-center">
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
    </div>

