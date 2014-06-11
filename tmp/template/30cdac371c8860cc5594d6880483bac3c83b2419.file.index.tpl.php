<?php /* Smarty version Smarty-3.1.8, created on 2014-04-20 20:51:46
         compiled from "C:\wamp\www\mvcphp1\views\login\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10438535479b2eed445-29295116%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30cdac371c8860cc5594d6880483bac3c83b2419' => 
    array (
      0 => 'C:\\wamp\\www\\mvcphp1\\views\\login\\index.tpl',
      1 => 1397097676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10438535479b2eed445-29295116',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_535479b30a14c4_74956695',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535479b30a14c4_74956695')) {function content_535479b30a14c4_74956695($_smarty_tpl) {?><h2>Iniciar Sesi&oacute;n</h2>
<form name="form1" method="post" action="">
    <input type="hidden" value="1" name="enviar" />
    <p>
        <label>Usuario: </label>
        <input type="text" name="usuario" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['usuario'])===null||$tmp==='' ? '' : $tmp);?>
" />
    </p>
    <p>
        <label>Password: </label>
        <input type="password" name="pass" />
    </p>
    
    <p>
        <input type="submit" value="Iniciar Seccion" class="button"  />
    </p>
</form><?php }} ?>