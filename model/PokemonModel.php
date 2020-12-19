<?php

//sabe como acceder a la base de datos
class PokemonModel
{
    private $database;

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function getPokemons()
    {
        return $this->database->executeQuery("SELECT * FROM pokemon");

    }

    public function getPokemonById($id){
        
        $sql = "SELECT * FROM pokemon WHERE id =".$id;
        return $this->database->executeQuery($sql);
    }

    public function modificarPokemon($id,$nombre, $descripcion, $tipo){

        $sql = "UPDATE pokemon SET 
                nombre= '$nombre',
                descripcion= '$descripcion',
                tipo='$tipo'
                WHERE id= $id";
        return $this->database->execute($sql);
    }

    public function agregarPokemon($formulario){

        $nombre = $formulario['nombre'];
        $tipo = $formulario['tipo'];
        $descripcion = $formulario['descripcion'];
        $sql = "INSERT INTO pokemon (nombre, tipo, descripcion) VALUES ('$nombre', '$tipo', '$descripcion')";
        return $this->database->execute($sql);

    }
    public function eliminarPokemon($id){

        $sql = "DELETE
                FROM pokemon
                WHERE id='$id'";
        return $this->database->execute($sql);
    }

    public function guardarSeleccion($seleccion, $nombre){

        $seleccion = json_encode($seleccion);
        $sql = "INSERT INTO seleccion(nombre, seleccion) VALUES('$nombre','$seleccion')";
        return $this->database->execute($sql);

    }

    public function obtenerSeleccion(){

        return $this->database->executeQuery("SELECT seleccion FROM seleccion");

    }





}