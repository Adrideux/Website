
<div class="slides">

    <a href="/events.php" class="slide">
        <h2><?php
            $nextGig = include "static/php/getEvents.php";
            $nextGig = $nextGig[count($db)-1];
            echo $nextGig->NAME;
        ?></h2>
        <p>
            <?php
                require_once "static/php/month_name.php";
                if ($nextGig->CANCELED == 1) {
                    echo "ATTENTION: Le concert de ".$nextGig->NAME." du ".$nextGig->DATE_DAY." ".month_name($nextGig->DATE_MONTH)." ".$nextGig->DATE_YEAR." à ".$nextGig->PLACE." est annulé.";
                }else{
                    echo $nextGig->NAME." en concert le ". $nextGig->DATE_DAY." ". month_name($nextGig->DATE_MONTH)." ".$nextGig->DATE_YEAR." à ".$nextGig->DATE_HOUR."h".$nextGig->DATE_MINUTE." à ".$nextGig->PLACE;
                }
            ?>
        </p>
    </a>
    <div href="/contact.php" class="slide">
        <h2>
            <?php require "templates/layout/partials/socials.html"?>
        </h2>
    </div>

</div>
