<?php 
session_start();
if(isset($_POST['logar'])){
  $erro = [];

  $email = $_POST['email'];
  if(empty($_POST['email'])) {
    $erro[] = $_SESSION['vazioEmail'] = "Digite o e-mail";
  }

  $senha = $_POST['senha'];
  if(empty($_POST['senha'])) {
    $erro[] = $_SESSION['vazioSenha'] = "Complete sua senha";
  }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/estilologin.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <title>Login</title>
</head>
<body>

<header class="header">
    <span> 
       < DESAFIO PHP />
    </span>

</header>

<div class="wrapper fadeInDown">
  <div id="formContent">

    <form action="" method="post" enctype="multipart/form-data">
    <div>
          <input type="text" id="email" class="fadeIn second" name="email" placeholder="E-mail">
          <?php
      if (!empty($_SESSION['vazioSenha'])) {
        echo "<p style='color:#f00;'>" . $erro[0] . "</p>";
        unset($_SESSION['vazioSenha']);
      }
      ?>
    </div>
    <div>
          <input type="text" id="senha" class="fadeIn third" name="senha" placeholder="Senha">
          <?php
      if (!empty($_SESSION['vazioEmail'])) {
        echo "<p style='color:#f00;'>" . $erro[1] . "</p>";
        unset($_SESSION['vazioEmail']);
      }
      ?>
    </div>
      <input type="submit" class="fadeIn fourth" value="Logar" name="logar">
    </form>


    <div id="formFooter">
      <a class="underlineHover" href="#">Ainda não tenho cadastro</a>
    </div>

  </div>
</div>
</body>
</html>