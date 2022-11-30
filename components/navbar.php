<!DOCTYPE html>
<html lang="fr">

<head>
<meta charset="utf-8">
<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw=="
crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="css/style.css">

<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Projet 2 - Groupe C n°7</title>
</head>

<body>

<!-- Début navbar section -->
<nav>
    <div class="nav-wrapper grey">
        <a href="https://gamingcampus.fr/" class="brand-logo"> <img class="logo-navbar"
                src="img/logo-gaming-campus-written.png"> </a>
        <a href="https://gamingcampus.fr/" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <a class="hide-on-small waves-effect waves-light btn-flat modal-trigger right white-text" href="#modal1" style="margin: 14px 14px">Se-connecter</a>
        <a class="hide-on-small waves-effect waves-light btn-flat modal-trigger right white-text" href="#modal2" style="margin: 14px 14px">S'inscrire</a>
        <ul class="right hide-on-med-and-down">
            <li>
                <!-- Dropdown Trigger -->
                <a class="dropdown-trigger" href="#!" data-target="dropdown">Projets<i class="material-icons right">arrow_drop_down</i></a>
                <!-- Dropdown Structure -->
                <ul id="dropdown" class="dropdown-content">
                    <li><a href="projets/projet1.php">Assassin's creed II</a></li>
                    <li class="divider" tabindex="-1"></li>
                    <li><a href="projets/projet2.php">Overwatch 2</a></li>
                    <li class="divider" tabindex="-1"></li>
                    <li><a href="projets/projet3.php">Assassin's Creed IV</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <ul class="sidenav grey center" id="mobile-demo">
        <a class="waves-effect waves-light btn-flat modal-trigger right white-text" href="#modal1" style="margin: 14px 14px">Se-connecter</a>
        <a class="waves-effect waves-light btn-flat modal-trigger right white-text" href="#modal2" style="margin: 14px 14px">S'inscrire</a>
        <li>
            <!-- Dropdown Trigger -->
            <a class="dropdown-trigger" href="#!" data-target="dropdown2">Projets<i
                    class="material-icons right">arrow_drop_down</i></a>
            <!-- Dropdown Structure -->
            <ul id="dropdown2" class="dropdown-content">
                <li><a href="projets/projet1.php">Assassin's creed II</a></li>
                <li class="divider" tabindex="-1"></li>
                <li><a href="projets/projet2.php">Overwatch 2</a></li>
                <li class="divider" tabindex="-1"></li>
                <li><a href="projets/projet3.php">Assassin's Creed IV</a></li>
            </ul>
        </li>
    </ul>
</nav>
<div id="modal1" class="modal">
    <div class="modal-content">
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <input id="first_name" type="text" class="validate">
                        <label for="first_name">First Name</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="last_name" type="text" class="validate">
                        <label for="last_name">Last Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="password" type="password" class="validate">
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
</div>
<div id="modal2" class="modal">
    <div class="modal-content">
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <input id="first_name" type="text" class="validate">
                        <label for="first_name">First Name</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="last_name" type="text" class="validate">
                        <label for="last_name">Last Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="password" type="password" class="validate">
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
</div>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>