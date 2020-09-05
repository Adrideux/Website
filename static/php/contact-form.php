<?php
    if (isset($_POST['submit-contact'])) {
        $mailTo = "adrien.quintane2@gmail.com";
        $mailHeader = "From: ". $_POST['mail'];
        $mailSubject = "Nouvelle demande pour $_POST['name']"
        $mailTxt = "Vous avez une nouvelle demande de ". $_POST['nom']."(". $_POST['tel'].") pour ". $_POST['name'] ."\n".
            "Nom de l'evenement : ". $_POST['name'] ."\n".
            "Date : ". $_POST['date'] ."\n".
            "Heure : ". $_POST['time'] ."\n".
            "Lieu : ". $_POST['place'] ."\n".
            "Evement payant ? : ". $_POST['paid'] ."\n".
            "Prix : ". $_POST['price'] ."\n"
            "Details : ". $_POST['details'] ."\n"


        mail($mailTo, $mailSubject, $mailTxt, $mailHeader);
        header("Location: contact.php?mailsend")
    }
 ?>
 <!-- nom mail tel -->
 <!-- name date time place paid price details -->
