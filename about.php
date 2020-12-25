<?php
$title = "A propos";
$hearder = <<<EOT
    <link rel="stylesheet" type="text/css" href="#">
EOT ?>
<?php require 'templates/layout/default.php' ?>

    <h2>Biographie</h2>
    <p class="presentation_perso">
        Adrien Quintane est un saxophoniste de <?php echo date('y') ?> ans.
        Il commence le saxophone à l'âge de 10 ans en intégrant l'école departementale de charente.
    </p>

    <h2>Mon materiel</h2>
    <h3>Saxophone alto</h3>
    <ul>
        <li><mark>Saxophone:</mark> <a href="https://www.selmer.fr/fr/fiche-produit/saxophone-alto-axos">Selmer Axos de 2018</a></li>
        <li><mark>Bec:</mark> Vandoren V16 5M de 2015</li>
        <li><mark>Anches:</mark> D'addario Select Jazz 3 Hard </li>
        <li><mark>Ligature:</mark> Vandoren Optimum</li>
    </ul>
    <h3>Saxophone Tenor </h3>
    <ul>
        <li><mark>Saxophone:</mark> <a href="https://www.selmer.fr/fr/fiche-produit/saxophone-tenor-super-action-80-serie-2">Selmer Serie II de 1990</a></li>
        <li><mark>Bec:</mark> Gottsu Hibiki 8*</li>
        <li><mark>Anches:</mark> D'addario Select Jazz 3 Medium </li>
        <li><mark>Boite:</mark> Bam Softpack</li>
    </ul>
    <h3>"Studio"</h3>
    <ul>
        <li><mark>Carte Son:</mark> Behringer U-Phoria UMC204HD</li>
        <li><mark>Micro:</mark> AKG P120</li>
        <li><mark>Casque:</mark> Audio Technica ATH-M40x</li>
    </ul>

    <h2>Mes Projets</h2>
    <h3>Mes projets persos</h3>
        <p>Tout mes projets solo. De la simple transcription à des albums plus complets.
        Pour l'instant assez incomplet mais tout est en progret.
        Vous pouvez retrouver tout ceci sur Instagram ou sur tout mes autres reseau sociaux </p>
        <div class="bandeau_albums">
        </div>
        <mark>Jazz...</mark>

<?php require 'templates/layout/footer.php' ?>
