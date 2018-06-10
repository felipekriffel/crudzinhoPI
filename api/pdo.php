<?php

return new PDO(
    "mysql:host=localhost;dbname=database", 
    "root", 
    "123", 
    [
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]
);