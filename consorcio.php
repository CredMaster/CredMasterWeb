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

  <title>Consórcio</title>

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
      margin-top: 15%;
      margin-bottom: 5%;
      font-size: 40px;
      text-align: center;
      text-shadow: 2px 2px 4px #0000009e;
    }

    #destaque {
      font-size: 23px;
      color: orange;
    }

    .bloco0 {
      padding-bottom: 5%;
    }

    .bloco0 p {
      text-shadow: 2px 2px 4px #0000009e;
    }

    .bloco1 .container,
    .bloco2 .container,
    .bloco3 .container {
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 5%;
      text-shadow: 2px 2px 4px #0000009e;
    }

    .bloco1 {
      background-image: url('./img/consorcio_house.png');
    }

    .bloco1 .container {
      height: 100vh;
    }

    .bloco2 .row,
    .bloco3 .row {
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .bloco2 img,
    .bloco3 img {
      margin-bottom: 15px;
      box-shadow: 10px 10px orange;
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

    .video {
      display: flex;
      justify-content: center;
    }

    .img {
      display: flex;
      justify-content: center;
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

      .bloco3 .row {
        display: flex;
      }
    }

    @media(max-width: 450px) {
      #destaque {
        font-size: 6vw;
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
            <h2 class="main-title">Consórcio</h2>
          </div>

          <div class="col-md-6">
            <p id="destaque">
              Consórcio é uma forma de compra coletiva onde um grupo de pessoas se compromete a contribuir com
              parcelas mensais por um período determinado.  
            </p>

            <p>
              Esse valor é acumulado em um fundo comum, e a cada mês, alguns participantes são contemplados (por meio de
              sorteio ou lance) para receber o crédito e adquirir o bem desejado. Realize o sonho da casa própria,
              adquira seu carro, ônibus, caminhão ou máquina agrícola com o consórcio da CAIXA!
            </p>

            <p id="destaque">Nossos consórcios oferecem vantagens significativas</p>
            <p>
              Como a possibilidade de escolher a oferta ideal sem pagar juros adicionais, bastando apenas arcar com a
              taxa de
              administração diluída ao longo do prazo contratado. Além disso, você pode utilizar até 10% do valor do
              crédito para
              cobrir despesas como seguros, tributos e registros. Para quem deseja ampliar a frota, o consórcio de
              veículos pesados
              permite a aquisição de ônibus e caminhões com prazo de pagamento de até 100 meses.
            </p>
          </div>

          <div class="col-md-6">
            <div class="video">
              <video src="./img/consorcio.mp4" class="card-img" alt="Card image" type="mp4" alt="Consórcio"
                controls="true"></video>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="bloco1">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p id="destaque">
              No Consórcio Imobiliário, com parcelas a partir de R$ 310,00 e prazo de até 200 meses, é possível adquirir
              imóveis residenciais e comerciais (novos, usados ou na planta), terrenos, ou casas na praia e no campo,
              além de
              usar o crédito para construção, reforma ou quitação de financiamento imobiliário.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="bloco2">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="img">
              <img src="./img/consorcio_carro.png" alt="carro">
            </div>
          </div>
          <div class="col-md-6">
            <p id="destaque">
              Consórcio de Veículos Leves, com parcelas a partir de R$ 230,00 e prazo de até 80 meses, é ideal para a
              compra de veículos 0km ou com até 8 anos de uso, além de permitir a quitação de financiamento de veículos.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="bloco3">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <p id="destaque">
              O Consórcio de Veículos Pesados, com parcelas a partir de R$ 2.370,00 e prazo de até 100 meses, é
              destinado à aquisição de ônibus, caminhões (novos ou usados com até 10 anos), tratores, máquinas e
              equipamentos agrícolas, bem como aeronaves e embarcações.
            </p>
          </div>

          <div class="col-md-6">
            <div class="img">
              <img src="./img/consorcio_trator.png" alt="trator">
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