<?php
/* Smarty version 4.3.4, created on 2023-10-24 21:41:20
  from 'C:\xampp\htdocs\tp_especial\templates\renderAdministradores.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65381de01105f0_89573876',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6fa69057fcbc1839e34439611b215b92d8fb7a27' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp_especial\\templates\\renderAdministradores.tpl',
      1 => 1698176478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_65381de01105f0_89573876 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <h2>Bienvenido administrador</h2> //usuario, todavia no se como ponerlo :(
    <h4>Administra libros y/o autores</h4>

    <ul>
        <li><a href="administrar/libros">Libros</li>
        <li><a href="administrar/autores">Autores</li>
    </ul>
    
    <a href="logout">Cerrar Sesion</a>

</body>
</html><?php }
}
