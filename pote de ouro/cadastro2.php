<?php
include("conexao.php");
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $nascimento = $_POST['data'];
    $termo = $_POST['termo'];

    $termo = isset($_POST['termo']) ? 1 : 0;

    $sql = "INSERT INTO cadastro(nome, email, senha, nascimento, termo) VALUES ('$nome', '$email', '$senha', '$nascimento', '$termo')";

    if (mysqli_query($mysqli, $sql)) {
      echo "Usuário cadastrado com sucesso";
    } else {
      echo "Erro: " . mysqli_error($mysqli), '<br>';
    }
    mysqli_close($mysqli);
?>