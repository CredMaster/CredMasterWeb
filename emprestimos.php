<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fonte -->
    <link href="font/fonts_google.css" rel="stylesheet">
    <!-- Estilos -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <title>Empréstimos</title>

    <style>
        /* Estilos Gerais */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }

        body {
            font-family: Georgia !important;
            background-color: #0f143c !important;
        }

        .row {
            margin: 0;
        }

        p,
        li {
            font-size: 16px;
            color: #FFF;
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

        .main-title {
            color: #ffa500;
            margin-top: 10%;
            margin-bottom: 5%;
            font-size: 40px;
            text-align: center;
            text-shadow: 2px 2px 4px #0000009e;
        }

        #destaque {
            font-size: 27px;
            color: orange;
        }

        .bloco0 {
            padding-bottom: 5%;
        }

        .bloco0 p {
            text-shadow: 2px 2px 4px #0000009e;
        }

        .bloco1 .container,
        .bloco2 .container {
            height: 100vh;
        }

        .bloco1 .container,
        .bloco2 .container,
        .bloco3 .container {
            display: flex;
            align-items: center;
            justify-content: center;
            text-shadow: 2px 2px 4px #0000009e;
        }

        .bloco1 {
            background-image: url('./img/emprestimo_cofre.png');
        }

        .bloco2 .row,
        .bloco3 .row {
            display: flex;
            align-items: center;
        }

        .bloco0 img,
        .bloco3 img {
            margin-bottom: 15px;
            box-shadow: 10px 10px orange;
        }

        #botao {
            padding: 2%;
            color: white;
            border-radius: 10px;
            border: 3px solid transparent;
            transition: .5s;
            text-decoration: none;
            background-color: orange;
        }

        #botao:hover {
            text-decoration: none;
            color: #FFF;
            background-color: transparent;
            border-color: orange;
        }

        .link {
            gap: 5%;
            display: flex;
            margin-top: 10%;
            align-items: center;
            justify-content: center;
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

        @media(max-width: 1200px) {

            /*Geral*/
            .container {
                padding: 20px 0;
            }

            .main-title {
                font-size: 35px;
            }

            p,
            .bloco3 li {
                font-size: 16px;
            }

            img {
                max-width: 100%;
            }

        }

        @media(max-width: 960px) {
            nav #logo {
                width: 40px;
                height: 40px;
            }

            nav .navbar-brand {
                font-size: 17px;
            }

            .main-title {
                font-size: 27px;
                margin-bottom: 5%;
            }

            .col-md-6 {
                margin-top: 7%;
            }

        }

        @media(max-width: 764px) {
            .main-title {
                margin-top: 15%;
            }

            .card-img,
            img,
            .container {
                max-width: 80%;
            }
        }
    </style>
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
                            <a class="nav-link dropdown-toggle" id="process-menu" id="navbardrop" data-toggle="dropdown">
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
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <div class="bloco0">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="main-title">Empréstimos</h2>
                    </div>

                    <div class="col-md-6">
                        <p id="destaque">
                            Crédito sem a necessidade de avalista, com vantagens especiais e as melhores condições, para
                            funcionários de empresas e órgãos conveniados, aposentados e pensionistas do INSS.
                        </p>

                        <p>As Vantagens são:</p>

                        <ul>
                            <li>O valor da prestação é descontado diretamente do seu salário ou benefício do INSS, e
                                você tem a opção de quitar antecipadamente a dívida a qualquer momento.</li>
                            <li>Deixe a burocracia de lado. Conosco, você não precisa de avalista e seu crédito é
                                liberado rapidamente.</li>
                            <li>O valor máximo do empréstimo é definido com base no seu salário ou benefício, garantindo
                                que a prestação não exceda 35% da sua renda.</li>
                        </ul>

                        <div class="link">
                            <a href="http://wa.me/556793411799" id="botao">Fale Conosco</a>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <img src="./img/emprestimo.png" alt="carro">
                    </div>
                </div>
            </div>
        </div>

        <div class="bloco1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p id="destaque">
                            Você pode contratar um empréstimo sem a necessidade de avalista, e a prestação é descontada
                            diretamente na sua folha de pagamento ou benefício. Se você já recebe seu salário conosco,
                            terá ainda mais vantagens ao contratar o crédito. Caso contrário, solicite agora a
                            transferência automática de salário e aproveite todos os benefícios.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bloco2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p id="destaque">
                            Condições exigidas
                        </p>

                        <ul>
                            <li>Ser funcionário de uma empresa ou órgão conveniado, ou ser aposentado ou pensionista
                                permanente do INSS.</li>
                            <li>Para pensionistas do INSS, o benefício deve ser permanente e permitir a contratação do
                                empréstimo, sujeito à aprovação do órgão competente.</li>
                            <li>O valor da prestação não pode exceder 35% do salário ou benefício mensal, conforme as
                                condições do convênio.</li>
                            <li>As prestações mensais são fixas e descontadas diretamente do salário ou benefício.</li>
                            <li>A contratação depende da aprovação de crédito, da confirmação da averbação pelo órgão ou
                                empregador, e do cumprimento das demais cláusulas contratuais do produto.</li>
                            <li>Informamos que, no caso de empréstimos consignados com garantia de FGTS, esta modalidade
                                está temporariamente suspensa.</li>
                        </ul>

                        <div class="link">
                            <a href="https://www.caixa.gov.br/voce/credito-financiamento/emprestimo/consignado/Paginas/default.aspx"
                                id="botao">Saiba mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="footer-section links">
            <h3>Links Rápidos</h3>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a
                        href="https://www8.caixa.gov.br/siopiinternet-web/simulaOperacaoInternet.do?method=inicializarCasoUso">Simulação</a>
                </li>
                <li><a href="index.php#service-area">Serviços</a></li>
                <li><a href="analisecredito.php">Análise de Crédito</a></li>
                <li><a href="aberturaconta.php">Abertura de Conta</a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 CredMasterJardim.com.br | Todos os direitos reservados.</p>
        </div>
    </footer>
</body>

</html>