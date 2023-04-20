<?php
require_once "database.php";
class Crud extends Database{
  
  public function Create($user, $name, $phone){
      $sql = "INSERT INTO contacts (user,name,phone) VALUES ('$user','$name','$phone');";
     
      $status = null;
      $query = mysqli_query($this->getConn(),$sql);
      if($query){
        $status = true;
        if($status){
            header("Location: home.php");
            exit;
        }
      }
     
  }
  public function view($user){
      $sql = "SELECT * FROM contacts WHERE user='$user' ORDER BY name ASC;";
      $query = mysqli_query($this->getConn(),$sql);
      while($line = mysqli_fetch_assoc($query)){
         $name = $line["name"];
         $phone = $line["phone"];
         echo "
         
         
              <div class=\"contacts\">
         <img src=\"assets/images/dummy.png\"  class=\"photo-profile\"/>
         <div class=\"datas\">
             <p id=\"name-contact\">$name</p>
             
             <p id=\"number\">$phone</p>
         </div>
         
     </div>
         
         
         
         
         ";
      }

     }
    public function Delete($id){
       $sql = "DELETE FROM contacts WHERE id='$id';";
       $query = mysqli_query($this->getConn(),$sql);
   }
  
   public function viewDelete($user){
      $sql = "SELECT * FROM contacts WHERE user='$user' ORDER BY name ASC;";
      $query = mysqli_query($this->getConn(),$sql);
      while($line = mysqli_fetch_assoc($query)){
         $name = $line["name"];
         $phone = $line["phone"];
         $id = $line["id"];
         echo "
         
         
              <div class=\"contacts\">
         <img src=\"assets/images/dummy.png\"  class=\"photo-profile\"/>
         <div class=\"datas\">
             <p id=\"name-contact\">$name</p>
             
             <p id=\"number\">$phone</p>
         </div>
        <div class=\"delete\">
     <a href=\"files/delete.php?d=$id\"><img src=\"assets/images/lixeira.png\" class=\"iconsd\">
         </a>
         </div>
     </div>
         
         
         
         
         ";
       }

     }
     public function viewEdit($user){
      $sql = "SELECT * FROM contacts WHERE user='$user' ORDER BY name ASC;";
      $query = mysqli_query($this->getConn(),$sql);
      while($line = mysqli_fetch_assoc($query)){
         $name = $line["name"];
         $phone = $line["phone"];
         $id = $line["id"];
         echo "
         
         
              <div class=\"contacts\">
         <img src=\"assets/images/dummy.png\"  class=\"photo-profile\"/>
         <div class=\"datas\">
             <p id=\"name-contact\">$name</p>
             
             <p id=\"number\">$phone</p>
         </div>
        <div class=\"delete\">
     <a href=\"files/edit.php?d=$id&&name=$name&&phone=$phone\"><img src=\"assets/images/editar.png\" class=\"iconsd\">
         </a>
         </div>
     </div>
         
         
         
         
         ";
       }

     }
     public function Edit($name,$phone,$idtw){
         $sql = "UPDATE contacts SET name = '$name',phone = '$phone' WHERE id='$idtw';";
         
         $query = mysqli_query($this->getConn(),$sql);
     }

}
?>