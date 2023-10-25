{include file="header.tpl"}
 <ul>
        <li><a href="libros">Ver listado de libros</a></li>
        <li><a href="autores">Ver listado de autores</a></li>
    </ul>

    <h1>Iniciar Sesion</h1>

    <form action="login"  method="post">
        <input type="text" name="user" placeholder="Usuario">
        <input type="password" name="pass" placeholder="Contraseña">
        <input type="submit" name="login" value="Login">
    </form>
    <h4>No tienes una cuenta? <a href="register">Registrarse</a></h4>

</body>
</html>