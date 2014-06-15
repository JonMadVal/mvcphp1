{if isset($posts) && count($posts)}
    <table class="table table-bordered table-condensed table-striped">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
        </tr>

        {foreach item=datos from=$posts}
            <tr>
                <td>{$datos.id}</td>
                <td>{$datos.nombre}</td>
            </tr>
        {/foreach}
    </table>
{else}

    <p><strong>No hay posts!</strong></p>

{/if}

{$paginacion|default:""}