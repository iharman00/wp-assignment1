<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/style.css">
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <nav>
            <?php wp_nav_menu(array(
                "theme_location" => "main-menu",
                "depth" => "2",
                "fallback_cb" => false
            )); ?>
        </nav>

    </header>