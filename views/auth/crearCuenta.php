<h1 class="nombrePagina">Crear cuenta</h1>
<p class="descripcionPagina"> Sigue los siguientes pasos para crear tu cuenta</p>


<?php
    include_once __DIR__. "/../templates/alertas.php";
?>
<form class="formulario" method="POST" action="/crearCuenta" >
    <div class="campo">
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" placeholder=" tu nombre" name="nombre" value="<?php echo s($usuario->nombre); ?>">
    </div>
    <div class="campo">
        <label for="apellido">Apellido</label>
        <input type="text" id="apellido" placeholder=" tu apellido" name="apellido" value="<?php echo s($usuario->apellido); ?>">
    </div>
    <div class="campo">
        <label for="telefono">telefono</label>
        <input type="tel" id="telefono" placeholder=" tu telefono" name="telefono" value="<?php echo s($usuario->telefono); ?>">
    </div>
    <div class="campo">
        <label for="email">Email</label>
        <input type="email" id="email" placeholder=" tu email" name="email" value="<?php echo s($usuario->email); ?>">
    </div>
    <div class="campo">
        <label for="password">Password</label>
        <input type="password" id="password" placeholder=" tu password" name="password">
    </div>
    <input type="submit" value="Crear Cuenta" class="boton">
</form>

<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Inicia sesión</a>
    <a href="/olvide-password">¿Olvidaste tu password?</a>
</div>