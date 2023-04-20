<?php

require_once "database.php";
class Cadastro extends Database{
    
   public function cadastrar($user,$pass){
       
     $sql = "INSERT INTO users (user,pass) VALUES ('$user','$pass');";
       
   
       $query = mysqli_query($this->getConn(),$sql);
       if($query){
           header("Location: login.php?c=1");
           exit;
       }
   }
    
    
}


?>