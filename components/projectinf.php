<?php
    require_once "database.php";

    $sql = "SELECT * FROM project";
    $pre = $pdo->prepare($sql); //on prévient la base de données qu'on va executer une requête
    $pre->execute();//on l'execute
    $data = $pre->fetchAll(PDO::FETCH_ASSOC);
    foreach($data as $project)  {
    
    ?> 
<div class="row">
    <div class="col s3">
        <?php
        echo $project['username'].' '.echo $project['mail'].' '.echo $project['creation_date'];
        ?>
    </div>
</div>
<br>
<?php 
    }
    ?>