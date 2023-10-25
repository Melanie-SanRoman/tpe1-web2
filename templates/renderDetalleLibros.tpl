{include file="header.tpl"}
<h2>Detalle de libro seleccionado</h2>
<table>
        <thead>
            <tr>
                <th>Id Libro</th>
                <th>Nombre del libro</th>
                <th>Genero</th>
                <th>Lanzamiento</th>
                <th>Autor</th>
                <th>Fecha de nacimiento</th>
                <th>Nacionalidad</th>
                <th>Id_autor</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            {foreach from=$detalleLibros item=libro}
                <tr>
                    <td> {$libro->id_libros}</td>
                    <td> {$libro->Nombre}</td>
                    <td> {$libro->Genero}</td>
                    <td> {$libro->Lanzamiento}</td>
                    <td> 
                        {$libro->Nombre_autor}
                        {$libro->Apellido}
                    </td>
                    <td> {$libro->Fecha_de_nacimiento}</td>
                    <td> {$libro->Nacionalidad}</td>
                    <td> {$libro->id_autor}</td>
                </tr>

            {/foreach}

        </tbody>
        <tfoot>
            <tr>
                <td>
                    <a href="../../libros">Volver</a>
                </td>
            </tr>
        </tfoot>
    </table>