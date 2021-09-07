<?php
if( isset($_GET['controller']) && isset($_GET['action'])  ){
  $controller = $_GET['controller'];
  $action = $_GET['action'];
  //print_r($controller);
  //print_r($action);
}else{
  $controller = 'page';
  $action = 'init';
}
require_once("view/template.php");
?>