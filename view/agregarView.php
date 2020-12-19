{{>head}}
{{>header}}
<html>
<div class="jumbotron">
    <div class="container">
        <h1 class="display-3">Carga tu Pokemon!</h1>
    </div>
</div>
<div class="container">

    <form action="HTTP://localhost/pokedex/pokemon/procesarDatos" method="POST">
        <div class="form-group ">
            <input class="form-control" type="text" name="nombre" placeholder="Nombre">
        </div>
        <div class="form-group">
            <select class="form-control"  id="tipo" name="tipo">
                <option value="Fuego">Fuego</option>
                <option value="Agua">Agua</option>
                <option value="Tierra">Tierra</option>
                <option value="Volador">Volador</option>
            </select>
        </div>
        <div class="form-group">
        <textarea class="form-control" name="descripcion" placeholder="descripcion"></textarea>
        </div>
        {{#mensajeError}}
            <div class="alert alert-danger">
                {{mensajeError}}
            </div>
        {{/mensajeError}}
        <div class="d-flex justify-content-center">
            <input class="btn btn-primary" type="submit" value="Agregar">
        </div>
    </form>
</div>

</html>
