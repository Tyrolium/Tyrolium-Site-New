<?php

//PROD or DEV or TEST
$APP_ENV = "TEST";

// FALSE or TRUE
$env_isAccount = true;
$env_isEvent_5Year = false;
$env_isAnimProject = true;


$env_url = "https://tyrolium.fr";

$env_urlImage = $env_url . "/Contenu/Image/";

$env_logoUrl = $env_urlImage . "Tyrolium Site.png";

$env_assets = "assets/";

$env_pp = $env_assets . "pp/";

$env_pp_default = $env_pp . "Default.jpg";




if ($APP_ENV == "PROD"){
    include "/home/tyroliumfg/reCAPTCHA.php";
    
    $env_bd_contact = "api/get.php";
    
    $env_captcha_clientid = $TyroliumSite_ClientID;
    $env_captcha_servid = $TyroliumSite_ServID;
} else if ($APP_ENV == "DEV"){
    include "D:/xampp/htdocs/reCAPTCHA.php";
    
    $env_bd_contact = "api/get.php";
    
    $env_captcha_clientid = $Localhost_ClientID;
    $env_captcha_servid = $Localhost_ServID;
} else if ($APP_ENV == "TEST"){
    include "D:/xampp/htdocs/reCAPTCHA.php";
    
    $env_bd_contact = "https://tyrolium.fr/api/get.php";   
    
    $env_captcha_clientid = $Localhost_ClientID;
    $env_captcha_servid = $Localhost_ServID;
}




$env_back = array (

    $env_urlImage . "Background6",
    $env_urlImage . "Background2",
    $env_urlImage . "Background16",
    $env_urlImage . "Background15",
    $env_urlImage . "Background7",
    $env_urlImage . "background13",
    $env_urlImage . "Background14",
    $env_urlImage . "Background18.jpeg",
    $env_urlImage . "Background21.jpg",
    $env_urlImage . "Background20.jpg",
    $env_urlImage . "Background4"
);

