<?php
require ('../includes/variaveis.php');
require ('../classes/ClassCrud.php');

$Crud = new ClassCrud();
//Condição para saber se o formulário deve cadastrar ou atualizar.
if ($Acao == 'Cadastrar'){
    $Crud->insertDB(
            "dadosuser","?,?,?,?,?","isiss",array(
                $Id,
                $Nome,
                $Idade,
                $Email,
                $Senha
            )
        );
        echo 'Cadastro realizado com sucesso';
}else {
    $Crud->updateDB("dadosuser","nome=?,idade=?,email=?,senha=?","id=?", "sissi",array(
        $Nome,$Idade,$Email,$Senha,$Id
    )
            );
            echo 'Cadastro atualizado com sucesso';
            
}