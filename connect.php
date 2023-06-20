<?php
class Connect{
    public $server;
    public $user;
    public $password;
    public $dbName;

    public function __construct()
    {
        $this->server ="co28d739i4m2sb7j.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
        $this->user ="h1ocwpaefslspemh";
        $this->password ="dh4jxlk0kx13q7l2";
        $this->dbName="grbm8739q7hk2cb3";
    }

    //Option 1: use mysqli
    function connectToMySQL(): mysqli{
        $conn_my = new mysqli($this->server,$this->user, $this->password,$this->dbName);
        if($conn_my->connect_error){
            die("Failed".$conn_my->connect_error);
        }else{
            // echo"Connected!!!!!";
        }
        return $conn_my;

    }
    //Option 2: use PDO
    function connectToPDO():PDO{
        try{
            $conn_pdo = new PDO("mysql:host=$this->server; 
            dbname=$this->dbName", $this->user,$this->password);
            // echo "Connect to PDO";
        }catch(PDOException $e){
            die("Failed $e");
        }
        return $conn_pdo;
    }
}
//test connect
// $c = new Connect();
// $c->connectToPDO();
?>