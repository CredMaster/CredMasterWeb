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
  <link rel="stylesheet" type="text/css" href="css/meuEstilo.css">

  <title>Cred Master</title>

</head>

<style>
  h4 {
    color: white !important;
  }

  #logoCredMaster {
    width: 100px;
    height: 100px;
  }

  .service-box {
    text-align: center;
    margin-bottom: 50px;
  }

  .service-box i,
  .service-box h4 {
    transition: .5s;
  }

  .service-box i {
    font-size: 36px;
    margin-bottom: 20px;
  }

  .service-box #icon {
    width: 100px;
    height: 100px;
  }

  .service-box h4 {
    font-size: 24px;
    margin-bottom: 20px;
  }

  .service-box #botao {
    padding: 5px 10px 5px;
    color: white;
    cursor: pointer;
    transition: .5s;
    border-radius: 5%;
    text-decoration: none;
    border: 3px solid #00052a;
    background-color: #00052a;
  }

  .service-box #botao:hover {
    background-color: transparent;
    border-color: #00052a;
  }

  #destaque {
    color: orange;
    font-size: 23px;
  }

  footer {
    padding: 5%;
    color: white;
    display: flex;
    text-align: center;
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

  .faq-item {
    margin-bottom: 10px;
  }

  .faq-question {
    cursor: pointer;
    background-color: #00052a;
    padding: 10px;
    color: white;
    text-shadow: #000 2px 4px 10px;
    transition: background-color 0.3s;
  }

  .faq-question:hover {
    background-color: #00052a;
  }

  .faq-answer {
    display: none;
    padding: 10px;
    color: white;
    background-color: #00052a;
  }

  .faq-question.active {
    background-color: #00052a;
  }

  @media(max-width: 768px) {
    .about-title {
      text-align: center;
    }

    .container {
      max-width: 80%;
    }

    .conteudo {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    nav .navbar-brand {
      font-size: 17px;
    }

    #destaque {
      text-align: center;
    }
  }

  @media(max-width: 450px) {
    #destaque {
      font-size: 6vw;
    }
  }
