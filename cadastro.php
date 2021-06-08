<?php
session_start();
if(!isset($_SESSION['id'])){
    header("Location: login.php");
}
include __DIR__ . '/includes/header.php';
include __DIR__ . "/includes/formulario_cadastro.php";
include __DIR__ . "/includes/footer.php";


