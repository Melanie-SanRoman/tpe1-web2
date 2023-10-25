<?php
/* Smarty version 4.3.4, created on 2023-10-25 02:51:01
  from 'C:\xampp\htdocs\tp_especial\templates\renderAgregarAutor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_653866754616f3_32635101',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97b569c6377f78009b53a879dbdd7e19f03624a0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp_especial\\templates\\renderAgregarAutor.tpl',
      1 => 1698195049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_653866754616f3_32635101 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
    </form><?php }
}
