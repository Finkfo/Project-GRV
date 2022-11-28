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
      <a href="https://gamingcampus.fr/" data-target="mobile-demo" class="sidenav-trigger">
        <i class="material-icons">menu</i>
      </a>
      <ul class="right hide-on-med-and-down">
        <li>
          <!-- Modal Trigger -->
          <a class="waves-effect waves-light btn modal-trigger orange darken-3" href="#modal1">Contact</a>
          <!-- TEST -->
        </li>
        <li><i class="material-icons nav-icon">wb_sunny</i></li>
      </ul>
    </div>
    <ul class="sidenav grey center" id="mobile-demo">
      <li><a href="badges.html">Components</a></li>

      <li>
        <!-- modal trigger -->
        <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Contact</a>
        <!-- TEST  -->
      </li>
      <li><i class="material-icons nav-icon">brightness_2</i></li>
    </ul>
  </nav>
  <!-- Fin navbar section -->

  <!-- Début modal section -->
  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <div class="row">
        <div id="contact-AC-2" class="col s4">
          <img id="ac2-logo" class="logo-modal" src="img/modal/ac_logo.png" alt="logo d'Assassin's Creed II">
        </div>
        <div id="contact-Overwatch-2" class="col s4">
          <img id="overwatch2-logo" class="logo-modal" src="img/modal/Overwatch_2_logo.png" alt="logo d'overwatch 2">
        </div>
        <div id="contact-AC-Reb" class="col s4" class="modal">
          <img id="acreb-logo" class="logo-modal" src="img/modal/acreb_logo.png"
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
                <a id="send-button" href="#!" class="modal-close waves-effect waves-green btn-flat">Envoyer</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Fin modal section -->

  <div class="parallax-container">
    <div class="parallax ">
      <img src="img/cover.webp" alt="">
    </div>
  </div>


  <!-- Début description section -->
  <div class="row animate__animated animate__backInDown">
    <h2 class="center">NOTRE ÉQUIPE</h2>
    <div class="col s2"></div>
    <div class="col s8 row">
      <div class="col l4 s12 val">
        <div class="card">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="img/card-val.jpg">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Valentin V. <i
                class="material-icons right">arrow_drop_down</i></span>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Valentin Vallée<i
                class="material-icons right">arrow_drop_up</i></span>
            <p>21 ans et c'est déja pas mal</p>
          </div>
        </div>
      </div>
      <div class="col l4 s12 gui">
        <div class="card">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="img/card-gui.jpg">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Guilherme C V. <i
                class="material-icons right">arrow_drop_down</i></span>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Guilherme Coelho Vieira<iz class="material-icons right">
                arrow_drop_up</i></span>
            <p> <br><br>Passionné de jeu vidéo, de développement informatique et d'esport. Nintendo Addict</p>
          </div>
        </div>
      </div>
      <div class="col l4 s12 rob">
        <div class="card">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="img/card-Rob.jpg">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">
              Robin F.<i class="material-icons right">arrow_drop_down</i>
            </span>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">
              Robin Frouin<i class="material-icons right">arrow_drop_up</i>
            </span>
            <hp> <br><br> Comédien à ses heures perdues et victime du syndrome de Stockholm envers Ubisoft. Passionné
              par la création artistique dans le domaine de l'informatique.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col s2"></div>
  </div>
  <!-- Fin description section -->

  <h2 class="center">NOS PROJETS</h2>
  <div class="row">
    <div class="col l2 hide-on-small-only"></div>
    <div class="carousel carousel-slider col l8 s12 " data-indicators="true">
      <a id="swipe-right" class="btn-floating btn-large waves-effect waves-light grey"><i
          class="material-icons darken-text-2">chevron_right</i></a>
      <a id="swipe-left" class=" btn-floating btn-large waves-effect waves-light grey"><i
          class="material-icons darken-text-2">chevron_left</i></a>

      <div class="carousel-fixed-item center">
        <a id="btn-carou" class="btn waves-effect white grey-text darken-text-2">Acceder au Projet</a>
      </div>
      <div id="ACII" class="carousel-item"></div>
      <div id="OW" class="carousel-item"></div>
      <div id="ACIV" class="carousel-item"></div>
    </div>
    <div class="col l2 hide-on-small-only"></div>
  </div>
  </div>
  <video hidden controls id='video'>
    <source src="img/windy_music.mp4" type="video/mp4">
  </video>
  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
  <!-- lien GitHub du projet d'Easter-eggs par WeiChiaChang -->
  <script src="https://rawgit.com/WeiChiaChang/Easter-egg/master/easter-eggs-collection.js"></script>
</body>

</html>