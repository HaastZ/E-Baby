<?php
include('conexao.php');
include('loginRegistro.php');
include('protect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="http://localhost/ecommerce/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon" />
  <script src="script.js"></script>
  <title>BabyCommerce</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid corNavbar">
      <img width="100px" height="100px" src="img/logo.png" alt="logo do site">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active passarEmCima" id="corRodape" aria-current="page" onclick="aparecerBotao()" href="#">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active passarEmCima" id="corRodape" aria-current="page" href="/PaginaRastreio/rastreio.html">Rastrear
              Pedido</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active passarEmCima" id="corRodape" aria-current="page" href="sobre nos 4/sobrenos.html">Sobre nós</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
        <a href="http://localhost/ecommerce/pesquisa.php" ><i class="bi bi-search " id="btnPesquisa"></i></a>
        <a href="#"><i onclick="abrirPerfil()" ondblclick="fecharPerfil()" class="bi bi-person" id="tamanhoPerfil" ></i></a>
          <img width="40px" height="40px" style="padding: 5px" src="img/pngwing.com (3).png" alt="carrinho de mercado">
        </form>
      </div>
    </div>
  </nav>
  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src=" //cdn.shopify.com/s/files/1/2713/8608/files/slider1_33f85adb-b087-4414-bb40-b1594587606e.png?v=1613625776" class="d-block w-100" alt="...">
        <div id="carroselP">
          <a href="" id="btBemvindo">BEM VINDO A &-BABY </a>
          <h1 id="tituloInicio">Produtos inovadores</h1>
          <p id="txtInicio">Lorem ipsum dolor stotam optio eligendi excepturi harum.</p>
          <a href="#anchor" id="comprarAgora"> Comprar agora</a>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src=" //cdn.shopify.com/s/files/1/2713/8608/files/slider_18b35f12-8bfe-4fd4-b6b2-927cd6094c33.png?v=1613813413" class="d-block w-100" alt="...">
        <div id="carroselS">
          <a href="" id="btBemvindo">BEM VINDO A &-BABY</a>
          <h1 id="tituloInicio">O melhor para seu filho</h1>
          <p id="txtInicio">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          <a href="#anchor" id="comprarAgora"> Comprar agora</a>
        </div>
      </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <div class="circuloProximo"> <span class="carousel-control-prev-icon" aria-hidden="true"></span></div>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <div class="circuloProximo"> <span class="carousel-control-next-icon" aria-hidden="true"></span></div>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div id="navMeio">
    <div class="sessaoMeio">
      <a href="" id="txtNoneMeio">
        <div>
          <img src="//cdn.shopify.com/s/files/1/2713/8608/files/1_88d6e794-9685-47ea-9854-c25a68e229dc.png?v=1613651244" alt="" id="imgDivMeio">
        </div>
        <div>
          <hr width="100%" id="linhaPont">
          <p id="txtDivMeio">Construção</p>
        </div>
      </a>
    </div>
    <div class="sessaoMeio">
      <a href="" id="txtNoneMeio">
        <div>
          <img src="//cdn.shopify.com/s/files/1/2713/8608/files/2_a08ec45e-d767-4242-9c15-6d4e14ff252c.png?v=1613651272" alt="" id="imgDivMeio">
        </div>
        <div>
          <hr width="100%" id="linhaPont">
          <p id="txtDivMeio">Bola de pria</p>
        </div>
      </a>
    </div>
    <div class="sessaoMeio">
      <a href="" id="txtNoneMeio">
        <div>
          <img src="//cdn.shopify.com/s/files/1/2713/8608/files/3_2e763dd1-702d-4c21-87c0-2decddddc620.png?v=1613651293" alt="" id="imgDivMeio">
        </div>
        <div>
          <hr width="100%" id="linhaPont">
          <p id="txtDivMeio">Brinquedos</p>
        </div>
      </a>
    </div>
    <div class="sessaoMeio">
      <a href="" id="txtNoneMeio">
        <div>
          <img src="//cdn.shopify.com/s/files/1/2713/8608/files/4_edf1f24c-fce5-4b5a-b87c-03ba09a29e6f.png?v=1613651318" alt="" id="imgDivMeio">
        </div>
        <div>
          <hr width="100%" id="linhaPont">
          <p id="txtDivMeio">Ursinho</p>
        </div>
      </a>
    </div>
    <div class="sessaoMeio">
      <a href="" id="txtNoneMeio">
        <div>
          <img src="//cdn.shopify.com/s/files/1/2713/8608/files/5_991ea2f7-c7b3-4004-b23e-e34867366433.png?v=1613651355" alt="" id="imgDivMeio">
        </div>
        <div>
          <hr width="100%" id="linhaPont">
          <p id="txtDivMeio">Construir</p>
        </div>
      </a>
    </div>
    <div class="sessaoMeio">
      <a href="" id="txtNoneMeio">
        <div>
          <img src="//cdn.shopify.com/s/files/1/2713/8608/files/7.png?v=1613651383" alt="" id="imgDivMeio">
        </div>
        <div>
          <hr width="100%" id="linhaPont">
          <p id="txtDivMeio">Brincar</p>
        </div>
      </a>
    </div>
  </div>

  <div id="anchor">
    <div id="divProdutos">
      <h1 id="amamosTendencia">Nós amamos tendências</h1>

      <div class="btn">
        <a href="#anchor " onclick="colorirBotãoDestaque()" id="btnDestaque">Destaque</a>
        <a href="#anchor" id="btnNovidade">Novidade</a>
        <a href="#anchor" id="btnTdsProdutos">Todos os produtos</a>
      </div>
      <div class="container" id="produtos">
        <div class="row" id="aa">
          <div class="col" id="produtoIndividual">
            <a href="paginaProdutos/frutas.php" id="sessaoProduto">
              <img src="http://localhost/ecommerce/img/produto01.jpg" alt="" id="imgDivProduto">
              <hr width="90%">
              <p id="nomeProduto">Chupeta para frutas</p>
              <p>R$ 100.00</p>
            </a>
          </div>
          <div class="col" id="produtoIndividual">
            <a href="paginaProdutos/sacoDormir.php" id="sessaoProduto">
              <img src="http://localhost/ecommerce/img/saco_de_dormir.jpg" alt="" id="imgDivProduto">
              <hr width="90%">
              <p id="nomeProduto">Saco de dormir ultra macio</p>
              <p>R$ 175.00</p>
            </a>
          </div>
          <div class="col" id="produtoIndividual">
            <a href="paginaProdutos/botinha.php" id="sessaoProduto">
              <img src="http://localhost/ecommerce/img/botinhaBaby.jpg" alt="" id="imgDivProduto">
              <hr width="90%">
              <p id="nomeProduto">Botinha Baby</p>
              <p>85.00</p>
            </a>
          </div>
          <div class="col" id="produtoIndividual">
            <a href="paginaProdutos/talher.php" id="sessaoProduto">
              <img src="http://localhost/ecommerce/img/talherSilicone.jpg" alt="" id="imgDivProduto">

              <hr width="90%">
              <p id="nomeProduto">Kit Talheres de Silicone</p>
              <p>R$ 75.00</p>
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col" id="produtoIndividual">
            <a href="paginaProdutos/mordedor.php" id="sessaoProduto">
              <img src="http://localhost/ecommerce/img/mordedor.jpg" alt="" id="imgDivProduto">

              <hr width="90%">
              <p id="nomeProduto">Mordedor infantil raposinha madeira</p>
              <p>R$ 70.00</p>
            </a>
          </div>
          <div class="col" id="produtoIndividual">
            <a href="paginaProdutos/picole.php" id="sessaoProduto">
              <img src="http://localhost/ecommerce/img/moldePicole.jpg" alt="" id="imgDivProduto">

              <hr width="90%">
              <p id="nomeProduto">Molde de picolé divertido</p>
              <p>R$ 198.00</p>
            </a>
          </div>
          <div class="col" id="produtoIndividual">
            <a href="paginaProdutos/brinquedoEducativo.php" id="sessaoProduto">
              <img src="http://localhost/ecommerce/img/brinquedo.jpg" alt="" id="imgDivProduto">

              <hr width="90%">
              <p id="nomeProduto">Brinquedo educativo de encaixe animais</p>
              <p>R$ 150.00</p>
            </a>
          </div>
          <div class="col" id="produtoIndividual">
            <a href="paginaProdutos/brinquedoBanho.php" id="sessaoProduto">
              <img src="http://localhost/ecommerce/img/brinquedoBanho.jpg" alt="" id="imgDivProduto">
              <hr width="90%">
              <p id="nomeProduto">Brinquedo de banho ovinho</p>
              <p>R$ 89.00</p>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div id="terceiraSessao">
    <h2 id="tituloServ">Nossos serviços</h2>

    <div class="cotiner" id="posicionarServ">
      <div class="row">
        <div class="col-2" id="tamanhoServ envioGratis"><img src="//cdn.shopify.com/s/files/1/2713/8608/files/1_fee0c995-1b2a-4a58-a8dc-a2e1afb66dca.png?v=1613716752" alt="Frete" id="servEnvGra">
          <p id="textoBtnServ"> Envio Grátis</p>
          <p id="textoDescBtn">Lorem ipsum dolor sit </p>
        </div>
        <div id="linhaVertical"></div>
        <div class="col-2" id="tamanhoServ">
          <img src="//cdn.shopify.com/s/files/1/2713/8608/files/2_bca41fb2-0769-4914-9790-5870dd2d740c.png?v=1613716954" alt="Frete" id="servTrocGara">
          <p id="textoBtnServ">Troca Garantida</p>
          <p id="textoDescBtn">Lorem ipsum dolor sit</p>
        </div>
        <div id="linhaVertical"></div>
        <div class="col-2" id="tamanhoServ">
          <img src="//cdn.shopify.com/s/files/1/2713/8608/files/3_0fb7e0a0-5680-40c3-a478-eb5dec90d534.png?v=1613716974" alt="Frete" id="servCartPre">
          <p id="textoBtnServ"> Cartão de Presente</p>
          <p id="textoDescBtn">Desconto nas proximas compras</p>
        </div>
        <div id="linhaVertical"></div>
        <div class="col-2" id="tamanhoServ">
          <img src="//cdn.shopify.com/s/files/1/2713/8608/files/4_03a5d664-073c-4a37-a27e-d11e569374e0.png?v=1613716996" alt="Frete" id="servMelQual">
          <p id="textoBtnServ"> Melhor Qualidade</p>
          <p id="textoDescBtn">Lorem ipsum dolor sit</p>
        </div>
      </div>
    </div>
  </div>

  <div id="email">
    <div id="emailCentro">
      <img src="img/Captura_de_Tela_2022-09-25_às_21.57.01-removebg-preview.png" alt="" width="75px" id="imgEmail">
      <h1 id="txtEmail">Receba novidades e promoções</h1>
      <div id="txtEmailCentralizar">
        <input type="text" placeholder="Seu e-mail" size="45" id="campoEmail">
        <div id="emailHelp" class="form-text">Não compartilhamos seu email com mais ninguém</div>
      </div>
      <a href="" id="inscrevase">INSCREVA-SE</a>
    </div>
  </div>

  <div id="popupPerfil">
    <center><i  onclick="abrirPerfil()" ondblclick="fecharPerfil()" class="bi bi-person-circle" id="perfilUsuario" ></i></center> 
    
    <p id="nomeUsuario"> <center><?php echo $_SESSION['nome'] ?></p></center> 
    <a href="pedidoRealiz.php"><center> Meus pedidos </center> </a>
   <p>
        <a href="logout.php"> <center> Sair </center> </a>
    </p>
  </div>
  <div class="footer-basic">
    <footer>
      <div class="social"><a href="#"><i class="bi bi-instagram"></i></a><a href="#"><i
            class="bi bi-facebook"></i></a><a href="#"><i class="bi bi-twitter"></i></a></div>
      <ul class="list-inline">
        <li class="list-inline-item"><a href="siteLogado.php">Página principal</a></li>
        <li class="list-inline-item"><a href="sobre nos 4/Contato/contato.html">Contato</a></li>
        <li class="list-inline-item"><a href="sobre nos 4/sobrenos.html">Sobre nós</a></li>
        <li class="list-inline-item"><a href="politicaprivacidade.html">Politica de privacidade</a></li>
      </ul>
      <p class="copyright">&-BABY™ © 2022</p>
    </footer>
  </div>
</body>

</html>