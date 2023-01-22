<h1 class="nombrePagina">Login</h1>
<p class="descripcionPagina">Inicia sesion</p>

<?php include_once __DIR__ . '/../templates/alertas.php'; ?>

<form class="formulario" method="POST" action="/" >
    <div class="campo">
        <label for="email">Email</label>
        <input type="email" id="email" placeholder=" tu email" name="email">
    </div>
    <div class="campo">
        <label for="password">Password</label>
        <input type="password" id="password" placeholder=" tu password" name="password">
    </div>

    <input type="submit" class="boton" value="Iniciar sesión">
</form>

<div class="acciones">
    <a href="/crearCuenta">¿Aún no tienes una cuenta? Crea una</a>
    <a href="/olvide-password">¿Olvidaste tu password?</a>
</div>