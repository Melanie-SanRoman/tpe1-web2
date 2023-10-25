{include file="header.tpl"}

    <h1>Crear cuenta</h1>

    <form action="registrar" method="post">
        Nombre:<input type="text" name="nombre" placeholder="Ingrese su nombre" required>
        Apellido:<input type="text" name="apellido" placeholder="Ingrese su apellido" required>
        Email:<input type="text" name="email" placeholder="Ingrese su email" required>
        Contraseña:<input type="password" name="password" placeholder="Ingrese su contraseña"required>
        <input type="submit" name="boton" value="Registrar">
    </form>

    <a href="home">Cancelar</a>
</body>
</html>