<head>
    <title>Cadastro</title>
</head>
    <?php
session_start();
if(!isset($_SESSION['usuarioNome'])){
    header("Location: login.php");
}
include 'includes/header.php';
include  'includes/formulario_cadastro.php';

