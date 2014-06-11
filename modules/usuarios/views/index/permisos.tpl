<h2>Permisos de Usuario</h2>

<h3>Usuario: {$info.usuario}<br />Role:{$info.role}</h3>

<form name="form1" method="post" action="">
    <input type="hidden" value="1" name="guardar">
{if isset($permisos) && count($permisos)}
    <table>
        <tr><td>Permiso</td>
            <td></td>
        </tr>
        {foreach from=$permisos item=pr}
            {if $role.$pr.valor == 1}
                {assign var="v" value="habilitado"}
            {else}
                {assign var="v" value="denegado"}
            {/if}
        <tr>
            <td>{$usuario.$pr.permiso}</td>
            
            <td>
                <select name="perm_{$usuario.$pr.id}">
                    <option value="x"{if $usuario.$pr.heredado} selected="selected"{/if}>Heredado({$v})</option>
                    <option value="1"{if ($usuario.$pr.valor == 1 && $usuario.$pr.heredado == "")} selected="selected"{/if}>Habilitado</option>
                    <option value=""{if ($usuario.$pr.valor == "" && $usuario.$pr.heredado == "")} selected="selected"{/if}>Denegado</option>
                </select>
            </td>
        </tr>
            
        {/foreach}
    </table>
        <p><input type="submit" value="guardar" /></p>
{/if}
</form>