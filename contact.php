<?php $hearder = <<<EOT
    <link rel="stylesheet" type="text/css" href="static/css/contact.css">
EOT;
?>
<?php require 'templates/layout/default.php' ?>

<?php $formList = [
    ["<input type='text' name='nom' placeholder='Votre nom' autofocus/>","<i class='fas fa-user'></i>"],
    ["<input type='email' name='mail' placeholder='Votre address Mail' />","<i class='far fa-envelope'></i>"],
    ["<input type='tel' name='tel' placeholder='Numero de téléphone'  />","<i class='fas fa-mobile-alt'></i>"],

    ["<input type='text' name='name' placeholder='Nom de l évenement' />","<i class='fas fa-user'></i>"],
    ["<input type='date' name='date' />","<i class='far fa-clock'></i>"],
    ["<input type='time' name='time' />","<i class='fas fa-calendar'></i>"],
    ["<input type='text' name='place' placeholder='Adresse de l évenement'>","<i class='fas fa-map'></i>"],

    ["<input type='checkbox' name='paid' value='yes' id='paid-yes'> <label for='paid-yes'>L évenement sera payant pour le publique</label>","<i class='fas fa-money-bill-alt'></i>"],
    ["<input type='number' name='price' placeholder='Prix du ticket' />","<i class='fas fa-tag'></i>"],

    ["<textarea type='text' name='details' placeholder='Ecrivez votre message'></textarea>","<i class='fas fa-comment-alt'></i>"],

    ["<button type='submit' name='submit-contact'>Envoyer</button>","<i class='fas fa-thumbs-up'></i>"]

];
?>

<form class="contact" action="contact.php" method="post">
    <?php foreach ($formList as $ii => $i)
        echo "<div class='$ii'>". $i[1].$i[0]."</div>";
    ?>
</form>

<?php require 'templates/layout/footer.php' ?>
