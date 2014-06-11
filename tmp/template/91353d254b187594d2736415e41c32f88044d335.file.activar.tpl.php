<?php /* Smarty version Smarty-3.1.8, created on 2014-04-21 00:10:04
         compiled from "C:\wamp\www\mvcphp1\modules\usuarios\views\registro\activar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19585354a7acb87af7-81639037%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91353d254b187594d2736415e41c32f88044d335' => 
    array (
      0 => 'C:\\wamp\\www\\mvcphp1\\modules\\usuarios\\views\\registro\\activar.tpl',
      1 => 1398056967,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19585354a7acb87af7-81639037',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5354a7accf54b4_44805868',
  'variables' => 
  array (
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5354a7accf54b4_44805868')) {function content_5354a7accf54b4_44805868($_smarty_tpl) {?><h2>Activaci&oacute;n de Cuenta</h2>
<p> </p>
<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
">Ir al Inicio</a>
<?php if (!Session::get('autenticado')){?>
	| <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/login">Iniciar Sesi&oacute;n</a>
<?php }?><?php }} ?>