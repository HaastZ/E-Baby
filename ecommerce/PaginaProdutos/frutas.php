<?php
include('../conexao.php');
include('../protect2.php');
include('../loginRegistro.php');

$cor = null;
if (isset($_POST['cor'])) {
  if(!isset($_SESSION['nome'])){
    echo "<script language='javascript'>";
      echo "alert('Faça login para comprar');";
      echo "</script>";
  }
  else{
  $cor = $mysqli->real_escape_string($_POST['cor']);

  $sql_code = "UPDATE `variaveis` SET `qnt_estoque` = `qnt_estoque`-1 WHERE `variaveis`.`cor` = '$cor' and `id_produto` = '1'; ";
  $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
  $sql_code2 = "INSERT INTO `pedidos` (`id_cliente`, `id_produto`, `data_entrega`, `quantidade`) VALUES ('$_SESSION[id_cliente]', '1', '' , '1') ";
  $sql_query2 = $mysqli2->query($sql_code2) or die("Falha na execução do código SQL: " . $mysqli2->error);
}
}

if ($cor !== null) {
}




function dd($param)
{
  echo '<pre>';
  print_r($param);
  echo '</pre>';
  die();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
  <link rel="stylesheet" href="http://localhost/ecommerce/css/navbar.css" />
  <link rel="stylesheet" href="http://localhost/ecommerce/css/estilos.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <script src="script.js"></script>
  <link rel="shortcut icon" href="http://localhost/ecommerce/img/logo.png" type="image/x-icon" />
  <title>&-Baby</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid corNavbar">
      <img width="100px" height="100px" src="http://localhost/ecommerce/img/logo.png" alt="logo do site" />
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active passarEmCima" aria-current="page" href="#">Contato</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active passarEmCima" aria-current="page" href="#">Rastrear Pedido</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active passarEmCima" aria-current="page" href="#">Perguntas Frequentes</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
        <a href="http://localhost/ecommerce/pesquisa.php" ><i class="bi bi-search " id="btnPesquisa"></i></a>
          <a href="#"><img onclick="abrirLogin()" ondblclick="fecharlogin()" width="40px" height="40px" style="padding: 5px" src="http://localhost/ecommerce/img/perfil.png" alt="Perfil" id="perfil"></a>
          <img width="40px" height="40px" style="padding: 5px" src="http://localhost/ecommerce/img/pngwing.com (3).png" alt="carrinho de mercado">
        </form>
      </div>
    </div>
  </nav>
  <main class="main">
    <div class="campo1">
      <div class="bordaProduto">
        <img class="imgProduto" src="http://localhost/ecommerce/img/produto01.jpg" alt="Imagem do produto" /><br />
      </div>
      <div class="semelhantes">
        <h3>Produtos Semelhantes</h3>
        <a href="http://localhost/ecommerce/PaginaProdutos/sacoDormir.php"><img class="imgSemelhante" width="100px" src="http://localhost/ecommerce/img/saco_de_dormir.jpg" alt="produtos semelhantes" /> </a>
        <a href="http://localhost/ecommerce/PaginaProdutos/mordedor.php"><img class="imgSemelhante" width="100px" src="http://localhost/ecommerce/img/mordedor.jpg" alt="produtos semelhantes" /> </a>
        <a href="http://localhost/ecommerce/PaginaProdutos/talher.php"><img class="imgSemelhante" width="100px" src="http://localhost/ecommerce/img/talherSilicone.jpg" alt="produtos semelhantes" /> </a>
        <a href="http://localhost/ecommerce/PaginaProdutos/botinha.php"><img class="imgSemelhante" width="100px" src="http://localhost/ecommerce/img/botinhaBaby.jpg" alt="produtos semelhantes" /> </a>
        <a href="http://localhost/ecommerce/PaginaProdutos/brinquedoEducativo.php"><img class="imgSemelhante" width="100px" src="http://localhost/ecommerce/img/brinquedo.jpg" alt="produtos semelhantes" /> </a>
      </div>
      <h3 class="sobreProduto">Sobre o Produto</h3>
      <p class="infoProduto sobreProduto">
        A <strong>Chupeta para Frutas</strong> permite que os bebês desfrutem dos nutrientes de alimentos sólidos desde cedo, através da rede de silicone que reduz o alimento a pequenos pedaços, diminuindo o risco de engasgamento.

        Leve e de fácil manuseio, possui trava de segurança para uma alimentação ainda mais tranquila. Dê ao seu bebê um sabor delicioso de frutas frescas, leite materno ou até vegetais.

        Seu sistema único, ajuda a pressionar o alimento da proteção, diferente de todos já vistos no mercado.
        <br><br>
        <strong>Benefícios:</strong>
        <br>
        A ingestão de outros nutrientes que não apenas o leite, traz uma nutrição equilibrada ao bebê, consequentemente, um desenvolvimento saudável.
        <br> <br>
        Incentiva o bebê a comer por iniciativa própria, ser independente e autoconfiante, além de exercitar a mastigação e a coordenação motora das mãos.
        <br><br>
        Na fase da dentição, diminui a sensação de “coceira” na gengiva, característica bastante desconfortável desta fase de desenvolvimento.
        <br><br>
        Diminui o risco de asfixia, pois evita a absorção de pedaços grandes de alimentos.
        <br><br>
        <strong>Especificações:</strong>
        <br>
        Material: PP + silicone
        <br>
        Cor: Verde, Rosa, Azul, Vermelho
        <br>
        Adequado à idade: Acima de 6 meses
        <br>
        Tamanho: 6.5cm Largura 11 cm Comprimento
        <br>
        Capacidade: 14-16ml (frutas e vegetais em blocos)
        <br>
        2 bicos em tamanhos e formatos diferentes 14ml e 16ml
      </p>
      <hr>
      <div class="avaliacao">
        <h3>
          Avaliações
        </h3>
        <input class="avaliacaoAchou" placeholder="Escreva sua opinião sobre o produto" type="text"><button class="avaliacaoBotao">Enviar</button>
      </div>
    </div>
    <div class="campo2">
      <h1>Chupeta para frutas</h1>
      <h2>R$100,00</h2>
      <form method="post">
        <p class="tamanhoProduto">Cor: </p>
        <br /><input class="checkboxTamanhoP separar" type="radio" name="cor" value="azul" />azul
        <input class="checkboxTamanhoP separar" type="radio" name="cor" value="verde" />Verde

        <div>
          <br>
          <p class="msgEstoque">Estoque Disponível: 20 unidades disponíveis</p>
        </div>
        <a href="https://mpago.la/2u3wYea"><input type="submit" name="btnSubmiti" value="COMPRAR AGORA" class="botao comprar"></a>
        <button class="botao adicionar">ADICIONAR AO CARRINHO</button>
      </form>
    </div>
  </main>
</body>

</html>