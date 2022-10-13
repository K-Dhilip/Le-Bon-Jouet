<?php


$pdo = new PDO(
    'mysql:host=localhost;
    dbname=cbs_php_intermediare_karthikeyan',
    'root',
    '',
    array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    )
);

?>