

<?php
$title = "Contact";
$hearder = <<<EOT
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="static/css/contact2.css">
EOT;
?>
<?php require 'templates/layout/default.php' ?>

<article>
    <div class="left-division">
        <h2>Contactez moi</h2>
        <h3>Pour un concert par exemple</h3>
        <div class="form-styles">
            <label for="textarea">Votre message:</label>
            <textarea autofocus>Pour un concert veuillez indiquer :
            La Date:
            Le Lieux:
            ... :</textarea>
        </div>
    </div>

    <div class="right-division">
        <div class="stamp-container">
            <img src="https://upload.wikimedia.org/wikipedia/commons/4/4b/Stamp_Bermuda_1936_2.5p.jpg" class="stamp">
        </div>

        <div class="right-form">
            <p>
                <label for="nom">Votre Nom:</label>
                <input type="text" name="nom" value="" />
            </p>
            <p>
                <label for="mail">Votre mail:</label>
                <input type="email" name="mail" value="" />
            </p>
            <p>
                <label for="tel">Votre Telephone:</label>
                <input type="tel" name="tel" value="(facultatif)" />
            </p>
        </div>
        <div class="submit-button">
            <div class="submit-it">SEND YOUR MESSAGE</div>
        </div>
    </div>
</article>

<?php require 'templates/layout/footer.php' ?>
