<head>
    <title>Home</title>
</head>
<?php 
session_start();
if(!isset($_SESSION['usuarioNome'])){
    header("Location: login.php");
}
include 'includes/header.php';
?>




<body>
    
    
    <div class="my-2 container text-center">
        
    <img src="imagens/crud-img.jpg" class="img-" alt="CRUD">
    <p class="lead">
        Projeto desenvolvido em 2021 com o objetivo de criar uma aplicação WEB que pudesse executar os conceitos de CRUD associado a linguagem PHP e SQL.
    </p>
    <a class="btn btn-info" href="https://github.com/kaioenzo/ProjetoCRUD" target="_BLANK">Veja o projeto no GIT <i class="fab fa-github-square"></i></a>
    </div>

    
    <?php include 'includes/footer.php'; ?>
</body>