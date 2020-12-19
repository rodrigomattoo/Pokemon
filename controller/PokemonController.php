<?php
include_once("Render.php");
include_once("model/PokemonModel.php");

class PokemonController
{
    private $pokemonModel;
    private $render;

    public function __construct($pokemonModel, $render)
    {
        $this->pokemonModel = $pokemonModel;
        $this->render = $render;
    }

    public function execute()
    {
        $data['pokemons'] = $this->pokemonModel->getPokemons();
        echo $this->render->render("view/pokemonsView.php", $data);
    }

    public function description(){
        $id = $_GET["id"];
        $data["pokemon"] = $this->pokemonModel->getPokemonById($id);
        echo $this->render->render("view/descriptionView.php", $data);
    }

    public function modificacion(){
        $id = $_GET["id"];
        $data["pokemon"] = $this->pokemonModel->getPokemonById($id);
        echo $this->render->render("view/modificacionView.php", $data);
    }

    public function eliminar(){

        $id = $_GET["id"];
        $this->pokemonModel->eliminarPokemon($id);
        header("Location: HTTP://localhost/pokedex/pokemon/execute");
    }

    public function procesarModificacion(){

        $id= $_POST["id"];
        $nombre = $_POST["nombre"];
        $descripcion = $_POST["descripcion"];
        $tipo = $_POST["tipo"];
        $this->pokemonModel->modificarPokemon($id,$nombre, $descripcion, $tipo);
        $this->execute();

    }
    public function agregar(){

        echo $this->render->render("view/agregarView.php");

    }
    public function procesarDatos(){

        $data = array();

        $formulario = $this->mapearFormulario();

        
        if(!$this->validarFormulario($formulario)){
            $data["mensajeError"] = "Formulario Invalido";
            echo $this->render->render("view/agregarView.php", $data);
            exit();
        }

        $result = $this->pokemonModel->agregarPokemon($formulario);

        if(!$result){
            $data["mesajeError"] = "Hubo un problema en la carga de datos";
            echo "hice cagada";
            //echo $this->render->render("view/pokemonsView.php",$data);

        }else{

            header("Location: HTTP://localhost/pokedex/pokemon/execute");
        }


    }

    public function seleccionMultiple(){

        echo $this->render->render("view/selectMultipleView.php");
    }

    public function procesarSeleccionMultiple(){

        $seleccion = $_POST["valor"];
        $nombre = $_POST["nombre"];

        $this->pokemonModel->guardarSeleccion($seleccion, $nombre);

    }

    public function mostrarSeleccion(){


         $data["seleccion"] = $this->pokemonModel->obtenerSeleccion();

         echo $this->render->render("view/mostrarSeleccionMultipleView.php",$data);

    }

    private function mapearFormulario(){

        $formulario["nombre"] = isset($_POST["nombre"])?$_POST["nombre"]:null;
        $formulario["tipo"] = isset($_POST["tipo"])?$_POST["tipo"]:null;
        $formulario["descripcion"] = isset($_POST["descripcion"])?$_POST["descripcion"]:null;

        return $formulario;

    }

    private function validarFormulario($formulario){

        $valido = true;
        if($formulario['nombre'] == "" || $formulario['nombre'] == null){
            $valido = false;
        }
        if($formulario['tipo'] == "" || $formulario['tipo'] == null){
            $valido = false;
        }
        if ($formulario['descripcion'] == "" || $formulario['descripcion'] == null){

            $valido = true;
        }

        return $valido;

    }
}