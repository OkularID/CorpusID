<?php get_header(''); ?>
<?php while ( have_posts() ) : the_post(); ?>

    <!-- Home Header -->
<section>
    <!--Desktop-->
    <style type="text/css">
        /*Content*/
        .sectionHome .homeheader-box{
            z-index: 20;
            display: block;
            position: fixed;
            bottom: 0;
            width: 50%;
            transition: 50s;
        }
        .sectionHome .homeheader-title{
            display: block;
            position: fixed;
            top: 35%;
            right: 10%;
            width: 550px;
            transition: 50s;
        }
        .sectionHome .header-title{
            position:relative;
            padding: 5%;
            width: 100%;
            text-align: center;
        }
        .sectionHome .homeheader-icon-01{
            position: absolute;
            top: 0;
            left: 0;
            width: auto !important;
        }
        .sectionHome .homeheader-icon-02{
            position: absolute;
            bottom: 0;
            right: 0;
            width: auto !important;
        }
        .sectionHome .homeheader-motif-01{
            z-index: 0;
            position: fixed;
            top: 25%;
            left: 2%;
            width: 15% !important;
        }
        .sectionHome .homeheader-motif-02{
            z-index: 30;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 30% !important;
        }
        .sectionHome .homeheader-motif-03{
            z-index: 10;
            position: fixed;
            bottom: -5%;
            right: 10%;
            width: 18% !important;
        }
        .sectionHome{
            background: url('<?php bloginfo('stylesheet_directory');?>/images/home-slider/background.jpg');
            background-size: cover !important;
            background-repeat: no-repeat !important;
            background-position: center !important;
            background-attachment: fixed !important;
            width:100%;
            height: 410vh;
            overflow: hidden !important;
        }
        .sectionHome .item{width: 100%;height: 100vh;}
        /*End Content*/
        /*Normal Animation*/
        .animbox{height:80vh;position:relative}
        .animbox:after{bottom:0;content:"";left:0;position:absolute;right:0;top:0}
        .animfadeup{color:#19292e;font-size:120px !important;left:50%;line-height:1;margin:0;position:absolute;text-shadow:0 2px 10px rgba(255,255,255,.5);top:50%;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%);width:5em;z-index:10}
        .animbox{
            opacity: 0;
            transition: opacity .5s .25s ease-out;
        }
        .animbox.is-visible{
            opacity: 1;
        }
        .animfadeup {
            -webkit-transform: translate(-50%, calc(-50% + 1em));
            transform: translate(-50%, calc(-50% + 1em));
        }
        .is-visible .animfadeup {
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }
        .animfadeup {
            transition: -webkit-transform 4s .25s cubic-bezier(0,1,.3,1),
            -webkit-filter 10s 2s ease-out;
            transition: transform 4s .25s cubic-bezier(0,1,.3,1),
            filter 10s 2s ease-out;
            transition: transform 4s .25s cubic-bezier(0,1,.3,1),
            filter 10s 2s ease-out,
            -webkit-transform 4s .25s cubic-bezier(0,1,.3,1),
            -webkit-filter 10s 2s ease-out;
            will-change: transform;
        }
        /*End Normal Animation*/
        /*Sec-1 Image Animation*/
        .sec1-image-animbox{
            position:relative;
            height: 100vh;
            opacity: 0;
            transition: opacity .5s .25s ease-out;
        }
        .sec1-image-animbox:after{
            bottom:0;
            content:"";
            left:0;
            position:fixed;
            right:0;
            top:0;
        }
        .sec1-image-animfadeup{
            z-index:10;
            position:fixed;
            margin:0;
            bottom:0;
            left:50%;
            width:5em;
            color:#19292e;
            font-size:120px !important;
            line-height:1;
            text-shadow:0 2px 10px rgba(255,255,255,.5);
            -webkit-transform: translate(-50%,-50%);
            transform: translate(-50%,-50%);
            transition: -webkit-transform 4s .25s cubic-bezier(0,1,.3,1),
            -webkit-filter 10s 2s ease-out;
            transition: transform 4s .25s cubic-bezier(0,1,.3,1),
            filter 10s 2s ease-out;
            transition: transform 4s .25s cubic-bezier(0,1,.3,1),
            filter 10s 2s ease-out,
            -webkit-transform 4s .25s cubic-bezier(0,1,.3,1),
            -webkit-filter 10s 2s ease-out;
            will-change: transform;
            -webkit-transform: translate(-100%, calc(-50% + 1em));
            transform: translate(-100%, calc(-50% + 1em));
        }
        .sec1-image-animbox.is-visible{opacity: 1;}
        .is-visible .sec1-image-animfadeup{
            -webkit-transform: translate(-100%, -50%);
            transform: translate(-100%, -50%);
        }
        /*End Sec-1 Image Animation*/
        /*Sec 1 Text Animation*/
        .sec1-text-animbox{
            position:relative;
            margin-top: -100vh;
            height: 100vh;
            opacity: 0;
            transition: opacity .5s .25s ease-out;
        }
        .sec1-text-animbox:after{
            bottom:0;
            content:"";
            left:0;
            position:fixed;
            right:0;
            top:0;
        }
        .sec1-text-animfadeup{
            z-index:10;
            position:fixed;
            margin:0;
            top:35%;
            left:70%;
            width:5em;
            color:#19292e;
            font-size:120px !important;
            line-height:1;
            -webkit-transform: translate(-50%,-50%);
            transform: translate(-50%,-50%);
            transition: -webkit-transform 4s .25s cubic-bezier(0,1,.3,1),
            -webkit-filter 10s 2s ease-out;
            transition: transform 4s .25s cubic-bezier(0,1,.3,1),
            filter 10s 2s ease-out;
            transition: transform 4s .25s cubic-bezier(0,1,.3,1),
            filter 10s 2s ease-out,
            -webkit-transform 4s .25s cubic-bezier(0,1,.3,1),
            -webkit-filter 10s 2s ease-out;
            will-change: transform;
            -webkit-transform: translate(80%, calc(-50%));
            transform: translate(80%, calc(-50%));
        }
        .sec1-text-animbox.is-visible{opacity: 1;}
        .is-visible .sec1-text-animfadeup{
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }
        /*End Sec 1 Text Animation*/
        /*Sec-2 Image Animation*/
        .sec2-image-animbox{
            position:relative;
            margin-top: 50vh;
            height: 50vh;
            opacity: 0;
            transition: opacity .5s .25s ease-out;
        }
        .sec2-image-animbox:after{
            bottom:0;
            content:"";
            left:0;
            position:fixed;
            right:0;
            top:0;
        }
        .sec2-image-animfadeup{
            z-index:10;
            position:fixed;
            margin:0;
            bottom:0;
            left:50%;
            width:5em;
            color:#19292e;
            font-size:120px !important;
            line-height:1;
            text-shadow:0 2px 10px rgba(255,255,255,.5);
            -webkit-transform: translate(-50%,-50%);
            transform: translate(-50%,-50%);
            transition: -webkit-transform 4s .25s cubic-bezier(0,1,.3,1),
            -webkit-filter 10s 2s ease-out;
            transition: transform 4s .25s cubic-bezier(0,1,.3,1),
            filter 10s 2s ease-out;
            transition: transform 4s .25s cubic-bezier(0,1,.3,1),
            filter 10s 2s ease-out,
            -webkit-transform 4s .25s cubic-bezier(0,1,.3,1),
            -webkit-filter 10s 2s ease-out;
            will-change: transform;
            -webkit-transform: translate(-100%, calc(-50% + 1em));
            transform: translate(-100%, calc(-50% + 1em));
        }
        .sec2-image-animbox.is-visible{opacity: 1;}
        .is-visible .sec2-image-animfadeup{
            -webkit-transform: translate(-100%, -50%);
            transform: translate(-100%, -50%);
        }
        /*End Sec-2 Image Animation*/
        /*Sec 2 Text Animation*/
        .sec2-text-animbox{
            position:relative;
            margin-top: -50vh;
            height: 50vh;
            opacity: 0;
            transition: opacity .5s .25s ease-out;
        }
        .sec2-text-animbox:after{
            bottom:0;
            content:"";
            left:0;
            position:fixed;
            right:0;
            top:0;
        }
        .sec2-text-animfadeup{
            z-index:10;
            position:fixed;
            margin:0;
            top:30vh;
            left:75%;
            width:5em;
            color:#19292e;
            font-size:120px !important;
            line-height:1;
            -webkit-transform: translate(-50%,-50%);
            transform: translate(-50%,-50%);
            transition: -webkit-transform 4s .25s cubic-bezier(0,1,.3,1),
            -webkit-filter 10s 2s ease-out;
            transition: transform 4s .25s cubic-bezier(0,1,.3,1),
            filter 10s 2s ease-out;
            transition: transform 4s .25s cubic-bezier(0,1,.3,1),
            filter 10s 2s ease-out,
            -webkit-transform 4s .25s cubic-bezier(0,1,.3,1),
            -webkit-filter 10s 2s ease-out;
            will-change: transform;
            -webkit-transform: translate(80%, calc(-50%));
            transform: translate(80%, calc(-50%));
        }
        .sec2-text-animbox.is-visible{opacity: 1;}
        .is-visible .sec2-text-animfadeup{
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }
        /*End Sec 2 Text Animation*/
        /*Sec-3 Image Animation*/
        .sec3-image-animbox{
            position:relative;
            margin-top: 80vh;
            height: 20vh;
            opacity: 0;
            transition: opacity .5s .25s ease-out;
        }
        .sec3-image-animbox:after{
            bottom:0;
            content:"";
            left:0;
            position:fixed;
            right:0;
            top:0;
        }
        .sec3-image-animfadeup{
            z-index:10;
            position:fixed;
            margin:0;
            bottom:0;
            left:45%;
            width:5em;
            color:#19292e;
            font-size:120px !important;
            line-height:1;
            text-shadow:0 2px 10px rgba(255,255,255,.5);
            -webkit-transform: translate(-50%,-50%);
            transform: translate(-50%,-50%);
            transition: -webkit-transform 4s .25s cubic-bezier(0,1,.3,1),
            -webkit-filter 10s 2s ease-out;
            transition: transform 4s .25s cubic-bezier(0,1,.3,1),
            filter 10s 2s ease-out;
            transition: transform 4s .25s cubic-bezier(0,1,.3,1),
            filter 10s 2s ease-out,
            -webkit-transform 4s .25s cubic-bezier(0,1,.3,1),
            -webkit-filter 10s 2s ease-out;
            will-change: transform;
            -webkit-transform: translate(-100%, calc(-50% + 1em));
            transform: translate(-100%, calc(-50% + 1em));
        }
        .sec3-image-animbox.is-visible{opacity: 1;}
        .is-visible .sec3-image-animfadeup{
            -webkit-transform: translate(-100%, -50%);
            transform: translate(-100%, -50%);
        }
        /*End Sec-3 Image Animation*/
        /*Sec 3 Text Animation*/
        .sec3-text-animbox{
            position:relative;
            margin-top: -20vh;
            height: 50vh;
            opacity: 0;
            transition: opacity .5s .25s ease-out;
        }
        .sec3-text-animbox:after{
            bottom:0;
            content:"";
            left:0;
            position:fixed;
            right:0;
            top:0;
        }
        .sec3-text-animfadeup{
            z-index:10;
            position:fixed;
            margin:0;
            top:30vh;
            left:70%;
            width:5em;
            color:#19292e;
            font-size:120px !important;
            line-height:1;
            -webkit-transform: translate(-50%,-50%);
            transform: translate(-50%,-50%);
            transition: -webkit-transform 4s .25s cubic-bezier(0,1,.3,1),
            -webkit-filter 10s 2s ease-out;
            transition: transform 4s .25s cubic-bezier(0,1,.3,1),
            filter 10s 2s ease-out;
            transition: transform 4s .25s cubic-bezier(0,1,.3,1),
            filter 10s 2s ease-out,
            -webkit-transform 4s .25s cubic-bezier(0,1,.3,1),
            -webkit-filter 10s 2s ease-out;
            will-change: transform;
            -webkit-transform: translate(80%, calc(-50%));
            transform: translate(80%, calc(-50%));
        }
        .sec3-text-animbox.is-visible{opacity: 1;}
        .is-visible .sec3-text-animfadeup{
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }
        /*End Sec 3 Text Animation*/
    </style>
    <div class="container-fluid d-none d-lg-block sectionHome pos-rel pl-lg-0 pr-lg-0">
        <div class="row">

            <!-- Section 1 -->
            <div class="col-lg-12 item of-lg-h sec-1">
                <div class="sec1-image-animbox show-on-scroll">
                    <div class="sec1-image-animfadeup">
                        <div class="homeheader-box">
                            <img class="image" src="<?php the_field('head_img_1') ?>

"/>
                        </div>
                    </div>
                </div>
                <div class="sec1-text-animbox show-on-scroll">
                    <div class="sec1-text-animfadeup">
                        <div class="homeheader-title">
                            <div class="header-title">
                                <h1 class="font-white"><?php the_field('header_title_1') ?></h1>
                                <img class="homeheader-icon-01 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/home-icon.png"/>
                                <img class="homeheader-icon-02 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/home-icon-02.png"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="homemotif-1"><img id="homemotif" class="homeheader-motif-01 move-left d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/home-slider/motif.png"/></div>
                <div id="homemotif-2"><img class="homeheader-motif-02 move-right d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/home-slider/motif-02.png"/></div>
                <div id="homemotif-3"><img id="homemotif" class="homeheader-motif-03 move-right d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/home-slider/motif.png"/></div>
            </div>

            <!-- Section 2 -->
            <div class="col-lg-12 item of-lg-h sec-2">
                <div class="sec2-image-animbox show-on-scroll">
                    <div class="sec2-image-animfadeup">
                        <div class="homeheader-box">
                            <img class="image" src="<?php the_field('head_img_2') ?>"/>
                        </div>
                    </div>
                </div>
                <div class="sec2-text-animbox show-on-scroll">
                    <div class="sec2-text-animfadeup">
                        <div class="homeheader-title">
                            <div class="header-title">
                                <h1 class="font-white"><?php the_field('head_title_2') ?></h1>
                                <img class="homeheader-icon-01 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/home-icon.png"/>
                                <img class="homeheader-icon-02 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/home-icon-02.png"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 3 -->
            <div class="col-lg-12 item of-lg-h sec-3">
                <div class="sec3-image-animbox show-on-scroll">
                    <div class="sec3-image-animfadeup">
                        <div class="homeheader-box">
                            <img class="image" src="<?php the_field('head_img_3') ?>"/>
                        </div>
                    </div>
                </div>
                <div class="sec3-text-animbox show-on-scroll">
                    <div class="sec3-text-animfadeup">
                        <div class="homeheader-title">
                            <div class="header-title">
                                <h1 class="font-white"><?php the_field('head_title_3') ?></h1>
                                <img class="homeheader-icon-01 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/home-icon.png"/>
                                <img class="homeheader-icon-02 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/home-icon-02.png"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!--Mobile-->
    <div class="d-block d-lg-none">
        <style>
            @media screen and (max-width: 846px) {
                .header-title {
                    font-size: 20px !important;
                }
                .mobile_background {
                    width: 100% !important;
                    height: 94vh !important;
                }
                .boxc {
                    top: 40% !important;
                    left: 10px !important;
                    width: 200px !important;
                    text-align: center !important;
                }
                .homepage_images {
                    z-index: 1550 !important;
                    position: absolute;
                    width: 82% !important;
                    bottom: 0 !important;
                    left: 10px !important;
                }
                .home_icon_mobile {
                    position: absolute;

                    top: -7% !important;
                    width: 12px !important;
                    left: -1% !important;
                }
                .home_icon_mobile_2 {
                    position: absolute;
                    top: 90% !important;
                    width: 12px !important;
                    left: 92% !important;
                }
            }
        </style>
        <div class="container-fluid home-header fadein">
            <div class="row">
                <div class="home-carousel owl-theme">
                    <?php if(have_rows('header_repeater')): ?>
                        <?php while (have_rows('header_repeater')): the_row(); ?>
                            <div class="item">
                                <div class="col-lg-12 p-0">
                                    <div class="boxc">
                                        <div class="header-title">
                                            <h1 class="font-white"><?php the_sub_field('title');?></h1>
                                            <img class="home_icon_mobile d-block d-lg-none" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/home-icon.png"/>
                                            <img class="home_icon_mobile_2 d-block d-lg-none" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/home-icon-02.png"/>
                                        </div>
                                    </div>
                                    <img class="img-fluid homepage_images d-block d-lg-none" src="<?php the_sub_field('img');?>"/>
                                    <img class="img-fluid d-block d-lg-none mobile_background" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/wong/mobile_header.jpg"/>
<!--                                    <img class="img-fluid d-none d-lg-block" src="--><?php //the_sub_field('background_image');?><!--"/>-->
<!--                                    <img class="img-fluid d-lg-none mobile_background" src="--><?php //the_sub_field('background_image');?><!--"/>-->
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

    <style>
        .button-gr p {
            top: -2px !important;
        }
        .home-motif-01 {
            z-index: 10;
            position: absolute;
            top: 18%;
            right: -20%;
            width: auto !important;
        }
    </style>

    <!-- Home Brief Desktop-->
    <div class="d-none d-lg-block">
        <div class="container-fluid home-brief pos-rel bg-black pt-lg-15p pb-lg-15p">
            <div class="row">
            <div class="col-lg-7 pt-lg-4p pl-lg-10p pr-lg-10p slideanim zi-lg-1030">
                <div class="brief-title mb-lg-3p">
                    <h2 class="font-white"><?php the_field('section_2_title') ?></h2>
                    <img class="home-icon-01 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/home-icon.png"/>
                    <img class="home-icon-02 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/home-icon-02.png"/>
                </div>
                <div class="font-white mb-lg-5p"><?php the_field('section_2_text') ?></div>
                <div class="container-fluid">
                    <div class="row">
                        <?php if(have_rows('section_2_repeater')): ?>
                            <?php while (have_rows('section_2_repeater')): the_row(); ?>
                                <div class="col-lg-4 text-center">
                                    <img class="w-lg-80p" src="<?php the_sub_field('icon');?>"/>
                                    <p class="font-white"><?php the_sub_field('text');?></p>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 pl-lg-0 pr-lg-0">
                <img class="img-fluid" src="<?php the_field('image_section_2') ?>"/>
            </div>
            <img class="home-motif-01 move-left d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/home-icon-03.png"/>
            <img class="home-motif-02 move-right d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/home-icon-04.png"/>
        </div>
        </div>
    </div>


    <!-- Home Brief Mobile -->
    <style>
        @media screen and (max-width: 846px) {
            .home-brief .brief-title{width: 100%;}
            .home-brief .brief-title h2 {
                font-size: 21px !important;
            }
            .home-brief p {
                line-height: 22px !important;
                font-size: 13px !important;
            }
            .home-icon-01 {
                width: 12px !important;
                left: 13px !important;
            }
            .home-icon-02 {
                width: 12px !important;
            }
            .home-motif-01 {
                z-index: 10;
                position: absolute;
                top: 6%;
                right: -5%;
                width: 19% !important;
            }
        }
    </style>
    <div class="d-block d-lg-none">
        <div class="container-fluid home-brief pos-rel bg-black pt-m-10p pb-m-10p pl-m-10p pr-m-10p">
            <div class="row">
            <div class="col-12">
                <div class="brief-title mb-lg-3p">
                    <h2 class="font-white pl-m-10p"><?php the_field('section_2_title') ?></h2>
                    <img class="home-icon-01 d-block d-lg-none" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/home-icon.png"/>
                    <img class="home-icon-02 d-block d-lg-none" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/home-icon-02.png"/>
                </div>
            </div>
            <div class="col-12 pt-m-10p pb-m-10p">
                <img class="img-fluid" src="<?php the_field('image_section_2') ?>"/>
                <img class="home-motif-01 move-left d-block d-lg-none" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/home-icon-03.png"/>
<!--                <img class="home-motif-02 move-right d-block d-lg-none" src="--><?php //bloginfo('stylesheet_directory');?><!--/images/homepage/home-icon-04.png"/>-->
            </div>
            <div class="col-12">
                <div class="font-white mb-lg-5p"><?php the_field('section_2_text') ?></div>
            </div>
            <div class="col-12">
                <div class="container-fluid">
                    <div class="row">
                        <?php if(have_rows('section_2_repeater')): ?>
                            <?php while (have_rows('section_2_repeater')): the_row(); ?>
                                <div class="col-4 text-center">
                                    <img class="w-lg-80p" src="<?php the_sub_field('icon');?>"/>
                                    <p class="font-white"><?php the_sub_field('text');?></p>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>

<section class="discoverSection">
    <!-- Home Discover & Services -->
    <div class="d-none d-lg-block">
        <div class="container-fluid bg-black">
            <div class="row">
                <div class="col-lg-12 pl-lg-0 pr-lg-0">
                    <!-- Home Discover -->
                    <div class="container-fluid home-discover pos-rel">
                        <div class="row">
                            <div class="col-lg-12 p-0 slideanim">
                                <div class="boxc">
                                    <a href=""><img class="w-lg-15p mb-lg-10p" src="<?php the_field('play_icon') ?>"/></a>
                                    <div class="header-title mb-lg-10p">
                                        <h1 class="font-white"><?php the_field('video_title') ?></h1>
                                        <img class="home-icon-01 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/home-icon.png"/>
                                        <img class="home-icon-02 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/home-icon-02.png"/>
                                    </div>
                                    <a class="button-gr" href="<?php the_field('button_link') ?>">
                                        <p class="font-white"><?php the_field('play_button') ?></p>
                                        <img class="w-lg-200 h-lg-50" src="<?php bloginfo('stylesheet_directory');?>/images/button-gr.png">
                                    </a>
                                </div>
                                <img class="img-fluid d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/home-image-02.jpg"/>
                                <img class="img-fluid d-lg-none" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/home-image-02.jpg"/>
                            </div>
                        </div>
                    </div>

                    <!-- Home Services -->
                    <div class="container-fluid home-services pos-rel pt-lg-15p pb-lg-15p">
                            <div class="row">
                                <div class="col-lg-5 pl-lg-10p slideanimLeft">
                                    <div class="services-title mb-lg-10p">
                                        <h2 class="font-white"><?php the_field('title_section_4') ?></h2>
                                        <img class="home-icon-01 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/home-icon.png"/>
                                        <img class="home-icon-02 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/home-icon-02.png"/>
                                    </div>
                                    <ul>
                                        <?php if(have_rows('section_4_repeater')): ?>
                                            <?php while (have_rows('section_4_repeater')): the_row(); ?>
                                                <li><a href="<?php the_sub_field('link_text');?>"><?php the_sub_field('text');?></a></li>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </ul>
                                    <a class="button-gr" href="<?php the_field('link_button_4');?>">
                                        <p class="font-white"><?php the_field('button_section_4');?></p>
                                        <img class="w-lg-200 h-lg-40" src="<?php bloginfo('stylesheet_directory');?>/images/button-gr.png">
                                    </a>
                                </div>
                                <div class="col-lg-7 pos-rel">
                                    <style>
                                        .home-motif-04 {
                                            position: absolute;
                                            top: 88%;
                                            right: 5%;
                                            width: 50%;
                                        }
                                        .home-motif-05 {
                                            z-index: 10;
                                            position: absolute;
                                            bottom: -11%;
                                            right: 18%;
                                            width: 15% !important;
                                        }
                                    </style>
                                    <img class="img-fluid services-image" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/home-image-03.jpg"/>
                                    <img class="home-motif-04 move-top d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/home-icon-10.png"/>
                                    <img class="home-motif-05 move-left d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/home-icon-09.png"/>
                                </div>
                            </div>
                        </div>

                    <img class="home-motif-03 move-right d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/home-icon-04.png"/>
                </div>
            </div>
        </div>
    </div>


    <!--Home Discover & Service Mobile Section-->
    <div class="d-block d-lg-none">
        <style>
            @media screen and (max-width: 846px) {
                .home-discover .boxcs .header-title {
                    width: 90%;
                }
                .home-discover h1 {
                    font-size: 16px !important;
                }
                .home-discover .boxcs {
                    position: absolute !important;
                    top: 30px !important;
                    width: 250px;
                    left: 45px !important;
                    /*text-align: center !important;*/


                }
                .home-services .services-image {
                    position: relative;
                }
                .home-services .services-title h2 {
                    font-size: 25px !important;
                }
                .home-services ul {
                    line-height: 17px;
                    font-size: 15px;
                }
                .home-services ul li {
                    padding: 6px 0;
                }
                .home-services .button-gr btn-btn {
                    height: 31px !important;
                    width: 148px !important;
                }
            }
        </style>
        <div class="container-fluid bg-black pt-m-10p pb-m-10p">
            <div class="row">
                <div class="col-12">
                    <!-- Home Discover -->
                    <div class="container-fluid home-discover pos-rel">
                        <div class="row">
                            <div class="col-12 slideanim">
                                <div class="boxcs text-center">
                                    <a href=""><img class="w-m-13p" src="<?php the_field('play_icon') ?>"/></a>
                                    <div class="header-title mb-m-5p">
                                        <h1 class="font-white"><?php the_field('video_title') ?></h1>
<!--                                        <img class="home-icon-01 d-none d-lg-block" src="--><?php //bloginfo('stylesheet_directory');?><!--/images/homepage/home-icon.png"/>-->
<!--                                        <img class="home-icon-02 d-none d-lg-block" src="--><?php //bloginfo('stylesheet_directory');?><!--/images/homepage/home-icon-02.png"/>-->
                                    </div>
                                    <a class="button-gr" href="<?php the_field('button_link') ?>">
                                        <p class="font-white"><?php the_field('play_button') ?></p>
                                        <img class="w-m-145 h-m-24" src="<?php bloginfo('stylesheet_directory');?>/images/button-gr.png">
                                    </a>
                                </div>
                                <img class="img-fluid d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/home-image-02.jpg"/>
                                <img class="img-fluid d-lg-none" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/home-image-02.jpg"/>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid home-services pos-rel pt-15p pb-15p">
                        <div class="row">
                            <div class="col-12 pl-10p slideanimLeft">
                                <div class="services-title mb-10p">
                                    <h2 class="font-white discoverMobile"><?php the_field('title_section_4') ?></h2>
<!--                                    <img class="home-icon-01 d-block d-lg-none" src="--><?php //bloginfo('stylesheet_directory');?><!--/images/homepage/home-icon.png"/>-->
<!--                                    <img class="home-icon-02 d-block d-lg-none" src="--><?php //bloginfo('stylesheet_directory');?><!--/images/homepage/home-icon-02.png"/>-->
                                </div>
                                <ul>
                                    <?php if(have_rows('section_4_repeater')): ?>
                                        <?php while (have_rows('section_4_repeater')): the_row(); ?>
                                            <li><a href="<?php the_sub_field('link_text');?>"><?php the_sub_field('text');?></a></li>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </ul>
                                <div class="text-center">
                                    <a class="button-gr" href="<?php the_field('link_button_4');?>">
                                        <p class="font-white"><?php the_field('button_section_4');?></p>
                                        <img class="w-lg-140 h-lg-28" src="<?php bloginfo('stylesheet_directory');?>/images/button-gr.png">
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 pos-rel bg-black text-center">
                                <img class="img-fluid services-image" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/home-image-03.jpg"/>
<!--                                <img class="home-motif-04 move-top d-block d-lg-none" src="--><?php //bloginfo('stylesheet_directory');?><!--/images/homepage/home-icon-10.png"/>-->
<!--                                <img class="home-motif-05 move-left d-block d-lg-none" src="--><?php //bloginfo('stylesheet_directory');?><!--/images/homepage/home-icon-09.png"/>-->
                            </div>
                        </div>
                    </div>
<!--                    <img class="home-motif-03 move-right d-block d-lg-none" src="--><?php //bloginfo('stylesheet_directory');?><!--/images/homepage/home-icon-04.png"/>-->
                </div>
            </div>
        </div>
    </div>
</section>


<section class="honeTestimony">
    <!-- Home Testimony -->
    <style>
        .home-motif-06 {
            position: absolute;
            top: 87%;
            left: 0;
            width: 75%;
        }
        .home-motif-07 {
            z-index: 10;
            position: absolute;
            bottom: 0;
            left: 4%;
            width: 15% !important;
        }
    </style>
    <div class="d-none d-lg-block">
        <div class="container-fluid home-testimony pos-rel pt-lg-15p pb-lg-15p">
            <div class="row">
                <div class="col-lg-6 pos-rel">
                    <img class="img-fluid testimony-image" src="<?php the_field('image_section_5');?>"/>
                    <img class="home-motif-06 move-top d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/home-icon-13.png"/>
                    <img class="home-motif-07 move-right d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/home-icon-14.png"/>
                </div>
                <div class="col-lg-6 pos-rel pl-lg-10p pr-lg-10p slideanimX zi-lg-1030">
                    <div class="testimony-title mb-lg-3p">
                        <h2><?php the_field('title_section_5');?></h2>
                        <img class="home-icon-01 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/home-icon-11.png"/>
                        <img class="home-icon-02 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/home-icon-12.png"/>
                    </div>
                    <div class="testimony-slider">
                        <div class="home-carousel2 owl-theme">
                            <?php if(have_rows('repeater_section_5')): ?>
                                <?php while (have_rows('repeater_section_5')): the_row(); ?>
                                    <div class="item">
                                        <p class="mb-lg-5p"><?php the_sub_field('text_testimony');?></p>
                                        <img class="w-lg-45p" src="<?php the_sub_field('logo_testimony');?>"/>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <img class="home-motif-08 move-left d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/home-icon-04.png"/>
            </div>
        </div>
    </div>

<!--Home Testimony Mobile-->
    <div class="d-block d-lg-none">
        <style>
            @media screen and (max-width: 846px) {
                .home-testimony .testimony-title h2 {
                    font-size: 18px !important;
                    color: #414042;
                    padding-left: 0;
                }
                .home-testimony .testimony-title {
                    left: 0 !important;
                }
                .home-testimony .testimony-slider {
                    position: relative;
                    padding-top: 1%;
                }
                .home-testimony .testimony-slider p {
                    line-height: 22px;
                }
                .home-testimony .testimony-slider img {
                    width: 66%;
                }
                .text_ {
                    font-size: 13px !important;
                }
            }
        </style>
        <div class="container-fluid home-testimony pt-m-5p pb-m-15p pl-m-10p pr-m-10p">
            <div class="row">
<!--                <div class="col-12 pos-rel">-->
<!--                    <img class="img-fluid testimony-image" src="--><?php //the_field('image_section_5');?><!--"/>-->
<!--                    <img class="home-motif-06 move-top d-none d-lg-block" src="--><?php //bloginfo('stylesheet_directory');?><!--/images/homepage/home-icon-13.png"/>-->
<!--                    <img class="home-motif-07 move-right d-none d-lg-block" src="--><?php //bloginfo('stylesheet_directory');?><!--/images/homepage/home-icon-14.png"/>-->
<!--                </div>-->
                <div class="col-12 pos-rel pl-10p pr-10p slideanimX zi-lg-1030">
                    <div class="testimony-title mb-lg-3p">
                        <h2 class=""><?php the_field('title_section_5');?></h2>
<!--                        <img class="home-icon-01 d-none d-lg-block" src="--><?php //bloginfo('stylesheet_directory');?><!--/images/homepage/home-icon-11.png"/>-->
<!--                        <img class="home-icon-02 d-none d-lg-block" src="--><?php //bloginfo('stylesheet_directory');?><!--/images/homepage/home-icon-12.png"/>-->
                    </div>
                    <div class="testimony-slider">
                        <div class="home-carousel2 owl-theme">
                            <?php if(have_rows('repeater_section_5')): ?>
                                <?php while (have_rows('repeater_section_5')): the_row(); ?>
                                    <div class="item">
                                        <p class="mb-5p text_"><?php the_sub_field('text_testimony');?></p>
                                        <img class="w-45p" src="<?php the_sub_field('logo_testimony');?>"/>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
<!--                <img class="home-motif-08 move-left d-none d-lg-block" src="--><?php //bloginfo('stylesheet_directory');?><!--/images/homepage/home-icon-04.png"/>-->
            </div>
        </div>
    </div>

</section>

<section class="updateSection">
    <div class="d-none d-lg-block">
        <!-- Home Updates -->
        <div class="container-fluid home-updates pt-lg-10p pb-lg-10p slideanim">
            <div class="row">
                <div class="col-lg-12 mb-lg-5p pl-lg-10p pr-lg-10p">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="updates-title mb-lg-3p">
                                    <h2><?php the_field('title_section_6');?></h2>
                                    <img class="home-icon-01 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/home-icon-11.png"/>
                                    <img class="home-icon-02 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/home-icon-12.png"/>
                                </div>
                            </div>
                            <div class="col-lg-6 text-right">
                                <a class="button-gr" href="<?php the_field('button_link_section_6');?>">
                                    <p class="font-white"><?php the_field('button_section_6');?></p>
                                    <img class="w-lg-300 h-lg-50" src="<?php bloginfo('stylesheet_directory');?>/images/button-gr.png">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 pl-lg-10p pr-lg-10p">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="home-carousel3 owl-theme">
                                <?php
                                $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                                $params = array('post_type' => 'newsroom' , 'order' => 'DESC', 'post_status' => 'publish', 'posts_per_page' => -1, 'paged' => $paged);
                                $ne = new WP_Query($params);
                                if($ne->have_posts()){
                                    while ($ne->have_posts()) : $ne->the_post();
                                        ?>
                                        <div class="item">
                                            <div class="w-lg-100p box-shadow">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-lg-5 pl-lg-0 pr-lg-0">
                                                            <div class="homenews-image" style="background: url('<?php the_field('homepage_image_potrait') ?>');"></div>
                                                        </div>
                                                        <div class="col-lg-7 pt-lg-10p pb-lg-10p pl-lg-10p pr-lg-10p">
                                                            <h5><b><?php the_field('date'); ?></b></h5>
                                                            <h5 class="homenews-title"><b><?php echo wp_trim_words( get_the_title(), 5, ' ...' ); ?></b></h5>
                                                            <p class="homenews-brief"><?php echo wp_trim_words( get_field('detail'), 20, ' ...' ); ?> <a href="<?php echo get_permalink(); ?>">read more</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php  endwhile;} ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contactSection">
    <!-- Home Contact -->
    <style>
        .home-motif-09 {
            position: absolute;
            top: -6%;
            right: -44%;
        }
    </style>
    <div class="d-none d-lg-block">
        <div class="container-fluid home-contact pos-rel pt-lg-5p pb-lg-10p">
            <div class="row">
                <div class="boxc w-lg-50p text-center">
                    <div class="contact-title mb-lg-3p">
                        <h2><?php the_field('title_section_7',5) ?></h2>
                        <img class="home-icon-01 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/home-icon-11.png"/>
                        <img class="home-icon-02 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/home-icon-12.png"/>
                    </div>
                    <a class="button-gr d-lg-inline" href="">
                        <p class="font-white"><?php the_field('button_1_section_7',5) ?></p>
                        <img class="w-lg-280 h-lg-50" src="<?php bloginfo('stylesheet_directory');?>/images/button-gr.png">
                    </a>
                    <p class="d-lg-inline pl-lg-1p pr-lg-1p">or</p>
                    <a class="button-gr d-lg-inline" href="">
                        <p class="font-white"><?php the_field('button_2_section_7',5) ?></p>
                        <img class="w-lg-280 h-lg-50" src="<?php bloginfo('stylesheet_directory');?>/images/button-gr.png">
                    </a>
                </div>
                <div class="col-lg-12 text-right pl-lg-7p pr-lg-7p">
                    <img class="w-lg-60p" src="<?php the_field('image_section_7',5) ?>"/>
                    <img class="home-motif-09 move-left d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/home-icon-15.png"/>
                </div>
            </div>
        </div>
    </div>

    <!-- Home Contact Mobile -->
    <div class="d-block d-lg-none">
        <style>
            @media screen and (max-width: 846px) {
                .home-contact .contact-title h2 {
                    font-size: 18px !important;
                }
                .home-motif-09 {
                    position: absolute;
                    top: -7%;
                    right: -67%;
                    width: 13% !important;
                }
            }
        </style>
        <div class="container-fluid home-contact pos-rel pt-m-20p pb-m-20p">
            <div class="row">
                <div class="boxc w-50p">
                    <div class="contact-title mb-m-3p pl-m-0">
                        <h2><?php the_field('title_section_7',5) ?></h2>
<!--                        <img class="home-icon-01 d-none d-lg-block" src="--><?php //bloginfo('stylesheet_directory');?><!--/images/homepage/home-icon-11.png"/>-->
<!--                        <img class="home-icon-02 d-none d-lg-block" src="--><?php //bloginfo('stylesheet_directory');?><!--/images/homepage/home-icon-12.png"/>-->
                    </div>
                    <a class="button-gr d-lg-inline" href="">
                        <p class="font-white"><?php the_field('button_1_section_7',5) ?></p>
                        <img class="w-m-125 h-m-30" src="<?php bloginfo('stylesheet_directory');?>/images/button-gr.png">
                    </a>
                    <p class="d-lg-inline pl-1p pr-1p">or</p>
                    <a class="button-gr d-lg-inline" href="">
                        <p class="font-white"><?php the_field('button_2_section_7',5) ?></p>
                        <img class="w-m-125 h-m-30" src="<?php bloginfo('stylesheet_directory');?>/images/button-gr.png">
                    </a>
                </div>
                <div class="col-12 text-right pl-7p pr-7p">
                    <img class="w-lg-60p" src="<?php the_field('image_section_7',5) ?>"/>
                    <img class="home-motif-09 move-left d-block d-lg-none" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/home-icon-15.png"/>
                </div>
            </div>
        </div>
    </div>
</section>


<?php endwhile; ?>
<?php get_footer(); ?>