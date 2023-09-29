<h1 class="nombre-pagina">Olvidé mi password</h1>
<p class="descripcion-pagina">Introduce tu nueva contraseña a continuación:</p>
<?php include_once __DIR__ . "/../templates/alertas.php" ?>
<?php if(!$error) : ?>
<form method="POST" class="formulario">
    <div class="campo">
        <label for="password">Contraseña:</label>
        <input 
            type="password"
            id="password"
            name="password"
            placeholder="Tu contraseña">
    </div>
    <input type="submit" value="Enviar Instrucciones" class="boton">
</form>
<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Inicia sesión.</a>
    <a href="/crear-cuenta">Crear Cuenta</a>
</div>
<?php endif; ?>