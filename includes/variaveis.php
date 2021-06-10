<?php
//Variáveis que recebem dados dos formulários e filtram os dados.

if(isset($_POST['Acao'])){
    $Acao = filter_input(INPUT_POST, 'Acao', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset ($_GET['Acao'])){
    $Acao = filter_input(INPUT_GET, 'Acao', FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $Acao = "";
}

if(isset($_POST['id'])){
    $Id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['id'])){
    $Id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $Id=0;
}

if(isset($_POST['nome'])){
    $Nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset ($_GET['nome'])){
    $Nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $Nome = "";
}

if(isset($_POST['idade'])){
    $Idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset ($_GET['idade'])){
    $Idade = filter_input(INPUT_GET, 'idade', FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $Idade = "";
}

if(isset($_POST['email'])){
    $Email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset ($_GET['email'])){
    $Email = filter_input(INPUT_GET, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $Email = "";
}

if(isset($_POST['senha'])){
    $Senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset ($_GET['senha'])){
    $Senha = filter_input(INPUT_GET, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $Senha = "";
}



