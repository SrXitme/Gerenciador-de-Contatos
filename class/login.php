<?php
require_once "database.php";
class Login extends Database{

  public function login($user,$pass){
      $sql = "SELECT * FROM  users WHERE user='$user' AND pass='$pass';";
      $query = mysqli_query($this->getConn(),$sql);
      if(mysqli_num_rows($query) > 0){
          
          setcookie("username",$user);
          header("Location: home.php");
          exit;
      }else{
          echo "    <div class="incorrect"> Senha Incorreta Meu Nobre 🍷🗿 </div>";
      }
      
      
  }



}

?>
