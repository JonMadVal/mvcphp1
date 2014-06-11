<?php /* Smarty version Smarty-3.1.8, created on 2014-04-20 20:35:38
         compiled from "C:\wamp\www\mvcphp1\views\post\editar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32417535475eab4e557-49994311%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9cf8e1f9bd647fedd1f0e40d4bae5910d07beb4e' => 
    array (
      0 => 'C:\\wamp\\www\\mvcphp1\\views\\post\\editar.tpl',
      1 => 1397525058,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32417535475eab4e557-49994311',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_535475ead49180_90206128',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535475ead49180_90206128')) {function content_535475ead49180_90206128($_smarty_tpl) {?><form id="form1" method="post" action="">
    <input type="hidden" name="guardar" value="1" />
    <p>Titulo:<br />
    <input type="texto" name="titulo" value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value['titulo'])){?><?php echo $_smarty_tpl->tpl_vars['datos']->value['titulo'];?>
<?php }?>" /></p>
    <p>Cuerpo:<br />
    <textarea cols="45" rows="4" name="cuerpo"><?php if (isset($_smarty_tpl->tpl_vars['datos']->value['cuerpo'])){?><?php echo $_smarty_tpl->tpl_vars['datos']->value['cuerpo'];?>
<?php }?></textarea></p>
    <p><input type="submit" class="button" value="Editar" /></p>
</form>
     <?php }} ?>