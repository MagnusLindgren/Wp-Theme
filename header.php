<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<header>
    <div class="main-menu">
        <?php
        wp_nav_menu(
                array(
                        'theme_location' => 'main-menu'
                )
        )
        ?>
    </div>
</header>
<div id="main-site" class="container">