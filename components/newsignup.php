<?php 
require_once "database.php"; 
$sql = "INSERT INTO user(mail ,username ,psw) VALUES(:email,:username, SHA1(:password))";
$dataBinded=array(
    ':email'   => $_POST['email'],
    ':username'   => $_POST['username'],
    ':password'=> "564#(''#5645616519651654965464'')".$_POST['password'],
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:../index.php');//on le redirige sur la page d'accueil du site !
?>