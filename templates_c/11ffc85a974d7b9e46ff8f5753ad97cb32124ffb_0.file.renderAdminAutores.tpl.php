<?php
/* Smarty version 4.3.4, created on 2023-10-25 02:47:38
  from 'C:\xampp\htdocs\tp_especial\templates\renderAdminAutores.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_653865aa851193_29202769',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11ffc85a974d7b9e46ff8f5753ad97cb32124ffb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp_especial\\templates\\renderAdminAutores.tpl',
      1 => 1698194855,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_653865aa851193_29202769 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h2>Autores para administrar</h2>
    <table>
        <thead>
            <tr>
                <th>Id_autor</th>
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
                        <a href="../editar/autor/<?php echo $_smarty_tpl->tpl_vars['autor']->value->ID;?>
">Editar</a>
                        <a href="../eliminar/autor/<?php echo $_smarty_tpl->tpl_vars['autor']->value->ID;?>
">Eliminar</a>
                    </td>
                </tr>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </tbody>
        <tfoot>
            <tr>
                <td>
                    <form action="../agregar/autor" method="post">
                        <input type="submit" value="Agregar autor" name="agregarAutor">
                    </form>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="../administradores">Volver</a>
                </td>
            </tr>
        </tfoot>
    </table>
</body>
</html><?php }
}
