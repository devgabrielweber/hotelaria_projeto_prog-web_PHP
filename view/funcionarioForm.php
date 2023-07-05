<?php
include_once '../controller/funcionarioController.php';
include '../Util.php';
include "base/header.php";
//session_start();
//Util::verificarLogin();

$funcionario = new funcionarioController();

if (!empty($_POST)) {

    if (empty($_POST['id'])) {
        $funcionario->salvar($_POST);
    } else {
        $funcionario->atualizar($_POST);
    }
}

if (!empty($_GET['id'])) {
    $data = $funcionario->buscar($_GET['id']);
    //var_dump($data);
}

?>

<div class="d-flex w-100 justify-content-center">
    <div class="d-flex w-100 justify-content-center">
        <div class="d-flex justify-content-center mt-5 col-5">
            <form action="funcionarioForm.php" method="post" class="p-3">
                <h3 class="mb-4">Cadastrar Funcionário:</h3>
                <input type="hidden" name="id" value="<?php echo (!empty($data->id) ? $data->id : "") ?>" />
                <div class="row">
                    <div class="col w-50">
                        <div class="mb-3">
                            <label for="">Nome:</label>
                            <input type="text" name="nome" value="<?php echo (!empty($data->nome) ? $data->nome : "") ?>"><br>
                        </div>
                        <div class="mb-3">
                            <label for="">CPF:</label>
                            <input type="text" name="cpf" value="<?php echo (!empty($data->cpf) ? $data->cpf : "") ?>"><br>
                        </div>
                        <div class="mb-3">
                            <label for="">Telefone:</label>
                            <input type="phone" name="telefone" value="<?php echo (!empty($data->telefone) ? $data->telefone : "") ?>"><br>
                        </div>
                        <div class="mb-3">
                            <label for="">Endereço:</label>
                            <input type="text" name="endereco" value="<?php echo (!empty($data->endereco) ? $data->endereco : "") ?>"><br>
                        </div>
                    </div>
                    <div class="col w-50">
                        <div class="mb-3">
                            <label for="">Data de Contratação:</label><br>
                            <input type="date" name="data_contratacao" value="<?php echo (!empty($data->data_contratacao) ? $data->data_contratacao : "") ?>"><br>
                        </div>
                        <div class="mb-3">
                            <label for="">Função</label>
                            <input type="text" name="funcao" value="<?php echo (!empty($data->funcao) ? $data->funcao : "") ?>"><br>
                        </div>
                        <div class="mb-3">
                            <label for="">Carga Horária:</label>
                            <input type="text" name="carga_horaria" value="<?php echo (!empty($data->carga_horaria) ? $data->carga_horaria : "") ?>"><br>
                        </div>
                        <div class="mb-3">
                            <label for="">Turno:</label>
                            <select name="turno" class="form-select">
                                <option value="matutino">Matutino</option>
                                <option value="matutino">Vespertino</option>
                            </select><br>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <?php echo (empty($_GET['id']) ? "Salvar" : "Atualizar") ?> </button><br>
                </div>
                <p style="color:red;">
                    <?php echo (!empty($_SESSION["msg"]) ? $_SESSION["msg"] : "") ?>
                </p>
            </form>
        </div>
    </div>
</div>