<h1 class="nombrePagina"> Recuperar password</h1>
<p class="descripcionPagina">Coloca tu nuevo password</p>

<?php include_once __DIR__ . '/../templates/alertas.php'; ?>


<?php if ($error) return; ?>
<form method="POST" class="formulario">
    <div class="campo">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Tu nuevo password" />
    </div>
    <input type="submit" class="boton" value="Guardar Nuevo Password">

</form>

<div class="acciones">
    <a href="/">¿Ya tienes cuenta? Iniciar Sesión</a>
    <a href="/crear-cuenta">¿Aún no tienes cuenta? Obtener una</a>
</div>