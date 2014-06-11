<?php /* Smarty version Smarty-3.1.8, created on 2014-04-20 20:35:28
         compiled from "C:\wamp\www\mvcphp1\views\usuarios\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9387535475e0d11b28-88836842%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b681f1061f639ada2074e8c0f7da6e0e5fdfd639' => 
    array (
      0 => 'C:\\wamp\\www\\mvcphp1\\views\\usuarios\\index.tpl',
      1 => 1398044074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9387535475e0d11b28-88836842',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'usuarios' => 0,
    'us' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_535475e0f2d4e4_37180649',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535475e0f2d4e4_37180649')) {function content_535475e0f2d4e4_37180649($_smarty_tpl) {?><h2>Usuarios</h2>
<?php if (isset($_smarty_tpl->tpl_vars['usuarios']->value)&&count($_smarty_tpl->tpl_vars['usuarios']->value)){?>
    <table>
        <tr><td>ID</td>
            <td>Usuario</td>
            <td>Role</td>
            <td></td>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['us'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['us']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['us']->key => $_smarty_tpl->tpl_vars['us']->value){
$_smarty_tpl->tpl_vars['us']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['us']->value['id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['us']->value['usuario'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['us']->value['role'];?>
</td>
            <td>
                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/permisos/<?php echo $_smarty_tpl->tpl_vars['us']->value['id'];?>
">
                   Permisos
                </a>
            </td>
        </tr>
        <?php } ?>
    </table>
<?php }?>
<p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
">Retornar</a></p>  <?php }} ?>