<?php
/* Smarty version 4.3.4, created on 2023-10-24 20:56:04
  from 'C:\xampp\htdocs\tp_especial\templates\renderHome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_653813443f3451_70298521',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c32a3ee96171e113286621c9b3bb80a7ffa7d3b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp_especial\\templates\\renderHome.tpl',
      1 => 1698173476,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_653813443f3451_70298521 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <ul>
        <li><a href="libros">Ver listado de libros</a></li>
        <li><a href="autores">Ver listado de autores</a></li>
    </ul>

    <h1>Iniciar Sesion</h1>

    <form action="login"  method="post">
        <input type="text" name="user" placeholder="Usuario">
        <input type="password" name="pass" placeholder="Contraseña">
        <input type="submit" name="login" value="Login">
    </form>
    <h4>No tienes una cuenta? <a href="register">Registrarse</a></h4>

</body>
</html><?php }
}
