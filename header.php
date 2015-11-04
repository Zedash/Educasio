<!--
Titre : En-tête Educasio©
Site : http://bts-sio.fr/
Auteur: Zed'Ash
Version : 1.3 BETA
-->
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Zed'Ash">
        <meta name="description" content="Site internet du BTS SIO baser sur le thème Educasio© par les étudiant d'Itis Formation.">
        <meta name="keywords" content="BTS,SIO,ITIS,FORMATION,EDUCASIO,ETUDIANT">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
        <link type="text/css" rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <title><?php bloginfo('name') ?>
            <?php if ( is_404() ) : ?> &raquo; 
            <?php _e('Not Found') ?>
            <?php elseif ( is_home() ) : ?> &raquo; 
            <?php bloginfo('description') ?>
            <?php else : ?><?php wp_title() ?>
            <?php endif ?></title>
            <?php wp_head(); ?>
            <?php wp_get_archives('type=monthly&format=link'); ?>
            <?php //comments_popup_script(); <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header>
            <!--BARRE DE NAVIGATION TOP BAR COMPATIBLE SEO-->
            <nav class="nav_topbar">
                <ul id="list_contact_log">
                    <li class=""><i class="fa fa-phone"></i>&nbsp;01 54 13 05 06</li>
                    <li class="margeExt_gauche"><i class="fa fa-envelope"></i>&nbsp;contact@bts-sio.fr</li>
                    <li class="margeExt_xlgauche"><i class="fa fa-facebook"></i></li>
                    <li class="margeExt_xlgauche"><i class="fa fa-twitter"></i></li>
                    <li class="margeExt_xlgauche"><i class="fa fa-google-plus"></i></li>
                    <li><i class="fa fa-sign-in"></i>&nbsp;Connexion</li>
                </ul>
            </nav>
            <!--BARRE DE NAVIGATION PRINCIPALE DES DIFFERANTES PAGES DU SITE, COMPATIBLE SEO-->
            <nav class="nav_principale">
            <div class="boite_logo"><a href="<?php bloginfo('url'); ?>"><img src="images/logo-bts.svg" width="280px" alt="Logo du site BTS-SIO.fr fait par Zed'Ash"></a></div>
                <ul id="list_navigation">
                    <li class="margeInt_haut margeInt_bas margeInt_droit margeInt_gauche ">Accueil</li>
                    <li class="margeInt_haut margeInt_bas margeInt_droit margeInt_gauche ">BTS SIO</li>
                    <li class="margeInt_haut margeInt_bas margeInt_droit margeInt_gauche ">Nos Espaces</li>
                    <li class="margeInt_haut margeInt_bas">Contact</li>
                </ul>
            </nav>
        </header>
