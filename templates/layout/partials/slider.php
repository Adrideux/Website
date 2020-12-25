<link rel="stylesheet" type="text/css" href="static/css/slider.css" />

<div class="slides">

    <a href="/events.php" class="slide">
        <h2><?php
            $nextGig = include "static/php/getEvents.php";
            $nextGig = $nextGig[count($db)-1];
            echo $nextGig->NAME;
        ?></h2>
        <p>
            <?php
                require "static/php/month_name.php";
                if ($nextGig->CANCELED == 1) {
                    echo "ATTENTION: Le concert de ".$nextGig->NAME." du ".$nextGig->DATE_DAY." ".month_name($nextGig->DATE_MONTH)." ".$nextGig->DATE_YEAR." à ".$nextGig->PLACE." est annulé.";
                }else{
                    echo $nextGig->NAME." en concert le ". $nextGig->DATE_DAY." ". month_name($nextGig->DATE_MONTH)." ".$nextGig->DATE_YEAR." à ".$nextGig->DATE_HOUR."h".$nextGig->DATE_MINUTE." à ".$nextGig->PLACE;
                }
            ?>
        </p>
    </a>
    <a href="/contact.php" class="slide">
        <h2>Vous voulez me contacter ?</h2>
    </a>

</div>
