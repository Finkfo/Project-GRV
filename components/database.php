<?php
// Souvent on identifie cet objet par la variable $conn ou $db
session_start();
$_SESSION;
$bdd = new PDO(
    'mysql:host=localhost;dbname=grpc_grv;charset=utf8',
    'root',
    'root'
);
$bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
?>