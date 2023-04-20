<?php
require_once "class/login.php";
if(isset($_POST["btn-login"])){
  $lg = new Login();
  $user = $_POST["user"];
  $pass = $_POST["pass"];
  $lg->login($user,$pass);
  
}
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Minha página</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
    <body>
        <header>
        <img src="assets/images/user.png" alt="" id="generic"/>
        </header>
        <section>
            <h1 class="pass-l">Login</h1>
            <form action="login.php" method="post">
              <label for="Username">Username</label> <br />
              <input type="text" name="user" id="" value="" />
              <br />
              <label for="Senha">Senha</label><br />
              <input type="password" name="pass" id="" value="" />
              <br />
              <button type="submit" name="btn-login" id="logar">Logar</button>
             <br />
              <p class="gen">E Novo ?<a href="cadastro.php">Cadastra-se</a></a></a></p>
              
                
            </form>
        </section>
    </body>
    

</html>