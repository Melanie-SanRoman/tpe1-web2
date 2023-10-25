{include file="header.tpl"}
<h2>Editar libro</h2>
    <form action='../../actualizar/libro' method='POST'>
        <table>
            <tr>
                <td>Id:<input type='number' name='id' value='{$id}' readonly ></td>
            </tr>
            <tr>
                <td>Nombre del libro:<input type='text' name='newLibro' value='{$nombre_libro}'/></td>
            </tr>
            <tr>
                <td>Genero:<input type='text' name='newGenero' value='{$genero}'/></td>
            </tr>
            <tr>
                <td>Lanzamiento:<input type="number" min="1000" max="2099" name='newLanzamiento' value='{$lanzamiento}'/></td>
            </tr>
            <tr>
                <td><select name='id_autor' required >
                    <option selected>{$nombre_autor} {$apellido}</option>
                    {foreach from=$autores item=autor} 
                        <option value='{$autor->ID}'> {$autor->Nombre_autor} {$autor->Apellido} </option>
                    {/foreach}
                
                </select></td>
            </tr>
        </table>
        <input type='submit' value='editar'>
        <a href='../../administrar/libros'>Volver</a>
    </form>
</body>
    
</html>