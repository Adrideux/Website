<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="" />
        <meta name="keywords" content="" />

        <title>Adrien Quintane</title>
        <!-- fonts -->
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Lilita+One|Orbitron&display=swap" rel="stylesheet">
        <link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">
        <!-- css -->
        <link rel="stylesheet" type="text/css" href="static/css/reset.css" />
        <link rel="stylesheet" type="text/css" href="static/css/style.css" />
        <link rel="stylesheet" type="text/css" href="static/css/socials.css" />
        <link rel="stylesheet" type="text/css" href="static/css/events.css" />
        <!-- hearders from the files -->
        <?php echo $hearder ?>
    </head>
    <body>
        <!--HEADER-->

    	<header>
    	<nav>
            <div id="brand">
                <img src="static/imgs/logo_adri.png" alt="" id="logo">
                <h1 id="word-mark"><a href="{{ url_for('home') }}">Adrien Quintane</a></h1>
            </div>
            <div id="menu">
                <a href="index.php">accueil</a>
                <a href="cv.php">cv</a>
                <a href="about.php">about</a>
                <a href="contact.php">contact</a>
            </div>
    	</nav>
        </header>

    	<main>
            <?php require 'templates/layout/partials/events.php' ?>
