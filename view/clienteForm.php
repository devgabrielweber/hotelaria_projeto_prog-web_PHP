<?php
include_once '../controller/clienteController.php';
include '../Util.php';
include "base/header.php";

$cliente = new clienteController();

if (!empty($_POST)) {

    if (empty($_POST['id'])) {
        $cliente->salvar($_POST);
    } else {
        $cliente->atualizar($_POST);
    }
}

if (!empty($_GET['id'])) {
    $data = $cliente->buscar($_GET['id']);
    //var_dump($data);
}


?>


<div class="d-flex w-100 justify-content-center">
    <div class="d-flex w-50 justify-content-center">
        <div class="d-flex justify-content-center mt-5 col-5">
            <form action="clienteForm.php" method="post">
                <h3 class="mb-4">Cadastrar Cliente</h3>
                <input type="hidden" name="id" value="<?php echo (!empty($data->id) ? $data->id : "") ?>" />
                <div class="mb-3">
                    <label for="">Nome:</label>
                    <input type="text" name="nome" class="w-100" value="<?php echo (!empty($data->nome) ? $data->nome : "") ?>"><br>
                </div>
                <div class="mb-3">
                    <label for="">Email:</label>
                    <input type="text" name="email" class="w-100" value="<?php echo (!empty($data->email) ? $data->email : "") ?>"><br>
                </div>
                <div class="mb-3">
                    <label for="">Telefone:</label>
                    <input type="text" name="telefone" class="w-100" value="<?php echo (!empty($data->telefone) ? $data->telefone : "") ?>"><br>
                </div class="mb-3">
                <div class="mb-3">
                    <label for="">Endereço:</label>
                    <input type="text" name="endereco" class="w-100" value="<?php echo (!empty($data->endereco) ? $data->endereco : "") ?>"><br>
                </div>
                <div class="mb-3">
                    <label for="">CPF:</label>
                    <input type="text" name="cpf" class="w-100" value="<?php echo (!empty($data->cpf) ? $data->cpf : "") ?>"><br>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary w-100">
                        Salvar </button><br>
                </div>
                <p style="color:red;">
                    <?php echo (!empty($_SESSION["msg"]) ? $_SESSION["msg"] : "") ?>
                </p>
            </form>
        </div>
    </div>
</div>