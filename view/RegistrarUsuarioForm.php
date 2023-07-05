<?php
include '../controller/LoginController.php';

session_start();

$login = new LoginController();


if (!empty($_POST)) {
    $login->salvar($_POST);
    $_SESSION['dados'] = "";
    header("location: " . $_SESSION['url']);
}

if (!empty($_GET['id'])) {
    $data = $login->buscar($_GET['id']);
    //var_dump($data);
}

$dados = !empty($_SESSION['dados']) ? $_SESSION['dados'] : "";
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Cadastro Usuário</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-control {
            max-width: 300px;
            margin: auto;
        }

        .login-header {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            text-align: center;
            margin-bottom: 20px;
        }

        .login-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>
<form action="RegistrarUsuarioForm.php" method="post">
    <div class="container">
        <h3 class="mb-4">Formulário Registrar Usuário</h3>
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" class="form-control" name="nome" value="<?php echo (!empty($dados['nome']) ? $dados['nome'] : ""); ?>">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="text" class="form-control" name="email" value="<?php echo (!empty($dados['email']) ? $dados['email'] : ""); ?>">
        </div>
        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone:</label>
            <input type="text" class="form-control" name="telefone" value="<?php echo (!empty($dados['telefone']) ? $dados['telefone'] : ""); ?>">
        </div>
        <div class="mb-3">
            <label for="login" class="form-label">Login:</label>
            <input type="text" class="form-control" name="login" value="<?php echo (!empty($dados['login']) ? $dados['login'] : ""); ?>">
        </div>
        <div class="mb-3">
            <label for="senha" class="form-label">Senha:</label>
            <input type="password" class="form-control" name="senha">
        </div>
        <div class="mb-3">
            <label for="c_senha" class="form-label">Confirmar Senha:</label>
            <input type="password" class="form-control" name="c_senha">
        </div>
        <button type="submit" class="btn btn-primary col-5" onclick="alert('Cadastrado com Sucesso!')">Cadastrar</button>
        <a href="login.php" class="btn btn-secondary col-5">Voltar</a>
    </div>
</form>