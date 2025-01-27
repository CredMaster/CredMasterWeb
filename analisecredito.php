<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Fonte -->
    <link href="font/fonts_google.css" rel="stylesheet">
    <!-- Estilos -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Scripts (jQuery não pode ser o slim que vem do Boostrap) -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/bf7e05c402.js" crossorigin="anonymous"></script>
    <!-- Progress Bar -->
    <script src="js/progressbar.min.js"></script>
    <!-- Parallax -->
    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>


    <style>
        /*Geral*/
        body {
            font-family: Georgia !important;
            background-color: #0f143c !important;
        }

        p,
        li {
            font-size: 16px;
            color: #FFF;
        }

        main {
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
        }

        .blocos {
            gap: 5%;
            display: flex;
            max-width: 80%;
            flex-direction: row;
            justify-content: center;
        }

        .bloco1 {
            display: flex;
            align-items: center;
            flex-direction: column;
        }

        /* Barra de Navegação */
        .bg-dark {
            background-color: #0f143c !important;
            color: white !important;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo p {
            font-size: 20px;
            margin-bottom: 0 !important;
        }

        #logo {
            width: 60px;
        }

        header,
        .navbar {
            background-color: #0f143c;
        }

        #nav-container {
            padding-top: 0;
            padding-bottom: 0;
        }

        .navbar-nav .nav-link {
            cursor: pointer;
        }

        .dropdown-item {
            color: #0f143c !important;
        }

        .dropdown-item:active {
            background-color: #FFF !important;
        }

        .navbar-brand {
            padding: 0;
            color: #FFF;
        }

        #navbar-links a {
            color: #FFF;
        }

        #navbar-links a:hover {
            color: #777573;
        }

        .navbar-expand-lg .navbar-nav .nav-link {
            padding: 1rem .8rem;
        }

        /*Título*/
        #about-area {
            background-color: #0f143c;
        }

        .main-title {
            color: #ffa500;
            font-size: 40px;
            margin: 100px 0 65px 0;
            text-shadow: 2px 2px 4px #0000009e;
        }

        #subtitulo {
            color: #ffa500;
            text-align: center;
            padding-top: 10px;
        }

        #destaque {
            font-size: 23px;
            color: orange;
        }

        #analcred {
            width: 500px;
            align-items: center;
        }

        .row:nth-child(1) {
            display: flex;
            justify-content: center;
        }

        .form {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background-color: #fff;
            padding: 3rem;
        }

        .form-header {
            margin-bottom: 3rem;
            display: flex;
            justify-content: center;
        }

        .form-header h1::after {
            content: '';
            display: block;
            width: 5rem;
            height: 0.3rem;
            background-color: #0f143c;
            margin: 0 auto;
            position: absolute;
            border-radius: 10px;
        }

        .input-group {
            gap: 5%;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            text-align: center;
        }

        .input-box {
            display: flex;
            flex-direction: column;
            margin-bottom: 1.1rem;
        }

        .input-box input {
            margin: 0.6rem 0;
            padding: 0.8rem 1.2rem;
            border: none;
            border-radius: 10px;
            box-shadow: 1px 1px 6px #0000001c;
        }

        .input-box input:hover {
            background-color: #eeeeee75;
        }

        .input-box input:focus-visible {
            outline: 1px solid #0f143c;
        }

        .input-box label,
        .gender-title h6 {
            font-size: 0.75rem;
            font-weight: 600;
            color: #000000c0
        }

        .input-box input::placeholder {
            color: #000000be;
        }

        .gender-input {
            display: flex;
            align-items: center;
        }

        .gender-input input {
            margin-right: 0.35rem;
        }

        .gender-input label {
            font-size: 0.81rem;
            font-weight: 600;
            color: #000000c0;
        }

        .continue-button {
            display: flex;
            justify-content: center;
        }

        .continue-button button {
            width: 70%;
            margin-top: 2.5rem;
            border: none;
            background-color: #0f143c;
            padding: 0.62rem;
            border-radius: 5px;
            cursor: pointer;
            font-size: 0.93rem;
            font-weight: 500;
            color: #fff;
        }

        .continue-button button:hover {
            background-color: #0f143c;
        }

        .alerta {
            width: 70%;
            font-weight: 500;
            color: rgb(255, 94, 0);
        }

        .dropdown-menu a:hover {
            background-color: #74727236;
        }

        footer {
            padding: 5%;
            color: white;
            display: flex;
            text-align: center;
            margin-top: 10%;
            flex-direction: column;
            align-items: center;
            background-color: #01051b;
        }

        .links a {
            color: white;
            display: flex;
            justify-content: center;
            list-style-type: none;
            text-decoration: underline;
        }

        .links ul {
            list-style-type: none;
        }

        .social {
            gap: 5%;
            display: flex;
            justify-content: center;
        }

        .social a {
            color: white;
        }

        @media(max-width: 1400px) {
            .main-title::after {
                text-align: center;
            }

            #analcred {
                width: 400px;
            }

            .form .input-group {
                justify-content: center;
            }

            .form .input-box input {
                width: 260px;
            }
        }

        .blocos {
            max-width: 80%;
        }

        @media(max-width: 990px) {
            nav #logo {
                width: 40px;
                height: 40px;
            }

            nav .navbar-brand {
                font-size: 15px;
            }

            .main-title {
                font-size: 27px;
            }

            .blocos,
            .bloco1,
            .bloco1-content {
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .bloco1-content {
                font-size: 15px;
                max-width: 200%;
                margin-bottom: 25%;
            }

            .img-fluid {
                max-width: 100%;
            }

            #analcred {
                max-width: 100%;
            }
        }

        @media(max-width: 764px) {

            .card-img,
            img,
            .container {
                max-width: 80%;
            }
        }
    </style>


    <title>Credito</title>
