<?php
// Souvent on identifie cet objet par la variable $conn ou $db
session_start();
$_SESSION;
$pdo = new PDO(
    'mysql:host=localhost;dbname=grpc-grv;charset=utf8',
    'root',
    'root',
    array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
?>