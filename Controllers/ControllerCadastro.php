<?php
session_start();
//require das variáveis filtradas e da classe de CRUD do banco de dados
require ('../includes/variaveis.php');
require ('../classes/ClassCrud.php');

//instacia da classe
$Crud = new ClassCrud();
//condição (se o botão submit for acionado) para iniciar o comando de CREATE e UPDATE
if (isset($_POST['submit'])) {
    //armazena a imagem numa variável
    $foto = $_FILES["imagem"];

    // Se a foto estiver sido selecionada
    if (!empty($foto["name"])) {
        
        
        $error = array();
        // Verifica se o arquivo é uma imagem
        if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $foto["type"])){
            $error[1] = "Isso não é uma imagem.";
            } 
    

 
        // Se não houver nenhum erro
        if (count($error) == 0) {
        
            // Pega extensão da imagem
            preg_match("/\.(gif|bmp|png|jpg|jpeg|jfif){1}$/i", $foto["name"], $ext);
            // Gera um nome único para a imagem
            $nome_imagem = md5(uniqid(time())) . "." . $ext[1];
            // Caminho de onde ficará a imagem
            $caminho_imagem = '../uploads/' . $nome_imagem;
            // Faz o upload da imagem para seu respectivo caminho
            move_uploaded_file($foto["tmp_name"], $caminho_imagem);
        
  
//Verifica se a ação é de cadastro novo ou atualização
if ($Acao == 'Cadastrar'){
    $Crud->insertDB(
            "dadosuser","?,?,?,?,?,?","isisss",array(
                $Id,
                $Nome,
                $Idade,
                $Email,
                $Senha,
                $nome_imagem
            )
        );
        $_SESSION['status'] = 'Cadastro do usuário: ' .$Nome . ' realizado com sucesso!';
        header("location: ../selecionar.php");
}else {
    $Crud->updateDB("dadosuser","nome=?,idade=?,email=?,senha=?,imagem=?","id=?", "sisssi",array(
        $Nome,$Idade,$Email,$Senha,$nome_imagem,$Id
    )
            );
        $_SESSION['status'] = "Cadastro atualizado com sucesso!";
        header("location: ../visualizar.php?id=$Id");
            
}
        }
    }
}
