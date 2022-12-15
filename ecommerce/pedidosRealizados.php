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
    <link rel="stylesheet" href="http://localhost/ecommerce/css/pedidosRealizados.css">
    <link rel="stylesheet" href="http://localhost/ecommerce/css/style.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Meus pedidos</title>
</head>
<nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid corNavbar">
          <img width="100px" height="100px" src="img/logo.png" alt="logo do site">
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
              <input class="form-control me-2" type="search" placeholder="Procurar..." aria-label="Search">
              <img width="40px" height="40px" style="padding: 5px" src="img/perfil.png" alt="Perfil">
              <img width="40px" height="40px" style="padding: 5px" src="img/pngwing.com (3).png" alt="carrinho de mercado">
            </form>
          </div>
        </div>
      </nav>

<body>
    <br>
            <h3><center>Pedidos realizados por você:</center></h3>
            <br> <br>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Usuário</th>
                        <th scope="col">Id do pedido</th>
                        <th scope="col">produto</th>
                    </tr>
                </thead>
                <tbody>
                <?php while ($dado = $con->fetch_array()) { ?>
                    <tr>
                        <td><?php echo $dado["nome"]; ?></td>
                        <td><?php echo $dado["id_pedido"]; ?></td>
                        <td><?php echo $dado["nome_produto"]; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>

</body>

</html>
