<h2>Iniciar Sesi&oacute;n</h2>
<form name="form1" method="post" action="">
    <input type="hidden" value="1" name="enviar" />
    <p>
        <label>Usuario: </label>
        <input type="text" name="usuario" value="{$datos.usuario|default:""}" />
    </p>
    <p>
        <label>Password: </label>
        <input type="password" name="pass" />
    </p>
    
    <p>
        <input type="submit" value="Iniciar Seccion" class="button"  />
    </p>
</form>