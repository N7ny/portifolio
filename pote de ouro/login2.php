<?php
include ('conexao2.php');

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO logado (senha, email) VALUES ('$email', '$senha')";

if (mysqli_query($mysqli, $sql)) {
  echo "Usuário logado com sucesso";
} else {
  echo "Erro: " . mysqli_error($mysqli);
}

mysqli_close($mysqli);
?>
