<?php /* Smarty version Smarty-3.1.8, created on 2014-04-20 20:35:31
         compiled from "C:\wamp\www\mvcphp1\views\post\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26376535475e3ca6518-21635272%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8209da11f9b4324546d03aec5af2ec895769f979' => 
    array (
      0 => 'C:\\wamp\\www\\mvcphp1\\views\\post\\index.tpl',
      1 => 1398042253,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26376535475e3ca6518-21635272',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_acl' => 0,
    '_layoutParams' => 0,
    'posts' => 0,
    'datos' => 0,
    'paginacion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_535475e4278015_72695280',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535475e4278015_72695280')) {function content_535475e4278015_72695280($_smarty_tpl) {?><h2>Ultimos Posts</h2> 
<?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('nuevo_post')){?>    
<<?php ?>?php //if(Session::accesoView('especial')): ?<?php ?>>
<p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
post/nuevo">Agregar Post</a></p>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['posts']->value)&&count($_smarty_tpl->tpl_vars['posts']->value)){?>   
<center>
<table border='1'>
    <tr>
        <td>ID</td>
        <td>Titulo</td>
        <td>Mensaje</td>
        <td>Imagen</td>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_post')){?>    
        <td>Editar</a></td>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('eliminar_post')){?>   
        <td>Eliminar</a></td>
        <?php }?>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['titulo'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['cuerpo'];?>
</td>
        <td>
            <?php if (isset($_smarty_tpl->tpl_vars['datos']->value['imagen'])){?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/post/<?php echo $_smarty_tpl->tpl_vars['datos']->value['imagen'];?>
">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/post/thumb/thumb_<?php echo $_smarty_tpl->tpl_vars['datos']->value['imagen'];?>
" />
                </a>
            <?php }?>
        </td>        
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('editar_post')){?>    
        <td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
post/editar/<?php echo $_smarty_tpl->tpl_vars['datos']->value['id'];?>
">Editar</a></td>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso('eliminar_post')){?>    
        <td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
post/eliminar/<?php echo $_smarty_tpl->tpl_vars['datos']->value['id'];?>
" onclick="return confirm('confirmas?');" >Eliminar</a></td>
        <?php }?>
    </tr>
    <?php } ?>
</table>
</center>    
<?php }else{ ?>  
<p><strong>No hay Posts</strong></p>
<?php }?>  
<?php if (isset($_smarty_tpl->tpl_vars['paginacion']->value)){?><?php echo $_smarty_tpl->tpl_vars['paginacion']->value;?>
<?php }?><?php }} ?>