<?php
include './classes/ClassCrud.php';
//Condição para determinar se é um cadastro novo ou uma atualização
if (isset($_GET['id'])) {
  $Acao = "Editar";
  $Crud = new ClassCrud();
  $BFetch = $Crud->selectDB("*", "dadosuser", "where Id=?", "i", array($_GET['id']));
  $Fetch = $BFetch->fetch_all();
  foreach ($Fetch as $Fetchs) {
    $Id = $Fetchs[0];
    $Nome = $Fetchs[1];
    $Idade = $Fetchs[2];
    $Email = $Fetchs[3];
    $Senha = $Fetchs[4];
    $Imagem = $Fetchs[5];
  }
} else {
  $Acao = "Cadastrar";
  $Id = 0;
  $Nome = "";
  $Idade = "";
  $Email = "";
  $Senha = "";
  $Imagem = "";
}
echo "<h1 class='text-center'> Cadastre-se</h1>";
?>


<div class="container form-group">
  <div class="Resultado"></div>
  <form action="Controllers/ControllerCadastro.php" class="form-horizontal" id="FormCadstro" method="POST" enctype="multipart/form-data">
    <input type="hidden" id="Acao" name="Acao" value="<?php echo $Acao; ?>">
    <input type="hidden" id="Id" name="id" value="<?php echo $Id; ?>">
    <div class="row">
      <div class="col-6">

        <div class="form-group">
          <label for="nome">Nome</label>
          <input type="text" class="form-control" name="nome" value="<?php echo $Nome; ?>" required>
        </div>
      </div>

      <div class="col-6">
        <div class="form-group">
          <label for="email">Idade:</label>
          <input type="idade" class="form-control" name="idade" value="<?php echo $Idade; ?>" required>

        </div>
      </div>
    </div>


    <div class="form-group">

      <label for="email">Endereço de E-mail:</label>
      <input type="email" class="form-control" name="email" value="<?php echo $Email; ?>" required>
    </div>

    <div class="form-group">
      <label for="pwd">Senha:</label>
      <input type="password" class="form-control" name="senha" value="<?php echo $Senha; ?>" required>
    </div>

    <div class="form-group">
      <div class="mb-1">
        <?php
        if ($Imagem == TRUE) {
          echo
          "<p> Imagem atual:</p>" .
            "<img width='75px' height='77px' src='uploads/{$Imagem}'>";
        } else {
          echo "<p> Insira uma foto de perfil:</p>";
        }
        ?>
      </div>
      <input type="file" name="imagem" id="imagem" class="form-control-file" value="<?php $Imagem; ?>" required>
    </div>


    <input type="submit" class="btn btn-success" value="<?php echo $Acao ?>" name="submit">
  </form>
</div>
</body>
<?php include 'includes/footer.php';
?>