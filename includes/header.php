<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/ce883965d2.js" crossorigin="anonymous"></script>

</head>
<body>
<div class="jumbotron text-center my-0 p-3" >
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
        <a class="nav-link" href="selecionar.php">Cadastrados</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cadastro.php">Novo Cadastro</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="adminsystem.php">Administradores</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="sair.php">Sair</a>
      </li>    
    </ul>
  </div>  
</nav>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>