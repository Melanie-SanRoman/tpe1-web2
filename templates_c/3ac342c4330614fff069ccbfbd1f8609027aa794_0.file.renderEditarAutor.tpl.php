<?php
/* Smarty version 4.3.4, created on 2023-10-25 03:35:33
  from 'C:\xampp\htdocs\tp_especial\templates\renderEditarAutor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_653870e5154a88_65659212',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ac342c4330614fff069ccbfbd1f8609027aa794' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp_especial\\templates\\renderEditarAutor.tpl',
      1 => 1698197720,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_653870e5154a88_65659212 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h2>Editar autor</h2>
    <form action='../../actualizar/autor' method="POST">
        <table>
            <tr>
                <td>Id:<input type="number" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" readonly/></td>
            </tr>
            <tr>
                <td>Nombre del autor:<input type="text" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['nombre_autor']->value;?>
"/></td>
            </tr>
            <tr>
                <td>Apellido del autor:<input type="text" name="apellido" value="<?php echo $_smarty_tpl->tpl_vars['apellido']->value;?>
"/></td>
            </tr>
            <tr>
                <td>Fecha de nacimiento:<input type="date" name="nacimiento" value="<?php echo $_smarty_tpl->tpl_vars['nacimiento']->value;?>
"/></td>
            </tr>
            <tr>
                <td>Nacionalidad:<input type="text" name="nacionalidad" value="<?php echo $_smarty_tpl->tpl_vars['nacionalidad']->value;?>
"/></td>
            </tr>
        </table>
        <input type="submit" name="editar" value="actualizar">
        <a href="../../administrar/autores">Cancelar</a>
    </form>
</body>
</html><?php }
}
