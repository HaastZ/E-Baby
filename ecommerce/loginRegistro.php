<?php
include('conexao.php');

//Banco de dados login
if (isset($_POST['email']) || isset($_POST['senha'])) {

  if (strlen($_POST['email']) == 0) {
      echo "<script language='javascript'>";
      echo "alert('Preencha seu e-mail');";
      echo "</script>";
  } else if (strlen($_POST['senha']) == 0) {
    echo "<script language='javascript'>";
      echo "alert('Preencha sua senha');";
      echo "</script>";
  } else {

    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['senha']);

    $sql_code = "SELECT * FROM cliente WHERE email = '$email' AND senha = '$senha'";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

    $quantidade = $sql_query->num_rows;

    if ($quantidade == 1) {

      $usuario = $sql_query->fetch_assoc();

      if (!isset($_SESSION)) {
        session_start();
      }
      $_SESSION['id'] = $usuario['id'];
      $_SESSION['id_cliente'] = $usuario['id_cliente'];
      $_SESSION['nome'] = $usuario['nome'];
      $_SESSION['email'] = $usuario['email'];

      header("Location: http://localhost/ecommerce/siteLogado.php");
    } else {
      echo "<script language='javascript'>";
      echo "alert('E-mail ou senha incorreta');";
      echo "</script>";
    }
  }
}
//Banco de dados Criar conta
if (isset($_POST['nome']) || isset($_POST['sobrenome']) || isset($_POST['telefone']) || isset($_POST['cpf']) || isset($_POST['email2']) || isset($_POST['senha2'])) {

  if (strlen($_POST['nome']) == 0) {
    echo "Preencha seu nome";
  } else if (strlen($_POST['sobrenome']) == 0) {
    echo "Preencha seu sobrenome";
  } else if (strlen($_POST['email2']) == 0) {
    echo "Preencha seu email";
  } else if (strlen($_POST['senha2']) == 0) {
    echo "Preencha sua senha";
  } else if (strlen($_POST['telefone']) == 0) {
  echo "Preencha sua senha";
}  else if (strlen($_POST['cpf']) == 0) {
  echo "Preencha seu cpf";
}  else {
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $email2 = $_POST['email2'];
    $senha2 = $_POST['senha2'];

    $sql_code = "INSERT INTO cliente(cpf, nome, sobrenome, telefone, email, senha) VALUES ('$cpf','$nome','$sobrenome', '$telefone', '$email2','$senha2')";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
  }
}
?>