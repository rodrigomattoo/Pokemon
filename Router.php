<?php
class  Router
{
    private $configuration;

    public function __construct($configuration){

        $this->configuration = $configuration;

    }

    public function executeActionFromController($action, $module){
        $controller = $this->getControllerFrom($module);
        $this->executeMethodFromController($controller, $action);

    }

    private function getControllerFrom($module){
        $controllerName = self::getControllerNameFromModule($module);

        $validController = method_exists($this->configuration, $controllerName) ? $controllerName : "getPokemonController";
        return call_user_func(array($this->configuration, $validController));

    }

    private function getControllerNameFromModule($module){
        return "get" . ucfirst($module) . "Controller";
    }

    private static function executeMethodFromController($controller, $action){
        $validAction = method_exists($controller, $action) ? $action : "execute";
        call_user_func(array($controller, $validAction));
    }

}