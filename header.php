<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <link rel="pingback" href="<?php bloginfo('pingback_url')?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name')?></title>
    <?php wp_head(  )?>
</head>

<body>
    <!--nav-->
    <header>
        <div class="title">
            <h1>
                <?php bloginfo('name')?>
            </h1>
        </div>
        <nav>
            <?php wp_nav_menu(array(
                'theme_location' =>'menu-top',
                'container'      => 'false',
                
            ))?>
        </nav>
    </header>
    <!-- end nav--->