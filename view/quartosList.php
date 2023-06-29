<?php
include_once '../controller/quartosController.php';
include '../Util.php';
include "base/header.php";
//session_start();
//Util::verificarLogin();

$quartos = new quartosController();


if (!empty($_POST)) {

    if (empty($_POST['id'])) {
        $quartos->salvar($_POST);
    } else {
        $quartos->atualizar($_POST);
    }

    //  header("location: " . $_SESSION['url']);
}


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

<script>
function getid() {
    let elem = document.getElementById('id')
    $_GET['id'] = elem;
}
</script>
<div class="d-flex w-100 justify-content-center">
    <div class="d-flex w-50 justify-content-center">
        <div class="d-flex justify-content-center mt-5 col-5">
            <form action="quartosList.php" method="post">
                <h3 class="mb-4">Cadastrar Quarto</h3>
                <input type="hidden" name="id" value="<?php echo (!empty($data->id) ? $data->id : "") ?>" />
                <div class="mb-3">
                    <label for="">Número:</label>
                    <input type="text" name="num" value="<?php echo (!empty($data->num) ? $data->num : "") ?>"><br>
                </div>
                <div class="mb-3">
                    <label for="">Bloco:</label>
                    <input type="text" name="bloco"
                        value="<?php echo (!empty($data->bloco) ? $data->bloco : "") ?>"><br>
                </div>
                <div class="mb-3">
                    <label for="">Qtd. Camas: </label>
                    <input type="text" name="camas"
                        value="<?php echo (!empty($data->camas) ? $data->camas : "") ?>"><br>
                </div>
                <button type="submit" class="btn btn-primary">
                    Salvar </button><br>
            </form>
        </div>

        <div class="d-flex justify-content-center mt-5 col-6" style="width: 40%;">
            <form action="quartosList.php" method="post">
                <h3 class="mb-3">Atualizar Quarto</h3>
                <div class="mb-3">
                    <label for="id">ID: </label>
                    <input type="text" name="id" value="<?php echo (!empty($data->id) ? $data->id : "") ?> " /><br>
                </div>
                <div class="mb-3">
                    <label for="">Número:</label>
                    <input type="text" name="num" value="<?php echo (!empty($data->num) ? $data->num : "") ?>"><br>
                </div>
                <div class="mb-3">
                    <label for="">Bloco:</label>
                    <input type="text" name="bloco"
                        value="<?php echo (!empty($data->bloco) ? $data->bloco : "") ?>"><br>
                </div>

                <div class="mb-3">
                    <label for="">Qtd. Camas: </label>
                    <input type="text" name="camas"
                        value="<?php echo (!empty($data->camas) ? $data->camas : "") ?>"><br>
                </div>
                <button type="submit" class="btn btn-primary">
                    Atualizar </button><br>
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
    <div class="d-flex w-50 justify-content-center flex-wrap">
        <form action="quartosList.php" class="mb-4" method="post">
            <div class="input-group">
                <select name="campo" class="form-select">
                    <option value="num">Número</option>
                    <option value="camas">Qtd. Camas</option>
                    <option value="bloco">Bloco</option>
                </select>
                <label class="p-2">Valor</label>
                <input type="text" name="valor" placeholder="Pesquisar" />
                <button type="submit" class="btn btn-primary">Buscar</button>
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
                echo "<tr>";
            }
            ?>
        </table>
    </div>
</div>
<?php
//include "base/rodape.php";