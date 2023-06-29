<?php
include "../model/DB.class.php";

class usuarioController
{

    private $model;
    private $table = "usuario";

    public function __construct()
    {
        $this->model = new BD();
    }

    public function salvar($dados)
    {

        try {

            if (!preg_match("/^[a-zA-Z-' ]*$/", $dados['nome'])) {
                throw new Exception(" Somente letras e espaços em branco são permitidos. ");
            }

            if (!filter_var($dados['email'], FILTER_VALIDATE_EMAIL)) {
                throw new Exception(" Formato de e-mail inválido. ");
            }
            // var_dump($dados);
            //exit;
            if ($dados['senha'] === $dados['c_senha']) {

                $dados['senha'] = password_hash($dados['senha'], PASSWORD_BCRYPT);
                unset($dados['c_senha']);

                $this->model->inserir($this->table, $dados);

                $_SESSION['url'] = "login.php";
                $_SESSION['msg'] = "Registro Salvo com sucesso!";
            } else {
                throw new Exception(" As senhas devem coincidirem");
            }
        } catch (Exception $e) {
            $_SESSION['dados'] = $dados;
            $_SESSION['url'] = 'RegistrarUsuarioForm.php';
            $_SESSION['msg'] = $e->getMessage();
        }
    }
    public function atualizar($dados)
    {

        try {

            if (!preg_match("/^[a-zA-Z-' ]*$/", $dados['nome'])) {
                throw new Exception(" Somente letras e espaços em branco são permitidos. ");
            }

            if (!filter_var($dados['email'], FILTER_VALIDATE_EMAIL)) {
                throw new Exception(" Formato de e-mail inválido. ");
            }
            // var_dump($dados);
            //exit;
            if ($dados['senha'] === $dados['c_senha']) {

                $dados['senha'] = password_hash($dados['senha'], PASSWORD_BCRYPT);
                unset($dados['c_senha']);

                $this->model->atualizar($this->table, $dados);

                $_SESSION['url'] = "login.php";
                $_SESSION['msg'] = "Registro Salvo com sucesso!";
            } else {
                throw new Exception(" As senhas devem coincidirem");
            }
        } catch (Exception $e) {
            $_SESSION['dados'] = $dados;
            $_SESSION['url'] = 'RegistrarUsuarioForm.php';
            $_SESSION['msg'] = $e->getMessage();
        }
    }
    public function carregar()
    {

        return $this->model->select($this->table);
    }
    public function pesquisar($dados)
    {

        return $this->model->pesquisar($this->table, $dados);
    }
    public function deletar($id)
    {

        $this->model->deletar($this->table, $id);
    }
    public function buscar($id)
    {

        return $this->model->buscar($this->table, $id);
    }
}