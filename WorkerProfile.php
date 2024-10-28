<?php
//error_reporting(false);
class Db{
    public $stmt;
    const DBNAME="tauhid";
    const USERNAME="root";

   final public function connection($Db_var,$Db_user,$password = null)
    {
        try{
            return new PDO("mysql:host=127.0.0.1;dbname={$Db_var};",$Db_user, $password);
        }catch(Exception $e){
            var_dump($e->getMessage());
        }
    }
}


class WorkerInfo extends Db
{
    public $name;
    public  $employee;
    public $position;
    public $salary;
     public function insert()
    {
        $this->name = $_POST["name"];
        $this->employee = $_POST["employee"];
        $this->position = $_POST["position"];
        $this->salary = $_POST["salary"];
        $pdo=Db::connection(self::DBNAME,self::USERNAME);
        $stmt=$pdo->prepare("insert into workertable(name,employee,position,salary) values ('$this->name','$this->employee','$this->position','$this->salary')");
        $stmt->execute();
    }
}