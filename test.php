<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    require "components/navbar.php";
    ?>
    
    <form action="components/newsignup.php" method="post">
        <h2>Inscription</h2>
        <input type="text" name="pseudo" placeholder="pseudo" required="required" autocomplete="off">
        <input type="email" name="email" placeholder="email" required="required" autocomplete="off">
        <input type="password" name="password" placeholder="mot de passe" required="required" autocomplete="off">
        <button type="submit">S'inscrire</button>
    </form>

    <form action="" method="post">
        <h2>Se connecter</h2>
        <input type="email" name="email" placeholder="email" required="required" autocomplete="off">
        <input type="password" name="password" placeholder="mot de passe" required="required" autocomplete="off">
        <button type="submit">Se connecter</button>
    </form>

    <form method="post" action="components/signup.php">
        <input type='email' name='email'>
        <input type='password' name='password'>
        <input type='text' name='first_name'>
        <button type="submit">créer un compte</button>
    </form>

</body>
</html>