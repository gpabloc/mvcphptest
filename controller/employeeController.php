<?php
include_once("model/employeeModel.php");
include_once("conection.php");
//Bd::createInstance();
class EmployeeController{
    public function list(){        
        $employees = Employee::getEmployee();
        include_once("view/employee/list.php");
    }
    public function add(){
        if($_POST){            
            $name = $_POST['txtName'];
            $email = $_POST['txtEmail'];
            Employee::setEmployee($name,$email);
            header("location:./?controller=employee&action=list");
        }
        include_once("view/employee/add.php");
    }
    public function update(){
        $id = $_GET['id'];
        $employees = Employee::getEmployeeById($id);
       
        if($_POST){
            $id = $_POST['txtId'];
            $name = $_POST['txtName'];
            $email = $_POST['txtEmail'];
            Employee::updateEmployee($id,$name,$email);
            header("location:./?controller=employee&action=list");            
        }else{
            $id = $_GET['id'];
            $employees = Employee::getEmployeeById($id);
            include_once("view/employee/update.php");    
        }
    } 
    public function delete(){
        print_r($_GET);
        $id = $_GET['id'];
        Employee::deleteEmployee($id);
        header("location:./?controller=employee&action=list");
        }
}
?>