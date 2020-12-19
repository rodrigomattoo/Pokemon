{{>head}}
<html>
<form class="" action="HTTP://localhost/pokedex/usuario/procesarRegistro" method="POST">
    <div class="form-group">
        <label for="">Usuario</label>
        <input type="text" name="usuario">
    </div>
    <div class="form-group">
        <label for="">Contraseña</label>
        <input type="text" name="contraseña">
    </div>
    {{#errorUsuario}}
    <div>
        {{errorUsuario}}
    </div>
    {{/errorUsuario}}
    {{#errorContraseña}}
    <div>
        {{errorContraseña}}
    </div>
    {{/errorContraseña}}
    <div class="form-group">

    <input type="submit" value="Registrarse">

    </div>
</form>
</html>

