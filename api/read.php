<?php

$banco = include '../pdo.php';

function sendResults($banco){
    $sth = $banco->prepare("
        SELECT * FROM usuario
    ");
    
    $sth->execute();

    $resultados = $sth->fetchAll(PDO::FETCH_ASSOC);

    if(empty($resultados)){
        $resultados = ['Nenhum resultado encontrado'];
    }

    echo json_encode($resultados);
}

try{
    sendResults($banco);
}
catch(Exception $e){
    echo "Deu merda aqui bicho: ",$e,"\n";
}