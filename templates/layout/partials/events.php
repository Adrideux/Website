<?php

    $pdo = new PDO('sqlite:database/events.db');
    $query = $pdo->query('SELECT * FROM EVENT');
    if($query === false){
        var_dump($pdo->errorInfo());
        die('Erreur SQL');
    }
    $db = $query->fetchAll(PDO::FETCH_OBJ);
?>
<aside id="event">
    <h1>Prochaines Dates</h1>

    <?php
    $at_least_one=0;
    foreach ($db as $key) {
        if( ($key->DATE_YEAR*10000)+($key->DATE_MONTH*100)+$key->DATE_DAY > (date('Y')*10000)+(date('m')*100)+date('d') ){
            $at_least_one=1;
            ?>

            <section class="card">
                <h1><?= $key->NAME ?></h1>
                <p class="date">
                    <?= $key->DATE_DAY ?>/<?= $key->DATE_MONTH ?>/<?= $key->DATE_YEAR ?>
                </p>
                <p class="time"><?= $key->DATE_HOUR ?>h<?= $key->DATE_MINUTE ?></p>
                <p class="lieu">
                    <?= $key->PLACE ?>
                </p>
                <?php
                    if(!is_null($key->WEB))
                        echo "<a href='".$key->WEB."'> <i class='fas fa-globe'></i></a>";
                    if(!is_null($key->MAIL))
                        echo "<a href='".$key->MAIL."'> <i class='fas fa-envelope'></i></a>";
                    if(!is_null($key->FACEBOOK))
                        echo "<a href='".$key->FACEBOOK."'> <i class='fab fa-facebook-square'></i></a>";
                    if(!is_null($key->INSTA))
                        echo "<a href='".$key->INSTA."'><i class='fab fa-instagram'></i></a>";
                    if(!is_null($key->YOUTUBE))
                        echo "<a href='".$key->YOUTUBE."'><i class='fab fa-youtube'></i></a>";


                    if($key->CANCELED == 1)
                        echo "<h2 class='canceled'>ANNULÉ</h2>";
                    if($key->REPORTED == 1)
                        echo "<h2 class='canceled'>ÉVÈNEMENT REPORTÉ</h2>";
                    if($key->SOLDOUT == 1)
                        echo "<h2 class='canceled'>PLUS DE PLACES DISPONIBLE</h2>";
                ?>

            </section>

            <?php
        }
    }
    if($at_least_one == 0){
        echo "
            <section class='card'>
                <h1>Aucune date de prevue pour l'instant</h1>";
        require 'templates/layout/partials/socials.html';
        echo "
            </section>
        ";
    }
    ?>

</aside>
