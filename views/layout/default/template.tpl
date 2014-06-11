<!DOCTYPE html>
<html lang="es">
    <head>
        <title>{$titulo|default:"Web"}</title>
        <meta charset="utf8" />
        <link href="{$_layoutParams.ruta_css}style.css" rel="stylesheet" type="text/css" />
        <script src="{$_layoutParams.root}public/js/jquery.js" type="text/javascript"></script>
        <script src="{$_layoutParams.root}public/js/jquery.validate.js" type="text/javascript"></script>
        {if isset($_layoutParams.js) && count($_layoutParams.js)}
            {foreach item=js from=$_layoutParams.js}
            <script src="{$js}" type="text/javascript"></script>
            {/foreach}
        {/if}
    </head>
    <body>
            <div id="main">
                <div id="header">
                    <div id="logo"><h1>{$_layoutParams.configs.app_name}</h1></div>
                    <div id="menu">
                        <div id="top_menu">
                            <ul>
                            {if isset($_layoutParams.menu)}    
                                {foreach item=it from=$_layoutParams.menu}
                                    {if isset($_layoutParams.item)&& ($_layoutParams.item == $it.id)}
                                        {assign var="_item_style" value="class='current'"}
                                    {else}
                                        {assign var="_item_style" value=""}
                                    {/if} 
                                <li><a {$_item_style} href="{$it.enlace}">{$it.titulo}</a></li>
                                {/foreach}
                            {/if}
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="content">
                    <noscript><p>Para el correcto funcionamiento debe tener el soporte de javascript habilitado</p></noscript>
                    {if isset($_error)}
                    <div id="error">{$_error}</div>
                    {/if}
                    {if isset($_mensaje)}
                    <div id="mensaje">{$_mensaje}</div>
                    {/if}
                    {include file=$_contenido}{* Invoca a la vista especifica *}
                </div>
            <div id="footer">Copyright &copy; 2012 {$_layoutParams.configs.app_company}</div>
        </div>
    </body>
</html>