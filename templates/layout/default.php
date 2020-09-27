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
        <link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">
        <!-- css -->
        <link rel="stylesheet" type="text/css" href="static/css/reset.css" />
        <link rel="stylesheet" type="text/css" href="static/css/style.css" />
        <link rel="stylesheet" type="text/css" href="static/css/socials.css" />
        <!-- hearders from the files -->
        <?php echo $hearder ?>
    </head>
    <body>
        <!--HEADER-->

    	<header>
    	<nav>
            <div id="brand">
                <img src="static/imgs/adri-1.png" alt="" id="logo">
                <h1 id="word-mark"><a href="{{ url_for('home') }}">Adrien Quintane</a></h1>
                <img src="static/imgs/adri-2.png" alt="" id="logo">
            </div>
            <div id="menu">
                <a href="index.php">accueil</a>
                <!-- <a href="cv.php">cv</a> -->
                <a href="about.php">a propos</a>
                <a href="events.php">Mes prochaines Dates</a>
                <a href="contact.php">contact</a>
            </div>
    	</nav>
        </header>

    	<main>
