<head>
    <title>Seleciona</title>
</head>
<?php
session_start();
if(!isset($_SESSION['usuarioNome'])){
    header("Location: login.php");
}
include 'includes/header.php';
require 'classes/ClassCrud.php';
echo '<h1 class="text-center">Seleção dos dados</h1>';


?>
<!-- Seção para visualização de usuários cadastrados e possivel edição de dados -->
<div class="container">
    <table class="table">
        <thead>
        <th>Código</th>
        <th>Nome</th>
        <th>Idade</th>
        <th>Email</th>
        <th>Imagem</th>
        </thead>
        <tbody>
            <?php
            $Crud = new ClassCrud();
            $BFetch = $Crud->selectDB("*","dadosuser","","",array());
            while ($Result = $BFetch->fetch_all()){
                foreach ($Result as $Fetch){
                    ?>
            <tr>
                <td><?php echo $Fetch[0]; ?></td>
                <td><?php echo $Fetch[1]; ?></td>
                <td><?php echo $Fetch[2]; ?></td>
                <td><?php echo $Fetch[3]; ?></td>
                <td><?php echo "<img width='50px' height='50px' src='uploads/{$Fetch[5]}'>" ?></td>
                <td>
                    <a href="<?php echo "visualizar.php?id={$Fetch[0]}";?>">
                    <img src="imagens/visualizar.jpeg" alt="Visualizar"></a>
                    
                    <a href="<?php echo "cadastro.php?id={$Fetch[0]}";?>">
                    <img src="imagens/editar.jpeg" alt="Editar"></a>
                    
                    <a class="Deletar" href="<?php echo "Controllers/ControllerExcluir.php?id={$Fetch[0]}";?>">
                    <img src="imagens/excluir.jpeg" alt="Excluir"></a>
                </td>
            </tr>
            <?php }  }   
          
            ?>
        </tbody>
        
    </table>
       
</div>

<?php
include 'includes/footer.php';?>