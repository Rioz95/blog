<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="<?= get_template_directory_uri(); ?>/images/favicon-mdc.png" />
    <!-- CSS -->
    <link rel="stylesheet" href="<?= get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
</head>

<body>
    <?php wp_body_open(); ?>