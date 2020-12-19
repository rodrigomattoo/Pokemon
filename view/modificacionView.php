{{>head}}
{{>header}}
<html>
<div class="jumbotron">
    <div class="d-flex justify-content-center">
        <h1 class="display-3">Modifica tu Pokemon</h1>
    </div>
</div>
<div class="container">
    <form action="HTTP://localhost/pokedex/pokemon/procesarModificacion" method="POST">
        <div class="form-group">

            <input type="hidden" name="id" value="{{#pokemon}}{{id}}{{/pokemon}}">
        </div>

        <div class="form-group">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name= "nombre" value="{{#pokemon}}{{nombre}}{{/pokemon}}" class="form-control">
        </div>

        <div class="form-group">
            <label for="descripcion" class="form-label">Descripcion</label>
            <input type="text" name= "descripcion" value="{{#pokemon}}{{descripcion}}{{/pokemon}}" class="form-control">
        </div>

        <div class="form-group">
            <label for="tipo" class="form-label">tipo</label>
            <input type="text" name= "tipo" value="{{#pokemon}}{{tipo}}{{/pokemon}}" class="form-control">
        </div>

        <div class="d-flex justify-content-center">
            <input type="submit" value="Modificar" class="btn btn-primary">
        </div>
    </form>
</div>
</html>
{{>footer}}