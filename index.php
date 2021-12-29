<?php include "app/app.php"; $page = 1; head($page); ?>
<body> <header> <?php navbar($page); ?> </header>

<main>
    <section id="particule">
        <div id="particule">
            <div id="head">
                <h1>Tyrolium</h1>
                <a href="#home-tyro"><p>
                    DÉCOUVREZ QUI NOUS SOMMES
                </p></a>
            </div>
            <?php particule() ?>
        </div>
    </section>


    <div class="home-desktop">

    <section id="home-tyro" class="container row">
        <div class="col-6" style="text-align: end">
            <img src="assets/Tyrolium_home.png" style="width: 96%; height: 100%">
        </div>
        <div class="container col-5">
            <article id="art-home">
                <h2 class="art">A propos de Tyrolium</h2>
                <h3 class="art">Tyrolium est une entreprise multifonction qui travaille sur plusieurs projets, notamment du développement de jeux vidéos ou d'applications web, de la musique, ou de l'audiovisuel.</h3>
                <br>
                <h3 class="art">Elle propose principalement des prestations de services de création de site Web et d'applications pour les particuliers et les professionnels.</h3>
                <br>
                <h3 class="art">Les profits générés par ces prestations seront directement investies dans les projets de l'entreprise.</h3>
            </article>
        </div>
    </section>

    <hr style="background: rgb(161, 161, 161); margin-top: 80px; margin-bottom: 120px" >

    <section id="home-service" class="container row">
        <div class="container col-4">
            <article>
                <h2 class="art">Nos Prestations</h2>
                <p class="art">Tyrolium vous propose des prestations de services, notamment dans le développement de sites Web, d'applications, l'hébergement de serveurs, le développement minecraft et des bots (discord ou autre) pour les particuliers et les professionnels. Les fonds générés par ces prestations seront investis dans les projets de l'entreprise.</p>
                <div style="text-align: center">
                    <?php tyrobtn("service", "service", "Liste de nos Prestations");?>
                </div>
            </article>
        </div>
        <div class="col-6">
            <img src="assets/Team_work_Monochromatic.png">
        </div>
    </section>

    <section id="home-project" class="container row">
        <div class="col-6">
            <img src="assets/Startup_Monochromatic.png">
        </div>
        <div class="container col-4">
            <article>
                <h2 class="art">Nos Projets</h2>
                <p class="art">De nos jours, nous sommes beaucoup à rêver de créer nos propres projets. Tyrolium a réussi le pari de réaliser les rêves de nos employés passionnés.
                    Nous sommes fiers de ce que nous accomplissons tous les jours.
                    Nous vous proposons des projets de grande ampleur toujours avec la passion de tous nos équipes.
                    Tyrolium veut vous proposer des services et des projets bien realisés, de quoi vous divertir ou vous simplifier la vie. </p>
                <div style="text-align: center">
                    <?php tyrobtn("project", "project", "Tout nos Projets");?>
                </div>
            </article>
        </div>
    </section>

    <section id="home-collaboration" class="container row">
        <div class="container col-4">
            <article>
                <h2 class="art">Nos Collaborations</h2>
                <p class="art">Tyrolium est une entreprise qui est formée de plusieurs équipes, elle sont dirigés principalement dans les projets de l'entreprise ainsi que les prestations proposées.
                    Ces équipes sont formées de personnes motivées, dynamiques et investies dans les projets et dans l'entreprise.

                    Nous recrutons tous types de profils, les seuls pré-requis sont d'être intéressé et motivé par les projets qui vous attires. </p>
                <div style="text-align: center">
                    <?php tyrobtn("collaboration", "collaboration", "Nos Collaborations");?>
                </div>
            </article>
        </div>
        <div class="col-6">
            <img src="assets/Brainstorming_session_Monochromatic.png">
        </div>
    </section>

        <?php if($env_isAccount == true) { ?>

    <section id="home-account">
        <div class="container row">
            <div class="col-6">
                <img src="assets/Information_flow_Monochromatic.png">
            </div>
            <div class="container col-4">
                <article>
                    <h2 class="art">Account</h2>
                    <p class="art">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,</p>
                    <div style="text-align: center">
                        <?php tyrobtn("account", "account", "Plus d'info");?>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section id="home-story" class="container row">
        <div class="container col-4">
            <article>
                <h2 class="art">Histoire</h2>
                <p class="art">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,</p>
                <div style="text-align: center">
                    <?php tyrobtn("story", "story", "Plus d'info");?>
                </div>
            </article>
        </div>
        <div class="col-6">
            <img src="assets/Timeline_Monochromatic.png">
        </div>
    </section>

    <section id="home-french" class="container row">
        <div class="col-6">
            <img src="assets/Paris_Monochromatic.png">
        </div>
        <div class="container col-4">
            <article>
                <h2 class="art">France</h2>
                <p class="art">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,</p>
            </article>
        </div>
    </section>

        <?php } else { ?>

        <section id="home-account">
            <div class="container row" style="padding-bottom: 30px">
                <div class="col-6">
                    <img src="assets/Timeline_Monochromatic.png">
                </div>
                <div class="container col-4">
                    <article>
                        <h2 class="art">Notre Histoire</h2>
                        <p class="art">Voilà depuis 2017 que Tyrolium existe et fait mûrir des projets et les gens qui ont travaillés et travaillent encore dessus.
                            Pendant ces 4 années, une évolution s'est faite sentir et nous allons détailler cette évolution en historique et vous raconter les points clés de celle-ci.

                            N'oubliez pas cependant que l'évolution n'est pas la fin, elle n'est que le début de la poussée qui nous emmènera au sommet, tant que l'on peux faire mieux ça ne sera jamais terminé.</p>
                        <div style="text-align: center">
                            <?php tyrobtn("story", "story", "Voir l'Histoire de Tyrolium");?>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section id="home-story" class="container row">
            <div class="container col-4">
                <article>
                    <h2 class="art">Indépendant et Français</h2>
                    <p class="art">Le but de Tyrolium est d'exploiter au mieux le potentiel de ses employés pour créer des projets toujours plus ambitieux.
                        Les fonds générés par nos prestations sont injectés dans l'entreprise pour financer des projets.
                    </p><p class="art">
                        L'objectif de Tyrolium est de concurrencer le monde et les géants de notre domaine en restant français.
                    </p><p class="art">
                        Fait en France, par des français.</p>

                </article>
            </div>
            <div class="col-6">
                <img src="assets/Paris_Monochromatic.png">
            </div>
        </section>
    <?php } ?>

    </div>

    <div class="home-res">
        <section id="home-service" class="container">
            <div class="container col-4">
                <article>
                    <h2 class="art-res">Service</h2>
                    <p class="art-res">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,</p>
                    <div>
                        <div class="" style="width: 60%; margin-left: 20%">
                            <img src="assets/Team_work_Monochromatic.png" width="100%" height="100%">
                        </div>
                        <div class="" style="text-align: center; margin-top: 15px" >
                            <?php tyrobtn("service", "service", "Plus d'info");?>
                            <style>
                                .tyrobutton{
                                    width: 100%;
                                }
                            </style>
                        </div>
                    </div>
                </article>
            </div>
        </section>
    </div>




</main>

<?php footer(); ?> </body> </html>
