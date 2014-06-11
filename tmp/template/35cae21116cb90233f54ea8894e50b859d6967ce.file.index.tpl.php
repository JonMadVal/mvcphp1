<?php /* Smarty version Smarty-3.1.8, created on 2014-04-20 20:34:55
         compiled from "C:\wamp\www\mvcphp1\views\index\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18926535475bf36e970-80683850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35cae21116cb90233f54ea8894e50b859d6967ce' => 
    array (
      0 => 'C:\\wamp\\www\\mvcphp1\\views\\index\\index.tpl',
      1 => 1398042370,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18926535475bf36e970-80683850',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_acl' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_535475bf3fcbf2_78396954',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535475bf3fcbf2_78396954')) {function content_535475bf3fcbf2_78396954($_smarty_tpl) {?><h2>Bienvenido a mi Aplicacion</h2>
<?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('admin_access')){?>   
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl">Lista de Accesos</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios">Lista de Usuario</a></li>
<?php }?>
Es esta aplicacion se podra mostra como desarrollar una aplicacion web usando el patron "Modelo - Vista - Controlador ( MVC )" en un Framework propio.
<figure><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/responsive.jpg" /></figure><?php }} ?>