</style>

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
    <div class="container-fluid" id="img">
      <div id="mainSlider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#mainSlider" data-slide="0" class="active"></li>
          <li data-target="#mainSlider" data-slide="1"></li>
          <li data-target="#mainSlider" data-slide="2"></li>
          <li data-target="#mainSlider" data-slide="3"></li>
        </ol>

        <div class="carousel-inner">
          <!--bloco0-->
          <div class="carousel-item active">
            <img src="img/slide0.png" class="d-block w-100" alt="Cred" id="slide0">
            <div class="carousel-caption d-md-block">
              <h2>Seja Bem-Vindo a CredMaster</h2>
              <p>Correspondente Bancário da Caixa</p>
              <br>
              <a href="http://wa.me/556793411799" target=”_blank” class="botao">Entre em contato</a>
            </div>
          </div>

          <!--bloco1-->
          <div class="carousel-item ">
            <img src="img/slide1.png" class="d-block w-100" alt="Simulado da caixa">
            <div class="carousel-caption  d-md-block">
              <h2>Simulação Habitacional</h2>
              <p>Faça sua simulação no site oficial da Caixa</p>
              <a href="https://www8.caixa.gov.br/siopiinternet-web/simulaOperacaoInternet.do?method=inicializarCasoUso"
                class="botao" target=”_blank”>Clique aqui</a>
            </div>
          </div>

          <!--bloco2-->
          <div class="carousel-item ">
            <img src="img/slide2.png" class="d-block w-100" alt="Cred">
            <div class="carousel-caption d-md-block">
              <h2>Serviços Oferecidos</h2>
              <p>Assista aos vídeos que explicam sobre financiamento habitacional,<br>construção financiada e muitos
                outros
              </p>
              <a href="index.php#service-area" class="botao" id="btn-service">Saiba mais</a>
            </div>
          </div>

          <!--bloco3-->
          <div class="carousel-item ">
            <img src="img/slide3.png" class="d-block w-100" alt="Cred">
            <div class="carousel-caption d-md-block">
              <h2>Localização do estabelecimento</h2>
              <p>Endereço: Av. Duque de Caxias, 796; fundos; centro; Jardim-MS</p>
              <a href="https://maps.app.goo.gl/orUZVkeG9wevheuHA" target=”_blank” class="botao">Aperte aqui</a>
            </div>
          </div>
        </div>

        <a href="#mainSlider" class="carousel-control-prev" role="button" data-slide="prev">
          <i class="bi bi-caret-left-fill"></i>
        </a>

        <a href="#mainSlider" class="carousel-control-next" role="button" data-slide="next">
          <i class="bi bi-caret-right-fill"></i>
        </a>
      </div>
    </div>

    <br>
    <!--Seta-->

    <div class="set">
      <img id="seta" src="img/seta.gif" alt="Seta indicando deslizar para abaixo">
    </div>

    <!--Pagina Home-->

    <div id="about-area">

      <div class="container">

        <div class="content-sobre">

          <div class="row">

            <div class="col-12">
              <h3 class="main-title" id="title-home">Sobre Cred Master Correspondente Bancário</h3>
            </div>

            <div class="col-md-6">
              <div class="logo-sobre">
                <img class="img-fluid" src="img/CredMaster_ofc.png" alt="Logo Cred Master">
              </div>
            </div>

            <div class="col-md-6">
              <div class="conteudo">
                <p id="destaque">Correspondente Bancário da Caixa</p>

                <p> O que é uma Correspondente Bancario? </p>
                <p>Correspondente é uma empresa contratada pela CAIXA para prestar serviços à comunidade em seu nome e
                  com
                  critérios por ela estabelecidos. - CAIXA</p>

                <p id="destaque">CredMaster</p>
                <p>
                  A CredMaster, correspondente bancário da Caixa Econômica Federal localizado em Jardim Mato Grosso do
                  Sul, atende à cidade de Jardim e suas proximidades.
                  Inaugurada em 14 de Junho de 2023, seu principal objetivo é oferecer soluções financeiras acessíveis e
                  inovadoras, com foco na habitação, para auxiliar indivíduos e famílias a concretizarem o sonho da casa
                  própria. Compromete-se a proporcionar um atendimento personalizado, transparente e responsável,
                  promovendo, assim, o desenvolvimento sustentável das comunidades e contribuindo para a melhoria da
                  qualidade de vida dos clientes. No futuro, sua meta é expandir tanto digitalmente, com a criação de um
                  site para gestão e clientes, quanto geograficamente, através da abertura de novas filiais.
                </p>

                <p id="destaque">Horário de funcionamento:</p>
                <p style="margin-bottom: 0">Segunda á Sexta:</p>
                <p>08:00 - 11:00 e 13:00 - 17:00</p>

                <p id="destaque">Localização</p>
                <a href="https://maps.app.goo.gl/orUZVkeG9wevheuHA"
                  style="color: white; text-decoration: underline;">Rua Duque de Caxias, 796, Centro (fundos)</a>
              </div>
            </div>
          </div>

        </div>

      </div>

      <div id="service-area">

        <div class="container">

          <div class="row">
            <div class="col-12">
              <h3 class="main-title">Serviços Oferecidos</h3>
            </div>

            <div class="col-md-4 service-box">
              <img src="img/CredMaster_ofc.png" alt="logo" id="icon">
              <h4>Consórcio</h4>
              <a href="consorcio.php" id="botao">Acesse aqui</a>
            </div>

            <div class="col-md-4 service-box">
              <img src="img/casa.png" alt="casa" id="icon">
              <h4>Habitação</h4>
              <a href="habitacao.php" id="botao">Acesse aqui</a>
            </div>

            <div class="col-md-4 service-box">
              <img src="img/busca.png" alt="lupa" id="icon">
              <h4>Análise de Crédito</h4>
              <a href="analisecredito.php" id="botao">Acesse aqui</a>
            </div>

            <div class="col-md-4 service-box">
              <img src="img/dinheiro.png" alt="dinheiro" id="icon">
              <h4>Empréstimos</h4>
              <a href="emprestimos.php" id="botao">Acesse aqui</a>
            </div>

            <div class="col-md-4 service-box">
              <img src="img/cartoes.png" alt="cartões" id="icon">
              <h4>Cartões</h4>
              <a href="aberturaconta.php" id="botao">Acesse aqui</a>
            </div>
          </div>

        </div>

      </div>

      <div class="container">
        <div class="row">
          <div class="col-12">
            <h3 class="main-title">Perguntas Frequentes</h3>
          </div>

          <div class="col-12">
            <div class="faq">
              <div class="faq-item">
                <div class="faq-question">Quais são os tipos de financiamento para a casa própria oferecidos pela CAIXA?
                </div>
                <div class="faq-answer">Na CAIXA, é possível financiar a compra de imóveis novos e usados, reformar seu
                  imóvel, adquirir um terreno com construção inclusa ou financiar apenas a construção.</div>
              </div>

              <div class="faq-item">
                <div class="faq-question">Como é o sistema de amortização SAC?</div>
                <div class="faq-answer">Neste sistema de amortização, o valor da parcela destinada à quitação do
                  financiamento permanece constante, enquanto a parcela referente aos juros diminui gradualmente. Dessa
                  forma, o valor total do encargo mensal reduz ao longo do tempo.</div>
              </div>

              <div class="faq-item">
                <div class="faq-question">Como é o sistema de amortização PRICE?</div>
                <div class="faq-answer">O valor da parcela destinada à amortização do financiamento aumenta ao longo do
                  tempo, enquanto a parcela referente aos juros diminui. No entanto, o encargo mensal total permanece
                  constante durante todo o prazo contratado.</div>
              </div>

              <div class="faq-item">
                <div class="faq-question">Qual o valor máximo de financiamento habitacional?</div>
                <div class="faq-answer">Para financiamentos de imóveis até R$ 350.000,00, os titulares de conta
                  vinculada com pelo menos 3 anos de trabalho sob o regime do FGTS têm uma redução de 0,5 pontos
                  percentuais na taxa de juros.</div>
              </div>

              <div class="faq-item">
                <div class="faq-question">Quantas pessoas podem participar do financiamento?</div>
                <div class="faq-answer">O comprador pode financiar o imóvel sozinho ou combinar sua renda com outra
                  pessoa. Para operações utilizando FGTS, a renda deve ser familiar. Não há limite para o número de
                  proponentes no grupo, podendo incluir mais de um participante, inclusive para financiamentos com
                  recursos do FGTS.</div>
              </div>

              <div class="faq-item">
                <div class="faq-question">Tenho que estar com o nome limpo nos órgãos de crédito para fazer um
                  financiamento habitacional?</div>
                <div class="faq-answer">É crucial que não existam restrições associadas ao CPF dos compradores e
                  vendedores do imóvel. Caso contrário, o financiamento não será liberado.</div>
              </div>

              <div class="faq-item">
                <div class="faq-question">O que precisa fazer para financiar?</div>
                <div class="faq-answer">Para obter um financiamento, é necessário ter mais de 18 anos (ou ser emancipado
                  com 16), ser brasileiro ou possuir visto permanente no Brasil, ter capacidade civil e financeira, e
                  não estar registrado em cadastros de devedores como o SERASA. A prestação não deve ultrapassar 30% da
                  renda familiar mensal bruta, e o financiamento é garantido pela Alienação Fiduciária.</div>
              </div>

              <div class="faq-item">
                <div class="faq-question">Posso utilizar meu saldo do FGTS no financiamento habitacional?</div>
                <div class="faq-answer">Sim, desde que você, o contrato e o imóvel estejam enquadrados nas regras do
                  Sistema Financeiro de Habitação (SFH) na data da aquisição do imóvel.</div>
              </div>

              <div class="faq-item">
                <div class="faq-question">Onde posso conferir meu saldo do FGTS e encontrar mais informações sobre uso
                  do FGTS?</div>
                <div class="faq-answer">Acesse o <a
                    href="https://www.caixa.gov.br/atendimento/aplicativos/fgts/Paginas/default.aspx"
                    style="color: blue; text-decoration: underline;">App FGTS</a>, você pode verificar os valores
                  disponíveis para saque e mais informações sobre o uso do FGTS.</div>
              </div>

              <div class="faq-item">
                <div class="faq-question">Qual a diferença entre valor do imóvel, entrada, valor do financiamento e
                  saldo devedor?</div>
                <div class="faq-answer">O valor do imóvel é o menor entre o preço acordado no contrato de compra e venda
                  e o valor da avaliação feita por um engenheiro da CAIXA. A entrada, que é um percentual do valor do
                  imóvel, pode ser paga com recursos próprios ou do FGTS. O financiamento corresponde à diferença entre
                  o valor do imóvel e a entrada. O saldo devedor é o montante do financiamento ainda a ser pago.</div>
              </div>

              <div class="faq-item">
                <div class="faq-question">Qual linha de crédito da Caixa permite obter até 60% do valor de avaliação do imóvel, utilizando-o como garantia?</div>
                <div class="faq-answer">A linha de crédito Real Fácil da Caixa permite que o cliente obtenha até 60% do valor de avaliação do imóvel, utilizando-o como garantia. Essa modalidade oferece taxas de juros mais atrativas e prazos flexíveis para pagamento, sendo uma alternativa vantajosa para quem precisa de um valor maior com condições mais acessíveis.</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="data-area">
      <div class="container">
        <div class="row" id="contato">

          <h2>Contato</h2>

          <div class="icon" id="whats">
            <a href="http://wa.me/556793411799" target=”_blank”>
              <img src="./img/whats.png" alt="whatssapp"> Whatssapp: (67)99341-1799
            </a>
          </div>
          <div class="icon">
            <a href="https://www.facebook.com/share/UEM2LnySiyDY5VLv/ target=”_blank”">
              <img src="./img/face.png" alt="Facebook"> Facebook: CredMaster
            </a>
          </div>
          <div class="icon">
            <a href="http://Instagram.com/correspondente__credmaster">
              <img src="./img/insta.png" alt="instagram"> Instagram:
              @correspondente__credmaster
            </a>
          </div>
          <div class="icon">
            <a href="https://mail.google.com/mail/u/0/#inbox?compose=new">
              <img src="./img/Gmail.png" alt="Gmail"> Gmail:
              correspondentecredmaster@gmail.com
            </a>
          </div>
          <div class="icon">
            <a href="https://maps.app.goo.gl/orUZVkeG9wevheuHA">
              <img src="./img/iconlocal.png" alt="Localização"> Localização:
              Rua Duque de Caxias 796, fundos, Jardim-MS
            </a>
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

  <script>
    /*Parallax*/
    setTimeout(function() {
      $('#data-area').parallax({
        imageSrc: 'img/cont.png'
      });
    }, 250);

    const faqQuestions = document.querySelectorAll('.faq-question');

    faqQuestions.forEach(question => {
      question.addEventListener('click', () => {
        const answer = question.nextElementSibling;

        if (answer.style.display === "block") {
          answer.style.display = "none";
          question.classList.remove("active");
        } else {
          answer.style.display = "block";
          question.classList.add("active");
        }
      });
    });
  </script>
</body>

</html>