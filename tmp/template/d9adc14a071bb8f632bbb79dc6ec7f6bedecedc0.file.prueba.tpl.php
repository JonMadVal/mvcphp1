<?php /* Smarty version Smarty-3.1.8, created on 2014-06-15 09:11:07
         compiled from "C:\wamp\www\mvcphp1\views\post\prueba.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16853539da65aa61486-67148514%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9adc14a071bb8f632bbb79dc6ec7f6bedecedc0' => 
    array (
      0 => 'C:\\wamp\\www\\mvcphp1\\views\\post\\prueba.tpl',
      1 => 1402841463,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16853539da65aa61486-67148514',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_539da65ac528e9_79483269',
  'variables' => 
  array (
    'posts' => 0,
    'datos' => 0,
    'paginacion' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539da65ac528e9_79483269')) {function content_539da65ac528e9_79483269($_smarty_tpl) {?><h2>Prueba</h2>

<!-- div class="well well-small">
    <form id="form1" class="form-inline">
        Nombre: <input type="text" name="nombre" id="nombre">
        <button type="button" id="btnEnviar" class="btn"><i class="icon-search"></i></button>
        
        <br><br>
        
        <select id="pais"><option value=""> - seleccione pais - </option></select>
        <select id="ciudad"><option value=""> - seleccione ciudad - </option></select>
    </form>
</div -->

<div id="lista_registros">
<?php if (isset($_smarty_tpl->tpl_vars['posts']->value)&&count($_smarty_tpl->tpl_vars['posts']->value)){?> 
<table class="table table-bordered table-condensed table-striped">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['nombre'];?>
</td>
        
    </tr>
    <?php } ?>    
</table>
<?php }else{ ?>
<p><strong>No hay posts!</strong></p>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['paginacion']->value)){?><?php echo $_smarty_tpl->tpl_vars['paginacion']->value;?>
<?php }?>
</div><?php }} ?>