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
        echo $user['username'].' '.echo $user['mail'].' '.echo $user['creation_date'];
        if(($user['admin']) == 1){
            echo 'Admin';
        }else{
            echo 'Not admin';
        }
        $suppression = $donnees['id'];
        $donnees['id'] = mysql_query('DELETE * FROM User WHERE id=' . $suppressionMessage);
        "<a href='livre_or_a.php?idMsg=' . $donnees['id']>""</a>"
        ?>
    </div>
</div>
<br>
<?php 
    }
    ?>