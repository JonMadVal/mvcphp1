<?php /* Smarty version Smarty-3.1.8, created on 2014-04-21 00:00:25
         compiled from "C:\wamp\www\mvcphp1\modules\usuarios\views\login\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:133235354a5e9bf9155-56112294%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e5e7a929149b79be692d19b5d482ef2dfe8dfec' => 
    array (
      0 => 'C:\\wamp\\www\\mvcphp1\\modules\\usuarios\\views\\login\\index.tpl',
      1 => 1397097676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133235354a5e9bf9155-56112294',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5354a5e9cfed07_71290359',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5354a5e9cfed07_71290359')) {function content_5354a5e9cfed07_71290359($_smarty_tpl) {?><h2>Iniciar Sesi&oacute;n</h2>
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