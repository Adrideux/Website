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
        <li><mark>Saxophone:</mark>
            <a href="https://www.selmer.fr/fr/fiche-produit/saxophone-alto-axos">Selmer Axos de 2018</a>
        </li>
        <li><mark>Bec:</mark>
            <a href="https://vandoren.fr/fr/vandoren-mouthpieces/a5-v16-alto-saxophone-mouthpiece/"> Vandoren V16 5M de 2015 </a>
        </li>
        <li><mark>Anches:</mark>
            <a href="https://www.daddario.com/products/woodwinds/alto-saxophone/alto-sax-reeds/select-jazz-filed-alto-saxophone-reeds/item/daddario-select-jazz-filed-alto-saxophone-reeds-strength-3-hard-10-pack-3981/"> D'addario Select Jazz 3 Hard Filed </a>
        </li>
        <li><mark>Ligature:</mark>
            <a href="https://vandoren.fr/fr/ligatures-pour-saxophone/"> Vandoren Optimum </a>
        </li>
    </ul>
    <h3>Saxophone Tenor </h3>
    <ul>
        <li><mark>Saxophone:</mark>
            <a href="https://www.selmer.fr/fr/fiche-produit/saxophone-tenor-super-action-80-serie-2">Selmer Serie II de 1990</a>
        </li>
        <li><mark>Bec:</mark>
            <a href="https://jjbabbitt.com/otto-link/">Otto Link Tone Edge 6** de 2020 </a> refacé par <a href="https://www.saxophoneboutique.com/"> Pat Morisson</a> </li>
        <li><mark>Anches:</mark>
            <a href="https://www.daddario.com/products/woodwinds/tenor-saxophone/tenor-sax-reeds/select-jazz-filed-tenor-saxophone-reeds/"> D'addario Select Jazz 3 Medium Filed</a></li>
        <li><mark>Boite:</mark>
            <a href="https://www.bamcases.com/collections/saxophone/products/softpack-tenor-saxophone-case"> Bam Softpack </a>
        </li>
    </ul>
    <h3>"Studio"</h3>
    <ul>
        <li><mark>Carte Son:</mark>
            <a href="https://www.behringer.com/product.html?modelCode=P0BK0"> Behringer U-Phoria UMC204HD </a>
        </li>
        <li><mark>Micro:</mark>
            <a href="https://www.akg.com/Microphones/Condenser%20Microphones/P120-.html?dwvar_P120-_color=Black-GLOBAL-Current&cgid=Condenser%20Microphones#start=1"> AKG P120 </a>
        </li>
        <li><mark>Casque:</mark>
            <a href="https://www.audio-technica.com/fr-fr/headphones/best-for/studio/ath-m40x"> Audio Technica ATH-M40x </a>
        </li>
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
