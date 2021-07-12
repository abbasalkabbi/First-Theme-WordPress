<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <link rel="pingback" href="<?php bloginfo('pingback_url')?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name?></title>
    <?php wp_head()?>
</head>

<body>
    <!--nav-->
    <header class="head">
        <!---icon menu for moblie-->
        <div class="icon-menu">
            <img src="<?php echo get_template_directory_uri().'/icon/menu.png';?>" alt="menu,icon">

        </div>
        <!---icon menu for moblie END-->
        <div class="title">
            <a href="<?php bloginfo('url')?>" title="<?php bloginfo('name')?>">

                <?php bloginfo('name')?>

            </a>
        </div>



        <nav>
            <div class="hide"><img src="<?php echo get_template_directory_uri().'/icon/x.png';?>" alt="x"></div>
            <?php wp_nav_menu(array(
                'theme_location' =>'menu-top',
                'container'      => 'false',
                
            ))?>
        </nav>



    </header>
    <!-- end nav--->