<h1 class="nombre-pagina">Login</h1>
<p class="descripcion-pagina">Inicia sesión con tus datos</p>
<?php include_once __DIR__ . '/../templates/alertas.php';?>
<form action="/" class="formulario" method="POST">
    <div class="campo">
        <label for="email">Email:</label>
        <input 
            type="email"
            id="email"
            placeholder="Tu email"
            name="email">
    </div>
    <div class="campo">
        <label for="password">Password:</label>
        <input 
            type="password"
            id="password"
            placeholder="Tu contraseña"
            name="password">
    </div>
    <input type="submit" class="boton" value="Iniciar Sesión">
    <div class="acciones">
        <a href="/crear-cuenta">Crear Cuenta</a>
        <a href="/olvide">Olvidé mi contraseña</a>
    </div>
</form>