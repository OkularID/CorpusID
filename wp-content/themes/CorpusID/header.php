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

    <link href="https://fonts.googleapis.com/css?family=Barlow&display=swap" rel="stylesheet">

    <title><?php bloginfo('title');?> | <?php the_title() ?></title>
    <link href="<?php bloginfo('stylesheet_directory');?>/style/css/style.css" rel='stylesheet' type='text/css'>
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
        #navbarcorpus{position: fixed;}
        .shownnav{display: block !important;}
        .hiddennav{display: none !important;}
        .nav-corpus .wa, .nav-corpus2 .wa{
            position: absolute;
            margin-top: 0px;
            padding: 17px 20px !important;
            color: #fff;
            border: 1px solid #fff;
        }
        .nav-corpus {
            z-index: 1100;
            padding: 17px 29px;
            width: 100%;
            transition: .2s;
        }
        .nav-corpus.solid{
            background-color: rgba(0, 0, 0, 0.85);
            padding: 17px 29px;
            transition: 3s;
        }
        .nav-corpus.solid.col-lg-7 {
            padding-top: -7px !important;
        }
        .nav-corpus.solid .page ul li ul {
            background-color: rgba(0, 0, 0, 0.50);

        }
        .nav-corpus.solid .page ul li ul li {
            padding: 1px 2px !important;
            margin: 10px !important;
        }
        .nav-corpus .wa {
            padding: 15px 15px;
        }
        /*.chat_me {*/
        /*    padding: 15px 15px;*/
        /*}*/
        .page ul li {
            position: relative;
            display: inline;
            padding: 20px 20px 55px;
        }

        .page ul li ul {
            display: none;
            position: absolute;
            z-index: 1;
            margin: -4px auto 0;
            top: 69px;
            left: -31px;
            right: -25px;
            text-align: center;
        }

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
        <div class="loadergif">

        </div>
</section>


<!-- Navigation -->
<nav id="navbarcorpus" class="nav-corpus d-none d-lg-block">
    <div class="container-fluid p-0">
        <div class="row">
            <!-- Navbar Desktop -->
            <div class="col-lg-2">
                <div class="logo">
                    <a href="/staging/">
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
                    <a class="font-white mr-lg-10" href="/staging/en">EN</a><span class="mr-lg-10">|</span><a class="font-white" href="/staging/id">ID</a>
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
<section class="mobileNav d-block d-lg-none">
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
            .logo_mobile {
                width: 60% !important;
                height: auto;
                padding: 2px 2px;
            }
            .kloset {

            }
            .kloset_ {
                width: 30px !important;
                position: relative;
                top: -2%;
                left: 60% !important;
            }
            #mobile-menu ul {
                list-style-type: none;
            }
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
            .mobileNav .solid{
                padding: 1px 0;
                background: url("<?php bloginfo('stylesheet_directory');?>/images/homepage/wong/mobile_header.jpg");
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
            }
        }
    </style>
    <nav class="nav2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 pt-m-0 pb-m-0 pl-m-0 pr-m-0">
                    <div class="container-fluid pb-m-5p">
                        <div class="row">
                            <div class="col-10">
                                <a href="/staging/"><img class="" src="<?php bloginfo('stylesheet_directory');?>/images/logo-corpus.png" alt=""></a>
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
                </div>
            </div>
        </div>
    </nav>
    <div class="side-nav">

        <div class="container-fluid">
            <div class="row">
                <div class="col-8 idk">
                    <img class="logo_mobile" src="<?php bloginfo('stylesheet_directory');?>/images/logo_mobile.png" alt="">
                </div>
                <div class="col-4 kloset">
                    <img class="kloset_" src="<?php bloginfo('stylesheet_directory');?>/style/img/close.svg">
                </div>
            </div>
        </div>

        <!--        <div class="col-8 logo_mobile">-->
        <!--            <a href="/staging/">-->
        <!--                <img class="" src="--><?php //bloginfo('stylesheet_directory');?><!--/images/logo-corpus.png" alt="">-->
        <!--            </a>-->
        <!--        </div>-->
        <!--        <div class="col-4 kloset">-->
        <!--            <img class="kloset_" src="--><?php //bloginfo('stylesheet_directory');?><!--/style/img/close.svg">-->
        <!--        </div>-->

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