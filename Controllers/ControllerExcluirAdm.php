<?php
session_start();
//comando para excluir o cadastro
require '../classes/ClassCrud.php';
$Crud = new ClassCrud();

$IdAdmin = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);


if ($IdAdmin) {
    $Crud->deleteDB("admsystem", "id=?", "i", array($IdAdmin));
    $_SESSION['status'] = 'Cadastro do administrador deletado com sucesso';
    header("Location: ../adminsystem.php");
}
else {
    echo "erro ao excluir adm";
}
