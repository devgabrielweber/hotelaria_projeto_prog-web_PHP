<!DOCTYPE html>
<html>

<head>
    <title>Exemplo de Rodapé com Estilo de Fonte</title>
    <link rel="stylesheet" href="caminho-para-o-arquivo/bootstrap.min.css">
    <style>
    html,
    body {
        height: 100%;
        margin: 0;
        /* Adicione essa propriedade para remover margens */
        padding: 0;
        /* Adicione essa propriedade para remover preenchimentos */
    }

    .wrapper {
        display: flex;
        flex-direction: column;
        min-height: 100%;
    }

    .content {
        flex: 1;
        /* Adicione outras propriedades CSS para o conteúdo se necessário */
    }

    footer {
        background-color: #007bff;
        padding: 20px 0;
        color: #fff;
        width: 100%;
    }

    .footer-text {
        font-family: Arial, sans-serif;
        font-size: 16px;
        margin-bottom: 10px;
    }

    .footer-text strong {
        color: #fff;
    }
    </style>
</head>

<body>
    <div>

        <div class="wrapper">
            <div class="content">
                <!-- Seu conteúdo vai aqui -->
            </div>

            <footer class="text-center">
                <div>
                    <p class="footer-text"><strong>Hotelaria da Tia | Chapecó/SC</strong></p>
                    <p class="footer-text">Fundadores: Weber, Lidio e Hiury</p>
                </div>
            </footer>
        </div>

        <script src="caminho-para-o-arquivo/bootstrap.min.js"></script>
</body>

</html>