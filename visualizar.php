<?php
session_start();
if(!isset($_SESSION['id'])){
    header("Location: login.php");
}
include 'includes/header.php';
include 'classes/ClassCrud.php';

$Crud = new ClassCrud();

?>
<!--Seção onde se vê dados individuais dos usuários cadastrados-->
<div class="container">
    <?php 
    $IdUser = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
    $BFetch = $Crud->selectDB("*", "dadosuser", "where id=?", "i", array($IdUser));
    $Result = $BFetch->fetch_all();
        foreach ($Result as $Fetch){
            ?>
    <h1> Dados do usuário</h1>
    <hr>
    <strong>Nome: </strong><?php echo $Fetch[1];?><br>
    <strong>Idade: </strong><?php echo $Fetch[2];?><br>
    <strong>Email: </strong><?php echo $Fetch[3];?><br>
    <strong>Senha: </strong><?php echo $Fetch[4];?><br>
                          
        <?php } ?>
</div>

<?php
include 'includes/footer.php'; ?>
