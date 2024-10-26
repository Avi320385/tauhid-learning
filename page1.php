
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


class InsertData extends Db
{
    public $name;
    public  $age;
    public $adress;
    public $number;
     public function insert()
    {
         $this->name = $_POST["name"];
        $this->age = $_POST["age"];
        $this->adress = $_POST["adress"];
        $this->number = $_POST["number"];
        $pdo=Db::connection(self::DBNAME,self::USERNAME);
        $stmt=$pdo->prepare("insert into user(name,age,adress,number) values ('$this->name','$this->age','$this->adress','$this->number')");
        $stmt->execute();
    }
}
class FanInfo extends Db
{
    public $team;
    public  $ucl;
    public $league;
    public $country;
     public function insert()
    {
         $this->team = $_POST["team"];
        $this->ucl= $_POST["ucl"];
        $this->league = $_POST["league"];
        $this->country = $_POST["country"];
        $pdo=Db::connection(self::DBNAME,self::USERNAME);
        $stmt=$pdo->prepare("insert into fantable(Team,ucl,league,country) values ('$this->team','$this->ucl','$this->league','$this->country')");
        $stmt->execute();
    }

}

class BiriInfo extends Db
    {
        public $name;
        public  $price;
        public $quantity;
        public $quality;
         public function insert()
        {
             $this->name = $_POST["name"];
            $this->price= $_POST["price"];
            $this->quantity = $_POST["quantity"];
            $this->quality = $_POST["quality"];
            $pdo=Db::connection(self::DBNAME,self::USERNAME);
            $stmt=$pdo->prepare("insert into biritable(name,price,quantity,quality) values ('$this->name','$this->price','$this->quantity','$this->quality')");
            $stmt->execute();
        }  
    }

class CarerInfo extends Db

        {
            public $name;
            public  $type;
            public $salary;
            public $quality;
             public function insert()
            {
                 $this->name = $_POST["name"];
                $this->type= $_POST["type"];
                $this->salary = $_POST["salary"];
                $this->quality = $_POST["quality"];
                $pdo=Db::connection(self::DBNAME,self::USERNAME);
                $stmt=$pdo->prepare("insert into careertable(name,type,salary,quality) values ('$this->name','$this->type','$this->salary','$this->quality')");
                $stmt->execute();
            }  
}

