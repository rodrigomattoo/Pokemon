{{>head}}
{{>header}}
<html>
<div class="jumbotron">
    <div class="container">
        <h1 class="display-3">Encuentra tu Pokemon</h1>
        <form>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Ingresa el nombre de tu Pokemon!">
            </div>
        </form>
        <button type="submit" class="btn btn-primary">Buscar</button>
    </div>
</div>
<div class="container">
    <table class="table">
        <tr>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Descripcion</th>
            <th>Acciones</th>
        </tr>
        {{#pokemons}}
        <tr>
            <td>{{nombre}}</td>
            <td>{{tipo}}</td>
            <td>{{descripcion}}</td>
            <td>
                <a href="HTTP://localhost/pokedex/pokemon/description/id={{id}}" class="btn btn-primary">Ver</a>
                <a href="HTTP://localhost/pokedex/pokemon/modificacion/id={{id}}" class="btn btn-warning">Modificar</a>
                <a href="HTTP://localhost/pokedex/pokemon/eliminar/id={{id}}" class="btn btn-danger">Eliminar</a>
            </td>
        </tr>
        {{/pokemons}}
    </table>
</div>
{{#mensajeError}}
<div>
   {{mensajeError}}
</div>
{{/mensajeError}}
<div class="d-flex justify-content-center">
    <a href="HTTP://localhost/pokedex/pokemon/agregar" class="btn btn-primary">Nuevo</a>
</div>
</html>
{{>footer}}
