<?php
/* Smarty version 4.3.4, created on 2023-10-25 02:49:32
  from 'C:\xampp\htdocs\tp_especial\templates\renderEditarLibro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6538661c037196_86901960',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed97fdb078b3625edd532580365666e06273ef55' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp_especial\\templates\\renderEditarLibro.tpl',
      1 => 1698194968,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6538661c037196_86901960 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h2>Editar libro</h2>
    <form action='../../actualizar/libro' method='POST'>
        <table>
            <tr>
                <td>Id:<input type='number' name='id' value='<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
' readonly ></td>
            </tr>
            <tr>
                <td>Nombre del libro:<input type='text' name='newLibro' value='<?php echo $_smarty_tpl->tpl_vars['nombre_libro']->value;?>
'/></td>
            </tr>
            <tr>
                <td>Genero:<input type='text' name='newGenero' value='<?php echo $_smarty_tpl->tpl_vars['genero']->value;?>
'/></td>
            </tr>
            <tr>
                <td>Lanzamiento:<input type="number" min="1000" max="2099" name='newLanzamiento' value='<?php echo $_smarty_tpl->tpl_vars['lanzamiento']->value;?>
'/></td>
            </tr>
            <tr>
                <td><select name='id_autor' required >
                    <option selected><?php echo $_smarty_tpl->tpl_vars['nombre_autor']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['apellido']->value;?>
</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['autores']->value, 'autor');
$_smarty_tpl->tpl_vars['autor']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['autor']->value) {
$_smarty_tpl->tpl_vars['autor']->do_else = false;
?> 
                        <option value='<?php echo $_smarty_tpl->tpl_vars['autor']->value->ID;?>
'> <?php echo $_smarty_tpl->tpl_vars['autor']->value->Nombre_autor;?>
 <?php echo $_smarty_tpl->tpl_vars['autor']->value->Apellido;?>
 </option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                
                </select></td>
            </tr>
        </table>
        <input type='submit' value='editar'>
        <a href='../../administrar/libros'>Volver</a>
    </form>
</body>
    
</html><?php }
}
