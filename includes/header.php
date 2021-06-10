<!DOCTYPE html>
<html>
<head>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/ce883965d2.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="jumbotron text-center my-0" >
    <h1>Projeto CRUD</h1>
    <?php echo "Seja bem vindo ". $_SESSION['usuarioNome']?>
</div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark my-0">
  <a class="navbar-brand" href="index.php">ProjetoCRUD</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="selecionar.php">Selecionar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cadastro.php">Cadastro</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="sair.php">Sair</a>
      </li>    
    </ul>
  </div>  
</nav>
</body>