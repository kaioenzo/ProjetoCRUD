<?php
require '../classes/ClassCrud.php';
$Crud = new ClassCrud();
$IdUser = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
$dell = $Crud->deleteDB("dadosuser", "id=?", "i", array($IdUser));
if ($dell){
    header ("Location: ../selecionar.php");
}else{
    echo "erro ao excluir usuário";
}