<?php

$id = $_GET['id'];

$dbh = include("pdo.php");

$sth = $dbh->prepare("UPDATE usuario SET nome_usuario = ?, senha_usuario = ?, email_usuario = ? WHERE id_usuario = ?");

$sth->execute([$nome, $senha, $email, $id]);

if($sth->rowCount() > 0){
    die("O usuário foi atualizado");
}else{
    die("Deu merda");
}