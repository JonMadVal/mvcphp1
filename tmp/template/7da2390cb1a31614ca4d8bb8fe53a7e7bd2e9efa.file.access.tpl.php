<?php /* Smarty version Smarty-3.1.8, created on 2014-04-20 21:24:16
         compiled from "C:\wamp\www\mvcphp1\views\error\access.tpl" */ ?>
<?php /*%%SmartyHeaderCode:140545354815090b590-93591962%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7da2390cb1a31614ca4d8bb8fe53a7e7bd2e9efa' => 
    array (
      0 => 'C:\\wamp\\www\\mvcphp1\\views\\error\\access.tpl',
      1 => 1397097089,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140545354815090b590-93591962',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mensaje' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_53548150a60bb8_55485070',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53548150a60bb8_55485070')) {function content_53548150a60bb8_55485070($_smarty_tpl) {?><h2><?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)){?> <?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
<?php }?></h2>
<p>&nbsp;</p>
<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
">Ir al Inicio</a> | 
<a href="javascript:history.back(1)">Volver a la p&aacute;gina anterior</a>
<?php if ((!Session::get('autenticado'))){?>
| <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
login">Iniciar Sesi&oacute;n</a>
<?php }?><?php }} ?>