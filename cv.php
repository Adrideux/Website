<?php
$title = "Mon CV";
$hearder = <<<EOT
        <link rel="stylesheet" type="text/css" href="{{ url_for('static', filename='css/cv.css') }}">
EOT; ?>
<?php require 'templates/layout/default.php' ?>

<article id="cv">

    <!-- <h1>Mon CV</h1> -->

    <h2>Formations</h2>

        <h3><mark class="date">2018-2020</mark> : Faculté de musicologie</h3>
            <p> 1ere et 2ème année en Licence Jazz et culture musicale </p>
            <p class="lieu">Université Jean Jaures</p>

        <h3><mark class="date">2017-2018</mark> : Faculté de Sciences</h3>
            <p> 1ère année en Licence Informatique </p>
            <p class="lieu"> Université de La Rochelle </p>
            <p> Validation de l'année avec mention </p>

        <h3><mark class="date">2017</mark> : Baccalauréat Scientifique (Sciences de l'ingénieur)</h3>
            <p> Mention Assez Bien </p>
            <p> Spécialité Informatique et Sciences du Numerique </p>
            <p class="lieu"> Lycée Emile Roux, Confolens</p>

        <h3><mark class="date">2014</mark> : Brevet des collèges</h3>
            <p> Mention Bien </p>
            <p class="lieu"> Collège Jean de la Quintinie, Chabanais</p>

    <h2>Parcour musicale</h2>
        <ul>
            <li>16 années de formation musicale <p class="lieu">(EDM Charente et Conservatoire de La Rochelle)</p></li>
            <li>Pratiques instrumentales:
                <ul>
                    <li>Saxophone (11 ans)</li>
                    <li>Trombone, Piano (Débutant)</li>
                </ul>
            </li>
            <li>Pratiques collectives :
                <ul>
                    <li>J.O.E (Jazz orchestral Ensemble) dirigé par Michel Parmentier</li>
                    <li>Big Band du Conservatoire de La Rochelle</li>
                    <li>Banda de Chabanais</li>
                    <li>Fanfare et Théâtre de l'Université de La Rochelle</li>
                    <li>Orchestre symphonique de L'EDM Charente</li>
                </ul>
            </li>
        </ul>

    <h2>Compétences Informatique</h2>
        <ul>
            <li>Informatique d'usage</li>
            <li>Programmation: Bash, Python, Java</li>
            <li>Création de Site Web (HTML,CSS,JavaScript...)</li>
            <li>Réalisation de Projets Informatique</li>
            <li>Utilisation de linux et invite de commandes</li>
        </ul>

    <h2>Autres Compétences</h2>
        <ul>
            <li> Habitude et capacité à travailler en équipe, prise d'initiatives </li>
            <li>Investisement dans la réalisation de projets</li>
            <li>Aisance dans la communication, sociable </li>
            <li>Ponctuel</li>
        </ul>

    <h2>Langues</h2>
        <ul>
            <li>Anglais: bon niveau (~B2)</li>
            <li>Suédois: A2</li>
            <li>Espagnol: niveau Bac (B1)</li>
            <li>Latin: niveau Collège</li>
        </ul>
        <p> Voyages linguistique et culturels scolaires en Angleterre (2016) et en Italie (2014) <br />
        Voyages culturels personnels en Espagne et en Irlande (2019)</p>

    <h2>Expérience professionnelle</h2>
        <ul>
            <li><p class="date">Août 2019</p>: Employé au <p class="lieu">Crédit Mutuel (16270 Roumazière Loubert)</p></li>
            <li><p class="date">Juillet 2018</p>: Ouvrier production <p class="lieu">Saica Pack France (16150 Exideuil)</p></li>
            <li>Stage de 3ème dans l'entreprise <p class="lieu">MAQPRINT (87200 St-Junien)</p>,observation de developeurs,programmeur informatique et infographistes</li>
        </ul>

    <h2>Sport</h2>
        <ul>
            <li>Basketball et Handball pendant 2 et 4 ans</li>
            <li>Escrime et karaté pendant 2 ans</li>
            <li>Natation pendant 8 ans</li>
        </ul>

</article>

<?php require 'templates/layout/footer.php' ?>
