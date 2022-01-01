<?php include "app/app.php"; $page = 4; head($page); ?>
<body> <header> <?php navbar($page); ?> </header>

<main>
    <section id="projet" class="container">
        <br>
        <h2>Notre Équipe</h2>
        <p>Nous sommes une équipe de passionné par notre travail et ce que nous créon tout les jours, nous somme jeune mais plein d'envie pour notre future.</p>
        <br>
    </section>


    <section id="credit">
        <div class="container">
            <div class="row">

                <?php foreach ($env_perso as $perso){ ?>


                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="our-team">
                        <div class="picture">
                            <img class="img-fluid" src="
                            <?php if(!empty($perso['icon'])) {
                                echo $env_pp . $perso['icon'];
                            } else {
                                echo $env_pp_default;
                            } ?>
                            ">
                        </div>
                        <div class="team-content">
                            <h3 class="name"><?php echo $perso['name']; ?></h3>
                            <h4 class="title"><?php echo $perso['role']; ?></h4>
                        </div>
                        <ul class="social">

                            <?php
                            if(!empty($perso['facebook'])) { ?>
                                <li><a href="<?php echo $perso['facebook']; ?>" class="fab fa-facebook" aria-hidden="true"></a></li>
                            <?php }
                            if(!empty($perso['instagram'])) { ?>
                                <li><a href="<?php echo $perso['instagram']; ?>" class="fab fa-instagram" aria-hidden="true"></a></li>
                            <?php }
                            if(!empty($perso['twitter'])) { ?>
                                <li><a href="<?php echo $perso['twitter']; ?>" class="fab fa-twitter" aria-hidden="true"></a></li>
                            <?php }
                            if(!empty($perso['github'])) { ?>
                                <li><a href="<?php echo $perso['github']; ?>" class="fab fa-github" aria-hidden="true"></a></li>
                            <?php }
                            if(!empty($perso['youtube'])) { ?>
                                <li><a href="<?php echo $perso['youtube']; ?>" class="fab fa-youtube" aria-hidden="true"></a></li>
                            <?php }
                            if(!empty($perso['soundcloud'])) { ?>
                                <li><a href="<?php echo $perso['soundcloud']; ?>" class="fab fa-soundcloud" aria-hidden="true"></a></li>
                            <?php }
                            if(!empty($perso['linkedin'])) { ?>
                                <li><a href="<?php echo $perso['linkedin']; ?>" class="fab fa-linkedin" aria-hidden="true"></a></li>
                            <?php }






                            ?>
                        </ul>
                    </div>
                </div>

                <?php } ?>

            </div>
        </div>

    </section>

    <br>
    <hr style="background: rgb(161, 161, 161);">

    <section id="projet" class="container">
        <br>
        <h2>Nous Rejoindre</h2>
        <p>Tyrolium recrute des membres passionnés par notre travail, nous n'avons pas spécialement de critères de sélection si ce n'est la compréhension de notre travail et l'investissement au sein de celui-ci ou d'un projet.</p>
        <br>
    </section>


    <section id="recrut">
        <ul class="container">
            <li>
                <h3>DÉVELOPPEUR</h3>
                <br>
                <?php tyrobtn("https://docs.google.com/forms/d/e/1FAIpQLSer9XcD21PCCqawiHfF82hhX1O-RUWattlnGf0o1iWu5mdLwg/viewform?usp=sf_link", "recru", "Accedez au formulaire");?>
            </li>
            <li>
                <h3>GRAPHISTE-DESIGNER</h3>
                <br>
                <?php tyrobtn("https://docs.google.com/forms/d/e/1FAIpQLSeqvsgsvkItfJyu09LvRGLyMyOczVliqTg2bF5QWFUi6GSIcw/viewform?usp=sf_link", "recru", "Accedez au formulaire");?>
            </li>
            <li>
                <h3>MONTEUR-VIDÉO</h3>
                <br>
                <?php tyrobtn("https://docs.google.com/forms/d/e/1FAIpQLSeKHDYQTqZvkFK89LO1T5UQG1BoZcDIFz_n1KBA5tXNqyplzw/viewform?usp=sf_link", "recru", "Accedez au formulaire");?>
            </li>
            <li>
                <h3>BUILDER-MINECRAFT</h3>
                <br>
                <?php tyrobtn("https://docs.google.com/forms/d/e/1FAIpQLScKQkZcm5bEyT1P06yWF3NSR9-23wE_msztn_QcDf9G-HRU5g/viewform?usp=sf_link", "recru", "Accedez au formulaire");?>
            </li>
            <li>
                <h3>COMPOSITEUR-MUSICIEN-CHANTEUR</h3>
                <br>
                <?php tyrobtn("https://docs.google.com/forms/d/e/1FAIpQLSfV4Nb3D_S1EALC-INAt7M5uxwQHv3h0j3ltms1rtqVOgGWYQ/viewform?usp=sf_link", "recru", "Accedez au formulaire");?>
            </li>
            <li>
                <h3>MODÉRATEUR-ASSISTANT</h3>
                <br>
                <?php tyrobtn("https://docs.google.com/forms/d/e/1FAIpQLSc9DeAU_koGj3UJNYiB7judKpzkIPDUvDXGmvvs9z3cDF7XpA/viewform?usp=sf_link", "recru", "Accedez au formulaire");?>
            </li>
            <li>
                <h3>ANIMATEUR-DISCORD</h3>
                <br>
                <?php tyrobtn("https://docs.google.com/forms/d/e/1FAIpQLSflU5SxdYVPOnyJZB0SWi4xNjqNJAFycPAMBAQkJDY_uzHu6w/viewform?usp=sf_link", "recru", "Accedez au formulaire");?>
            </li>
            <li>
                <h3>COMMUNITY-MANGER</h3>
                <br>
                <?php tyrobtn("https://docs.google.com/forms/d/e/1FAIpQLSdlVrklk0i8NPk8VqcK3ueDt6pOoM4LTHBiYnpovWjFDvKyCQ/viewform?usp=sf_link", "recru", "Accedez au formulaire");?>
            </li>
            <li>
                <h3>MEMBRE SANS COMPÉCENSE PRÉSICE</h3>
                <br>
                <?php tyrobtn("https://docs.google.com/forms/d/e/1FAIpQLSdRZ5UxQCDDXHHx6xQKxgrS_JiwAZnr4QQbPs3glVem5-cOnA/viewform?usp=sf_link", "recru", "Accedez au formulaire");?>
            </li>
        </ul>

    </section>


</main>

<?php footer(); ?> </body> </html>
