<!-- --------------------------------------------------------------------------- -->
<div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
        <a href="index.html" class="navbar-brand ml-lg-3">
            <h1 class="m-0 text-uppercase text-primary"> <img src="img/logo.svg" alt="logo" width="50px"
                height="50px">Casa Canguro</h1>
        </a>
        <div class="ml-auto">
        ¿Ya tienes una cuenta?<a href="login" class="navbar-brand">
                <h1 class="text-primary py-2 px-4 d-none d-lg-block"> Inicia Sesión</h1>
            </a>
        </div>
    </nav>
</div>
<!-- --------------------------------------------------------------------------- -->

<main class="contenedor seccion contenido-centrado"> 
<h1>Registro de Usuarios</h1>
<?php
    include_once __DIR__ . "/../templates/alertas.php";
?>
<form class="formulario" method="POST" action="/registro" novalidate>
    <fieldset>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" placeholder="Tu Nombre" id="nombre">
        
        <label for="text">Primer Apellido</label>
        <input type="text" name="apellido1" placeholder="Tu Primer Apellido" id="apellido1">
        
        <label for="text">Segundo Apellido</label>
        <input type="text" name="apellido2" placeholder="Tu Segundo Apellido" id="apellido2">
        
        <label for="text">Cédula</label>
        <input type="text" name="ced" placeholder="Tu Número de Cédula" id="ced">
        
        <label for="email">E-mail</label>
        <input type="email" name="email" placeholder="Tu Email" id="email">

        <label for="phone">Teléfono</label>
        <input type="tel" id="phone" placeholder="99999999" name="phone" pattern="[0-9]{8}">

        <label for="direc">Dirección</label>
        <input type="text" name="direc" placeholder="Tu Dirección" id="direc">
        
        <label for="birthdaytime">Fecha de nacimiento</label>
        <input type="datetime-local" id="birthdaytime" name="birthdaytime">

        <label for="password">Contraseña</label>
        <input type="password" name="password" placeholder="Tu Contraseña" id="password">

        <label for="Cpassword">Confirmar Contraseña</label>
        <input type="password" name="Cpassword" placeholder="Confirme tu contraseña" id="Cpassword">
        
        <!-- <input type="checkbox" id="politicas" name="politicas" value="politicas">
        <label for="politicas"> He leido y acepto los terminos de servicio y políticas de privacidad.</label><br>
        
        <input type="checkbox" id="novedades" name="novedades" value="novedades">
        <label for="novedades"> Quiero recibir novedades sobre los servicios de Canguro Matemático por correo.</label><br> -->
    </fieldset>

    <input type="submit" value="Registrar cuenta" class="boton boton-verde">
</form>
</main>
