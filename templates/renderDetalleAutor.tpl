{include file="header.tpl"}   
<h2>Libros del autor {$autor}</h2> 
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre del libro</th>
                <th>Genero</th>
                <th>Lanzamiento</th>
            </tr>
        </thead>
        <tbody>
           {foreach from=$detalleAutor item=libro}
                <tr>
                    <td> {$libro->id_libros} </td>
                    <td> {$libro->Nombre} </td>
                    <td> {$libro->Genero} </td>
                    <td> {$libro->Lanzamiento} </td>
                </tr>

            {/foreach}
        </tbody>
        <tfoot>
            <tr>
                <td>
                    <a href="../../autores">Volver</a>
                </td>
            </tr>
        </tfoot>
    </table>
</body>
</html>