{include file="header.tpl"}
<h2>Editar autor</h2>
    <form action="" method="POST">
        <table>
            <tr>
                <td>Nombre del autor:<input type="text" name="nombre" value="{$nombre_autor}"/></td>
            </tr>
            <tr>
                <td>Apellido del autor:<input type="text" name="apellido" value="{$apellido}"/></td>
            </tr>
            <tr>
                <td>Fecha de nacimiento:<input type="date" name="nacimiento" value="{$nacimiento}"/></td>
            </tr>
            <tr>
                <td>Nacionalidad:<input type="text" name="nacionalidad" value="{$nacionalidad}"/></td>
            </tr>
        </table>
        <input type="submit" name="editarAutor" value="actualizar">
        <a href="../../administrar/autores">Cancelar</a>
    </form>
</body>
</html>