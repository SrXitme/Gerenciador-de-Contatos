<?php
require_once "class/cadastro.php";
$register = new Cadastro();

if(isset($_POST["btn-cadastro"])){
  $user = $_POST["user"];
  $pass =  $_POST["pass"];
  $register->cadastrar($user,$pass);
  if($register){
     header("Location: login.php");
     exit;
  }
}
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Cadastro</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
    <body>
        <header>
        <img src="assets/images/user.png" alt="" id="generic"/>
        </header>
        <section>
            <h1 class="pass-l">Cadastro</h1>
            <form action="cadastro.php" method="post">
             
              <label for="Username">Username</label> <br />
              <input type="text" name="user"/>
              <br />
              <label for="Senha">Senha</label><br />
              <input type="password" name="pass" id="pass1"  />
              <br />

              
              <button name="btn-cadastro" id="btn-cadastro">Cadastra-se</button>
             <br />
              
              
              <div class="erro">
                  As Senhas Não Coincidem
              </div>
              
            </form>
            <!--<button id="btn-cadastro">Testar</button>-->
        </section>
        
        <script>
          
          var cadastro = document.querySelector("#btn-cadastro")
          cadastro.onclick = function(){
             var  pass1 = document.querySelector("#pass1").value
          var pass2 = document.querySelector("#pass2").value
           
          var erro = document.querySelector(".erro") 
              
              
              
              if(pass1 == pass2){
                 erro.style.visibility = "view"; 
              }else{
                  
              }
          }
          
          
            
        </script>
    </body>
    

</html>