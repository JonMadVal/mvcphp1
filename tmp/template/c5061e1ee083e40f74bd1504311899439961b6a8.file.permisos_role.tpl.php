<?php /* Smarty version Smarty-3.1.8, created on 2014-04-20 20:35:09
         compiled from "C:\wamp\www\mvcphp1\views\acl\permisos_role.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13605535475cdc1b087-64049467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5061e1ee083e40f74bd1504311899439961b6a8' => 
    array (
      0 => 'C:\\wamp\\www\\mvcphp1\\views\\acl\\permisos_role.tpl',
      1 => 1398042564,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13605535475cdc1b087-64049467',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'role' => 0,
    'permisos' => 0,
    'pr' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_535475cdec1493_92307632',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535475cdec1493_92307632')) {function content_535475cdec1493_92307632($_smarty_tpl) {?><h2>Gestión de permisos de role</h2>
<h3>Role: <?php echo $_smarty_tpl->tpl_vars['role']->value['role'];?>
</h3>
<p>Permisos: </p> 
<form name="form1" method="post" action="">
    <input type="hidden" value="1" name="guardar" />
    <?php if (isset($_smarty_tpl->tpl_vars['permisos']->value)&&count($_smarty_tpl->tpl_vars['permisos']->value)){?>
    <table>
        <tr>
            <th>Permiso</th>
            <th>Habilitado</th>
            <th>Denegado</th>
            <th>Ignorar</th>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['pr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['permisos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pr']->key => $_smarty_tpl->tpl_vars['pr']->value){
$_smarty_tpl->tpl_vars['pr']->_loop = true;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['pr']->value['nombre'];?>
</td>
                <td><input type="radio" name="perm_<?php echo $_smarty_tpl->tpl_vars['pr']->value['id'];?>
" value="1" <?php if (($_smarty_tpl->tpl_vars['pr']->value['valor']==1)){?>checked="checked" <?php }?>/></td>
                <td><input type="radio" name="perm_<?php echo $_smarty_tpl->tpl_vars['pr']->value['id'];?>
" value="" <?php if ($_smarty_tpl->tpl_vars['pr']->value['valor']==''){?>checked="checked" <?php }?>></td>
                <td><input type="radio" name="perm_<?php echo $_smarty_tpl->tpl_vars['pr']->value['id'];?>
" value="x" <?php if ($_smarty_tpl->tpl_vars['pr']->value['valor']==="x"){?>checked="checked" <?php }?>></td>
            </tr>
        <?php } ?>
    </table>
    <?php }?>
    <p><input type="submit" value="Guardar" class="button"  /></p>
</form>
<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/roles">Retornar</a>    <?php }} ?>