<?php

require_once "auth.php";

?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador De Contatos</title>
    <link rel="stylesheet" href="css/home.css" type="text/css" media="all" />
  </head>
  <body>
    <header>
       <div class="items">
           <p id="title">Meus Contatos</p>
         
         <div class="icons-right">
             

        <a href="create.php"><img class="icons" src="assets/images/mais.png" /></a>
            <a href="edit.php"> <img class="icons" src="assets/images/editar.png" /></a>
        <a href="delete.php"><img class="icons" src="assets/images/lixeira.png" /></a>
          </div>
       </div>
     <div class="generic">
         
        <div class="search">
            
       <img class="icons" src="assets/images/procurar.png" />
       <input type="text" name="" value="Busque Por Nome Ou Por Dados De Contatos"/>
                  </div>
           </div>  
    </header>
    
    <main>

     <?php
     require_once "class/crud.php";
     $crud = new Crud();
     $user = $_COOKIE["username"];
     $crud->view($user);
     
     ?>
    </main>
        
       
        <footer>
            
        </footer>
  </body>
</html>
