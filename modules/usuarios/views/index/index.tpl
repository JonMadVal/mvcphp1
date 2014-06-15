<h2>Usuarios</h2>
{if isset($usuarios) && count($usuarios)}
    <table class="table table-bordered table-striped table-condensed">
        <tr><td>ID</td>
            <td>Usuario</td>
            <td>Role</td>
            <td></td>
        </tr>
        {foreach from=$usuarios item=us}
        <tr>
            <td>{$us.id}</td>
            <td>{$us.usuario}</td>
            <td>{$us.role}</td>
            <td>
                <a href="{$_layoutParams.root}usuarios/index/permisos/{$us.id}">
                   Permisos
                </a>
            </td>
        </tr>
        {/foreach}
    </table>
{/if}
<p><a href="{$_layoutParams.root}">Retornar</a></p>  