<?php

return new PDO(
    'pgsql:host=localhost;dbname=usuario_pi',
    'postgres',
    'mysenha',
    [
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]    
);