<?php 
include './classes/ClassCrud.php';
//Condição para determinar se é um cadastro novo ou uma atualização
if (isset($_GET['id'])){
    $Acao="Editar";
    $Crud = new ClassCrud();
    $BFetch = $Crud->selectDB("*", "dadosuser", "where Id=?", "i", array($_GET['id']));
    $Fetch = $BFetch->fetch_all();
    foreach ($Fetch as $Fetchs){
        $Id= $Fetchs[0];
        $Nome= $Fetchs[1];
        $Idade= $Fetchs[2];
        $Email= $Fetchs[3];
        $Senha= $Fetchs[4];
    }
    
} else {
    $Acao="Cadastrar";
    $Id = 0;
    $Nome = "";
    $Idade = "";
    $Email = "";
    $Senha = "";
    
}
echo "<h1 class='text-center'> Cadastre-se</h1>";
?>


<div class="container">
    <div class="Resultado"></div>
    <form action="Controllers/ControllerCadastro.php" method="POST">
    <input type="hidden" id="Acao" name="Acao" value="<?php echo $Acao; ?>">
    <input type="hidden" id="Id" name="id" value="<?php echo $Id; ?>">
    <div class="row">
    <div class="col-6">
        
    <div class="form-group">               
    <label for="nome">Nome</label>
    <input type="text" class="form-control"  name="nome" value="<?php echo $Nome;?>">
    </div>
    </div>
        
    <div class="col-6">
    <div class="form-group">
    <label for="email">Idade:</label>
    <input type="idade" class="form-control"  name="idade" value="<?php echo $Idade;?>">
        
    </div>
    </div>
    </div>
    
  <div class="form-group">
    <label for="email">Endereço de E-mail:</label>
    <input type="email" class="form-control" name="email" value="<?php echo $Email;?>">
  </div>
    
  <div class="form-group">
    <label for="pwd">Senha:</label>
    <input type="password" class="form-control"  name="senha" value="<?php echo $Senha;?>">
  </div>
    
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Lembre-me
    </label>
  </div>
  <button type="submit" class="btn btn-primary"> <?php echo $Acao ?> </button>
</form>
</div>
</body>

