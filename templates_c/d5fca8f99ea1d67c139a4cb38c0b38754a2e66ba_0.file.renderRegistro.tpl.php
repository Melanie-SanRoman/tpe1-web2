<?php
/* Smarty version 4.3.4, created on 2023-10-25 02:38:42
  from 'C:\xampp\htdocs\tp_especial\templates\renderRegistro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_653863924416e0_37665410',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5fca8f99ea1d67c139a4cb38c0b38754a2e66ba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp_especial\\templates\\renderRegistro.tpl',
      1 => 1698194317,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_653863924416e0_37665410 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <h1>Crear cuenta</h1>

    <form action="registrar" method="post">
        Nombre:<input type="text" name="nombre" placeholder="Ingrese su nombre" required>
        Apellido:<input type="text" name="apellido" placeholder="Ingrese su apellido" >
        Email:<input type="text" name="email" placeholder="Ingrese su email" >
        Contraseña:<input type="password" name="password" placeholder="Ingrese su contraseña">
        <input type="submit" name="boton" value="Registrar">
    </form>

    <a href="home">Cancelar</a>
</body>
</html><?php }
}
