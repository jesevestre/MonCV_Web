<a id="cv"></a>

<?php require('tete.php'); ?>

<!-- CLASSE PROVENANT DE LA LIBRAIRIE DISTANTE BOOTSTRAP ET DE style.css-->
<div class="container">
<br />
<div class="tel-400px"></div>

    <h1>Je me présente</h1>
    <br />

    <div>
        <ul class="tabs">
            <li class="active"><a href="#profil">MON PROFIL</a></li>
            <li><a href="#cv">MON CV</a></li>
        </ul>
        <div class="tabs-content">

            <div class="tab-content active" id="profil"><p><b>Mon profil de développeur</b> Depuis Septembre 2018</p>
                <ul>
                    <li>•   Mon parcours évolutif m'a permis d’acquérir de nombreuses compétences dans le domaine 
                        de l’informatique. Cette évolution m'a enrichi professionnellement au niveau de l'adaptabilité, 
                        ainsi que personnellement, par l'acquisition de qualités telles que la rigueur et le sens du relationnel.</li>

                    <li>•	Mobile et disponible, je suis aujourd'hui prêt à me mobiliser pour réussir dans les nouveaux 
                        défis qui me seront confiés. Améliorer, développer et faire progresser sont les piliers de mes formations 
                        et de mes passions pour l'informatique accessible. J’ai à cœur de façon rigoureuse, de concevoir des 
                        solutions principalement dans le  <strong>domaine du web/webmaster </strong>, ou plus généralement <strong>d’applications informatiques</strong>.</li>

                    <br />

                    <li><a href="fichierTelechargeable/CV_Jean-Baptiste_SEVESTRE.pdf" download="CV_Jean-Baptiste_SEVESTRE.pdf">Télécharger mon CV en fichier PDF</a></li>

                </ul>
            </div>

            <div class="tab-content" id="cv"><p><b>Mon Curriculum vitæ</b> Mis à jour le 22 Février 2022</p>
                <ul>
                    <li><img class="maPhoto" src="images/moi.JPG"></li>

                    <br />

                    <li><a href="fichierTelechargeable/CV_Jean-Baptiste_SEVESTRE.pdf" download="CV_Jean-Baptiste_SEVESTRE.pdf">Télécharger mon CV en fichier PDF</a></li>
                </ul>
                <br />

                </div>
            </div>

        </div>
    </div>

    <br />
    <button onclick="window.location.href='index.html'" type="submit" class="btn btn-secondary" 
    style="background-color:#333; margin-left: 47%;">Retour</button>

</div>
<script type="text/javascript" src="js/onglets.js"></script>
<script type="text/javascript" src="js/animScroll.js"></script>
<?php require('pied.php'); ?>