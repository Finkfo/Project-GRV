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
    <title>Projet 2 - Overwatch 2</title>

</head>

<body>
    <!-- Début navbar section -->
    <nav class="grey navbar-page-overwatch">
        <div class="nav-wrapper">
            <a href="https://gamingcampus.fr/" class="brand-logo"> <img class="logo-navbar"
                    src="../img/logo-gaming-campus-written.png"> </a>
            <a href="https://gamingcampus.fr/" data-target="mobile-demo" class="sidenav-trigger"><i
                    class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="../index.php">Home</a></li>
                <li>
                    <!-- Dropdown Trigger -->
                    <a class="dropdown-trigger" href="#!" data-target="dropdown">Projets<i
                            class="material-icons right">arrow_drop_down</i></a>
                    <!-- Dropdown Structure -->
                    <ul id="dropdown" class="dropdown-content">
                        <li><a href="projet1.php">Assassin's Creed II</a></li>
                        <li class="divider" tabindex="-1"></li>
                        <li><a href="projet3.php">Assassin's Creed IV</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <ul class="sidenav navbar-page-overwatch center" id="mobile-demo">
            <li><a href="../index.html">Home</a></li>
            <li>
                <!-- Dropdown Trigger -->
                <a class="dropdown-trigger" href="#!" data-target="dropdown2">Projets<i
                        class="material-icons right">arrow_drop_down</i></a>
                <!-- Dropdown Structure -->
                <ul id="dropdown2" class="dropdown-content">
                    <li><a href="projet1.html">Assassin's Creed II</a></li>
                    <li class="divider" tabindex="-1"></li>
                    <li class="ac-tag"><a href="projet3.html">Assassin's Creed IV</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- Fin navbar section -->

    <!-- Début modal section -->
    <!-- Modal Structure -->
    <!-- Fin modal section -->

    <!-- Début main page -->

    <!-- Début parallax -->
    <div class="parallax-container">
        <div class="parallax">
            <img src="../img/pages/background-page-overwatch.jpeg" alt="bannière héros overwatch">
        </div>
    </div>
    <!-- Fin parallax -->
    <div class="container">
        <div class="section white">
            <div class="row container">
                <h1 class="header center">Overwatch 2</h1>
                <p class="grey-text text-darken-3 lighten-3"> Ce projet à été réalisé par Guilherme Coelho Vieira,
                    Romain Michel et Mattéo Stampanoni, des étudiants en G.Tech 1. Réalisé pendant la première semaine
                    de cours, ce projet porte sur le Jeu Overwatch 2</p>
            </div>
            <div class="row">
                <img class="col l6 s12" src="../img/pages/code-page-overwatch.png"
                    alt="capture d'écran du code du site internet">
                <div class="col l6 s12">
                    <h2 class="center">Code Source</h2>
                    <p>Le travail à été équitablement partagé entre les trois étudiants et chaque étudiant travaillait
                        sur une partie distincte du site final afin de ne pas se marcher dessus lors de la conception du
                        site internet. Le projet à été entièrement réalisé par nos 3 étudiants en HTML / CSS /
                        JavaScript.</p>
                </div>
            </div>
            <div class="row">
                <div class="col l6 s12">
                    <h2 class="center">Site Internet</h2>
                    <p>Le site internet retrace les informations importantes du jeu Overwatch 2. Ainsi on retrouve les
                        règles du jeu, les différents modes et cartes, une liste complète des héros du jeu trié par
                        catégories de rôles ainsi qu'un formulaire de contact.</p>
                </div>
                <img class="col l6 s12" src="../img/pages/visuel-site-page-overwatch.png"
                    alt="capture d'écran du site internet">
            </div>
        </div>
    </div>
    <footer class="page-footer">
      <div class="row" id="foot" style="margin-bottom : 0px">
        <div class="col s2"></div>
        <div class= "col s4">
        <a href="https://gamingcampus.fr/" class="brand-logo"> <img class="logo-navbar" src="../img/logo-gaming-campus-written.png"></a>
        </div>
        <div class="col s4 center floating" id="contact">
          <a class="waves-effect waves-light btn modal-trigger" href="#modal1" style="margin-top : 56px">Contact</a>
          <div id="modal1" class="modal">
            <div class="modal-content">
            <div class="row">
                <form class="col s12">
                  <div class="row">
                    <div class="input-field col s12">
                    <select>
                      <option value="" disabled selected>Projet à contacter</option>
                      <option value="1">Assassin's Creed II</option>
                      <option value="2">Overwatch 2</option>
                      <option value="3">Assassin's Creed IV</option>
                    </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s6">
                      <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                      <label for="first_name">First Name</label>
                    </div>
                    <div class="input-field col s6">
                      <input id="last_name" type="text" class="validate">
                      <label for="last_name">Last Name</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="email" type="email" class="validate">
                      <label for="email">Email</label>
                    </div>
                  </div>
                  <button> envoyer </button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="col s2"></div>
      </div>
    </footer>
        <!-- Fin main page -->

        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="../js/jquery.min.js"></script>
        <script type="text/javascript" src="../js/materialize.min.js"></script>
        <script type="text/javascript" src="../js/script.js"></script>
        <!-- lien GitHub du projet d'Easter-eggs par WeiChiaChang -->
        <script src="https://rawgit.com/WeiChiaChang/Easter-egg/master/easter-eggs-collection.js"></script>
</body>

</html>