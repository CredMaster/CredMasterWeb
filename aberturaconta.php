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

        /*Barra de navegação*/

        .bg-dark {
            background-color: #0f143c !important;
        }

        #logo {
            width: 60px;
        }

        .nav-link {
            color: #FFF !important;
            font-size: 16px !important;
        }

        header,
        .navbra {
            width: 100%;
            height: 55px;


            position: fixed;
            top: 0;
            z-index: 999;


            padding-top: 8px;
            background-color: #0f143c;
            backdrop-filter: blur(20px);
        }

        .header-container {
            max-width: 820px;
            margin: 0 auto;
            padding: 5px 0px;
        }

        nav {
            background-color: #0f143c;
        }

        .nav-list-desktop {
            content: '';
            list-style: none;


            display: flex;
            justify-content: space-between;
        }

        .nav-link {
            color: gray;
            display: block;
            padding: 5px 10px;
            cursor: pointer;


            font-size: 11px;
            opacity: 1;
            transition: 0.5s ease;

        }

        .nav-link:hover {
            opacity: .7;


        }

        .nav-mobile {
            display: none;
        }

        .nav-list-mobile {
            display: none;


        }

        .nav-list-mobile {
            width: 100%;
            height: 0;


            position: fixed;
            top: -1100%;
            z-index: 0;


            opacity: 0.5;


            background-color: #030303;


            list-style: none;
            display: flex;
            align-items: center;


            margin: 0;
            padding: 40px 30px;


            flex-direction: column;


            transition: 1s ease;
        }

        .nav-item-mobile {
            width: 100%;
            margin: 5px 0px;
        }

        .nav-link-mobile {
            display: block;
            color: gray;


            width: 100%;
            padding-top: 10px;
            border-top: 1px solid #333;


            font-size: 11px;
            opacity: 1;
            transition: 0.5s ease;
        }

        .nav-item-mobile:hover {
            opacity: 0.7;
        }


        .nav-link-mobile.active {
            top: 0;
            height: 100vh;
            opacity: 1;
        }

        .main-title {
            color: #ffa500;
            font-size: 40px;
            text-align: center;
            margin: 100px 0 65px 0;
            text-shadow: 2px 2px 4px #0000009e;
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
            margin-left: auto;
            margin-right: auto;
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

        .dropdown-menu a:hover {
            background-color: #74727236;
        }

        @media(max-width: 1000px) {
            .container {
                max-width: 1500px !important;
            }

            .row {
                display: flex;
                align-items: center;
                flex-direction: column;
            }
        }

        @media(max-width: 850px) {
            nav #logo {
                width: 40px;
                height: 40px;
            }

            nav .navbar-brand {
                font-size: 15px;
            }

            .main-title {
                font-size: 30px;
            }

            .bloco0 {
                display: flex;
                flex-direction: column;
                align-items: center;
            }
        }
    </style>


    <title>Cartões de Crédito</title>
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
                        <a class="nav-item nav-link"
                            href="https://www8.caixa.gov.br/siopiinternet-web/simulaOperacaoInternet.do?method=inicializarCasoUso">Simulação</a>
                        <div class="nav-item dropdown" class="nav-item nav-link">
                            <a class="nav-link dropdown-toggle" id="process-menu" id="navbardrop"
                                data-toggle="dropdown">
                                Serviços
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" style="color:#0f143c;" href="habitacao.php">Habitação</a>
                                <a class="dropdown-item" style="color:#0f143c;" href="emprestimos.php">Empréstimos</a>
                                <a class="dropdown-item" style="color:#0f143c;" href="cartoes.php">Cartões</a>
                                <a class="dropdown-item" style="color:#0f143c;" href="consorcio.php">Consórcio</a>
                            </div>
                        </div>
                        <a class="nav-item nav-link" href="analisecredito.php">Análise de Crédito</a>
                        <a class="nav-item nav-link" href="cartoes.php">Abertura de Conta</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <div class="bloco">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="main-title">Cartões de Crédito</h2>
                    </div>

                    <div class="col-md-6">
                        <div class="bloco0">
                            <div class="img">
                                <img src="./img/cartoes_cartoes.png" alt="cartões">
                            </div>

                            <p id="destaque"> A Caixa tem várias opções:</p>

                            <ul>
                                <li>Caixa Sim Visa: O cartão SEM ANUIDADE e com taxas reduzidas.</li>
                                <li>Caixa Visa Gold: Um cartão versátil para suas compras do dia e até mesmo em viagens!
                                    Tenha
                                    inseção da primeira anuidade, Seguro de Preços, Programa Pontos CAIXA diversas
                                    ofertas
                                    do
                                    Vai de Visa</li>
                                <li>Caixa Visa Platinum: Benefícios exclusivos em suas compras e viagens! Seguro de
                                    Preços,
                                    Seguro de Compras, Seguro Emergência Médica Internacional e o Programa Pontos Caixa.
                                </li>
                                <li>Caixa Universitário Visa: O cartão certo para os alunos de instituições de ensino
                                    superior.
                                    Inseção de anuidade por 5 anos, tarifas diferenciadaas, Programa Pontos CAIXA e
                                    descontos do
                                    Vai de Visa para economizar
                                </li>
                                <li>Caixa Visa Infinite: Um cartão único, com benefícios para viver intensamentee suas
                                    experiências. Tudo para sua viagem: mais de 1.200 Sala VIP, Seguros de Bagagem,
                                    Perda de
                                    Conexão, Atraso de Embarque e muito mais!</li>
                            </ul>

                            <p>Controle seus gastos pelo App Cartões CAIXA, tenha descontos em parceiros no Vai de Visa,
                                Seguro
                                de Preços e Seguro de Compras</p>

                            <p id="destaque">Peça já o seu cartão. Prencha as informações nesse formulário</p>

                            <p id="destaque">O cartão de Crédito Caixa Visa facilita sua vida. Você pode usar em todas
                                as
                                suas compras e aproveitar todos os benefícios, como:</p>

                            <ul>
                                <li>
                                    Compras em lojas físicas e on-line
                                </li>
                                <li>
                                    Descontos em parceiros no Programa Vai de Visa(acesse: <a
                                        href="https://www.visa.com.br/promotions/vai-de-visa.html"
                                        style="color: white; text-decoration: underline;">vaidevisa.com.br</a>)
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form">
                            <form action="banco_cartoes.php" method="POST" enctype="multipart/form-data">
                                <div class="form-header">
                                    <div class="title">
                                        <h1>Envio dos dados</h1>
                                    </div>
                                </div>

                                <div class="input-group">
                                    <div class="input-box">
                                        <label for="nome">Nome Completo</label>
                                        <input id="nome" type="text" name="nome" placeholder="Digite seu nome completo"
                                            required>
                                    </div>

                                    <div class="input-box">
                                        <label for="number">CPF</label>
                                        <input id="number" type="tel" name="cpf" placeholder="Digite seu CPF" required>
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
                                </div>

                                <div class="input-group">
                                    <div class="input-box">
                                        <label for="endereco">Endereço</label>
                                        <input id="endereco" type="text" name="endereco"
                                            placeholder="Digite seu endereço" required>
                                    </div>

                                    <div class="input-box">
                                        <label for="number">CEP</label>
                                        <input id="number" type="tel" name="cep" placeholder="Digite seu CEP" required>
                                    </div>
                                </div>

                                <div class="input-group">
                                    <div class="input-box">
                                        <label for="renda">Renda Mensal</label>
                                        <input id="renda" type="text" name="renda" placeholder="Digite sua Renda Mensal"
                                            required>
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

</body>

</html>