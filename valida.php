<?php
session_start();
//válida os dados de login
include 'classes/ClassCrud.php';
$Crud = new ClassCrud();

if(isset($_POST['email']) && (isset($_POST['senha']))){
    $user = filter_input(INPUT_POST, 'email',FILTER_SANITIZE_SPECIAL_CHARS);
    $pass = filter_input(INPUT_POST, 'senha',FILTER_SANITIZE_SPECIAL_CHARS);
    $Crud->validarUSER($user, $pass);
}