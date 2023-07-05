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
    $reserva->deletar($_GET['id']);
    //   header("location: ContatoList.php");
    $_SESSION["msg"] = "Registro Deletado com sucesso!";
}

if (!empty($_POST)) {
    $load = $reserva->pesquisar($_POST);
} else {
    $load = $reserva->carregar();
}
?>

<div class="p-5 w-100 d-flex justify-content-center">
    <h3 style="margin-bottom: -3rem;">Listagem de Reservas:</h3>
</div>
<div class="d-flex w-100 justify-content-center">
    <div class="d-flex w-100 justify-content-center flex-wrap">
        <form action="reservaList.php" class="mb-4" method="post">
            <div class="input-group">
                <select name="campo" class="form-select">
                    <option value="id">ID</option>
                    <option value="titular">Titular</option>
                    <option value="data_termino">Data de Checkin</option>
                    <option value="data_inicio">Data de Checkout</option>
                    <option value="quarto">Quarto</option>
                    <option value="bloco">Bloco</option>
                </select>
                <label class="p-2">Valor</label>
                <input type="text" name="valor" placeholder="Pesquisar" class="form-control" />
                <button type="submit" class="btn btn-primary">Buscar</button>
                <a class="btn btn-tertiary" href="./reservaForm.php">Cadastrar</a>
            </div>
        </form>
        <table border="1" style="margin-bottom:3rem;">
            <tr>
                <th style="padding-left: 1rem; padding-right: 1rem;">ID</th>
                <th style="padding-left: 1rem; padding-right: 1rem;">Titular</th>
                <th style="padding-left: 1rem; padding-right: 1rem;">Data de Checkin</th>
                <th style="padding-left: 1rem; padding-right: 1rem;">Data de Checkout</th>
                <th style="padding-left: 1rem; padding-right: 1rem;">Quarto</th>
                <th style="padding-left: 1rem; padding-right: 1rem;">Bloco</th>
                <th></th>
                <th></th>
            </tr>
            <?php
            foreach ($load as $item) {
                echo "<tr>";
                echo "<td style='padding-left: 1rem; padding-right: 1rem;'>" . $item->id . "</td>";
                echo "<td style='padding-left: 1rem; padding-right: 1rem;'>" . $item->titular . "</td>";
                echo "<td style='padding-left: 1rem; padding-right: 1rem;'>" . $item->data_termino . "</td>";
                echo "<td style='padding-left: 1rem; padding-right: 1rem;'>" . $item->data_inicio . "</td>";
                echo "<td style='padding-left: 1rem; padding-right: 1rem;'>" . $item->quarto . "</td>";
                echo "<td style='padding-left: 1rem; padding-right: 1rem;'>" . $item->bloco . "</td>";
                echo "<td><a onclick='return confirm(\"Deseja Excluir? \")' href='reservaList.php?id=$item->id'>Deletar</a></td>";
                echo "<td><a  href='reservaForm.php?id=$item->id'>Editar</a></td>";
                echo "<tr>";
            }
            ?>
        </table>
    </div>
</div>