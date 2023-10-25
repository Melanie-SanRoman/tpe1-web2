{include file="header.tpl"}
<h2>Editar autor</h2>
    <form action='../../actualizar/autor' method="POST">
        <table>
            <tr>
                <td>Id:<input type="number" name="id" value="{$id}" readonly/></td>
            </tr>
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
        <input type="submit" name="editar" value="actualizar">
        <a href="../../administrar/autores">Cancelar</a>
    </form>
</body>
</html>