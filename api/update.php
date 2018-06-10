<?php

if(!isset($_POST["nome"]) || !isset($_POST["senha"]) || !isset($_POST["email"]) || !isset($_GET['id'])){
    die("Reveja os dados inseridos");
}

$id = $_GET['id'];
$nome = $_POST["nome"];
$senha = $_POST["senha"];
$email = $_POST["email"];

$dbh = include("pdo.php");