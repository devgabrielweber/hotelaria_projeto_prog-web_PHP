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

if (!empty($_GET['id'])) {
    $usuario->deletar($_GET['id']);
    //   header("location: ContatoList.php");
    $_SESSION["msg"] = "Registro Deletado com sucesso!";
}

if (!empty($_POST)) {
    $load = $usuario->pesquisar($_POST);
} else {
    $load = $usuario->carregar();
}
?>

<div class="d-flex w-100 justify-content-center">
    <div class="d-flex w-50 justify-content-center">
        <div class="d-flex justify-content-center mt-5 col-5">
            <form action="usuarioList.php" method="post">
                <h3 class="mb-4">Cadastrar usuario</h3>
                <input type="hidden" name="id" value="<?php echo (!empty($data->id) ? $data->id : "") ?>" />
                <div class="mb-3">
                    <label for="">Nome:</label>
                    <input type="text" name="nome" value="<?php echo (!empty($data->nome) ? $data->nome : "") ?>"><br>
                </div>
                <div class="mb-3">
                    <label for="">Email:</label>
                    <input type="text" name="email" value="<?php echo (!empty($data->email) ? $data->email : "") ?>"><br>
                </div>
                <div class="mb-3">
                    <label for="">Telefone:</label>
                    <input type="text" name="telefone" value="<?php echo (!empty($data->telefone) ? $data->telefone : "") ?>"><br>
                </div class="mb-3">
                <div class="mb-3">
                    <label for="">Login:</label>
                    <input type="text" name="login" value="<?php echo (!empty($data->login) ? $data->login : "") ?>"><br>
                </div>
                <div class="mb-3">
                    <label for="">Senha:</label>
                    <input type="password" name="senha" value="<?php echo (!empty($data->senha) ? $data->senha : "") ?>"><br>
                </div>
                <div class="mb-3">
                    <label for="">Confirmar Senha:</label>
                    <input type="password" name="c_senha" value="<?php echo (!empty($data->c_senha) ? $data->c_senha : "") ?>"><br>
                </div>
                <button type="submit" class="btn btn-primary">
                    Salvar </button><br>
            </form>
        </div>

        <div class="d-flex justify-content-center mt-5 col-6" style="width: 40%;">
            <form action=" usuarioList.php" method="post">
                <h3 class="mb-4">Atualizar usuario</h3>
                <div class="mb-3">
                    <label for="id">ID: </label>
                    <input type="text" name="id" value="<?php echo (!empty($data->id) ? $data->id : "") ?> " /><br>
                </div>
                <div class="mb-3">
                    <label for="">Nome:</label>
                    <input type="text" name="nome" value="<?php echo (!empty($data->nome) ? $data->nome : "") ?>"><br>
                </div>
                <div class="mb-3">
                    <label for="">Email:</label>
                    <input type="text" name="email" value="<?php echo (!empty($data->email) ? $data->email : "") ?>"><br>
                </div>
                <div class="mb-3">
                    <label for="">Telefone:</label>
                    <input type="text" name="telefone" value="<?php echo (!empty($data->telefone) ? $data->telefone : "") ?>"><br>
                </div>
                <div class="mb-3">
                    <label for="">Login:</label>
                    <input type="text" name="login" value="<?php echo (!empty($data->login) ? $data->login : "") ?>"><br>
                </div>
                <div class="mb-3">
                    <label for="">Senha:</label>
                    <input type="password" name="senha" value="<?php echo (!empty($data->senha) ? $data->senha : "") ?>"><br>
                </div>
                <div class="mb-3">
                    <label for="">Senha:</label>
                    <input type="password" name="c_senha" value="<?php echo (!empty($data->c_senha) ? $data->c_senha : "") ?>"><br>
                </div>
                <button type="submit" class="btn btn-primary">
                    Atualizar
                </button><br>
            </form>
        </div>
    </div>
</div>
<div class="p-5 w-100 d-flex justify-content-center">
    <p style="color:red;">
        <?php echo (!empty($_SESSION["msg"]) ? $_SESSION["msg"] : "") ?>
    </p>
    <h3 style="margin-bottom: -3rem;">Listagem:</h3>
</div>
<div class="d-flex w-100 justify-content-center">
    <div class="d-flex w-100 justify-content-center flex-wrap">
        <form action="usuarioList.php" class="mb-4" method="post">
            <div class="input-group">
                <select name="campo" class="form-select">

                    <option value="id">ID</option>
                    <option value="nome">Nome</option>
                    <option value="telefone">Telefone</option>
                    <option value="email">Email</option>
                    <option value="login">Login</option>
                    <option value="senha">Senha</option>
                </select>
                <label class="p-2">Valor</label>
                <input type="text" name="valor" class="form-control" placeholder="Pesquisar" />
                <button type="submit" class="btn btn-primary">Buscar</button>
            </div>
        </form>
        <table border="1" style="margin-bottom: 3rem;">
            <tr>
                <th style="padding-left: 1rem; padding-right: 1rem;">ID</th>
                <th style="padding-left: 1rem; padding-right: 1rem;">Nome</th>
                <th style="padding-left: 1rem; padding-right: 1rem;">Telefone</th>
                <th style="padding-left: 1rem; padding-right: 1rem;">Email</th>
                <th style="padding-left: 1rem; padding-right: 1rem;">Login</th>
                <th style="padding-left: 1rem; padding-right: 1rem;">Senha</th>
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
                echo "<td style='padding-left: 1rem; padding-right: 1rem;'>" . $item->senha . "</td>";
                echo "<td><a onclick='return confirm(\"Deseja Excluir? \")' href='usuarioList.php?id=$item->id'>Deletar</a></td>";
                echo "<tr>";
            }
            ?>
        </table>
    </div>
</div>
<?php
include "base/rodape.php";
