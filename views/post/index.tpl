<h2>Ultimos Posts</h2> 
{if $_acl->permiso('nuevo_post')}    
<?php //if(Session::accesoView('especial')): ?>
<p><a href="{$_layoutParams.root}post/nuevo" class="btn btn-primary"><i class="icon-plus-sign icon-white"> </i> Agregar Post</a></p>
{/if}

{if isset($posts) && count($posts)}   
<center>
<table  class="table table-bordered table-condensed table-striped">
    <tr>
        <td>ID</td>
        <td>Titulo</td>
        <td>Mensaje</td>
        <td>Imagen</td>
        {if $_acl->permiso('editar_post')}    
        <td>Editar</a></td>
        {/if}
        {if $_acl->permiso('eliminar_post')}   
        <td>Eliminar</a></td>
        {/if}
    </tr>
    {foreach item = datos  from = $posts}
    <tr>
        <td style="text-align: center;">{$datos.id}</td>
        <td>{$datos.titulo}</td>
        <td>{$datos.cuerpo}</td>
        <td style="text-align: center;">
            {if isset($datos.imagen)}
                <a href="{$_layoutParams.root}public/img/post/{$datos.imagen}" target="__blank" >
                    <img src="{$_layoutParams.root}public/img/post/thumb/thumb_{$datos.imagen}" />
                </a>
            {/if}
        </td>        
        {if $_acl->permiso('editar_post')}    
        <td style="text-align: center; vertical-align: middle;"><a href="{$_layoutParams.root}post/editar/{$datos.id}">Editar</a></td>
        {/if}
        {if $_acl->permiso('eliminar_post')}    
        <td style="text-align: center; vertical-align: middle;"><a href="{$_layoutParams.root}post/eliminar/{$datos.id}" onclick="return confirm('confirmas?');" >Eliminar</a></td>
        {/if}
    </tr>
    {/foreach}
</table>
</center>    
{else}  
<p><strong>No hay Posts</strong></p>
{/if}  
{if isset($paginacion)}{$paginacion}{/if}