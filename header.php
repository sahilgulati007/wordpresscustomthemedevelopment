<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
    <div class="logo">
        <!--        <a href="#"><img src="images/logo.png" height="" width="" alt="" title="" /></a>-->
        <?php
        if (function_exists('the_custom_logo')) {
            if (has_custom_logo()) {
                the_custom_logo();
            }
            else{
                ?><h1 class="blog-title"><?php bloginfo( 'name' ); ?></h1>
        <?php $description = get_bloginfo( 'description', 'display' ); ?>
        <?php if($description) { ?><p class="lead blog-description"><?php echo $description ?></p><?php }
            }
        }
        ?>
    </div>
    <div class="head-info float-right">
        <button type="button" class="btn btn-all">Client Portal Coming Soon</button>
        <button type="button" class="btn btn-all">Make an Appointment</button>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class' => 'blog-nav list-inline'  ) ); ?>
        </div>
        <span onclick="openNav()">&#9776;</span>
    </div>
</header>


<!--<div class="container">-->

<!--    <div class="blog-header">-->
<!--        <h1 class="blog-title">--><?php //bloginfo( 'name' ); ?><!--</h1>-->
<!--        --><?php //$description = get_bloginfo( 'description', 'display' ); ?>
<!--        --><?php //if($description) { ?><!--<p class="lead blog-description">--><?php //echo $description ?><!--</p>--><?php //} ?>
<!--    </div>-->

<!--    <div class="row">-->