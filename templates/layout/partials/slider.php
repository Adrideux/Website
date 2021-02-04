
<div class="slides">
    <?php $nbSlide == 0 ?>

    <?php
        $nextGig = include "static/php/getEvents.php";
        $nextGig = $nextGig[count($db)-1];
        if( ($nextGig->DATE_YEAR*10000)+($nextGig->DATE_MONTH*100)+$nextGig->DATE_DAY > (date('Y')*10000)+(date('m')*100)+date('d') ){
    ?>
        <a href="/events.php" class="slide" style="background-image: url(/static/imgs/slider/1.png);" <?php $nbSlide = $nbSlide+1 ?> >
            <h2><?php
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
        <?php }?>
    <div href="/contact.php" class="slide" style="background-image: url(/static/imgs/slider/2.png);" <?php $nbSlide = $nbSlide+1 ?> >
        <h2>
            <?php require "templates/layout/partials/socials.html"?>
        </h2>
    </div>

    <style>
    .slides,.slides .slide{
        --nb: <?php echo $nbSlide ?>;
    }
    @keyframes slider {
        <?php
            for ($i=1; $i < $nbSlide; $i++) {
                echo 100/$nbSlide*$i."% {left: ".$i*(-100)."%}";
            }
        ?>
    }
    </style>
</div>
