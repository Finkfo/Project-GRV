<?php
    require_once "database.php";

    $sql = "SELECT * FROM user";
    $pre = $pdo->prepare($sql); //on prévient la base de données qu'on va executer une requête
    $pre->execute();//on l'execute
    $data = $pre->fetchAll(PDO::FETCH_ASSOC);
    foreach($data as $user)  {
    
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
<?php 
    }
    ?>