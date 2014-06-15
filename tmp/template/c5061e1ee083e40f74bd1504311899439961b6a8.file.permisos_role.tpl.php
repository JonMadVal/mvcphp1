<?php /* Smarty version Smarty-3.1.8, created on 2014-06-15 09:33:16
         compiled from "C:\wamp\www\mvcphp1\views\acl\permisos_role.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13605535475cdc1b087-64049467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5061e1ee083e40f74bd1504311899439961b6a8' => 
    array (
      0 => 'C:\\wamp\\www\\mvcphp1\\views\\acl\\permisos_role.tpl',
      1 => 1402842787,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13605535475cdc1b087-64049467',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_535475cdec1493_92307632',
  'variables' => 
  array (
    'role' => 0,
    'permisos' => 0,
    'pr' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535475cdec1493_92307632')) {function content_535475cdec1493_92307632($_smarty_tpl) {?><h2>Gestión de permisos de role</h2>
<h3>Role: <?php echo $_smarty_tpl->tpl_vars['role']->value['role'];?>
</h3>
<p>Permisos: </p> 
<form name="form1" method="post" action="">
    <input type="hidden" value="1" name="guardar" />
    <?php if (isset($_smarty_tpl->tpl_vars['permisos']->value)&&count($_smarty_tpl->tpl_vars['permisos']->value)){?>
    <table class="table table-bordered table-condensed table-striped" style="width: 500px;">
        <tr>
            <th>Permiso</th>
            <th style="text-align: center;">Habilitado</th>
            <th style="text-align: center;">Denegado</th>
            <th style="text-align: center;">Ignorar</th>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['pr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['permisos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pr']->key => $_smarty_tpl->tpl_vars['pr']->value){
$_smarty_tpl->tpl_vars['pr']->_loop = true;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['pr']->value['nombre'];?>
</td>
                <td style="text-align: center;"><input type="radio" name="perm_<?php echo $_smarty_tpl->tpl_vars['pr']->value['id'];?>
" value="1" <?php if (($_smarty_tpl->tpl_vars['pr']->value['valor']==1)){?>checked="checked" <?php }?>/></td>
                <td style="text-align: center;"><input type="radio" name="perm_<?php echo $_smarty_tpl->tpl_vars['pr']->value['id'];?>
" value="" <?php if ($_smarty_tpl->tpl_vars['pr']->value['valor']==''){?>checked="checked" <?php }?>></td>
                <td style="text-align: center;"><input type="radio" name="perm_<?php echo $_smarty_tpl->tpl_vars['pr']->value['id'];?>
" value="x" <?php if ($_smarty_tpl->tpl_vars['pr']->value['valor']==="x"){?>checked="checked" <?php }?>></td>
            </tr>
        <?php } ?>
    </table>
    <?php }?>
    <p><button type="submit" class="btn btn-primary"><i class="icon-ok icon-white"> </i> Guardar</button></p>
</form>
<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/roles">Retornar</a>    <?php }} ?>