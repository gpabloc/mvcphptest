<?php
include_once("controller/".$controller."Controller.php");
$classController = ucfirst($controller)."Controller";
$controller = new $classController;
$controller->$action();
?>