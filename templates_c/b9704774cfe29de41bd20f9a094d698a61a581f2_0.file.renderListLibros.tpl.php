<?php
/* Smarty version 4.3.4, created on 2023-10-24 17:14:50
  from 'C:\xampp\htdocs\tp_especial\templates\renderListLibros.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6537df6a2a3d61_43208131',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9704774cfe29de41bd20f9a094d698a61a581f2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp_especial\\templates\\renderListLibros.tpl',
      1 => 1698160483,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6537df6a2a3d61_43208131 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['libros']->value, 'libro');
$_smarty_tpl->tpl_vars['libro']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['libro']->value) {
$_smarty_tpl->tpl_vars['libro']->do_else = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['libro']->value->id_libros;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['libro']->value->Nombre;?>
</td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['libro']->value->Nombre_autor;?>

                        <?php echo $_smarty_tpl->tpl_vars['libro']->value->Apellido;?>

                    </td>
                    <td><a href="detalle/libros/<?php echo $_smarty_tpl->tpl_vars['libro']->value->id_libros;?>
">detalle</a></td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
</html><?php }
}
