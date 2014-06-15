<?php /* Smarty version Smarty-3.1.8, created on 2014-06-15 09:27:55
         compiled from "C:\wamp\www\mvcphp1\modules\usuarios\views\registro\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:130325354a5f8eb3807-24580831%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59e48c767427b2c4e7c78beaaad0a64628e9932e' => 
    array (
      0 => 'C:\\wamp\\www\\mvcphp1\\modules\\usuarios\\views\\registro\\index.tpl',
      1 => 1402842465,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130325354a5f8eb3807-24580831',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5354a5f90cae73_92232942',
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5354a5f90cae73_92232942')) {function content_5354a5f90cae73_92232942($_smarty_tpl) {?><h2>Registro</h2>

<form name="form1" method="post" action="">
    <input type="hidden" value="1" name="enviar" />
    <p>
        <label>Nombre: </label>
        <input type="text" name="nombre" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['nombre'])===null||$tmp==='' ? '' : $tmp);?>
" />
    </p>
    
    <p>
        <label>Usuario: </label>
        <input type="text" name="usuario" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['usuario'])===null||$tmp==='' ? '' : $tmp);?>
" />
    </p>
    
    <p>
        <label>Email: </label>
        <input type="text" name="email" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['email'])===null||$tmp==='' ? '' : $tmp);?>
" />
    </p>
    
    <p>
        <label>Password: </label>
        <input type="password" name="pass" />
    </p>
    <p>
        <label>Confirmar: </label>
        <input type="password" name="confirmar" />
    </p>    
    <p>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </p>
</form><?php }} ?>