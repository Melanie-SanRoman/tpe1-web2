{include file="header.tpl"}
<h2>Libros para administrar</h2>
    <table>
        <thead>
            <tr>
                <th>Id_libro</th>
                <th>Nombre del libro</th>
                <th>Genero</th>
                <th>Lanzamiento</th>
                <th>Id_autor</th>
                <th>Consultas</th>
            </tr>
        </thead>
        <tbody>
            {foreach from=$libros item=libro}
                <tr>
                    <td>
                        {$libro->id_libros}
                    </td>
                    <td>
                        {$libro->Nombre}
                    </td>
                    <td>
                        {$libro->Genero}
                    </td>
                    <td>
                        {$libro->Lanzamiento}
                    </td>
                    <td>
                        {$libro->id_autor}
                    </td>
                    <td>
                        <a href="../editar/libro/{$libro->id_libros}">Editar</a>
                        <a href="../eliminar/libro/{$libro->id_libros}">Eliminar</a>
                    </td>
                </tr>

            {/foreach}

        </tbody>
        <tfoot>
            <tr>
                <td>
                    <form action="../agregar/libro" method="post">
                        <input type="submit" value="Agregar libro" name="agregarLibro">
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