<?php /* Smarty version Smarty-3.1.8, created on 2014-06-15 09:39:03
         compiled from "C:\wamp\www\mvcphp1\views\ajax\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6963539d39c378f5e2-88236370%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe4a91e49bf15f733becf11f69f3cbcfc8a7d291' => 
    array (
      0 => 'C:\\wamp\\www\\mvcphp1\\views\\ajax\\index.tpl',
      1 => 1402843139,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6963539d39c378f5e2-88236370',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_539d39c3baf746_32603548',
  'variables' => 
  array (
    'paises' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539d39c3baf746_32603548')) {function content_539d39c3baf746_32603548($_smarty_tpl) {?><h2>Ejemplo de AJAX</h2>
<form>
    <table class="table table-bordered" style="width: 400px;">    
        <tr>
            <td style="text-align: right;">Pais:</td>
            <td>
                <select id="pais" >
                    <option value=""> -seleccione- </option>
                    <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['paises']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['pais'];?>
</option>
                    <?php } ?>
                </select>            
            </td>
        <tr>
            <td style="text-align: right;">Ciudad: </td>
            <td><select id="ciudad"></select></td>
        </tr>
        <tr>
            <td style="text-align: right; vertical-align: middle;">Ciudad a insertar: </td>
            <td><input type="text" id="ins_ciudad" /></td>
        </tr>
    </table>
    
    <p><button id="btn_insertar" class="btn btn-primary"><i class="icon-plus-sign icon-white"></i> Insertar</button></p>
 
</form><?php }} ?>