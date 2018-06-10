<?php

if(!isset($_POST["nome"]) || !isset($_POST["senha"]) || !isset($_POST["email"])){
    die("Reveja os dados inseridos");
}

$nome = $_POST["nome"];
$senha = $_POST["senha"];
$email = $_POST["email"];

$dbh = include("pdo.php");

$sth = $dbh->prepare("INSERT INTO usuario (nome_usuario, senha_usuario, email_usuario) VALUES ('?' , '?' , '?' ')");

$sth->execute([$nome, $senha, $email]);

if($sth->rowCount() > 0){
    die("O usuário foi inserido");
}