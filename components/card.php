<?php
    require_once "database.php";

    $sql = "SELECT * FROM user";
    $pre = $bdd->prepare($sql); //on prévient la base de données qu'on va executer une requête
    $pre->execute();//on l'execute
    $data = $pre->fetchAll(PDO::FETCH_ASSOC);
    foreach($data as $user){}

    ?> 
<div class="row">
    <div class="col s3">
        <?php
        echo $user['username'].' ';
        ?>
    </div>
    <div class="col s3">
        <?php
        echo $user['mail'].' ';
        ?>
    </div>
    <div class=" col s3">
        <?php
        echo $user['creation_date'];
        ?>
    </div>
    <div class="col s3">
    <?php
        if(($user['admin']) == 1){
            echo 'Admin';
        }else{
            echo 'Not admin';
        }
        ?>
    </div>
</div>
<br>


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
              par la création artistique dans le domaine de l'informatique. BIGARD 2 LE CON </p>
          </div>
        </div>
      </div>
    </div>
    <div class="col s2"></div>
  </div>
  