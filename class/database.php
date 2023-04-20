<?php

class Database{
   protected $conn;
   //Por favor não delete meu banco de dados kkkk
   //please don't delete my database
   public function __construct(){
       $host = "containers-us-west-46.railway.app";
       $user = "root";
       $db =   "manager";
       $pass = "rhsosfcz5qvFn5XEuxK7";
       $this->conn = mysqli_connect($host,$user,$pass,$db,5735);
   }
   
   public function testConnection(){
       if($this->getConn()){
           echo "Connection Sucess full";
           mysqli_close($this->getConn());
       }
       else {
           echo "not sucess".mysql_error($this->getConn());
           mysqli_close($this->getConn());
       }
   }
   public function getConn(){
       return $this->conn;
   }
   public function setConn($conn){
       $this->conn = $conn;
   }
   
    
    
}



?>
