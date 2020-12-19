<?php
include_once("Render.php");
include_once("model/UsuarioModel.php");

class UsuarioController
{

    private $usuarioModel;
    private $render;

    public function __construct($usuarioModel, $render)
    {
        $this->usuarioModel = $usuarioModel;
        $this->render = $render;
    }

    public function registrarUsuario()
    {

        echo $this->render->render("view/registroUsuarioView.php");

    }

    public function procesarRegistro()
    {

//        $data = array();
//        $usuario = isset($_POST["usuario"])?$_POST["usuario"]:null;
//        $contraseña = isset($_POST["contraseña"])?$_POST["contraseña"]:null;
//
//        if (($usuario === "" || $usuario ==="")||){
//
//            $data["errorUsuario"] = "Usuario Invalido";
//            echo $this->render->render("view/registroUsuarioView.php", $data);
//            exit();
//        }
//        if ($contraseña === "" || $contraseña === null){
//
//            $data["errorContraseña"] = "Contraseña Invalida";
//            echo $this->render->render("view/registroUsuarioView.php", $data);
//            exit();
//        }
//
//        $this->usuarioModel->insertar($usuario, $contraseña);
//    }

        //arreglar tema de errores que se pasan a la vista
        //seguir con la parte de registro de usuario.
    }
}