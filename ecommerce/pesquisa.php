<?php

include('conexao.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Sistema de Busca</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid corNavbar">
      <img width="100px" height="100px" src="http://localhost/ecommerce/img/logo.png" alt="logo do site">
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
          <a href="#"><img onclick="abrirLogin()" ondblclick="fecharlogin()" width="40px" height="40px" style="padding: 5px" src="http://localhost/ecommerce/img/perfil.png" alt="Perfil" id="perfil"></a>
          <img width="40px" height="40px" style="padding: 5px" src="img/pngwing.com (3).png" alt="carrinho de mercado">
        </form>
      </div>
    </div>
  </nav>
    <h1 class="produtos-encontrados">Produtos encontrados</h1>
      <div class="pesquisar">
      <form action="">
      <input name="busca" value="<?php if(isset($_GET['busca'])) echo $_GET['busca']; ?>" placeholder="pesquisa" type="text">
          <button class="botao" type="submit">Pesquisar</button>
      </div>
      </form>
    <br>
        <?php
        if (!isset($_GET['busca'])) {
            ?>
        <?php
        } else {
            $pesquisa = $mysqli->real_escape_string($_GET['busca']);
            $sql_code = "SELECT * FROM produtos WHERE nome_produto LIKE '%$pesquisa%'";
            $sql_query = $mysqli->query($sql_code) or die("ERRO ao consultar! " . $mysqli->error); 
            
            if ($sql_query->num_rows == 0) {
                ?>
            <tr>
                <td colspan="3">Nenhum resultado encontrado...</td>
            </tr>
            <?php
            } else {
                while($dados = $sql_query->fetch_assoc()) {
                    ?>
                    <div class="agrupamento-produtos">
                    <table>
                    <tr>
                        <div class="row">
                            <div class="card col-3">
                            <img src="img/logo.png" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title"><?php echo $dados['nome_produto']; ?></h5>
                    <p class="card-text">preço: <?php echo $dados['preco']; ?>,00</p>
                    <a href="<?php echo $dados['link']; ?>" class="btn btn-primary ">Comprar</a>
                  </div>
                </div>
              </div>
              </div>
                    <?php
                }
            }
            ?>
        <?php
        } ?>
    </table>
</body>
</html>