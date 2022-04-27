<?php
session_start();
//require das variáveis filtradas e da classe de CRUD do banco de dados
require ('../includes/variaveis.php');
require ('../classes/ClassCrud.php');


$Crud = new ClassCrud();
if (isset($_POST['submit'])) {

        $Crud->insertDB(
            "admsystem","?,?,?,?","sssi",array(
                $Email,
                $Senha,
                $Nome,
                $Id
            
            )
        );
        $_SESSION['status'] = 'Cadastro do administrador: ' .$Nome . ' realizado com sucesso!';
        header("location: ../adminsystem.php");
}