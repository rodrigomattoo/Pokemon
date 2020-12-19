<?php
include_once("model/PokemonModel.php");
include_once("model/UsuarioModel.php");
include_once("controller/PokemonController.php");
include_once("controller/UsuarioController.php");

include_once("helper/Database.php");
include_once("Render.php");
include_once("Router.php");


class Configuration
{

    public function getDatabase()
    {
        $config = $this->getConfig();
        $database = new Database(
            $config["servername"],
            $config["username"],
            $config["password"],
            $config["dbname"]
        );
        return $database;
    }

    public function getConfig()
    {
        return parse_ini_file("config/config.ini");
    }

    public function getRender()
    {
        return new Render("view/partial");
    }


    public function getPokemonModel()
    {
        $database = $this->getDatabase();
        return new PokemonModel($database);
    }

    public function getPokemonController()
    {
        $render = $this->getRender();
        $pokemonModel = Configuration::getPokemonModel();
        return new PokemonController($pokemonModel, $render);
    }

    public function getUsuarioModel()
    {
        $database = $this->getDatabase();
        return new UsuarioModel($database);
    }

    public function getUsuarioController()
    {
        $render = $this->getRender();
        $usuarioModel = Configuration::getUsuarioModel();
        return new UsuarioController($usuarioModel, $render);
    }

    public function getRouter(){

        return new Router($this);
    }

}