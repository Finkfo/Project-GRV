<?php 
    require_once "database.php";

    if(isset($_POST["email"]) && isset($_POST["password"]))
    {
        $email = htmlspecialchars($_POST["email"]);
        $password = htmlspecialchars($_POST["password"]);

        $check = $bdd->prepare("SELECT username, psw, mail FROM user WHERE mail =?");
        $check-> execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        if($row == 1)
        {
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                $password = hash("sha1", $password);
                if($data["password"] === $password)
                {
                    $_SESSION["user"] = $data["pseudo"];
                    header("Location:landing.php");
                }else header("Location:index.php");
            }else header("Location:index.php");
        }else header("Location:index.php");
    }else header("Location:index.php");
?>