<?php /* Smarty version Smarty-3.1.8, created on 2014-04-20 20:35:04
         compiled from "C:\wamp\www\mvcphp1\views\acl\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11919535475c88aab82-71788396%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef7c16b192480120bc91e4f449b26977b9074b95' => 
    array (
      0 => 'C:\\wamp\\www\\mvcphp1\\views\\acl\\index.tpl',
      1 => 1337956582,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11919535475c88aab82-71788396',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_535475c8a06251_96174084',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535475c8a06251_96174084')) {function content_535475c8a06251_96174084($_smarty_tpl) {?><h2>Listas de Acceso</h2>

<ul>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/roles">Administración de roles</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/permisos">Administración de permisos</a></li>
</ul>
<?php }} ?>