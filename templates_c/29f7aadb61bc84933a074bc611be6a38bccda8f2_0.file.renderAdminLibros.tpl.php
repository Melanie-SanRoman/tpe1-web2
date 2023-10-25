<?php
/* Smarty version 4.3.4, created on 2023-10-25 02:48:03
  from 'C:\xampp\htdocs\tp_especial\templates\renderAdminLibros.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_653865c328dcd8_16121300',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29f7aadb61bc84933a074bc611be6a38bccda8f2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp_especial\\templates\\renderAdminLibros.tpl',
      1 => 1698194881,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_653865c328dcd8_16121300 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['libros']->value, 'libro');
$_smarty_tpl->tpl_vars['libro']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['libro']->value) {
$_smarty_tpl->tpl_vars['libro']->do_else = false;
?>
                <tr>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['libro']->value->id_libros;?>

                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['libro']->value->Nombre;?>

                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['libro']->value->Genero;?>

                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['libro']->value->Lanzamiento;?>

                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['libro']->value->id_autor;?>

                    </td>
                    <td>
                        <a href="../editar/libro/<?php echo $_smarty_tpl->tpl_vars['libro']->value->id_libros;?>
">Editar</a>
                        <a href="../eliminar/libro/<?php echo $_smarty_tpl->tpl_vars['libro']->value->id_libros;?>
">Eliminar</a>
                    </td>
                </tr>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

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
</html><?php }
}
