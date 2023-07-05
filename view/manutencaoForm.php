<?php
include_once '../controller/manutencaoController.php';
include '../Util.php';
include "base/header.php";

$manutencao = new manutencaoController();

if (!empty($_POST)) {

    if (empty($_POST['id'])) {
        $manutencao->salvar($_POST);
    } else {
        $manutencao->atualizar($_POST);
    }
}

if (!empty($_GET['id'])) {
    $data = $manutencao->buscar($_GET['id']);
    //var_dump($data);
}
?>


<div class="d-flex w-100 justify-content-center">
    <div class="d-flex w-50 justify-content-center">
        <div class="d-flex justify-content-center mt-5 col-5">
            <form action="manutencaoForm.php" method="post">
                <h3 class="mb-4">Cadastrar Manutenção:</h3>
                <input type="hidden" name="id" value="<?php echo (!empty($data->id) ? $data->id : "") ?>" />
                <div class="mb-3">
                    <label for="">Item:</label>
                    <input type="text" name="item" class="w-100" value="<?php echo (!empty($data->item) ? $data->item : "") ?>"><br>
                </div>
                <div class="mb-3">
                    <label for="">Descrição:</label>
                    <input type="text" name="descricao" class="w-100" value="<?php echo (!empty($data->descricao) ? $data->descricao : "") ?>"><br>
                </div>
                <div class="mb-3">
                    <label for="">Data de Manutenção:</label>
                    <input type="date" name="datamanutencao" class="w-100" value="<?php echo (!empty($data->datamanutencao) ? $data->datamanutencao : "") ?>"><br>
                </div class="mb-3">
                <div class="mb-3">
                    <label for="">Data da Próxima manutenção:</label>
                    <input type="date" name="dataproxmanutencao" class="w-100" value="<?php echo (!empty($data->dataproxmanutencao) ? $data->dataproxmanutencao : "") ?>"><br>
                </div>
                <div class="mb-3">
                    <label for="">Responsável:</label>
                    <input type="text" name="responsavel" class="w-100" value="<?php echo (!empty($data->responsavel) ? $data->responsavel : "") ?>"><br>
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