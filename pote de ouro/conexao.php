<?php
$hostname = "localhost";
$database = "pote";
$username = "root";
$password = "senac";

$mysqli = new mysqli($hostname, $username, $password, $database);

if ($mysqli->connect_error) {
    die("Erro de conexão: " . $mysqli->connect_error);
}
?>