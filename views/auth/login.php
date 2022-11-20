<!-- --------------------------------------------------------------------------- -->
<div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
        <a href="index.html" class="navbar-brand ml-lg-3">
            <h1 class="m-0 text-uppercase text-primary"> <img src="/build/img/logo.svg" alt="logo" width="50px"
                height="50px">Casa Canguro</h1>
        </a>
        <div class="ml-auto">
        ¿Aún no eres miembro?<a href="registro" class="navbar-brand">
                <h1 class="text-primary py-2 px-4 d-none d-lg-block"> Regístrate</h1>
            </a>
        </div>
    </nav>
</div>
<!-- --------------------------------------------------------------------------- -->



<main class="contenedor seccion contenido-centrado"> 
    <h1>Iniciar Sesión</h1>

    <?php
    include_once __DIR__ . "/../templates/alertas.php";
    ?>

    <form class="formulario" method="POST" action="/login">
        <fieldset>

            <label for="email">E-mail</label>
            <input type="email" name="email" placeholder="Tu Email" id="email">

            <label for="password">Contraseña</label>
            <input type="password" name="password" placeholder="Tu Contraseña" id="password">
        </fieldset>
    
        <input type="submit" value="Iniciar Sesión" class="boton boton-verde">
    </form>
    <div class="acciones" style="margin-top: 3rem;">
        <a href='olvide.html'>¿Olvidaste tu password?</a>
    </div>
</main>



<!-- ------------------------------------------------------------------------- -->
