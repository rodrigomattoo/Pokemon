<html>
<form action="HTTP://localhost/pokedex/pokemon/procesarSeleccionMultiple" method="POST">
    <input type="text" name="nombre">
    <select name="valor[]" id="" multiple>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select>
    <input type="submit" value="cargar">
</form>
<a href="HTTP://localhost/pokedex/pokemon/mostrarSeleccion">mostrar</a>
</html>
