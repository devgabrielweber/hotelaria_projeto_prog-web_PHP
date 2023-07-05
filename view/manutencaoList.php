<?php
include_once '../controller/manutencaoController.php';
include '../Util.php';
include "base/header.php";
//session_start();
//Util::verificarLogin();

$manutencao = new manutencaoController();

if (!empty($_GET['id'])) {
    $data = $manutencao->buscar($_GET['id']);
    //var_dump($data);
}

if (!empty($_GET['id'])) {
    $manutencao->deletar($_GET['id']);
    //   header("location: ContatoList.php");
    $_SESSION["msg"] = "Registro Deletado com sucesso!";
}

if (!empty($_POST)) {
    $load = $manutencao->pesquisar($_POST);
} else {
    $load = $manutencao->carregar();
}
?>

<div class="p-5 w-100 d-flex justify-content-center">
    <h3 style="margin-bottom: -3rem;">Listagem de Manutenções:</h3>
</div>
<div class="d-flex justify-content-center">
    <p style="color:red;">
        <?php echo (!empty($_SESSION["msg"]) ? $_SESSION["msg"] : "") ?>
    </p>
</div>
<div class="d-flex w-100 justify-content-center">
    <div class="d-flex w-100 justify-content-center flex-wrap">
        <form action="manutencaoList.php" method="post" class="mb-4">
            <div class="input-group">
                <select name="campo" class="form-select">
                    <option value="id">ID</option>
                    <option value="item">Item</option>
                    <option value="descricao">Descrição</option>
                    <option value="datamanutencao">Data</option>
                    <option value="dataproxmanutencao">Data Prox.</option>
                    <option value="responsavel">Responsável</option>
                </select>
                <label class="p-2">Valor</label>
                <input type="text" name="valor" placeholder="Pesquisar" class="form-control" />
                <button type="submit" class="btn btn-primary">Buscar</button>
                <a class="btn btn-tertiary" href="./manutencaoForm.php">Cadastrar</a>
            </div>
        </form>
        <table border="1" style="margin-bottom:3rem;">
            <tr>
                <th style="padding-left: 1rem; padding-right: 1rem;">ID</th>
                <th style="padding-left: 1rem; padding-right: 1rem;">Item</th>
                <th style="padding-left: 1rem; padding-right: 1rem;">Descrição</th>
                <th style="padding-left: 1rem; padding-right: 1rem;">Data</th>
                <th style="padding-left: 1rem; padding-right: 1rem;">Data Prox.</th>
                <th style="padding-left: 1rem; padding-right: 1rem;">Responsável</th>
                <th></th>
                <th></th>
            </tr>
            <?php
            foreach ($load as $item) {
                echo "<tr>";
                echo "<td style='padding-left: 1rem; padding-right: 1rem;'>" . $item->id . "</td>";
                echo "<td style='padding-left: 1rem; padding-right: 1rem;'>" . $item->item . "</td>";
                echo "<td style='padding-left: 1rem; padding-right: 1rem;'>" . $item->descricao . "</td>";
                echo "<td style='padding-left: 1rem; padding-right: 1rem;'>" . $item->datamanutencao . "</td>";
                echo "<td style='padding-left: 1rem; padding-right: 1rem;'>" . $item->dataproxmanutencao . "</td>";
                echo "<td style='padding-left: 1rem; padding-right: 1rem;'>" . $item->responsavel . "</td>";

                echo "<td><a onclick='return confirm(\"Deseja Excluir? \")' href='manutencaoList.php?id=$item->id'>Deletar</a></td>";
                echo "<td><a href='manutencaoForm.php?id=$item->id'>Editar</a></td>";
            }
            ?>
        </table>
    </div>
</div>