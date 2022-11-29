<!DOCTYPE html>
<html lang="fr" class="white">

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.css" media="screen,projection" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
        integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link type="text/css" rel="stylesheet" href="../css/page.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Projet 2 - Assassin's Creed II</title>
</head>

<body>
    <!-- Début navbar section -->
    <nav>
        <div class="nav-wrapper grey">
            <a href="https://gamingcampus.fr/" class="brand-logo"> <img class="logo-navbar"
                    src="../img/logo-gaming-campus-written.png"> </a>
            <a href="https://gamingcampus.fr/" data-target="mobile-demo" class="sidenav-trigger">
                <i class="material-icons">menu</i>
            </a>
            <ul class="right hide-on-med-and-down">
                <li><a href="../index.php">Home</a></li>
                <li>
                    <!-- Dropdown Trigger -->
                    <a class="dropdown-trigger" href="#!" data-target="dropdown">Projets<i
                            class="material-icons right">arrow_drop_down</i></a>
                    <!-- Dropdown Structure -->
                    <ul id="dropdown" class="dropdown-content">
                        <li><a href="projet2.php">Overwatch 2</a></li>
                        <li class="divider" tabindex="-1"></li>
                        <li><a href="projet3.php">Assassin's Creed IV</a></li>
                    </ul>
                </li>
                <li>
                    <!-- modal trigger -->
                    <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Contact</a>
                    <!-- TEST -->
                </li>
            </ul>
        </div>
        <ul class="sidenav grey center" id="mobile-demo">
            <li><a href="../index.html">Home</a></li>
            <li>
                <!-- Dropdown Trigger -->
                <a class="dropdown-trigger" href="#!" data-target="dropdown2">Projets<i
                        class="material-icons right">arrow_drop_down</i></a>
                <!-- Dropdown Structure -->
                <ul id="dropdown2" class="dropdown-content">
                    <li><a href="projet2.html">Overwatch 2</a></li>
                    <li class="divider" tabindex="-1"></li>
                    <li class="ac-tag"><a href="projet3.html">Assassin's Creed IV</a></li>
                </ul>
            </li>
            <li>
                <!-- modal trigger -->
                <a class="waves-effect waves-light btn modal-trigger orange darken-3" href="#modal1">Contact</a>
                <!-- TEST  -->
            </li>
        </ul>
    </nav>
    <!-- Fin navbar section -->

    <!-- Début modal section -->
    <!-- Modal Structure -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <div class="row">
                <div id="contact-AC-2" class="col s4">
                    <img id="ac2-logo" class="logo-modal" src="../img/modal/ac_logo.png"
                        alt="logo d'Assassin's Creed II">
                </div>
                <div id="contact-Overwatch-2" class="col s4">
                    <img id="overwatch2-logo" class="logo-modal" src="../img/modal/Overwatch_2_logo.png"
                        alt="logo d'overwatch 2">
                </div>
                <div id="contact-AC-Reb" class="col s4" class="modal">
                    <img id="acreb-logo" class="logo-modal" src="../img/modal/acreb_logo.png"
                        alt="logo d'Assassin's Creed Rebel Collection">
                </div>
                <div id="form">
                    <div class="row" id="empty">
                        <div class="col s1">&nbsp</div>
                    </div>
                    <div class="row">
                        <form id="formular" class="col s12">
                            <div class="row">
                                <div class="input-field col s6">
                                    <input id="first_name" type="text" class="validate">
                                    <label for="first_name">Prénom</label>
                                </div>
                                <div class="input-field col s6">
                                    <input id="last_name" type="text" class="validate">
                                    <label for="last_name">Nom de famille</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="password" type="password" class="validate">
                                    <label for="password">Mot de passe</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="email" type="email" class="validate">
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            <div class="modal-footer" style="background:none;">
                                <a id="send-button" href="#!"
                                    class="modal-close waves-effect waves-green btn-flat">Envoyer</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin modal section -->

    <!-- Début main page -->

    <!-- Début parallax -->
    <div class="parallax-container">
        <div class="parallax">
            <img src="../img/pages/home-background.jpg">
        </div>
    </div>
    <!-- Fin parallax -->
    <div class="container">
        <div class="section white">
            <div class="row container">
                <h1 class="header center">Assassin's Creed II</h1>
                <p class="grey-text text-darken-3 lighten-3"> Ce projet à été réalisé par Valentin Vallée et Kyllian
                    Fel, des étudiants en G.Tech 1. Réalisé pendant la première semaine
                    de cours, ce projet porte sur le Jeu Assassin's Creed II</p>
            </div>
            <div class="row">
                <img class="col l6 s12" src="../img/pages/code-ACII.png">
                <div class="col l6 s12">
                    <h2 class="center">Code Source</h2>
                    <p>Le travail à été équitablement partagé dans le duo et chaqu'un d'entre eux travaillait
                        sur une partie distincte du site final afin de ne pas se marcher dessus lors de la conception du
                        site internet. Le projet à été entièrement réalisé par nos 2 étudiants en HTML / CSS.</p>
                </div>
            </div>
            <div class="row">
                <div class="col l6 s12">
                    <h2 class="center">Site</h2>
                    <p>Le site internet retrace le devellopement, le gameplay et le personnage principal de AC II. Ainsi
                        on y retrouve des anecdote de devellopement,
                        les cartes, une description du héro, ainsi qu'un formulaire de contact.</p>
                </div>
                <img class="col l6 s12" src="../img/pages/visu-ACII.png">
            </div>
        </div>
        <!-- Fin main page -->

        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="../js/jquery.min.js"></script>
        <script type="text/javascript" src="../js/materialize.min.js"></script>
        <script type="text/javascript" src="../js/script.js"></script>
        <!-- lien GitHub du projet d'Easter-eggs par WeiChiaChang -->
        <script src="https://rawgit.com/WeiChiaChang/Easter-egg/master/easter-eggs-collection.js"></script>
</body>

</html>