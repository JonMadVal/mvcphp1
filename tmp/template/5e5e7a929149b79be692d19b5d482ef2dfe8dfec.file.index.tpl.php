<?php /* Smarty version Smarty-3.1.8, created on 2014-06-15 09:28:06
         compiled from "C:\wamp\www\mvcphp1\modules\usuarios\views\login\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:133235354a5e9bf9155-56112294%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e5e7a929149b79be692d19b5d482ef2dfe8dfec' => 
    array (
      0 => 'C:\\wamp\\www\\mvcphp1\\modules\\usuarios\\views\\login\\index.tpl',
      1 => 1402842377,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133235354a5e9bf9155-56112294',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5354a5e9cfed07_71290359',
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5354a5e9cfed07_71290359')) {function content_5354a5e9cfed07_71290359($_smarty_tpl) {?><style type="text/css">
    table.table td { vertical-align: middle; }
    table.table td input { margin: 0; }
</style>
<h2>Iniciar Sesi&oacute;n</h2>
<form name="form1" method="post" action="">
    <input type="hidden" value="1" name="enviar" />
    <table class="table table-bordered" style="width: 350px;">
        <tr>
            <td style="text-align: right;">Usuario: </td>
            <td><input type="text" name="usuario" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['usuario'])===null||$tmp==='' ? '' : $tmp);?>
" /></td>
        </tr>
        <tr>
            <td style="text-align: right;">Password: </td>
            <td><input type="password" name="pass" /></td>
        </tr>
    </table>
    <p><button type="submit" class="btn btn-primary"><li class="icon-ok icon-white"> </li> Entrar</button></p>
    
</form><?php }} ?>