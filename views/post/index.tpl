<h2>Ultimos Posts</h2> 
{if $_acl->permiso('nuevo_post')}    
<?php //if(Session::accesoView('especial')): ?>
<p><a href="{$_layoutParams.root}post/nuevo">Agregar Post</a></p>
{/if}

{if isset($posts) && count($posts)}   
<center>
<table border='1'>
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
        <td>{$datos.id}</td>
        <td>{$datos.titulo}</td>
        <td>{$datos.cuerpo}</td>
        <td>
            {if isset($datos.imagen)}
                <a href="{$_layoutParams.root}public/img/post/{$datos.imagen}">
                    <img src="{$_layoutParams.root}public/img/post/thumb/thumb_{$datos.imagen}" />
                </a>
            {/if}
        </td>        
        {if $_acl->permiso('editar_post')}    
        <td><a href="{$_layoutParams.root}post/editar/{$datos.id}">Editar</a></td>
        {/if}
        {if $_acl->permiso('eliminar_post')}    
        <td><a href="{$_layoutParams.root}post/eliminar/{$datos.id}" onclick="return confirm('confirmas?');" >Eliminar</a></td>
        {/if}
    </tr>
    {/foreach}
</table>
</center>    
{else}  
<p><strong>No hay Posts</strong></p>
{/if}  
{if isset($paginacion)}{$paginacion}{/if}