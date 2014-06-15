<?php /* Smarty version Smarty-3.1.8, created on 2014-06-15 08:41:39
         compiled from "C:\wamp\www\mvcphp1\views\post\nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28993535481505f3301-62348127%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b8ffc2468374466b68162a840bc73a991dae0cc' => 
    array (
      0 => 'C:\\wamp\\www\\mvcphp1\\views\\post\\nuevo.tpl',
      1 => 1402839696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28993535481505f3301-62348127',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5354815077c361_90412836',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5354815077c361_90412836')) {function content_5354815077c361_90412836($_smarty_tpl) {?><p> </p>  
<form id="form1" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
post/nuevo" enctype="multipart/form-data">
    <input type="hidden" name="guardar" value="1" />
    <table class="table table-bordered" style="width: 350px;">
        <tr>
            <td style="text-align: right;">Titulo: </td>
            <td><input type="texto" name="titulo" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['titulo'])===null||$tmp==='' ? '' : $tmp);?>
" /></td> 
        </tr>
        <tr>
            <td style="text-align: right;">Cuerpo: </td>
            <td><textarea cols="45" rows="4" name="cuerpo"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['cuerpo'])===null||$tmp==='' ? '' : $tmp);?>
</textarea></td> 
        </tr>
        <tr>
            <td colspan="4">
                Imagen: <input type="file" name="imagen" />
            </td>
        </tr>
    </table>
    <p><button class="btn btn-primary"><i class="icon-ok icon-white"> </i> Guardar</button></p>    
</form>    <?php }} ?>