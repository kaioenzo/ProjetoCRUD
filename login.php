<head>
    <title>Login</title>
</head>
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div class="wrapper fadeInDown ">
  <div id="formContent">
    <!-- Tabelas Titulos-->

    <!-- Icone -->
    <div class="fadeIn first">
        <h1> Projeto CRUD</h1>
    </div>

    <!-- Login Formulário-->
    <form action="valida.php" method="POST" >
      <label> Endereço de E-mail:</label>
      <input type="email" id="email" class="fadeIn second form-control" name="email" placeholder="exemplo@email.com">
      <label> Senha:</label>
      <input type="password" id="pass" class="fadeIn third form-control" name="senha" placeholder="senha">
      <input type="submit" class="fadeIn fourth " value="Entrar">
    </form>
    
    <div class="text-danger text-center">
        <?php 
        if (isset($_SESSION['loginErro']))
            echo $_SESSION['loginErro'];
            unset($_SESSION['loginErro'])
        ?>
    </div>
    

   

  </div>
</div>
</body>
</html>