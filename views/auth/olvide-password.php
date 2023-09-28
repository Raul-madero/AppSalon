<h1 class="nombre-pagina">Olvidé mi password</h1>
<p class="descripcion-pagina">Reestablece tu password escribiendo tu email</p>
<?php include_once __DIR__ . "/../templates/alertas.php" ?>
<form action="/olvide" method="POST" class="formulario">
    <div class="campo">
        <label for="email">Email:</label>
        <input 
            type="email"
            id="email"
            name="email"
            placeholder="Tu email">
    </div>
    <input type="submit" value="Enviar Instrucciones" class="boton">
</form>
<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Inicia sesión.</a>
    <a href="/crear-cuenta">Crear Cuenta</a>
</div>
