<!doctype html>
<html>
    <head>
        <?php wp_head(); ?>
        <title><?php bloginfo('title'); ?></title>
        <link href="<?php bloginfo('template_directory') ?>/style.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <meta charset="UTF-8">
    </head>
        <body>
            <div id="wrapper">
            <div id="header">
                <img src="<?php bloginfo('template_directory') ?>/img/intents1.jpg" alt="intents">   
            </div>
            <div id="menu">
                <div id="sr">
                    <ul>
                      <li>
                <i class="fa fa-search"></i>
                    </li>
                    </ul>

<!--
                    <div class="menu2"><a href="">Blog</a></div>
                    <div class="menu2"><a href="">About</a></div>
                    <div class="menu2"><a href="">Home</a></div>
-->
                    <?php wp_nav_menu(); ?>
                    
                  
                    </div>
                <h1 id="homet"><a href="<?php get_option('home'); ?>"><?php bloginfo('title'); ?></a></h1>
                
            </div>