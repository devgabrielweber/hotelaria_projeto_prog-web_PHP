<?php
include_once '../controller/quartosController.php';
include '../Util.php';
include "base/header.php";
//session_start();
//Util::verificarLogin();

$quartos = new quartosController();

if (!empty($_GET['id'])) {
    $data = $quartos->buscar($_GET['id']);
    //var_dump($data);
}

if (!empty($_GET['id'])) {
    $quartos->deletar($_GET['id']);
    //   header("location: ContatoList.php");
    $_SESSION["msg"] = "Registro Deletado com sucesso!";
}

if (!empty($_POST)) {
    $load = $quartos->pesquisar($_POST);
} else {
    $load = $quartos->carregar();
}
?>


<div class="p-5 w-100 d-flex justify-content-center">
    <h3 style="margin-bottom: -3rem;">Listagem de Quartos:</h3>
</div>
<div class="d-flex justify-content-center">
</div>
<div class="d-flex w-100 justify-content-center">
    <div class="d-flex w-50 justify-content-center flex-wrap">
        <form action="quartosList.php" class="mb-4" method="post">
            <div class="input-group">
                <select name="campo" class="form-select">
                    <option value="num">Número</option>
                    <option value="camas">Qtd. Camas</option>
                    <option value="bloco">Bloco</option>
                </select>
                <label class="p-2">Valor</label>
                <input type="text" name="valor" placeholder="Pesquisar" class="form-control" />
                <button type="submit" class="btn btn-primary">Buscar</button>
                <a class="btn btn-tertiary" href="./quartosForm.php">Cadastrar</a>
            </div>
        </form>
        <table border="1" style="margin-bottom:3rem;">
            <tr>
                <th style="padding-left: 1rem; padding-right: 1rem;">ID</th>
                <th style="padding-left: 1rem; padding-right: 1rem;">Número</th>
                <th style="padding-left: 1rem; padding-right: 1rem;">Qtd. Camas</th>
                <th style="padding-left: 1rem; padding-right: 1rem;">Bloco</th>
                <th></th>
                <th></th>
            </tr>
            <?php
            foreach ($load as $item) {
                echo "<tr>";
                echo "<td style='padding-left: 1rem; padding-right: 1rem;'>" . $item->id . "</td>";
                echo "<td style='padding-left: 1rem; padding-right: 1rem;'>" . $item->num . "</td>";
                echo "<td style='padding-left: 1rem; padding-right: 1rem;'>" . $item->camas . "</td>";
                echo "<td style='padding-left: 1rem; padding-right: 1rem;'>" . $item->bloco . "</td>";
                echo "<td><a onclick='return confirm(\"Deseja Excluir? \")' href='quartosList.php?id=$item->id'>Deletar</a></td>";
                echo "<td><a href='quartosForm.php?id=$item->id'>Editar</a></td>";
                echo "<tr>";
            }
            ?>
        </table>
    </div>
</div>