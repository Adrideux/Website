<?php
$title = "Mes Prochaines Dates";
$hearder = <<<EOT
        <link rel="stylesheet" type="text/css" href="static/css/page css/events.css">
        <!-- Javascript -->
        <script defer src="static/js/events.js"></script>
EOT; ?>
<?php require 'templates/layout/default.php' ?>

<?php

    $pdo = new PDO('sqlite:database/events.db');
    $query = $pdo->query('SELECT * FROM EVENT');
    if($query === false){
        var_dump($pdo->errorInfo());
        die('Erreur SQL');
    }
    $db = $query->fetchAll(PDO::FETCH_OBJ);

    require "static/php/month_name.php";
    require_once "static/php/sorting.php";
    $db = db_sorting($db);
?>
    <h2>Mes Prochaines Dates</h2>
    <p id="checkbox" class="checkbox">
        Dates passées
    </p>
<div id="event">

    <?php
    foreach ($db as $key) {
            $at_least_one=1;
            ?>

            <section class="card<?php
                if( ($key->DATE_YEAR*10000)+($key->DATE_MONTH*100)+$key->DATE_DAY < (date('Y')*10000)+(date('m')*100)+date('d') ){
                    echo " done";
                }
            ?>">
                <h2><?= $key->NAME ?></h2>
                <p class="date">
                    <?= $key->DATE_DAY ?> <?= month_name($key->DATE_MONTH) ?> <?= $key->DATE_YEAR ?>
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
                        echo "<h3 class='canceled'>ANNULÉ</h3>";
                    if($key->REPORTED == 1)
                        echo "<h3 class='canceled'>ÉVÈNEMENT REPORTÉ</h3>";
                    if($key->SOLDOUT == 1)
                        echo "<h3 class='canceled'>PLUS DE PLACES DISPONIBLE</h3>";
                ?>

            </section>

            <?php
    }
    ?>

</div>

<?php require 'templates/layout/footer.php' ?>
