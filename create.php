<?php

require_once "auth.php";


if (isset($_POST["btn-create"])) {
 $user = $_COOKIE["username"];
 $name = $_POST["name"];
 $phone = str_replace(' ','',$_POST["phone"]);

 require_once "class/crud.php";
 $crud = new Crud();
 $crud->Create($user,$name,$phone);
 
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Contato</title>
    <link rel="stylesheet" href="css/create.css" type="text/css" media="all" />
  </head>
  <body>
    <header>
      <a href="home.php">
        <img src="assets/images/close.png" class="close"/>
      </a>
      <h1>Criar Contato</h1> 
            <form method="post" id="form" action="create.php">
            <button id="submit" name="btn-create" type="submit">Salvar</button>
    </header>
    
    <main>
      <div class="img">
        <img src="assets/images/user.png" alt="" />
        
      </div>

      <p>Nome</p>
      <input type="text" name="name" id="name" value="" />
      
      <p id="phone">Telefone</p>
      <input type="number" name="phone" id="phone" value="" />

    </main>
    </form>
   <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
      var submit = document.querySelector("#submit");
      
      submit.onclick = function() {
        var nameValue = document.querySelector("#name").value;
        var phoneValue = document.querySelector("#phone").value;
        alert("Nome: " + nameValue + "\nTelefone: " + phoneValue);
         $('#form').on('submit', function(event) {
          event.preventDefault(); 
         $.ajax({
           url: 'create.php',
           type: 'POST',
           data: $(this).serialize(),
           sucess: funtion(response){
               alert(response)
           }
             
         })
        
        
        
        
      };  
    </script>
    -->
  </body>
</html>
