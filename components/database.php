<?php
// Souvent on identifie cet objet par la variable $conn ou $db
session_start();
$_SESSION;
$pdo = new PDO(
    'mysql:host=localhost;dbname=grpc_grv;charset=utf8',
    'root',
    'root1'
);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
?>