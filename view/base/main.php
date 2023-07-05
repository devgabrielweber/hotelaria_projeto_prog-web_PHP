<?php
include "header.php";
Util::verificarLogin();
//var_dump($_SESSION);
//exit;
?>
<div class="container">
    <h1 class="text-center p-3">Telas do Sistema:</h1>
    <div class="container text-center">
        <div class="row align-items-center">
            <div class="col">
                <div class="card mb-3 border-primary" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://static.vecteezy.com/ti/vetor-gratis/p3/11801480-mesa-de-atendimento-ao-cliente-de-azul-eps10-ou-icone-de-recepcao-isolado-no-fundo-branco-simbolo-de-contador-de-informacoes-em-um-estilo-moderno-simples-e-moderno-para-o-design-do-seu-site-logotipo-e-aplicativo-movel-vetor.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">CLIENTES
                                </h5>
                                <p class="card-text">Local destinado para vizualizar o CRUD dos Clientes</p>
                                <a href="../clienteList.php" class='btn btn-primary'>Entrar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-3 border-primary" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://cdn-icons-png.flaticon.com/512/2306/2306206.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">QUARTOS
                                </h5>
                                <p class="card-text">Local Destinado para vizualizar o CRUD dos Quartos</p>
                                <a href="../quartosList.php" class='btn btn-primary'>Entrar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col">
                <div class="card mb-3 border-primary" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://www.derma-nordend.de/wp-content/uploads/2020/08/icon_Kalender.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">RESERVAS
                                </h5>
                                <p class="card-text">Local Destinado para vizualizar o CRUD das Reservas</p>
                                <a href="../reservaList.php" class='btn btn-primary'>Entrar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-3 border-primary" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://cdn-icons-png.flaticon.com/512/1271/1271405.png" class="img-fluid rounded-start w-75 mt-3" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">FUNCIONÁRIOS
                                </h5>
                                <p class="card-text">Local Destinado para vizualizar o CRUD de Funcionários</p>
                                <a href="../funcionarioList.php" class='btn btn-primary'>Entrar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card mb-3 border-primary" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://www.iconbunny.com/icons/media/catalog/product/3/5/3582.8-wrench-and-screw-driver-icon-iconbunny.jpg" class="img-fluid rounded-start w-75" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">MANUTENÇÃO
                                </h5>
                                <p class="card-text">Local Destinado para vizualizar o CRUD de Manutenção</p>
                                <a href="../manutencaoList.php" class='btn btn-primary'>Entrar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-3 border-primary" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://cdn-icons-png.flaticon.com/512/758/758771.png" class="img-fluid rounded-start w-75 mt-3" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">USUÁRIOS DO SISTEMA
                                </h5>
                                <p class="card-text">Local Destinado para vizualizar o CRUD de Usuários do Sistema</p>
                                <a href="../usuarioList.php" class='btn btn-primary'>Entrar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <?php
    include "rodape.php";