</head>

<body>
    <header>

        <div class="container" id="nav-container">

            <nav class="navbar navbar-expand-lg fixed-top navbar-dark">

                <a class="navbar-brand" href="index.php">
                    <img src="img/CredMaster_ofc.png" alt="logo" id="logo"> CredMaster
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links"
                    aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link" href="index.php">Home</a>
                        <a class="nav-item nav-link" target=”_blank”
                            href="https://www8.caixa.gov.br/siopiinternet-web/simulaOperacaoInternet.do?method=inicializarCasoUso">Simulação</a>
                        <div class="nav-item dropdown" class="nav-item nav-link">
                            <a class="nav-link dropdown-toggle" id="process-menu" id="navbardrop"
                                data-toggle="dropdown">
                                Serviços
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" style="color:#0f143c;" href="habitacao.php">Habitação</a>
                                <a class="dropdown-item" style="color:#0f143c;" href="emprestimos.php">Empréstimos</a>
                                <a class="dropdown-item" style="color:#0f143c;" href="aberturaconta.php">Cartões</a>
                                <a class="dropdown-item" style="color:#0f143c;" href="consorcio.php">Consórcio</a>
                            </div>
                        </div>
                        <a class="nav-item nav-link" href="analisecredito.php">Análise de Crédito</a>
                        <a class="nav-item nav-link" href="aberturaconta.php">Abertura de Conta</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <div class="col-md-12">
            <div class="container">
                <div class="row">
                    <h2 class="main-title">Análise de Crédito</h2>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="bloco1">
                            <img class="img-fluid" src="img/cred.png" alt="Crédito">

                            <div class="bloco1-content">
                                <p id="subtitulo"> ATENÇÃO </p>

                                <p>É essencial que os dados mencionados estejam precisos e que os documentos estejam
                                    legíveis na
                                    fotografia.</p>

                                <p id="subtitulo"> O que é analise de crédito? </p>
                                <p>
                                    Análise de crédito é a avaliação feita para
                                    determinar a probabilidade de um indivíduo ou empresa pagar um empréstimo. Isso
                                    envolve
                                    examinar histórico financeiro, renda, despesas, score de crédito, emprego, garantias
                                    e
                                    valor
                                    do empréstimo para decidir sobre a aprovação do empréstimo ou concessão de crédito.
                                </p>
                                <p id="destaque">Fazer uma análise do crédito é importante para verificar se você pode
                                    receber
                                    um empréstimo para comprar uma casa.</p>
                                <p>
                                    É viável realizar um financiamento imobiliário, com as seguintes etapas: análise de
                                    crédito,
                                    seleção do imóvel, avaliação de engenharia, análise documental, elaboração do
                                    contrato,
                                    entrevista, assinatura do contrato, os contratos assinados devem ser encaminhados a
                                    prefeitura para o pagamento do ITBI, levar o registro ao banco. O vídeo abordará
                                    esses
                                    passos em detalhes.
                                </p>

                                <video src="img/Analisecred.mp4" type="mp4" alt="Vídeo explicando ánalise de crédito"
                                    id="analcred" controls="true"></video>
                                <p style="text-align:center;">Vídeo sobre análise de crédito</p>

                            </div>

                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="bloco2">
                            <div class="form">
                                <form action="banco_analisecredito.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-header">
                                        <div class="title">
                                            <h1>Envio dos documentos</h1>
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <div class="input-box">
                                            <label for="nome">Nome Completo</label>
                                            <input id="nome" type="text" name="nome"
                                                placeholder="Digite seu nome completo" required>
                                        </div>

                                        <div class="input-box">
                                            <label for="number">CPF</label>
                                            <input id="number" type="tel" name="cpf" placeholder="Digite seu CPF"
                                                required>
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <div class="input-box">
                                            <label for="email">E-mail</label>
                                            <input id="email" type="email" name="email" placeholder="Digite seu email"
                                                required>
                                        </div>

                                        <div class="input-box">
                                            <label for="number">Telefone</label>
                                            <input id="number" type="tel" name="telefone" placeholder="(xx) xxxx-xxxx"
                                                required>
                                        </div>

                                        <div class="input-box telefone">
                                            <label for="number">Outro Telefone</label>
                                            <input id="number" type="tel" name="telefone1" placeholder="(xx) xxxx-xxxx"
                                                required>
                                        </div>

                                        <p class="alerta">Aviso: As fotos precisam estar legíveis; caso contrário, não
                                            será
                                            possível realizar a análise</p>

                                        <div class="input-box">
                                            <label for="file">Foto: CNH ou do RG</label>
                                            <input id="file" type="file" name="foto" required>
                                        </div>

                                        <div class="input-box">
                                            <label for="file">Foto: comprovante de endereço dos últimos 60 dias</label>
                                            <input id="file" type="file" name="foto1" required>
                                        </div>

                                        <div class="input-box">
                                            <label for="file">Foto dos dois últimos holerites ou declaração do imposto
                                                de
                                                renda</label>
                                            <input id="file" type="file" name="foto2" required>
                                        </div>
                                        <div class="input-box">
                                            <label for="file">Se for casado, é necessário fornecer a renda do
                                                cônjuge</label>
                                            <input id="file" type="file" name="foto3">
                                        </div>
                                        
                                        <div class="input-box">
                                            <label for="file">Imposto de Renda Pessoa Física (IRPF), se tiver feito a
                                                declaração.</label>
                                            <input id="file" type="file" name="foto4" required>
                                        </div>
                                    </div>

                                    <div class="continue-button">
                                        <button type="submit">Enviar</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="footer-contant">
            <div class="footer-section links">
                <h3>Links Rápidos</h3>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a target=”_blank”
                            href="https://www8.caixa.gov.br/siopiinternet-web/simulaOperacaoInternet.do?method=inicializarCasoUso">Simulação</a>
                    </li>
                    <li><a href="index.php#service-area">Serviços</a></li>
                    <li><a href="analisecredito.php">Análise de Crédito</a></li>
                    <li><a href="aberturaconta.php">Abertura de Conta</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h3>Siga-nos</h3>
                <div class="social">
                    <a href="https://www.facebook.com/share/UEM2LnySiyDY5VLv/" target=”_blank”><i class="fab fa-facebook-f"></i></a>
                    <a href="http://Instagram.com/correspondente__credmaster" target=”_blank”><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; 2024 CredMasterJardim.com.br | Todos os direitos reservados.
        </div>
    </footer>
</body>

</html>