$env_perso = array(

    array("name" => "Maxime Tournier",
        "role" => "PDG & Fondateur,<br> Développeur",
        "icon" => "Maxime_Tournier.jpg",
        "instagram" => "https://instagram.com/the_maxime_san",
        "github" => "https://github.com/TheMaxium69",
        "linkedin" => "https://linkedin.com/in/maxime-tournier-tyrolium",
        "twitter" => "https://twitter.com/MaximeTournier2",

        ),

    /* array("name" => "Wassim Bouridah",
        "role" => "Responsable Communication,<br> Ingénieur R&D",
        "icon" => "Wassim_Bouridah.jpg",
        "instagram" => "https://www.instagram.com/wassinobi/",
        "youtube" => "https://www.youtube.com/channel/UCBuxMq0h-WQJi5_e6My9GYg",
        "linkedin" => "https://www.linkedin.com/in/wassim-bouridah/",
    ), */
    

    array("name" => "Norman Jorge De Freitas",
        "role" => " Compositeur(ice),<br> Écrivain(e)",
        "icon" => "Norman_Jorge_De_Freitas.jpg",
        "instagram" => "https://www.instagram.com/rayquacondasensei_off/",
        "linkedin" => "https://www.linkedin.com/in/norman-jorge-de-freitas-0a736a203/",

        ),
    
    
    array("name" => "Maewan Marthelot",
        "role" => "Graphiste, Monteur-Vidéo,<br> Animateur 2D",
        "icon" => "Maewan_Marthelot.jpg",
        "instagram" => "https://www.instagram.com/maewanm/",
        "youtube" => "https://www.youtube.com/c/MA3WAN",
        "linkedin" => "https://www.linkedin.com/in/ma%C3%ABwan-marthelot-01744b203",
        "behance" => "https://www.behance.net/mawanmarthelot"

    ),
    
    
    array("name" => "Pierre-Louis Devaud",
        "role" => "Responsable Marketing,<br> Conseiller Technique",
        "icon" => "Pierre-Louis_Devaud.jpg",
        "instagram" => "https://www.instagram.com/pl_dev54/",
        "twitch" => "https://www.twitch.tv/piplextv",
        "linkedin" => "https://www.linkedin.com/in/pierre-louis-devaud-574035236/"
    ),
    
    array("name" => "Edward Thouvenin",
        "role" => "Compositeur,<br> Beatmaker",
        "icon" => "Edward_Thouvenin.jpg",
        "instagram" => "https://www.instagram.com/edward_el_renard/",
        "soundcloud" => "https://soundcloud.com/wared-22283149",
        "linkedin" => "https://www.linkedin.com/in/edward-thouvenin-040ba823b/"

        ),

    /*array("name" => "L&eacute;na Chervier",
        "role" => "Assistante Administrative,<br> Community Manager",
        "icon" => "Léna_Chervier.jpg",
        "instagram" => "https://www.instagram.com/lena_cherv/",
        "linkedin" => "https://www.linkedin.com/in/l%C3%A9na-chervier-645470228/",

    ),*/

    array("name" => "Luigi Guyot",
        "role" => "UX/UI Designer,<br> Modérateur",
        "icon" => "Luigi_Guyot.jpg",
        "linkedin" => "https://www.linkedin.com/in/luigi-guyot-56aa9722b/",

    ),

    array("name" => "Flavien Dechoz",
        "role" => "Support Technique,<br> Modérateur ",
        "icon" => "Flavien_Dechoz.jpg",
        "twitter" => "https://twitter.com/flavien_dechoz",
        "instagram" => "https://www.instagram.com/flaviendechoz/",
        "youtube" => "https://www.youtube.com/channel/UCx-qCuv3FRGKbls2UckYkcQ",
        "facebook" => "https://www.facebook.com/flavien.dechoz69",
    ),

    array("name" => "Dylan Argentino",
        "role" => "Dessinateur,<br> Designer",
        "icon" => "Dylan_Argentino.jpg",
        "instagram" => "https://www.instagram.com/viking_senpai/",
    ),

    array("name" => "Mathis Dubief",
        "role" => "Journaliste Jeux Vidéo,<br> Modérateur",
        "icon" => "Mathis_Dubief.jpg",
        "instagram" => "https://www.instagram.com/m2k_hide.chr/",
        "twitter" => "https://twitter.com/Mathis45920873",
    ),
       
    /*array(
        "vide" => true,
    ),*/
    
    array("name" => "Delphine Rodriguez",
        "role" => "Développeuse",
        "icon" => "Delphine_Rodriguez.jpg",
        "github" => "https://github.com/delphine38",
    ),

    /*array("name" => "Angélique Herard",
        "role" => "Modératrice",
        "icon" => "Angélique_Herard.jpg",
        "instagram" => "https://www.instagram.com/angelique.hrd/",
    ),*/

);

$env_page = array(
    "Accueil",
    "Prestation",
    "Projet",
    "Collaboration",
    "Histoire",
    "Compte"
);

$env_page_logo = array(
    "fas fa-home",
    "fas fa-tags",
    "fas fa-dice-d6",
    "fas fa-handshake",
    "fas fa-book",
    "fas fa-user",
);

$env_projet = array(
    "TyroServ",
    "SolidServ",
    "Gamenium",
    "TyroDiscord",
    "TyroStudio",
    "Wonderlium",
    "Sélémusium",
    "TyroShop",
    "DuoGramme",
    "TyroStudent",
    "Chantium",
    "Autre",
);

$env_presta = array(
    "Site Web",
    "Minecraft",
    "Bot Discord",
    "Serveur",
    "Graphisme",
    "Musicales",
    "Vidéos/Animations",
    "Autre",
);

$env_presta_web = array(
    "Site Personnel",
    "Site de Projet",
    "Application Web",
    "Autre",
);

$env_presta_mc = array(
    "Mod",
    "Plugin",
    "Serveur",
    "Autre",
);


