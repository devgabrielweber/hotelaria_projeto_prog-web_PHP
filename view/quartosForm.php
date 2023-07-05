<?php
include_once '../controller/quartosController.php';
include '../Util.php';
include "base/header.php";
//session_start();
//Util::verificarLogin();

$quarto = new quartosController();

if (!empty($_POST)) {

    if (empty($_POST['id'])) {
        $quarto->salvar($_POST);
    } else {
        $quarto->atualizar($_POST);
    }
    //  header("location: " . $_SESSION['url']);
}

if (!empty($_GET['id'])) {
    $data = $quarto->buscar($_GET['id']);
    //var_dump($data);
}
?>

<div class="d-flex w-100 justify-content-center">
    <div class="d-flex w-50 justify-content-center">
        <div class="d-flex justify-content-center mt-5 col-5">
            <form action="quartosForm.php" method="post">
                <h3 class="mb-4">Cadastrar Quarto:</h3>
                <input type="hidden" name="id" value="<?php echo (!empty($data->id) ? $data->id : "") ?>" />
                <div class="mb-3">
                    <label for="">Número:</label>
                    <input type="text" name="num" class="w-100" value="<?php echo (!empty($data->num) ? $data->num : "") ?>"><br>
                </div>
                <div class="mb-3">
                    <label for="">Bloco:</label>
                    <select name="bloco">
                        <option value="A">
                            A
                        </option>
                        <option value="B">
                            B
                        </option>
                        <option value="C">
                            C
                        </option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">Qtd. Camas: </label>
                    <input type="text" name="camas" class="w-100" value="<?php echo (!empty($data->camas) ? $data->camas : "") ?>"><br>
                </div>
                <button type="submit" class="btn btn-primary w-100">
                    <?php echo (empty($_GET['id']) ? "Salvar" : "Atualizar") ?> </button><br>
                <p style="color:red;">
                    <?php echo (!empty($_SESSION["msg"]) ? $_SESSION["msg"] : "") ?>
                </p>
            </form>
        </div>
    </div>
</div>