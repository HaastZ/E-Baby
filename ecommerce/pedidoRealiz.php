<?php
include_once('protect.php');
include_once('conexao.php');


$consulta = "SELECT cliente.nome, pedidos.id_pedido, produtos.nome_produto from produtos INNER JOIN pedidos ON produtos.id_produto = pedidos.id_produto INNER JOIN cliente ON cliente.id_cliente = pedidos.id_cliente WHERE cliente.nome ='$_SESSION[nome]' ";
$con = $mysqli->query($consulta) or die($mysqli->error);






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/historico.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
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
<div class="container mt-5">
        <div class="d-flex justify-content-center row">
            <div class="col-md-10">
                <div class="rounded">
                    <div class="table-responsive table-borderless">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Usuário</th>
                                    <th>Id pedido</th>
                                    <th>Nome do produto</th>
                                </tr>
                                </thead>
                            <?php while ($dado = $con->fetch_array()) { ?>
                            <tbody class="table-body">
                                <tr class="cell-1">
                                
                                    <td><?php echo $dado["nome"]; ?></td>
                                    <td><?php echo $dado["id_pedido"]; ?></td>
                                    <td><?php echo $dado["nome_produto"]; ?></i></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>