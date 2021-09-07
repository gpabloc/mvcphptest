<?php
class Bd{
    private static $instance = NULL;

    public static function createInstance(){
        if(!isset(self::$instance)){
            $pdoOptions[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            self::$instance = new PDO('mysql:host=localhost;dbname=employee','root','',$pdoOptions);                       
        }
        return self::$instance;
    }

}
?>