<?php
include_once '../controller/clienteController.php';
include '../Util.php';
include "base/header.php";
//session_start();
//Util::verificarLogin();

$cliente = new clienteController();

if (!empty($_GET['id'])) {
    $data = $cliente->buscar($_GET['id']);
    //var_dump($data);
}

if (!empty($_GET['id'])) {
    $cliente->deletar($_GET['id']);
    //   header("location: ContatoList.php");
    $_SESSION["msg"] = "Registro Deletado com sucesso!";
}

if (!empty($_POST)) {
    $load = $cliente->pesquisar($_POST);
} else {
    $load = $cliente->carregar();
}
?>

<div class="p-5 w-100 d-flex justify-content-center">
    <h3 style="margin-bottom: -3rem;">Listagem de Clientes:</h3>
</div>
<div class="d-flex w-100 justify-content-center">
    <div class="d-flex w-100 justify-content-center flex-wrap">
        <form action="clienteList.php" class="mb-4" method="post">
            <div class="input-group">
                <select name="campo" class="form-select">

                    <option value="id">ID</option>
                    <option value="nome">Nome</option>
                    <option value="telefone">Telefone</option>
                    <option value="email">Email</option>
                    <option value="endereco">Endereço</option>
                    <option value="cpf">CPF</option>
                </select>
                <label class="p-2">Valor</label>
                <input type="text" name="valor" class="form-control" placeholder="Pesquisar" />
                <button type="submit" class="btn btn-primary">Buscar</button>
                <a class="btn btn-tertiary" href="./clienteForm.php">Cadastrar</a>

            </div>
        </form>
        <table border="1" style="margin-bottom: 3rem;">
            <tr>
                <th style="padding-left: 1rem; padding-right: 1rem;">ID</th>
                <th style="padding-left: 1rem; padding-right: 1rem;">Nome</th>
                <th style="padding-left: 1rem; padding-right: 1rem;">Telefone</th>
                <th style="padding-left: 1rem; padding-right: 1rem;">Email</th>
                <th style="padding-left: 1rem; padding-right: 1rem;">Endereço</th>
                <th style="padding-left: 1rem; padding-right: 1rem;">CPF</th>
                <th></th>
                <th></th>
            </tr>
            <?php
            foreach ($load as $item) {
                echo "<tr>";
                echo "<td style='padding-left: 1rem; padding-right: 1rem;'>" . $item->id . "</td>";
                echo "<td style='padding-left: 1rem; padding-right: 1rem;'>" . $item->nome . "</td>";
                echo "<td style='padding-left: 1rem; padding-right: 1rem;'>" . $item->telefone . "</td>";
                echo "<td style='padding-left: 1rem; padding-right: 1rem;'>" . $item->email . "</td>";
                echo "<td>" . $item->endereco . "</td>";
                echo "<td style='padding-left: 1rem; padding-right: 1rem;'>" . $item->cpf . "</td>";
                echo "<td><a onclick='return confirm(\"Deseja Excluir? \")' href='clienteList.php?id=$item->id'>Deletar</a></td>";
                echo "<td><a href='clienteForm.php?id=$item->id'>Editar</a></td>";
            }
            ?>
        </table>
    </div>
</div>