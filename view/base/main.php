<?php
include "header.php";
Util::verificarLogin();
//var_dump($_SESSION);
//exit;
?>
<div class="container">
    <h1 class="text-center">Telas do Sistema:</h1>
    <div class="container text-center">
        <div class="row align-items-center">
            <div class="col">
                <div class="card mb-3 border-primary" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://static.vecteezy.com/ti/vetor-gratis/p3/11801480-mesa-de-atendimento-ao-cliente-de-azul-eps10-ou-icone-de-recepcao-isolado-no-fundo-branco-simbolo-de-contador-de-informacoes-em-um-estilo-moderno-simples-e-moderno-para-o-design-do-seu-site-logotipo-e-aplicativo-movel-vetor.jpg"
                                class="img-fluid rounded-start" alt="...">
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
                            <img src="https://cdn-icons-png.flaticon.com/512/2306/2306206.png"
                                class="img-fluid rounded-start" alt="...">
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
                            <img src="https://www.derma-nordend.de/wp-content/uploads/2020/08/icon_Kalender.png"
                                class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">RESERVAS
                                </h5>
                                <p class="card-text">Local Destinado para vizualizar o CRRUD das Reservas</p>
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
                            <img src="https://static.vecteezy.com/ti/vetor-gratis/p1/11564365-eps10-azul-abstrato-vassoura-limpeza-icone-solido-de-poeira-isolado-no-fundo-branco-simbolo-de-higiene-em-um-estilo-moderno-simples-e-moderno-para-o-design-do-seu-site-logotipo-e-aplicativo-movel-vetor.jpg"
                                class="img-fluid rounded-start" alt="...">
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


    </div>

    <?php
    include "rodape.php";