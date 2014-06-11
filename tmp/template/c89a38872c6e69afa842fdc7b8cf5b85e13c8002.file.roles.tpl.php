<?php /* Smarty version Smarty-3.1.8, created on 2014-04-20 20:35:07
         compiled from "C:\wamp\www\mvcphp1\views\acl\roles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5404535475cb645071-80073164%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c89a38872c6e69afa842fdc7b8cf5b85e13c8002' => 
    array (
      0 => 'C:\\wamp\\www\\mvcphp1\\views\\acl\\roles.tpl',
      1 => 1398042618,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5404535475cb645071-80073164',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'roles' => 0,
    'rl' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_535475cb880745_81673960',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535475cb880745_81673960')) {function content_535475cb880745_81673960($_smarty_tpl) {?><h2>Administración de Roles</h2>

<?php if (isset($_smarty_tpl->tpl_vars['roles']->value)&&count($_smarty_tpl->tpl_vars['roles']->value)){?>
<table>
    <tr>
        <th>ID</th>
        <th>Role</th>
        <th>Permiso</th>
        <th></th>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['rl'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rl']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['roles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rl']->key => $_smarty_tpl->tpl_vars['rl']->value){
$_smarty_tpl->tpl_vars['rl']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['rl']->value['id_role'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['rl']->value['role'];?>
</td>
            <td>
                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/permisos_role/<?php echo $_smarty_tpl->tpl_vars['rl']->value['id_role'];?>
">
                    Permisos
                </a>
            </td>
            <td>Editar</td>
        </tr>
    <?php } ?>
</table>
<?php }?>

<p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/nuevo_role">Agregar Role</a></p>
<p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl">Retornar</a></p>    <?php }} ?>