<?php /* Smarty version Smarty-3.1.8, created on 2014-06-15 18:10:46
         compiled from "C:\wamp\www\mvcphp1\views\post\ajax\prueba.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28796539e2354ecda33-61077765%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '216e621ca127e822ce8e5491f15e368da2064fcc' => 
    array (
      0 => 'C:\\wamp\\www\\mvcphp1\\views\\post\\ajax\\prueba.tpl',
      1 => 1402873842,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28796539e2354ecda33-61077765',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_539e235583eb97_29571760',
  'variables' => 
  array (
    'posts' => 0,
    'datos' => 0,
    'paginacion' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539e235583eb97_29571760')) {function content_539e235583eb97_29571760($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['posts']->value)&&count($_smarty_tpl->tpl_vars['posts']->value)){?>
    <table class="table table-bordered table-condensed table-striped">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Pais</th>
            <th>Ciudad</th>
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
                <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['pais'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['ciudad'];?>
</td>
            </tr>
        <?php } ?>
    </table>
<?php }else{ ?>

    <p><strong>No hay posts!</strong></p>

<?php }?>

<?php echo (($tmp = @$_smarty_tpl->tpl_vars['paginacion']->value)===null||$tmp==='' ? '' : $tmp);?>
<?php }} ?>