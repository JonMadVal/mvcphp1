<?php /* Smarty version Smarty-3.1.8, created on 2014-04-20 23:58:32
         compiled from "C:\wamp\www\mvcphp1\modules\usuarios\views\index\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:92555354a3922302d5-77787799%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd048c072c66cba6694db20e2e70ebc8920cca15a' => 
    array (
      0 => 'C:\\wamp\\www\\mvcphp1\\modules\\usuarios\\views\\index\\index.tpl',
      1 => 1398056299,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92555354a3922302d5-77787799',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5354a392455839_45047021',
  'variables' => 
  array (
    'usuarios' => 0,
    'us' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5354a392455839_45047021')) {function content_5354a392455839_45047021($_smarty_tpl) {?><h2>Usuarios</h2>
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
usuarios/index/permisos/<?php echo $_smarty_tpl->tpl_vars['us']->value['id'];?>
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