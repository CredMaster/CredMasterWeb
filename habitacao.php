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

  <title>Habitação</title>

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

    .dropdown-menu a {
      text-shadow: none;
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

    .container {
      justify-content: center;
      text-shadow: 2px 2px 4px #0000009e;
    }

    .bloco1 .row,
    .bloco1 .container,
    .bloco2 .container {
      display: flex;
      align-items: center;
    }

    .bloco1 .container {
      margin-bottom: 5%;
    }

    .bloco3 .container {
      margin-top: 5%;
    }

    .bloco1 .col-md-6 {
      display: flex;
      justify-content: center;
    }

    .bloco2 {
      height: 100vh;
      display: flex;
      align-items: center;
      background-image: url('./img/habitacao_construir.png');
    }

    .bloco3 li {
      font-size: 20px;
    }

    .bloco1 img,
    .bloco2 img {
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
      margin-top: 5%;
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

    .dropdown-item a {
      text-shadow: none;
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

      .bloco1 {
        padding-top: 7%;
      }

      .bloco1 img {
        max-width: 80%;
      }

    }

    @media(max-width: 960px) {
      nav #logo {
        width: 40px;
        height: 40px;
      }

      nav .navbar-brand {
        font-size: 15px;
      }

      .main-title {
        font-size: 27px;
        margin-bottom: 5%;
      }

      #destaque {
        font-size: 2.5vw;
      }

      .bloco0 p,
      .bloco3 li,
      .bloco3 p {
        font-size: 2vw;
      }

      .col-md-6 {
        margin-top: 7%;
      }

    }

    @media(max-width: 764px) {
      .main-title {
        margin-top: 15%;
      }

      .card-img {
        max-width: 70%;
      }

      #destaque {
        font-size: 3vw;
      }

      .bloco0 p,
      .bloco3 li,
      .bloco3 p {
        font-size: 2.5vw;
      }

      footer {
        margin-top: 10%;
      }

      footer h3 {
        font-size: 3vw;
      }

      footer a,
      p {
        font-size: 2.5vw;
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
            <a class="nav-item nav-link"
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
            <a class="nav-item nav-link" href="aberturaconta.php">Abertura de Conta</a>
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
            <h2 class="main-title">Financiamento Habitacional</h2>
          </div>

          <div class="col-md-6">
            <p id="destaque">
              Se você está pensando comprar um imóvel, a CAIXA oferece uma
              linha de crédito habitacional com prazos de até 35 anos para pagamento.
            </p>

            <p>
              A CAIXA avalia o imóvel e as condições de pagamento, e você pode optar por um período de carência, durante
              o qual
              pagará apenas os prêmios de seguro MIP e DFI e a tarifa de administração mensal, se
              o financiamento for pelo SFH (Sistema Financeiro da Habitação). A atualização
              monetária, juros e amortização serão incorporados ao saldo devedor após a carência.
              A parcela pode chegar a até 30% da sua renda familiar bruta, e é possível usar o
              FGTS para parte do pagamento. Para encontrar a melhor opção para seu orçamento, faça
              uma simulação e consulte o Correspondente CAIXA CredMaster.
            </p>

            <p>
              Ao realizar uma simulação, você pode identificar as melhores opções de crédito habitacional disponíveis
              para você, Lembre-se de adicionar o valor do fator de correção ao valor da prestação indicado no
              simulador. Acesse aqui para mais informações!
            </p>

            <div class="link">
              <a href="https://www8.caixa.gov.br/siopiinternet-web/simulaOperacaoInternet.do?method=inicializarCasoUso"
                id="botao">Faça uma simulação</a>
              <a href="http://wa.me/556793411799" id="botao">Fale Conosco</a>
            </div>
          </div>

          <div class="col-md-6" style="display: flex; align-items: center; flex-direction: column;">
            <video src="./img/imobiliario.mp4" class="card-img" alt="Card image" type="mp4"
              alt="Financiamento Habitacional" controls="true"></video>
            <p style="text-align:center;">Vídeo sobre imóvel novo e usado</p>
          </div>
        </div>
      </div>
    </div>

    <div class="bloco1">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="./img/habitacao_cozinha.png" alt="cozinha">
          </div>

          <div class="col-md-6">
            <p id="destaque">
              O crédito habitacional da CAIXA, oferecido pelo Sistema Financeiro de Habitação (SFH), usa o imóvel como
              garantia do empréstimo. Você pode usar o FGTS para amortizar e pagar parte das prestações em
              financiamentos para construção e reforma. Para acessar esses benefícios, é necessário ter pelo menos 3
              anos de carteira assinada.
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
              Você que deseja construir a casa dos sonhos em um terreno próprio, adquirir um terreno para construir, ou
              reformar um imóvel existente. A CAIXA permite financiar até 80% do custo da construção ou
              reforma. Exclusivamente para pessoas físicas, o financiamento é voltado apenas para residências de moradia
              própria e não pode ser usado para projetos comerciais.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="bloco3">
      <div class="container">
        <div class="row">
          <div class="col-md-6" style="display: flex; align-items: center; flex-direction: column;">
            <video src="./img/construcao.mp4" class="card-img" alt="Card image" type="mp4"
              alt="Financiamento Construção" controls="true"></video>
            <p style="text-align:center;">Vídeo sobre construção e reforma</p>
          </div>

          <div class="col-md-6">
            <p id="destaque">
              As vantagens do financiamento são as seguintes:
            </p>

            <ul>
              <li>Financiamento de até 80% para construção ou reforma, com prazos de até 35 anos.</li>
              <li>Utilize seu FGTS para amortizar e pagar parte das prestações.</li>
              <li>Financie a construção em um terreno próprio ou a compra de um terreno para construir sua casa.</li>
              <li>Inclua melhorias sustentáveis, como sistemas de aquecimento solar e energia renovável, economizando
                nas contas e ajudando o meio ambiente.</li>
              <li>Acompanhe seu contrato pelo aplicativo Habitação CAIXA.</li>
            </ul>
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
          <li><a
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
          <a href="https://www.facebook.com/share/UEM2LnySiyDY5VLv/"><i class="fab fa-facebook-f"></i></a>
          <a href="http://Instagram.com/correspondente__credmaster"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; 2024 CredMasterJardim.com.br | Todos os direitos reservados.</p>
    </div>
  </footer>
</body>

</html>