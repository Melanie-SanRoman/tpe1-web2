{include file="header.tpl"}

<h2>Libros disponibles</h2>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre del libro</th>
                <th>Autor</th>
                <th>Consultas</th>
            </tr>
        </thead>
        <tbody>
            {foreach from=$libros item=libro}
                <tr>
                    <td>{$libro->id_libros}</td>
                    <td>{$libro->Nombre}</td>
                    <td>
                        {$libro->Nombre_autor}
                        {$libro->Apellido}
                    </td>
                    <td><a href="detalle/libros/{$libro->id_libros}">detalle</a></td>
                </tr>
            {/foreach}
        </tbody>
        <tfoot>
            <tr>
                <td>
                    <a href="home">Volver</a>
                </td>
            </tr>
        </tfoot>
    </table>
</body>
</html>