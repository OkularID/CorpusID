<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--===========================-->
    <!--||  github.com/OkularID  ||-->
    <!--||      aby.js.org       ||-->
    <!--===========================-->

    <title><?php bloginfo('title');?> | <?php the_title() ?></title>
    <link href="<?php bloginfo('stylesheet_directory');?>/style/css/style.css" rel='stylesheet' type='text/css'>
    <link href="<?php bloginfo('stylesheet_directory');?>/style/css/extends.css" rel='stylesheet' type='text/css'>
    <link href="<?php bloginfo('stylesheet_directory');?>/style/css/animation.css" rel='stylesheet' type='text/css'>
    <!--Plug in-->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/node_modules/animatecss/animate.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">
    <!--Icon-->
    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory');?>/images/favicon.ico">
    <?php wp_head(); ?>
</head>
<body>

<section>
    <style>
        .loadergif{
            transition: all .3s;
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100vw;
            height: 100vh;
            z-index: 9999;
            background: url("<?php bloginfo('stylesheet_directory');?>/images/logo.gif") center no-repeat #fff;
        }
    </style>
<!--    <div class="loadergif">-->
<!---->
<!--    </div>-->
</section>


<!-- Navigation -->
<nav class="nav-corpus d-none d-lg-block">
    <div class="container-fluid p-0">
        <div class="row">
            <!-- Navbar Desktop -->
            <div class="col-lg-2">
                <div class="logo">
                    <a href="/corpus">
                        <img class="w-lg-80p" src="<?php bloginfo('stylesheet_directory');?>/images/logo-corpus.png">
                    </a>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="page">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'my-custom-menu',
                    )); ?>
                </div>
            </div>
            <div class="col-lg-1 pl-lg-0">
                <div class="lang">
                    <a class="font-white mr-lg-10" href="">ENG</a><span class="mr-lg-10">|</span><a class="font-white" href="">IND</a>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="wa">
                    <img src="<?php bloginfo('stylesheet_directory');?>/images/logo-whatsapp.png"><a class="font-white" href="https://api.whatsapp.com/send?phone=<?php the_field('whatsapp_phone',530) ?>" target="_blank"><?php the_field('whatsapp_title',530) ?></a>
                </div>
            </div>
        </div>
    </div>
</nav>

<!--Mobile Navigations-->
<section class="mobileNav">
    <style>
        @media screen and (max-width: 846px) {
            .mobileNav {
                background: transparent;
                position: fixed;
                z-index: 1500 !important;
                width: 100%;
            }
            /* Burger */
            .mobileNav ul.bars{
                position: absolute;
                z-index: 5;
                padding-left: 0;
                top: 25%;
                right: 15%;
                list-style: none;
                font-size: 20px;
            }

            .mobileNav #toggle{
                width: 65px;
                height: 20px;
                margin: 5px 10px;
                cursor: pointer;
            }
            .mobileNav #toggle div{
                margin-bottom: 6px !important;
                width: 90%;
                height: 2px;
                background: #fff3cd;
                margin: 4px 0;
                transition: all 0.3s;
                backface-visibility: hidden;
            }
            .mobileNav img {
                width: 40%;
                left: 9px;
                padding-top: 13px;
            }

            .side-nav {
                background-color: #fff;
                position: fixed;
                width: 100%;
                top: 0;
                height: 100vh;
                right: -100%;
                transition: all .3s;
            }
            .side-nav.open{
                right: 0;
                background: #fff !important;
                z-index: 10 !important;
            }
            .kloset {
                padding-left: 42px !important;
            }
            .kloset_ {
                width: 30px !important;
            }
            #mobile-menu ul {
                list-style-type: none;
            }
            /*#mobile-menu ul a {*/
            /*    color: #0d84e3 !important;*/
            /*}*/
            /*#mobile-menu li a{*/
            /*    color: grey !important;*/
            /*}*/
            #mobile-menu ul li ul{
                display: none;
            }
            #mobile-menu ul li a{
                cursor: pointer;
                background: #fff !important;
            }
            #mobile-menu ul li:hover ul,
            #mobile-menu ul li a:hover ul {
                display: block !important;
            }
        }
    </style>
    <nav class="d-block d-lg-none">
        <div class="container-fluid">
            <div class="row">
                <div class="col-10">
                    <a href="/corpus"><img class="" src="<?php bloginfo('stylesheet_directory');?>/images/logo-corpus.png" alt=""></a>
                </div>
                <div class="col-2">
                    <a class="ham-bars">
                        <div id="toggle">
                            <img src="<?php bloginfo('stylesheet_directory');?>/style/img/menu.svg" alt="">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <div class="side-nav">
        <div class="kloset">
            <img class="kloset_" src="<?php bloginfo('stylesheet_directory');?>/style/img/close.svg" alt="">
        </div>
        <div id="mobile-menu" class="side_nav_mobile">
            <style>
                .side_nav_mobile {
                    margin-top: 0;
                    margin-bottom: 1rem;
                    color: transparent;
                    display: block;
                    line-height: 40px;
                    background: white;
                }
                .side_nav_mobile li {
                    color: grey;
                }
            </style>
            <?php wp_nav_menu(array(
                'theme_location' => 'my-custom-menu',
                'container_id' => 'cssmenu',
                'walker' => new CSS_Menu_Maker_Walker()
            )); ?>
        </div>

    </div>
</section>