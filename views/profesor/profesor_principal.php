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
                <h1 class="display-4">Lista de Tutorias</h1>
            </div>
        </div>
    </div>
    <div class="card-group">
        <div class="card">
            <img src="/build/img/courses-4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Nombre Tutoria</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, corporis
                    tempore autem nisi nihil omnis aut praesentium eos id dicta eum. Explicabo sunt suscipit distinctio
                    nulla tempora aliquam similique totam!</p>
                <div class="d-grid gap-3mx-auto">
                    <button class="btn btn-primary " type="button">Lista de Estudiantes</button>
                    <button class="btn btn-primary " type="button">Subir material</button>
                    <button class="btn btn-primary " type="button">Editar Tutoria</button>
                </div>
            </div>
        </div>
        <div class="card">
            <img src="/build/img/courses-1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Nombre Tutoria</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, corporis
                    tempore autem nisi nihil omnis aut praesentium eos id dicta eum. Explicabo sunt suscipit distinctio
                    nulla tempora aliquam similique totam!</p>
                <div class="d-grid gap-3mx-auto">
                    <button class="btn btn-primary " type="button">Lista de Estudiantes</button>
                    <button class="btn btn-primary " type="button">Subir material</button>
                    <button class="btn btn-primary " type="button">Editar Tutoria</button>
                </div>
            </div>
        </div>
        <div class="card">
            <img src="/build/img/courses-5.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Nombre Tutoria</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, corporis
                    tempore autem nisi nihil omnis aut praesentium eos id dicta eum. Explicabo sunt suscipit distinctio
                    nulla tempora aliquam similique totam!</p>
                <div class="d-grid gap-3mx-auto">
                    <button class="btn btn-primary " type="button">Lista de Estudiantes</button>
                    <button class="btn btn-primary " type="button">Subir material</button>
                    <button class="btn btn-primary " type="button">Editar Tutoria</button>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center mt-4">
        <button class="btn btn-primary " type="submit">Ver Mas Tutorias</button>
    </div>
    <!-- Courses End -->





    <!-- INICIO NUEVA TUTORIA -->
    <div class="container-fluid py-5 mt-5">
        <div class="section-title text-center position-relative mb-5">
            <h1 class="display-4">Crear Nueva Tutoria</h1>
        </div>
        <div class="container py-5 d-flex justify-content-center">
            <div class="card" style="width: 18rem">
                <img src="/build/img/courses-6.jpg" class="card-img-top" alt="..." />
                <div class="card-body text-center">
                    <div class="input-group input-group-sm mb-3">
                        <input type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-sm" placeholder="Nombre de la tutoria" />
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <input type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-sm" placeholder="Tipo de tutoria" />
                    </div>
                    <a href="#" class="btn btn-primary align-self-center">Crear Tutoria</a>
                </div>
            </div>
        </div>
    </div>