<?php
session_start();
//Destrói a sessão
if(!isset($_SESSION['usuarioNome'])){
    header("Location: login.php");
}
unset($_SESSION['usuarioNome']);
header("Location: login.php");