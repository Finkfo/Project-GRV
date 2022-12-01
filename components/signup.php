<?php
    //On démarre la session
    // session_start();
    //On récupère le fichier permettant de lier notre php à notre BDD
    require_once "database.php";

    if(isset($_POST["pseudo"]) && isset($_POST["email"]) && isset($_POST["paswword"])){

        $pseudo = htmlspecialchars($_POST["pseudo"]);
        $email = htmlspecialchars($_POST["email"]);
        $password = htmlspecialchars($_POST["password"]);

        $check = $bdd->prepare("SELECT username, psw, mail FROM user WHERE mail =?");
        $check-> execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        if($row == 0)
        {
            if(strlen($pseudo) <= 36)
            {
                if(strlen($email) <= 255){
                    $password = hash("sha1", $password);
                    $insert = $bdd->prepare("INSERT INTO user(username, psw, mail, admin) VALUES(:username, :psw, :mail, 0)");
                    $insert->execute(array(
                        "username" => $pseudo,
                        "psw" => $password,
                        "mail" => $email
                    ));
                }else{
                    //header("location: test.php");
                }
            }else{
                //header("location: test.php");
            }
        }else{
            //header("Location: test.php");
        }
    }
?>