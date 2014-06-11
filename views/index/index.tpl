<h2>Bienvenido a mi Aplicacion</h2>
{if $_acl->permiso('admin_access')}   
    <li><a href="{$_layoutParams.root}acl">Lista de Accesos</a></li>
    <li><a href="{$_layoutParams.root}usuarios">Lista de Usuario</a></li>
{/if}
Es esta aplicacion se podra mostra como desarrollar una aplicacion web usando el patron "Modelo - Vista - Controlador ( MVC )" en un Framework propio.
<figure><img src="{$_layoutParams.root}public/img/responsive.jpg" /></figure>