<?php
/* Smarty version 4.3.4, created on 2023-10-24 19:41:40
  from 'C:\xampp\htdocs\tp_especial\templates\renderDetalleLibros.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_653801d40657c7_57218705',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c286feee6b46ab293541d780a7fb729ae01d977' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp_especial\\templates\\renderDetalleLibros.tpl',
      1 => 1698169298,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_653801d40657c7_57218705 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['detalleLibros']->value, 'libro');
$_smarty_tpl->tpl_vars['libro']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['libro']->value) {
$_smarty_tpl->tpl_vars['libro']->do_else = false;
?>
                <tr>
                    <td> <?php echo $_smarty_tpl->tpl_vars['libro']->value->id_libros;?>
</td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['libro']->value->Nombre;?>
</td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['libro']->value->Genero;?>
</td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['libro']->value->Lanzamiento;?>
</td>
                    <td> 
                        <?php echo $_smarty_tpl->tpl_vars['libro']->value->Nombre_autor;?>

                        <?php echo $_smarty_tpl->tpl_vars['libro']->value->Apellido;?>

                    </td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['libro']->value->Fecha_de_nacimiento;?>
</td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['libro']->value->Nacionalidad;?>
</td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['libro']->value->id_autor;?>
</td>
                </tr>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </tbody>
        <tfoot>
            <tr>
                <td>
                    <a href="../../libros">Volver</a>
                </td>
            </tr>
        </tfoot>
    </table><?php }
}
