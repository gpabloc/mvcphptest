<?php

class Employee{
    public $id;
    public $name;
    public $email;

    public function __construct($id,$name,$email){
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }
    
    public static function getEmployee(){
        $arrEmployee = array();
        $dblink = Bd::createInstance();
        $sql = $dblink->query("SELECT * FROM employee");
        foreach($sql->fetchAll() as $employee){
            $arrEmployee[] = new Employee($employee['id'],$employee['name'],$employee['email']);
        }
        return $arrEmployee;
    }

    public static function setEmployee($name,$email){       
       $dblink = Bd::createInstance();
       $sql = " INSERT INTO employee(name,email) VALUES (?,?)
       ";
       $sql = $dblink->Prepare($sql);
       $sql->Execute(array($name,$email));
        
    }
    
    public static function deleteEmployee($id){       
        $dblink = Bd::createInstance();
        $sql = " DELETE FROM employee where id = ?";
        $sql = $dblink->Prepare($sql);
        $sql->Execute(array($id));
         
    }
    
    public static function getEmployeeById($id){       
        $dblink = Bd::createInstance();
        $sql = " select * from employee where id = ?";
        $sql = $dblink->Prepare($sql);
        $sql->execute(array($id));        
        $employee = $sql->fetch();

        return new Employee($employee['id'],$employee['name'],$employee['email']); 
    }
    public static function updateEmployee($id,$name,$email){
        $dblink = Bd::createInstance();
        $sql = "update employee set name= ?,email =? where id = ?";
        $sql = $dblink->Prepare($sql);
        $sql->Execute(array($name,$email,$id));        
    }

}

?>