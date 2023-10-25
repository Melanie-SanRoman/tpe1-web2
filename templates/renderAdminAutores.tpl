{include file="header.tpl"}
<h2>Autores para administrar</h2>
    <table>
        <thead>
            <tr>
                <th>Id_autor</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha de nacimiento</th>
                <th>Nacionalidad</th>
                <th>Consultas</th>
            </tr>
        </thead>
        <tbody>
            {foreach from=$autores item=autor}
                <tr>
                    <td>
                        {$autor->ID}
                    </td>
                    <td>
                        {$autor->Nombre_autor}
                    </td>
                    <td>
                        {$autor->Apellido}
                    </td>
                    <td>
                        {$autor->Fecha_de_nacimiento}
                    </td>
                    <td>
                        {$autor->Nacionalidad}
                    </td>
                    <td>
                        <a href="../editar/autor/{$autor->ID}">Editar</a>
                        <a href="../eliminar/autor/{$autor->ID}">Eliminar</a>
                    </td>
                </tr>

            {/foreach}

        </tbody>
        <tfoot>
            <tr>
                <td>
                    <form action="../agregar/autor" method="post">
                        <input type="submit" value="Agregar autor" name="agregarAutor">
                    </form>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="../administradores">Volver</a>
                </td>
            </tr>
        </tfoot>
    </table>
</body>
</html>