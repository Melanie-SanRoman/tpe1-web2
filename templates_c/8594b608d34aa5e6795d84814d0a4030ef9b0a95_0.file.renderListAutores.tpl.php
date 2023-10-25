<?php
/* Smarty version 4.3.4, created on 2023-10-24 17:29:43
  from 'C:\xampp\htdocs\tp_especial\templates\renderListAutores.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6537e2e7311504_91330328',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8594b608d34aa5e6795d84814d0a4030ef9b0a95' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp_especial\\templates\\renderListAutores.tpl',
      1 => 1698161382,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6537e2e7311504_91330328 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h2>Autores disponibles</h2>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha de nacimiento</th>
                <th>Nacionalidad</th>
                <th>Consultas</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['autores']->value, 'autor');
$_smarty_tpl->tpl_vars['autor']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['autor']->value) {
$_smarty_tpl->tpl_vars['autor']->do_else = false;
?>
                <tr>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['autor']->value->ID;?>

                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['autor']->value->Nombre_autor;?>

                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['autor']->value->Apellido;?>

                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['autor']->value->Fecha_de_nacimiento;?>

                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['autor']->value->Nacionalidad;?>

                    </td>
                    <td>
                        <a href="detalle/autores/<?php echo $_smarty_tpl->tpl_vars['autor']->value->ID;?>
">ver libros</a>
                    </td>
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
