<?php
/* Smarty version 4.3.4, created on 2023-10-25 02:04:19
  from 'C:\xampp\htdocs\tp_especial\templates\renderAgregarLibro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65385b83119148_64633005',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d626127ebd829768b1d3f4fc808097e8f816417' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp_especial\\templates\\renderAgregarLibro.tpl',
      1 => 1698192255,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_65385b83119148_64633005 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
            <td><input type='text' name='nombre' /></td>
            <td><input type='text' name='genero' /></td>
            <td><input type='number' min='1000' max='2099' name='lanzamiento' /></td>
            <td><select name='autor' required >
                <option selected>Seleccionar autor</option>
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
        </tbody>
    </table>
    <input type='submit' name='agregar' value='Agregar libro'>
    <a href='../administrar/libros'>Cancelar</a>
    </form>
</body>

</html><?php }
}
