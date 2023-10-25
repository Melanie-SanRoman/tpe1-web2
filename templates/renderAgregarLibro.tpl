{include file="header.tpl"}

<h1>Agregar nueva libro</h1>

<form action='libro/insertar' method='POST'>
<table>
    <thead>
        <tr>
            <th>Nombre del libro:</th>
            <th>Genero:</th>
            <th>Lanzamiento:</th>
            <th>Autor:</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><input type='text' name='nombre' required/></td>
            <td><input type='text' name='genero' required/></td>
            <td><input type='number' min='1000' max='2099' name='lanzamiento' required/></td>
            <td><select name='autor' required >
                <option selected>Seleccionar autor</option>
                {foreach from=$autores item=autor}
                    <option value='{$autor->ID}'> {$autor->Nombre_autor} {$autor->Apellido}</option>
                {/foreach}
    
            </select></td>
        </tr>
        </tbody>
    </table>
    <input type='submit' name='agregar' value='Agregar libro'>
    <a href='../administrar/libros'>Cancelar</a>
    </form>
</body>

</html>