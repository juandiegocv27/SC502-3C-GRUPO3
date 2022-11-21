<!-- --------------------------------------------------------------------------- -->
<div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
        <a href="/" class="navbar-brand ml-lg-3">
            <h1 class="m-0 text-uppercase text-primary"> <img src="/build/img/logo.svg" alt="logo" width="50px"
                height="50px">Casa Canguro</h1>
        </a>
        <div class="ml-auto">
                <div>¿Aún no eres miembro?<a href="/registro" class="navbar-brand">
                <h1 class="text-primary py-2 px-4 d-none d-lg-block"> Regístrate</h1></a></div>
        </div>
    </nav>
</div>
<!-- --------------------------------------------------------------------------- -->

    <main class="contenedor seccion contenido-centrado"> 
        <h1>Recuperar contraseña</h1>

        <?php
            include_once __DIR__ . "/../templates/alertas.php";
        ?>

        <form method="POST" class="formulario" action="\olvide">
            <fieldset>

                <label for="email">E-mail</label>
                <input type="email" name="email" placeholder="Tu Email" id="email">

            </fieldset>
        
            <input type="submit" value="Enviar instrucciones" class="boton boton-verde">
        </form>
        <div class="acciones" style="margin-top: 3rem">
            <a href='/login'>¿Ya tienes una cuenta? Inicia Sesión</a>
        </div>        
    </main>