$env_story = array(


    array(
        "date" => '9 juillet 2017',
        "title" => 'Création du projet',
        "content" => 'Imaginer comme un serveur Minecraft dit "PVP/Faction Moddé"',
    ),

    array(
        "date" => '12 juillet 2017',
        "title" => 'Invention du nom "Tyrolium"',
        "content" => 'Le nom "Tyrolium" est à l\'origine une contraction d\'un minerais et d\'un métal: la "Tyrolite" et le "Paladium", le "Tyrolium" est avant tout un minerais créé pour notre serveur Minecraft',
    ),

    array(
        "date" => '5 Mars 2018',
        "title" => 'Début de la Béta de TyroServ',
        "content" => 'Début de la version Bêta du TyroServ, terminant ainsi le développement de la version Alpha du projet, avec un nouveau logo pour cette occasion',
        "picture" => $env_assets . 'story/TyroServBeta.png',
        "btn" => array(
            "url" => 'https://tyrolium.fr/Contenu/Image/Tyrolium%20ServerMC%20Old2.png',
            "text" => 'Voir l\'image'
        ),
    ),

    array(
        "date" => '26 Septembre 2018',
        "title" => 'Lancement d\'une béta public de TyroServ',
        "content" => 'Lancement d\'une version Bêta publique sous candidature, avec un nouveau logo pour cette version ',
        "picture" => $env_assets . 'story/TyroServBeta2.png',
        "btn" => array(
            "url" => 'https://tyrolium.fr/Contenu/Image/Tyrolium%20ServerMC%20Old3.png',
            "text" => 'Voir l\'image'
        ),
    ),

    array(
        "date" => '29 Juillet 2019',
        "title" => 'Création de Tyrolium Ent.',
        "content" => 'Transformation du projet en une entreprise multisectorielle, l\'entreprise s\'appelle à ce moment là "Tyrolium Entertainment"',
    ),

    array(
        "date" => '1 août 2019',
        "title" => 'Premier logo de l\'entreprise',
        "content" => 'Création du logo de l\'entreprise, il aura duré presque 3 ans, avant de changer',
        "picture" => $env_assets . 'story/Tyrolium.png',
        "btn" => array(
            "url" => 'https://tyrolium.fr/Contenu/Image/Tyrolium Old.png',
            "text" => 'Voir l\'image'
        ),
    ),

    array(
        "date" => '17 Octobre 2019',
        "title" => 'Début du développement du TyroMod',
        "content" => 'Début du developpement du TyroMod, il s\'agit de l\'extention utilisée pour modifier le jeu Minecraft dans le projet "TyroServ"',
        "btn" => array(
            "url" => 'https://www.curseforge.com/minecraft/mc-mods/tyromod/',
            "text" => 'Page du TyroMod'
        ),
    ),

    array(
        "date" => '15 Novembre 2019',
        "title" => 'Création de Wonderlium',
        "content" => 'À l\'origine il s\'agit d\'un projet qui s\'appelait "Les Omegastar" et racheté par Tyrolium, il se transformera en Wonderlium, avec la nouvelle charte graphique<br>Il s\'agit d\'un projet réalisant des vidéos sur l\'univers geek',
        "picture" => $env_assets . 'story/Wonderlium.png',
        "btn" => array(
            "url" => 'https://tyrolium.fr/Contenu/Image/Wonderlium Old.png',
            "text" => 'Voir l\'image'
        ),
    ),

    array(
        "date" => '25 Novembre 2019',
        "title" => 'Première vidéo de Wonderlium',
        "content" => 'Il s\'agit de la première vidéo du projet Wonderlium, sur la console appelée SNES',
    ),

    array(
        "date" => '5 Décembre 2019',
        "title" => 'Création de TyroMusic',
        "content" => 'Création du projet TyroMusic avec sa charte graphique, il s\'agit d\'un projet musical',
        "picture" => $env_assets . 'story/TyroMusic.png',
        "btn" => array(
            "url" => 'https://tyrolium.fr/Contenu/Image/Tyrolium%20Music%20Old.png',
            "text" => 'Voir l\'image'
        ),
    ),

    array(
        "date" => '22 MARS 2020',
        "title" => 'Lancement du site de Tyrolium Ent.',
        "content" => 'Lancement de la première version du site internet de l\'entreprise, il ne se mettra pas à jour avant début 2022 avec la nouvelle version refaite à zéro',
    ),

    array(
        "date" => '23 Mars 2020',
        "title" => 'Création de Freenium',
        "content" => 'Création du projet Freenium avec sa charte graphique, il s\'agit d\'un projet de freelance, qui aura jamais vraiment abouti',
        "picture" => $env_assets . 'story/Freenium.png',
        "btn" => array(
            "url" => 'https://tyrolium.fr/Contenu/Image/Freenium.png',
            "text" => 'Voir l\'image'
        ),
    ),

    array(
        "date" => '25 Mars 2020',
        "title" => 'Changement de logo pour TyroMusic',
        "content" => 'Changement du logo du Projet TyroMusic, il rechangera encore quelques fois plus tard',
        "picture" => $env_assets . 'story/TyroMusic2.png',
        "btn" => array(
            "url" => 'https://tyrolium.fr/Contenu/Image/Tyrolium%20Music.png',
            "text" => 'Voir l\'image'
        ),
    ),

    array(
        "date" => '30 MARS 2020',
        "title" => 'Trailer de TyroServ',
        "content" => 'Trailer pour du lancement de TyroServ (Le serveur Minecraft PVP/Faction Moddé). Dans cette vidéo on annonce pour la première fois la date de sortie du serveur',
        "btn" => array(
            "url" => 'https://www.youtube.com/watch?v=rNq089toP6g&t',
            "text" => 'Voir la vidéo'
        ),
    ),

    array(
        "date" => '26 avril 2020',
        "title" => 'Lancement de TyroServ',
        "content" => 'Lancement du serveur Minecraft, avec le site, le launcher, le TyroMod et les maps (architecture créée dans le jeux Minecraft)',
        "picture" => $env_assets . 'story/TyroServS1.png',
        "btn" => array(
            "url" => 'https://tyrolium.fr/Contenu/Image/Tyrolium ServerMC.png',
            "text" => 'Voir l\'image'
        ),
    ),

    array(
        "date" => '29 avril 2020',
        "title" => 'TyroServ atteind les 4000 joueurs',
        "content" => 'Seulement 4 jours après la sortie officielle du serveur, nous atteignons les 4000 joueurs uniques, et en moyenne 160 joueurs connectés en permanance',
    ),

    array(
        "date" => '5 mai 2020',
        "title" => 'Création de Gamenium',
        "content" => 'Création du projet Gamenium, il s\'agit d\'un site d\'actualité et de critique de jeux-vidéo',
        "picture" => $env_assets . 'story/Gamenium.png',
        "btn" => array(
            "url" => 'https://tyrolium.fr/Contenu/Image/Gamenium Old.png',
            "text" => 'Voir l\'image'
        ),
    ),

    array(
        "date" => '18 mai 2020',
        "title" => 'Création de TyroStudio',
        "content" => 'Création du projet TyroStudio, il s\'agit du studio de développement de jeux-vidéo',
    ),

    array(
        "date" => '24 mai 2020',
        "title" => 'Lancement du site de Wonderlium',
        "content" => 'Lancement du site du Wonderlium, projet qui réalise des vidéos
                        sur l\'univers geek',
    ),

    array(
        "date" => '27 Août 2020',
        "title" => 'Lancement de la boutique',
        "content" => 'Lancement de la boutique de Tyrolium, et création du projet "TyroShop"',
        "btn" => array(
            "url" => 'http://shop.tyrolium.fr',
            "text" => 'Lien de la boutique'
        ),
    ),

    array(
        "date" => '28 Août 2020',
        "title" => 'Création du logo de TyroStudio',
        "content" => 'Premier logo du projet de TyroStudio, il représente un phoenix, il reste encore aujourd\'hui assez mystérieux',
        "picture" => $env_assets . "story/TyroStudio.png",
        "btn" => array(
            "url" => 'https://tyrolium.fr/Contenu/Image/Tyrolium Studio.png',
            "text" => 'Voir l\'image'
        ),
    ),

    array(
        "date" => '31 Août 2020',
        "title" => 'Deuxième vidéo de Wonderlium',
        "content" => 'Il s\'agit de la deuxième vidéo du projet Wonderlium, sur la console appelée GameCube',
        "btn" => array(
            "url" => 'https://www.youtube.com/watch?v=_9n2ZgTG5Qc',
            "text" => 'Voir la vidéo'
        ),
    ),

    array(
        "date" => '4 septembre 2020',
        "title" => 'TyroServ atteind les 10000 joueurs',
        "content" => 'Après 5 mois, TyroServ atteind le chiffre de 10 000 joueurs uniques connectés sur le serveur',
    ),

    array(
        "date" => '21 Janvier 2021',
        "title" => 'Fermeture de Freenium',
        "content" => 'Fermeture du projet Freenium, projet qui n\'a jamais vraiment démarré et qui après décision sera fermé, dans l\'idée il s\'agissait un peu de l\'ancêtre des prestations',
    ),

    array(
        "date" => '23 Janvier 2021',
        "title" => 'Création du logo de TyroShop',
        "content" => 'Création du logo de la boutique pour le projet TyroShop, il est désormais considéré comme un projet à part entière dans Tyrolium',
        "picture" => $env_assets . 'story/TyroShop.png',
        "btn" => array(
            "url" => 'https://tyrolium.fr/Contenu/Image/20210614_104054.png',
            "text" => 'Voir l\'image'
        ),
    ),

    array(
        "date" => '21 février 2021',
        "title" => 'Fermeture de la saison 1 de TyroServ',
        "content" => 'Fermeture du serveur Minecraft TyroServ, à ce moment là, il a été pensé comme la fin définitive du projet',
    ),

    array(
        "date" => '14 Mai 2021',
        "title" => 'TyroServ saison 1 rendu open-souce',
        "content" => 'Suite à la fermeture du serveur, TyroServ saison 1 à été rendu open-source (code rendu libre au public)',
    ),

    array(
        "date" => '25 mai 2021',
        "title" => 'Annonce de la saison 2 de TyroServ',
        "content" => 'Au final, après quelques mois à avoir abandonné le projet, nous avons annoncé la reprise du projet avec une date de sortie pour la saison 2 ',

    ),

    array(
        "date" => '28 Mai 2021',
        "title" => 'Lancement de la saison 2 de TyroServ',
        "content" => 'Lancement de la saison 2 de TyroServ, avec un tout nouveau launcher, un nouveau site Web, de nouveaux plugins et une stabilité serveur accrue',
        "picture" => $env_assets . 'story/TyroServS2.png',
        "btn" => array(
            "url" => 'https://tyrolium.fr/Contenu/Image/Tyrolium%20ServerMC%20S2.png.jpg',
            "text" => 'Voir l\'image'
        ),
    ),

    array(
        "date" => '2 Juin 2021',
        "title" => 'Lancement de Gamenium',
        "content" => 'Lancement du projet Gamenium, avec des actualités sur l\'univers du jeu-vidéo et geek. Ces actualités sont postées sur les réseaux sociaux tel que Instagram et discord, avec un nouveau logo pour l\'occasion',
        "picture" => $env_assets . 'story/Gamenium2.png',
        "btn" => array(
            "url" => 'https://tyrolium.fr/Contenu/Image/Gamenium.png',
            "text" => 'Voir l\'image'
        ),
    ),

    array(
        "date" => '21 Juillet 2021',
        "title" => 'Création de TyroDiscord',
        "content" => 'Création du projet TyroDiscord, un projet de bot et logiciel pour améliorer l\'expérience de Discord',
    ),

    array(
        "date" => '25 Juillet 2021',
        "title" => 'Lancement du TyroBot et du TyroServBot',
        "content" => 'Lancement des deux premiers projets de TyroDiscord, deux bots Discord qui sont en publique. Un sert à l\'amélioration d\'un serveur et l\'autre à connecter notre serveur Minecraft avec notre Discord',
    ),

    array(
        "date" => '20 Août 2021',
        "title" => 'Trailer du changement de logo de l\'entreprise',
        "content" => 'Trailer mis sur tout les réseaux de Tyrolium pour montrer pour la première fois le nouveau logo de l\'entreprise',
        "btn" => array(
            "url" => 'https://www.youtube.com/watch?v=nnWHEh17ovg',
            "text" => 'Voir le trailer'
        ),
    ),

    array(
        "date" => '21 Août 2021',
        "title" => 'Changement du logo de l\'entreprise',
        "content" => 'Après trois ans avec le même logo, Tyrolium le change pour quelque chose de beaucoup plus moderne. Par la même occasion le nom de l\'entreprise passera de Tyrolium Entertainment à Tyrolium',
        "picture" => $env_assets . 'story/TyroliumFinal.png',
        "btn" => array(
            "url" => 'https://tyrolium.fr/Contenu/Image/Tyrolium.png',
            "text" => 'Voir l\'image'
        ),
    ),

    array(
        "date" => '23 Août 2021',
        "title" => 'Gros changement pour TyroMusic',
        "content" => 'TyroMusic change entièrement de nom pour devenir Sélémusium. Par la même occasion il change aussi de charte graphique',
        "picture" => $env_assets . 'story/Sélémusium.png',
        "btn" => array(
            "url" => 'https://tyrolium.fr/Contenu/Image/Selenium.png',
            "text" => 'Voir l\'image'
        ),
    ),

    array(
        "date" => '24 Août 2021',
        "title" => 'Lancement des prestations',
        "content" => 'Lancement des prestations, notamment la création de sites Web et de tout ce qui touche à Minecraft',
        "btn" => array(
            "url" => 'service.php',
            "text" => 'Voir les prestations'
        ),
    ),

    array(
        "date" => '10 Août 2021',
        "title" => 'Changement de logo pour 3 projet',
        "content" => 'L\'entreprise se fait une petite beauté en changeant les logos de Wonderlium, de Sélémusium et de TyroShop',
        "picture" => $env_assets . 'story/3Logo.png',
        "btn" => array(
            "url" => 'https://tyrolium.fr/Contenu/Image/changementlogo.png',
            "text" => 'Voir l\'image'
        ),
    ),

    array(
        "date" => '14 Novembre 2021',
        "title" => 'Lancement du site "Status Server"',
        "content" => 'Lancement du site "Status Server" qui permet de voir la stabilité de tout les services et serveurs de Tyrolium',
        "btn" => array(
            "url" => 'https://tyrolium.fr/Status',
            "text" => 'Allez sur le site'
        ),
    ),

    array(
        "date" => '22 Novembre 2021',
        "title" => 'Lancement du site de Sélémusium',
        "content" => 'Lancement du site du projet de création de musique Sélémusium',
        "btn" => array(
            "url" => 'https://tyrolium.fr/Selemusium',
            "text" => 'Allez sur le site'
        ),
    ),

    array(
        "date" => '4 Janvier 2022',
        "title" => 'Lancement de la deuxième version du site de l\'entreprise ',
        "content" => 'Lancement du site où vous êtes actuellement',
    ),

    array(
        "date" => '8 Janvier 2022',
        "title" => 'Création du projet Duo-Gramme ',
        "content" => 'Projet de plusieurs concepts divertissements et informatifs sur les réseaux sociaux. En colaboration avec l\'entreprise "MA3WAN" .',
        "picture" => $env_assets . 'story/DuoGramme.png',
        "btn" => array(
            "url" => 'https://tyrolium.fr/Contenu/Image/DuoGramme.png',
            "text" => 'Voir l\'image'
        ),
    ),

    array(
        "date" => '24 Mars 2022',
        "title" => 'Création du projet SolidServ',
        "content" => 'Projet d\'hebergeur de serveur de jeux, de site internet et bien autre',
        "picture" => $env_assets . 'story/SolidServ.png',
        "btn" => array(
            "url" => 'https://tyrolium.fr/Contenu/Image/SolidServ.png',
            "text" => 'Voir l\'image'
        ),
    ),

    array(
        "date" => '2 Mai 2022',
        "title" => 'Lancement du site de TyroDiscord',
        "content" => 'Lancement du site de presentation du projet d\'améliorer l\'expérience de Discord',
        "btn" => array(
            "url" => 'https://www.tyrodiscord.xyz',
            "text" => 'Allez sur le site'
        ),
    ),

    array(
        "date" => '7 Mai 2022',
        "title" => 'Lancement de SolidServ',
        "content" => 'Lancement du site, des serveurs du projet',
        "btn" => array(
            "url" => 'https://solidserv.fr',
            "text" => 'Allez sur le site'
        ),
    ),

    array(
        "date" => '20 Mai 2022',
        "title" => 'Changement de logo pour Sélémusium',
        "content" => 'Changement du logo du projet Musical de Tyrolium',
        "picture" => $env_assets . 'story/Sélémusium2.png',
        "btn" => array(
            "url" => 'https://tyrolium.fr/Contenu/Image/Selemusium.png',
            "text" => 'Voir l\'image'
        ),
    ),

    array(
        "date" => '20 Mai 2022',
        "title" => 'Création du projet TyroStudent',
        "content" => 'Projet de Formation de Tyrolium',
        "picture" => $env_assets . 'story/TyroStudent.png',
        "btn" => array(
            "url" => 'https://tyrolium.fr/Contenu/Image/TyroStudent.png',
            "text" => 'Voir l\'image'
        ),
    ),
    
    
    ///POUR LES 5 ANS
    array(
        "date" => '9 Juillet 2022',
        "title" => 'Vidéo des 5 Ans',
        "content" => 'Tyrolium a réalisé une vidéo d\'animation pour ses 5 ans qui retrace toute son histoire',
        "picture" => $env_assets . 'story/miniature5ans.png',
        "btn" => array(
            "url" => 'https://www.youtube.com/watch?v=fRjkVPeCDDI',
            "text" => 'Voir la vidéo'
        ),
    ),
    
    array(
        "date" => '9 Juillet 2022',
        "title" => 'Annonce de la saison 3 de TyroServ',
        "content" => 'Lors de la vidéo des 5 ans de Tyrolium, TyroServ annonce avec un teaser la saison 3 également accompagnée d\'un nouveau logo',
        "picture" => $env_assets . 'story/TyroServS3.png',
        "btn" => array(
            "url" => 'https://www.youtube.com/watch?v=mJBL1gSKTdk',
            "text" => 'Voir la vidéo'
        ),
    ),

    array(
        "date" => '9 Juillet 2022',
        "title" => 'Annonce du Première Album de Sélémusium',
        "content" => 'Lors de la vidéo des 5 ans de Tyrolium, Sélémusium sort avec un trailer, la sortie d\'Artomyx, son premier album',
        "btn" => array(
            "url" => 'https://www.youtube.com/watch?v=s_6V9HDs4YA',
            "text" => 'Voir la vidéo'
        ),
    ),
    
    array(
        "date" => '9 Juillet 2022',
        "title" => 'Annonce des Comptes Useritium',
        "content" => 'Lors de la vidéo des 5 ans de Tyrolium a été annoncé le lancement des comptes Useritium',
        "btn" => array(
            "url" => 'https://www.youtube.com/watch?v=zJ3rbBJCYdM',
            "text" => 'Voir la vidéo'
        ),
    ),
    
    array(
        "date" => '9 Juillet 2022',
        "title" => 'Lancement du site TyroBirthday',
        "content" => 'Pour les 5 ans, Tyrolium a l\'ancé un site pour l\'occasion',
        "btn" => array(
            "url" => 'https://birthday.tyrolium.fr',
            "text" => 'Allez sur le site'
        ),
    ),


    //Pour le 10 Juillet

    array(
        "date" => '15 Juillet 2022',
        "title" => 'Reboot de Wonderlium',
        "content" => 'Reboot de Wonderlium et reprise des vidéos régulières avec une nouvelle charte graphique',
    ),

    array(
        "date" => '15 Juillet 2022',
        "title" => 'Troisième vidéo de Wonderlium',
        "content" => 'Il s\'agit de la troisième vidéo du projet Wonderlium, sur la naissance du Vidéo-Jouet',
    ),


    //Pour le 11 Juillet
    
    array(
        "date" => '11 Juillet 2022',
        "title" => 'Lancement du Première Album de Sélémusium',
        "content" => 'Sélémusium sort son premier album sur toutes les plateformes, un site a été créé pour l\'occasion',
        "picture" => $env_assets . 'story/Artomyx.png',
        "btn" => array(
            "url" => 'https://artomyx.selemusium.xyz',
            "text" => 'Allez sur le site'
        ),
    ),
    
    //Pour le 13 Juillet
    
    /*array(
        "date" => '13 Juillet 2022',
        "title" => 'Lancement des Animations',
        "content" => 'Tyrolium a sorti une animation sur tous ses projets. <br> Elle est disponible sur la page projets de ce site',
    ),
    */
    



);


?>
