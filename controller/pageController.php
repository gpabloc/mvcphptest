<?php
    class PageController{
        public function home(){
            include_once("view/page/home.php");
        }
        public function error(){
            include_once("view/page/error.php");
        }
    }
?>