<?php
/* 
$array = ["opa"];
echo json_encode($array);
 */

$request = json_decode(file_get_contents('php://input'));


$nome = $request->login;
$senha = $request->senha;

$dbh = include("pdoMySQL.php");

$sth = $dbh->prepare("INSERT INTO usuario (login_usuario, senha_usuario) VALUES (? , ?)");

$sth->execute(["$nome", "$senha"]);

echo "tudo certo fiote";