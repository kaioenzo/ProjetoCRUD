<?phpsession_start();
if(!isset($_SESSION['id'])){
    header("Location: login.php");
}?>
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
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabelas Titulos-->

    <!-- Icone -->
    <div class="fadeIn first">
      <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" />
    </div>

    <!-- Login Formulário-->
    <form>
      <input type="text" id="login" class="fadeIn second" name="email" placeholder="login">
      <input type="text" id="password" class="fadeIn third" name="senha" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Entrar">
    </form>

    <!-- Cadastro novo usuário -->
    <div id="formFooter">
        <a class="underlineHover" href="cadastro.php">Não tem login? Se cadastre!</a>
    </div>

  </div>
</div>
</body>
</html>