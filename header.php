<!DOCTYPE html>

<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <!-- <meta name="HandheldFriendly" content="true"> -->
        <title> Taxe CSPE - EnergieWatt</title>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="all" />
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        
        <?php wp_head();?>
    </head>
    <body>
        <?php
            if ( is_front_page() ) {
                get_template_part( 'header-home' );
            } 
            else {
                get_template_part( 'header-simulateur' );
            }
            ?>
        <main>
