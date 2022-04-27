<?php 
//include './classes/ClassCrud.php';
//Condição para determinar se é um cadastro novo ou uma atualização

    $Acao="CadastrarAdmin";
    $Nome = "";
    $Email = "";
    $Senha="";
    $Id = 0;

?>


<div class="container form-group">
    <div class="Resultado"></div>
    <form action="Controllers/ControllerCadastroAdm.php" class="form-horizontal" id="FormCadstro"  method="POST" enctype="multipart/form-data" autocomplete="off">

     
    
  <div class="form-group">
  
  <label for="nome">Nome:</label>
    <input type="text" class="form-control"  name="nome"  required autocomplete="false">

    <label for="email">Endereço de E-mail:</label>
    <input type="email" class="form-control" name="email"  required autocomplete="false">
  </div>
    
  <div class="form-group">
    <label for="senha">Senha:</label>
    <input type="password" class="form-control"  name="senha" required autocomplete="false">
  </div>
    
 
    <input type="submit" class="btn btn-success" value="Cadastrar" name="submit"> 
</form>
</div>




