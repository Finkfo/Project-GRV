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
  <?php require "components/navbar.php"; ?>
  <div class="parallax-container">
    <div class="parallax ">
      <img src="img/cover.webp" alt="">
    </div>
  </div>


  <!-- Début description section -->
  <?php 
    require "components/card.php";
    ?>
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
  <footer class="page-footer">
    <div class="row" id="foot">
      <div class="col s2"></div>
      <div class= "col s4">
      <a href="https://gamingcampus.fr/" class="brand-logo"> <img class="logo-navbar" src="img/logo-gaming-campus-written.png"></a>
      </div>
      <div class="col s4 center floating" id="contact">
        <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Contact</a>
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