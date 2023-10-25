<?php
/* Smarty version 4.3.4, created on 2023-10-24 19:59:05
  from 'C:\xampp\htdocs\tp_especial\templates\renderDetalleAutor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_653805e99b22e8_51315944',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f98fa01f68c3ca999da7289d9ac2c3c04f41183a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp_especial\\templates\\renderDetalleAutor.tpl',
      1 => 1698170343,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_653805e99b22e8_51315944 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>   
<h2>Libros del autor <?php echo $_smarty_tpl->tpl_vars['autor']->value;?>
</h2> 
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre del libro</th>
                <th>Genero</th>
                <th>Lanzamiento</th>
            </tr>
        </thead>
        <tbody>
           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['detalleAutor']->value, 'libro');
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
                </tr>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
        <tfoot>
            <tr>
                <td>
                    <a href="../../autores">Volver</a>
                </td>
            </tr>
        </tfoot>
    </table>
</body>
</html><?php }
}
