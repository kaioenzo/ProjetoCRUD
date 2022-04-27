<?php
session_start();
if (!isset($_SESSION['usuarioNome'])) {
    header("Location: login.php");
}
include 'includes/header.php';
require 'classes/ClassCrud.php';

if (isset($_SESSION['status'])) {
    echo "<div class='alert alert-success alert-dismissible fade show container' role='alert'>
    <strong>" . $_SESSION['status'] . "</strong> Você pode conferir os dados abaixo!
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span></button>
      </div>";
    unset($_SESSION['status']);
}


?>

<head>
    <title>Administradores</title>
</head>


<div class="row m-1">
    <div class="container">
        <div class="text-center">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                Cadastrar novo administrador
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Cadastre um novo administrador do sistema</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <?php include 'includes/formulario_cadastro_adms.php' ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-2">
    <table class="table table-striped">
        <thead>
            <th>Nome</th>
            <th>Email</th>

        </thead>
        <tbody>
            <?php
            $Crud = new ClassCrud();
            $BFetch = $Crud->selectDB("*", "admsystem", "", "", array());
            while ($Result = $BFetch->fetch_all()) {
                foreach ($Result as $Fetch) {
            ?>
                    <tr>
                        <td><?php echo $Fetch[2] ?></td>
                        <td><?php echo $Fetch[0] ?></td>
                        <td>
                            
                            <a class="Deletar" href="<?php echo "Controllers/ControllerExcluirAdm.php?id={$Fetch[3]}"; ?>">
                            
                                <img src="imagens/excluir.jpeg" alt="Excluir"></a>
                        </td>

                    </tr>
            <?php }
            } ?>
        </tbody>
    </table>
</div>

<?php
include 'includes/footer.php';
?>