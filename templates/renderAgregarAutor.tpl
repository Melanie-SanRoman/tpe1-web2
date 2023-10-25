{include file="header.tpl"}

<h1>Agregar nuevo autor</h1>
<form action="autor/insertar" method="POST">
        <table>
            <tr>
                <td>Nombre del autor:<input type="text" name="nombre" value="" required/></td>
            </tr>
            <tr>
                <td>Apellido del Autor:<input type="text" name="apellido" value="" required/></td>
            </tr>
            <tr>
                <td>Fecha de nacimiento:<input type="date" name="nacimiento" value="" required/></td>
            </tr>
            <tr>
                <td>Nacionalidad:<input type="text" name="nacionalidad" value="" required/></td>
            </tr>
           
        </table>
        <input type="submit" name="agregar" value="Agregar autor">
        <a href="../administrar/autores">Cancelar</a>
    </form>