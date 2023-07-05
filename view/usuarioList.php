<?php
include_once '../controller/usuarioController.php';
include '../Util.php';
include "base/header.php";
//session_start();
//Util::verificarLogin();

$usuario = new usuarioController();

if (!empty($_POST)) {

    if (empty($_POST['id'])) {
        $usuario->salvar($_POST);
    } else {
        $usuario->atualizar($_POST);
    }

    //  header("location: " . $_SESSION['url']);
}

if (!empty($_GET['id'])) {
    $data = $usuario->buscar($_GET['id']);
    //var_dump($data);
}

if (!empty($_POST)) {
    $load = $usuario->pesquisar($_POST);
} else {
    $load = $usuario->carregar();
}
?>

<div class="d-flex justify-content-center">
    <p style="color:red;">
        <?php echo (!empty($_SESSION["msg"]) ? $_SESSION["msg"] : "") ?>
    </p>
</div>
<div class="p-5 w-100 d-flex justify-content-center">
    <h3 style="margin-bottom: -3rem;">Listagem de Usuários:</h3>
</div>
<div class="d-flex w-100 justify-content-center">
    <div class="d-flex w-75 justify-content-center flex-wrap">

        <div class="row">
            <form action="usuarioList.php" class="mb-4" method="post">
                <div class="input-group">
                    <select name="campo" class="form-select">

                        <option value="id">ID</option>
                        <option value="nome">Nome</option>
                        <option value="telefone">Telefone</option>
                        <option value="email">Email</option>
                        <option value="login">Login</option>
                    </select>
                    <label class="p-2">Valor</label>
                    <input type="text" name="valor" class="form-control" placeholder="Pesquisar" />
                    <button type="submit" class="btn btn-primary">Buscar</button>
                    <a class="btn btn-tertiary" href="./RegistrarUsuarioForm.php">Cadastrar</a>
                </div>
            </form>
        </div>
        <div class="row w-100">
            <table border="1" style="margin-bottom: 3rem;">
                <tr>
                    <th style="padding-left: 1rem; padding-right: 1rem;">ID</th>
                    <th style="padding-left: 1rem; padding-right: 1rem;">Nome</th>
                    <th style="padding-left: 1rem; padding-right: 1rem;">Telefone</th>
                    <th style="padding-left: 1rem; padding-right: 1rem;">Email</th>
                    <th style="padding-left: 1rem; padding-right: 1rem;">Login</th>
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
                    echo "<td>" . $item->login . "</td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </div>
    </div>
</div>