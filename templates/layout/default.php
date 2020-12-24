<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="" />
        <meta name="keywords" content="Saxophone Musicien" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Adrien Quintane">

        <title>Adrien Quintane<?php if(isset($title)){echo " - $title";}?></title>

        <link rel="shortcut icon" href="static/imgs/logo-adri.png" />

        <!-- fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Holtwood+One+SC&family=PT+Serif:ital,wght@1,700&display=swap" rel="stylesheet">
        <link href="https://use.fontawesome.com/releases/v5.15.0/css/all.css" rel="stylesheet">

        <!-- css -->
        <link rel="stylesheet" type="text/css" href="static/css/reset.css" />
        <link rel="stylesheet" type="text/css" href="static/css/style.css" />
        <link rel="stylesheet" type="text/css" href="static/css/menu.css" />
        <link rel="stylesheet" type="text/css" href="static/css/socials.css" />

        <!-- other hearders -->
        <?php echo $hearder ?>
    </head>
    <body>
        <!--HEADER-->
    	<header>
            <input type="checkbox" class="toggler" />
            <div class="burger"></div>

	           <nav>
                   <a href="index.php">accueil</a>
                   <!-- <a href="cv.php">cv</a> -->
                   <a href="about.php">a propos</a>
                   <a href="events.php">Mes prochaines Dates</a>
                   <a href="contact.php">contact</a>
	          </nav>
        </header>

    	<main>
