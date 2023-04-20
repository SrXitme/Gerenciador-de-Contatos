<?php

require_once "../auth.php";


if (isset($_GET["btn-create"])) {
 $name = $_GET["name"];
 $phone = $_GET["phone"];
 $idtw = $_GET["d"];
 require_once "../class/crud.php";
 $crud = new Crud();
 $crud->Edit($name,$phone,$idtw);
 header("Location: ../edit.php");
 exit;
 
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Contato</title>
    <link rel="stylesheet" href="../css/create.css" type="text/css" media="all" />
  </head>
  <body>
    <header>
      <a href="../home.php">
        <img src="../assets/images/close.png" class="close"/>
      </a>
      <h1>Editar Contato</h1> 
         
            <form method="get" action="edit.php">
            <button  name="btn-create" type="submit">Salvar</button>
    </header>
    
    <main>
      <div class="img">
        <img src="../assets/images/user.png" alt="" />
      </div>
       <?php
       $name = $_GET["name"];
       $phone = $_GET["phone"];
       $id = $_GET["d"];
       echo "
      <p>Nome</p>
      <input type=\"text\" name=\"name\" value=\"$name\" />
      
      <p>Telefone</p>
      <input type=\"number\" name=\"phone\" value=\"$phone\" />
       <input type=\"hidden\" name=\"d\" value=\"$id\" />
      
      
      ";
     ?>
    </main>
    </form>

    
  </body>
</html>
