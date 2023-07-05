<?php
include_once '../controller/funcionarioController.php';
include '../Util.php';
include "base/header.php";
//session_start();
//Util::verificarLogin();

$funcionario = new funcionarioController();

if (!empty($_GET['id'])) {
    $data = $funcionario->buscar($_GET['id']);
    //var_dump($data);
}

if (!empty($_GET['id'])) {
    $funcionario->deletar($_GET['id']);
    //   header("location: ContatoList.php");
    $_SESSION["msg"] = "Registro Deletado com sucesso!";
}

if (!empty($_POST)) {
    $load = $funcionario->pesquisar($_POST);
} else {
    $load = $funcionario->carregar();
}
?>


<div class="p-5 w-100 d-flex justify-content-center">
    <h3 style="margin-bottom: -3rem;">Listagem de Funcionários:</h3>
</div>
<div class="d-flex justify-content-center">
    <p style="color:red;">
        <?php echo (!empty($_SESSION["msg"]) ? $_SESSION["msg"] : "") ?>
    </p>
</div>
<div class="d-flex w-100 justify-content-center">
    <div class="d-flex w-75 justify-content-center flex-wrap">
        <form action="funcionarioList.php" method="post" class="mb-4">
            <div class="input-group">
                <select name="campo" class="form-select">
                    <option value="id">ID</option>
                    <option value="nome">Nome</option>
                    <option value="telefone">CPF</option>
                    <option value="cpf">Telefone</option>
                    <option value="endereco">Endereço</option>
                    <option value="data_contratacao">Data de Contratação</option>
                    <option value="funcao">Função</option>
                    <option value="carga_horaria">Carga Horária</option>]
                    <option value="turno">Turno</option>
                </select>
                <label class="p-2">Valor</label>
                <input type="text" name="valor" placeholder="Pesquisar" class="form-control" />
                <button type="submit" class="btn btn-primary">Buscar</button>
                <a class="btn btn-tertiary" href="./funcionarioForm.php">Cadastrar</a>
            </div>
        </form>
        <table border="1" style="margin-bottom:3rem;">
            <tr>
                <th style="padding-left: 1rem; padding-right: 1rem;">ID</th>
                <th style="padding-left: 1rem; padding-right: 1rem;">Nome</th>
                <th style="padding-left: 1rem; padding-right: 1rem;">CPF</th>
                <th style="padding-left: 1rem; padding-right: 1rem;">Telefone</th>
                <th style="padding-left: 1rem; padding-right: 1rem;">Endereço</th>
                <th style="padding-left: 1rem; padding-right: 1rem;">Data de Contratação</th>
                <th style="padding-left: 1rem; padding-right: 1rem;">Função</th>
                <th style="padding-left: 1rem; padding-right: 1rem;">Carga Horária</th>
                <th style="padding-left: 1rem; padding-right: 1rem;">Turno</th>
                <th></th>
                <th></th>
            </tr>
            <?php
            foreach ($load as $item) {
                echo "<tr>";
                echo "<td style='padding-left: 1rem; padding-right: 1rem;'>" . $item->id . "</td>";
                echo "<td style='padding-left: 1rem; padding-right: 1rem;'>" . $item->nome . "</td>";
                echo "<td style='padding-left: 1rem; padding-right: 1rem;'>" . $item->telefone . "</td>";
                echo "<td style='padding-left: 1rem; padding-right: 1rem;'>" . $item->cpf . "</td>";
                echo "<td style='padding-left: 1rem; padding-right: 1rem;'>" . $item->endereco . "</td>";
                echo "<td style='padding-left: 1rem; padding-right: 1rem;'>" . $item->data_contratacao . "</td>";
                echo "<td style='padding-left: 1rem; padding-right: 1rem;'>" . $item->funcao . "</td>";
                echo "<td style='padding-left: 1rem; padding-right: 1rem;'>" . $item->carga_horaria . "</td>";
                echo "<td style='padding-left: 1rem; padding-right: 1rem;'>" . $item->turno . "</td>";

                echo "<td><a onclick='return confirm(\"Deseja Excluir? \")' href='funcionarioList.php?id=$item->id'>Deletar</a></td>";
                echo "<td><a href='funcionarioForm.php?id=$item->id'>Editar</a></td>";
            }
            ?>
        </table>
    </div>
</div>
<div class="d-flex justify-content-center">
    <a href="./usuarioList.php" class="mb-5">Usuários do Sistema</a>
</div>