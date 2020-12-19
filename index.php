<?php
include_once("helper/Configuration.php");
include_once("Router.php");


$module = isset($_GET["module"]) ? $_GET["module"] : "pokemon";
$action = isset($_GET["action"]) ? $_GET["action"] : "execute";

$configuration = new Configuration();
$router = $configuration->getRouter();
$router->executeActionFromController($action, $module);



