<?php
include_once '../controller/reservaController.php';
include '../Util.php';
include "base/header.php";
//session_start();
//Util::verificarLogin();

$reserva = new reservaController();

if (!empty($_POST)) {

    if (empty($_POST['id'])) {
        $reserva->salvar($_POST);
    } else {
        $reserva->atualizar($_POST);
    }

    //  header("location: " . $_SESSION['url']);
}

if (!empty($_GET['id'])) {
    $data = $reserva->buscar($_GET['id']);
    //var_dump($data);
}

if (!empty($_GET['id'])) {
    $data = $reserva->buscar($_GET['id']);
    //var_dump($data);
}
?>

<div class="d-flex w-100 justify-content-center">
    <div class="d-flex w-50 justify-content-center">
        <div class="d-flex justify-content-center mt-5 col-5">
            <form action="reservaForm.php" method="post">
                <h3 class="mb-4">Cadastrar Reserva</h3>
                <input type="hidden" name="id" value="<?php echo (!empty($data->id) ? $data->id : "") ?>" />
                <div class="mb-3">
                    <label for="">Titular:</label>
                    <input type="text" name="titular"
                        value="<?php echo (!empty($data->titular) ? $data->titular : "") ?>"><br>
                </div>
                <div class="mb-3">
                    <label for="">Data de Checkin:</label><br>
                    <input type="date" name="data_inicio"
                        value="<?php echo (!empty($data->data_inicio) ? $data->data_inicio : "") ?>"><br>
                </div>
                <div class="mb-3">

                    <label for="">Data de Checkout:</label><br>
                    <input type="date" name="data_termino"
                        value="<?php echo (!empty($data->data_termino) ? $data->data_termino : "") ?>"><br>
                </div>
                <div class="mb-3">

                    <label for="">Quarto: </label>
                    <input type="text" name="quarto"
                        value="<?php echo (!empty($data->quarto) ? $data->quarto : "") ?>"><br>
                </div>
                <div class="mb-3">
                    <label for="">Bloco:</label>
                    <input type="text" name="bloco"
                        value="<?php echo (!empty($data->bloco) ? $data->bloco : "") ?>"><br>
                </div>
                <button type="submit" class="btn btn-primary">
                    <?php echo (empty($_GET['id']) ? "Salvar" : "Atualizar") ?> </button><br>
            </form>
        </div>
    </div>
</div>
<div class="d-flex justify-content-center">
    <p style="color:red;">
        <?php echo (!empty($_SESSION["msg"]) ? $_SESSION["msg"] : "") ?>
    </p>
</div>