{include file="header.tpl"}
<h2>Autores disponibles</h2>
    <table>
        <thead>
            <tr>
                <th>Id</th>
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
                        <a href="detalle/autores/{$autor->ID}">ver libros</a>
                    </td>
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