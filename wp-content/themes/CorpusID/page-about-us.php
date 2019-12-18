<?php get_header('page'); ?>
<?php while ( have_posts() ) : the_post(); ?>

<!--About US-->
<section class="headerSection">
<!--Desktop-->
    <div class="d-none d-lg-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="boxc pl-lg-50p pr-lg-15p">
                        <div id="temptitle-color" class="mb-lg-0 text-center float-right">
                            <h1 class="font-white m-a w-200x"><?php the_field('header_title') ?></h1>
                            <img class="temptitle-motif1 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/partials/left-white.png"/>
                            <img class="temptitle-motif2 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/partials/right-white.png"/>
                        </div>
                    </div>
                    <img class="img-fluid d-none d-lg-block" src="<?php the_field('header_background') ?>"/>
                    <img class="img-fluid d-lg-none" src="<?php bloginfo('stylesheet_directory');?>/images/header/header-background-01.png"/>
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
                .boxc {
                    top: 50%;
                }
            }
            .mobile_background {
                width: 100% !important;
                height: 94vh !important;
            }
            .motifhead-left {
                z-index: 40;
                position: absolute;
                top: 45%;
                left: 25%;
                width: 15px !important;
            }
            .motifhead-right {
                z-index: 40;
                position: absolute;
                top: 52%;
                left: 71%;
                width: 15px !important;
            }
        </style>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="boxc">
                        <h1 class="font-white header-title text-center"><?php the_field('header_title') ?></h1>
                    </div>
                    <img class="img-fluid mobile_background d-lg-none" src="<?php bloginfo('stylesheet_directory');?>/images/header/mobile_header.jpg"/>
                    <img class="img-fluid motifhead-left d-lg-none" src="<?php bloginfo('stylesheet_directory');?>/images/header/block-left.png"/>
                    <img class="img-fluid motifhead-right d-lg-none" src="<?php bloginfo('stylesheet_directory');?>/images/header/block-right.png"/>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="aboutSection1" style="background: linear-gradient(180deg, #fff 94%, #000 12%);">

<!--Desktop-->
    <div class="d-none d-lg-block">
        <style>
            .about-image1{position: absolute;z-index: 1030; top: 10%;   width: 70%;}
            .about-motif0{
                z-index: 10;
                position: absolute;
                top: 2%;
                left: 26%;
                width: 368px !important;}
            .head_title {
                color: #414042 !important;
            }
        </style>
        <div class="container-fluid pt-lg-5p pb-lg-5p">
            <div class="row">
                <div class="col-lg-12 pb-lg-10p pl-lg-20p pr-lg-20p text-center">
                    <h3 class="head_title"><?php the_field('about_section_2_title') ?></h3>
                </div>
                <div class="col-lg-6 pl-lg-10p pr-lg-0 pos-rel">
                    <img class="img-fluid about-image1" src="<?php the_field('about_images_section_2') ?>">
                    <img class="about-motif0 move-left d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/about/partials/partials-03.png"/>
                </div>
                <div class="col-lg-6 pt-lg-2p pl-lg-0 pr-lg-8p">
                    <?php the_field('about_content_section_2') ?>
                </div>
            </div>
        </div>
    </div>

<!--Mobile-->
    <div class="d-block d-lg-none">
        <style>
            @media screen and (max-width: 846px) {
                .about1-header {
                    font-size: 18px !important;
                }
                .about-image1 {
                    position: relative;
                    z-index: 1030;
                    top: -8%;
                    width: 90%;
                    height: auto;
                }
                .content1 p {
                    line-height: 20px;
                }
                .about-motif0 {
                    z-index: 10;
                    position: absolute;
                    top: -8%;
                    left: 21%;
                    width: 215px !important;
                    height: auto;
                }
            }
        </style>
        <div class="container-fluid pt-m-5p pb-m-5p bg-white">
            <div class="row">
                <div class="col-12 pb-m-10p pl-m-20p pr-m-20p text-center my-5 my-lg-0">
                    <h3 class="about1-header"><?php the_field('about_section_2_title') ?></h3>
                </div>
                <div class="col-12 pos-rel">
                    <div class="text-center">
                        <img class="img-fluid about-image1 mb-5 mb-lg-0" src="<?php the_field('about_images_section_2') ?>">
                        <!--Motif-->
                        <img class="about-motif0 move-left d-block d-lg-none" src="<?php bloginfo('stylesheet_directory');?>/images/about/partials/partials-03.png"/>
                    </div>
                    <img class="about-motif0 move-left d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/about/partials/partials-03.png"/>
                </div>
                <div class="col-12 pt-m-2p pb-m-0 pl-m-5p pr-m-5p">
                    <div class="content1 pb-m-10p px-3">
                        <?php the_field('about_content_section_2') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="aboutSection2">

<!--Desktop-->
    <div class="d-none d-lg-block">
        <style>
            .about-motif{z-index: 10;position: absolute;top: 81%; left: 111%;width: auto !important;}
            .about-motif1{z-index: 10;position: absolute;top: 6%; left: -75%;width: auto !important;}
            .about-motif1-2{z-index: 10;position: absolute;top: 21%; left: 50%;width: auto !important;}
            .about-motif2{z-index: 10;position: absolute;top: 75%; left: -83%;width: auto !important;}
            .abt_content {
                padding-left: 10%;
            }

        </style>
        <div class="container-fluid font-white mb-lg-m20p pt-lg-10p pb-lg-30p pl-lg-5p pr-lg-5p" style="background: black;">
            <div class="row">
                <div class="col-lg-6 pt-lg-11p pl-lg-0 pos-rel">
                    <h1><?php the_field('about_section_3_title') ?></h1>
                    <div class="abt_content">
                        <?php the_field('about_section_3_content') ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid" src="<?php the_field('about_section_3_image') ?>" alt="">
                    <img class="about-motif1 move-left d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/about/partials/block2-03.png"/>
                    <img class="about-motif1-2 move-left d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/about/partials/block2-04.png"/>

                    <img class="about-motif move-left d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/about/partials/partials2-04.png"/>
                    <img class="about-motif2 move-left d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/about/partials/block-01.png"/>
                </div>
            </div>
        </div>
    </div>

<!--Mobile-->
    <div class="d-block d-lg-none">
        <style>
            @media screen and (max-width: 846px) {
                .aboutSection2 h1 {
                    position: relative;
                    right: 0%;
                    z-index: 10;
                    top: -11%;
                    font-size: 25px !important;
                }
                .content2 p{
                    line-height: 20px;
                }
            }
        </style>
        <div class="container-fluid font-white pt-m-20p pb-m-0 pl-m-5p pr-m-5p" style="background: black;">
            <div class="row">
                <div class="col-12 pos-rel">
                    <div id="temptitle-color">
                        <h2 style="color: #fff !important;"><?php the_field('about_section_3_title') ?></h2>    
                        <img class="temptitle-motif1" src="<?php bloginfo('stylesheet_directory');?>/images/partials/left-white.png"/>
                        <img class="temptitle-motif2" src="<?php bloginfo('stylesheet_directory');?>/images/partials/right-white.png"/>
                    </div>
                    <div class="content2 px-3 mb-m-10p"><?php the_field('about_section_3_content') ?></div>
                </div>
                <div class="col-12 px-4">
                    <img class="img-fluid px-1" src="<?php the_field('about_section_3_image') ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="aboutSection3">
<!--Desktop-->
    <style>
        ._sec3 {
            font-size: 50px !important;
        }
        .ccc {
            font-size: 20px !important;
        }
    </style>
    <div class="d-none d-lg-block">
        <div class="container-fluid pt-lg-5p pb-lg-5p pl-lg-5p pr-lg-5p">
            <div class="row">
                <div class="col-lg-12 pt-lg-5p pb-lg-10p text-center">
                    <div class="container-fluid">
                        <div class="row">
                            <?php if(have_rows('repeater_section_3_test')): ?>
                                <?php while (have_rows('repeater_section_3_test')): the_row(); ?>
                                    <div class="col-lg-6">
                                        <img class="img-fluid w-lg-30p" src="<?php the_sub_field('icon_test');?>" alt="">
                                        <h2 class="font-white _sec3"><?php the_sub_field('icon_title_test');?></h2>
                                        <p class="pt-lg-8p pl-lg-10p pl-lg-10p font-black pl-lg-10p pr-lg-10p ccc"><?php the_sub_field('icon_content_test');?></p>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
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
                .iconn {
                    background: linear-gradient(180deg, #000 53%, #fff 30%) !important;
                }
                .content3 {
                    line-height: 20px;
                }
                .about-slider-carousel.owl-theme .owl-nav{
                    position: absolute !important;
                    top: 25% !important;
                    width: 100%;
                }
                .about-slider-carousel.owl-theme .owl-nav button.owl-prev{
                    margin: unset;
                    position: absolute;
                    top: unset;
                    left: 30px;
                    transform: unset;
                    font-size: 12px !important;
                    color: #fff !important;
                }
                .about-slider-carousel.owl-theme .owl-nav button.owl-next{
                    margin: unset;
                    position: absolute;
                    top: unset;
                    right: 30px;
                    transform: unset;
                    font-size: 12px !important;
                    color: #fff !important;
                }
                .about-slider-carousel.owl-theme .owl-nav button.owl-prev img{
                    width: 30px;
                }
                .about-slider-carousel.owl-theme .owl-nav button.owl-next img{
                    width: 30px;
                }
                .about-slider-carousel .owl-dots .owl-dot{outline: none !important;}
                .about-slider-carousel .owl-dots .owl-dot.active span{background: #0198b7 !important;}
                .about-slider-carousel .owl-dots .owl-dot:hover span{background: #0198b7 !important;}
            }
        </style>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 pt-m-0 pb-m-35p pl-m-0 pr-m-0">
                    <div class="about-slider-carousel owl-theme">
                        <?php if(have_rows('repeater_section_3_test')): ?>
                            <?php while (have_rows('repeater_section_3_test')): the_row(); ?>
                                <div class="item about_slider">
                                    <div class="col-12 bg-black pt-m-15p pl-m-30 pr-m-30 text-center">
                                        <img class="img-fluid ma-m pb-m-5p" style="width: auto !important;" src="<?php the_sub_field('icon_test');?>" alt="">
                                        <h2 class="font-white mb-m-0 pb-m-10p"><?php the_sub_field('icon_title_test');?></h2>
                                    </div>
                                    <div class="col-12 pt-m-10p pl-m-30 pr-m-30  text-center">
                                        <p class="font-black pl-m-10p pr-m-10p content3"><?php the_sub_field('icon_content_test');?></p>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Journey Section-->
    <!-- MILESTONE SECTION -->
<section class="aboutSection3">
<!--Desktop-->
    <div class="d-none d-lg-block">
        <style type="text/css">
            .milestone{position: relative;width:100%;}
            .milestone .line{position: absolute;top: 12px;width: 120%;height: 2px;background: #0093be;}
            .milestone .owl-item.current .dotsync{width: 8px;}
            .dotsync{margin: 0 auto 10%;width: 2px;height: 30px;background: #0093be;}
            .milestone .box{
                width: 100%;
                background:url("<?php bloginfo('stylesheet_directory');?>/images/about/partials/about-background-04.png");
                background-size: 100% 100% !important;
                background-repeat: no-repeat !important;
                background-position: center !important;
            }
            .milestone .box .brief{position: relative;padding: 7% 12% 7% 10%}
            .milestone .box .brief h3{
                position: absolute;
                top: 5%;
                left: -8%;
                font-size: 60px !important;
            }
            .milestone .owl-theme .owl-nav{
                position: absolute;
                margin-top: 0;
                top: 10%;
                right: 30px;
                width: 60px;
            }
            .milestone .owl-theme .owl-nav button.owl-prev{
                margin: 0;
                position: absolute;
                top: 49px;
                left: unset;
                transform: unset;
                font-size: 12px !important;
                color:
                #fff !important;
            }
            .milestone .owl-theme .owl-nav button.owl-prev img{width: 75%}
            .milestone .owl-theme .owl-nav button.owl-next{
                margin: 0;
                position: unset;
                top: unset;
                right: unset;
                transform: unset;
                font-size: 12px !important;
                color: #fff !important;
            }
            .milestone .owl-theme .owl-nav button.owl-next img{width: 75%}
            .mot_1 {
                position: absolute;
                left: 8%;
                top: 1%;
            }
            .mot_2 {
                position: absolute;
                top: 98%;
                left: 39%;
            }
	    .milesback{
		background-size: cover !important;
		background-repeat: no-repeat !important;
		background-position: center !important;
		width:100%;
		height:100%;
	    }
        </style>
        <div class="container-fluid pb-lg-0">
            <div class="row">
                <div class="col-lg-12 pt-lg-5p pl-lg-10p">
		  <div id="temptitle-color" style="margin-left:-40px;">
                    <h2><?php the_field('about_section_4_title') ?></h2>    
                    <img class="temptitle-motif1 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/partials/right.png"/>
                    <img class="temptitle-motif2 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/partials/left.png"/>
                  </div>
                </div>
                <div class="col-lg-12 pt-lg-5p pb-lg-0 pl-lg-10p pr-lg-10p">
                    <div class="milestone">
                        <div class="line"></div>
                        <div id="sync2" class="owl-carousel owl-theme">
                            <?php if(have_rows('repeater_section_4')): ?>
                                <?php while (have_rows('repeater_section_4')): the_row(); ?>
                                    <div class="item">
                                        <div class="dotsync"></div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <div id="sync1" class="owl-carousel owl-theme">
                            <!-- repeater -->
                            <?php if(have_rows('repeater_section_4' )): ?>
                                <?php while (have_rows('repeater_section_4')): the_row(); ?>
                                    <div class="item">
                                        <div class="box">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-lg-3 pl-lg-0 pr-lg-0">
							<div class="milesback" style="background: url('<?php the_sub_field('background');?>');"></div>
                                                        <!-- <img src="<?php the_sub_field('background');?>" alt="" class="img-fluid w-lg-100p h-lg-100p"> -->                                                    </div>
                                                    <div class="col-lg-9 pl-lg-0 pr-lg-0">
                                                        <div class="brief">
                                                            <h3 class="font-white"><?php the_sub_field('year');?></h3>
                                                            <p class="font-white"><b><?php the_sub_field('title');?></b></p><br>
                                                            <div class="font-white">
                                                                <p><?php the_sub_field('text');?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--Mobile-->
    <div class="d-block d-lg-none">
    <style type="text/css">
        @media screen and (max-width: 846px) {
            .milestone{
                position: relative;
                width:100%;
            }
            .milestone .line{
                position: relative;
                top: 12px;
                width: 120%;
                height: 2px;
                background: #0093be;
            }
            .milestone .owl-item.current .dotsync{
                width: 8px;
            }
            .dotsync{
                margin: 0 auto 10%;
                width: 2px;
                height: 30px;
                background: #0093be;
            }
            .milestoneMobile .boxMobile{
                padding: 20% 10% 15%;
                width: 100%;
                background:url("<?php bloginfo('stylesheet_directory');?>/images/about/partials/about-background-04.png");
                background-size: 100% 100% !important;
                background-repeat: no-repeat !important;
                background-position: center !important;
                height: auto !important;
            }
            .milestoneMobile .boxMobile p{line-height: 20px;}
            .milestoneMobile .boxMobile .title{
                width: 70%;
                height: 45px;
                overflow: hidden;
            }
            .milestoneMobile .boxMobile .desc{
                width: 100%;
                height: 100px;
                overflow: auto;
            }
            .milestoneMobile .boxMobile .desc ul{padding-left: 15px;}
            .milestoneMobile .boxMobile .desc ul li{
                font-family: "OpenSans Regular";
                font-size: 12px !important;
                letter-spacing: 0.21px;
                line-height: 20px;
            }
            .milestone .box .brief{position: relative;padding: 7% 12% 7% 10%}
            .milestone .box .brief h3{
                position: relative;
                top: 5%;
                left: -8%;
                font-size: 60px !important;
            }
            .milestone .year_ {
                font-size: 40px !important;
                position: absolute;
                left: 5%;
                top: -15px !important;
                color: #fff;
            }
            .milestone .owl-theme .owl-dots{display: none;}
            .milestone .owl-theme .owl-nav{
                position: absolute;
                margin-top: 0;
                top: 42vh;
                right: 10px;
                width: auto;
            }
            .milestone .owl-theme .owl-nav button.owl-prev{
		margin-top:-10px;
                font-size: 0 !important;
                color: #fff !important;
            }
            .milestone .owl-theme .owl-nav button.owl-prev img{width: 60%;}
            .milestone .owl-theme .owl-nav button.owl-next{
                font-size: 0 !important;
                color: #fff !important;
            }
            .milestone .owl-theme .owl-nav button.owl-next img{width: 60%;}
            .milesback{height: 40vh;}
        }
    </style>
    <div class="container-fluid pb-m-10p">
        <div class="row">
            <div class="col-12 pl-m-10p pr-m-10p">
                <div id="temptitle-color">
                    <h2><?php the_field('about_section_4_title') ?></h2>    
                    <img class="temptitle-motif1" src="<?php bloginfo('stylesheet_directory');?>/images/partials/right.png"/>
                    <img class="temptitle-motif2" src="<?php bloginfo('stylesheet_directory');?>/images/partials/left.png"/>
                </div>
            </div>
            <div class="col-12 pt-m-5p pb-m-5p pl-m-10p pr-m-10p">
                <div class="milestone">
                    <div class="home-carousel2 owl-theme">
                        <?php if(have_rows('repeater_section_4' )): ?>
                            <?php while (have_rows('repeater_section_4')): the_row(); ?>
                                <div class="item">
                                    <div class="boxMobile">
                                        <div class="brief">
                                            <div class="milesback" style="background: url('<?php the_sub_field('background');?>');"></div>
                                            <div class="milestoneMobile pos-rel">
                                                <p class="year_"><?php the_sub_field('year');?></p>
                                                <div class="boxMobile">
                                                    <div class="title font-white"><p><b><?php the_sub_field('title');?></b></p></div>
                                                    <div class="desc font-white">
                                                        <?php the_sub_field('text');?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>




<!--Our Team-->


<section class="teamSection1">
    <!--Desktop-->
    <div class="d-none d-lg-block">
        <style>
            .team-image {position: absolute;z-index: 1030; width: 89%;}
            .team-motif1{
                z-index: 1030;
                position: absolute;
                top: -1% !important;
                right: -45% !important;
                width: auto !important;
            }
            .team-motif2{
                z-index: 10;
                position: absolute;
                top: 33%;
                left: 55% !important;
                width: 50% !important;
                height: auto !important;
            }
            .team-motif3{z-index: 10;position: absolute;top: 109%; left: -87%;width: auto !important;}

            .title_motif1 {
                position: absolute;
                left: 15%;
                top: -11px;
            }
            .title_motif2 {
                position: absolute;
                top: 21%;
                right: 5%; 
            }

        </style>
        <div class="container-fluid pt-lg-5p pb-lg-15p">
            <div class="row">
                <!-- <div class="col-lg-12 pb-lg-5p pl-lg-20p pr-lg-20p text-center">
                    
                </div> -->
                <div class="col-lg-6 pl-lg-10p pr-lg-5p">
   		    <div id="temptitle-color" style="margin-left:-40px;">
                        <h2><?php the_field('section_5_title') ?></h2>    
                        <img class="temptitle-motif1 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/partials/right.png"/>
                        <img class="temptitle-motif2 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/partials/left.png"/>
                    </div>
                    <p><?php the_field('section_5_content') ?></p>
                </div>
                <div class="col-lg-6 pt-lg-2p pl-lg-5p pr-lg-5p pos-rel">
                    <img class="img-fluid team-image" src="<?php the_field('section_5_image') ?>">
                    <img class="team-motif1 move-left d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/team/partials-team-03.png"/>
                    <img class="team-motif2 move-left d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/team/partials-team-04.png"/>
                    <img class="team-motif3 move-left d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/team/block-01.png"/>
                </div>
            </div>
        </div>
    </div>

    <!--Mobile-->
    <div class="d-block d-lg-none">
        <style>
            @media screen and (max-width: 846px) {
                .team-image {
                    position: relative;
                    z-index: 1030;
                    width: 100%;
                }
                .team-motif1{
                    z-index: 1030;
                    position: absolute;
                    top: -1% !important;
                    left: 87% !important;
                    width: auto !important;
                }
                .team-motif2{
                    z-index: 10;
                    position: absolute;
                    top: 37%;
                    left: 13% !important;
                    width: 50% !important;
                    height: auto !important;
                }
                .team-motif3{z-index: 10;position: absolute;top: 109%; left: -87%;width: auto !important;}
                .content-mobile {
                    margin-bottom: 0;
                    line-height: 21px;
                }
                .imej {
                    padding-left: 40px !important;
                }
            }
        </style>
        <div class="container-fluid pt-m-5p pb-m-15p">
            <div class="row">
                <div class="col-12 pl-m-10p pr-m-10p text-center">
                    <div id="temptitle-color">
                        <h2><?php the_field('section_5_title') ?></h2>    
                        <img class="temptitle-motif1" src="<?php bloginfo('stylesheet_directory');?>/images/partials/right.png"/>
                        <img class="temptitle-motif2" src="<?php bloginfo('stylesheet_directory');?>/images/partials/left.png"/>
                    </div>
                </div>
                <div class="col-12 pt-m-5p pl-m-10p pr-m-10p">
                    <div class="team-image">
                        <img class="img-fluid" src="<?php the_field('section_5_image' ) ?>">
                    </div>
                    <div class="pt-m-10">
                        <p class="content-mobile pt-m-5p"><?php the_field('section_5_content') ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="teamSection2">

    <!--Desktop-->
    <div class="d-none d-lg-block">
        <style>
            .team-motif4{
                z-index: 10;
                position: absolute;
                top: 25%;
                left: 28% !important;
                /*width: 50% !important;*/
                /*height: auto !important;*/
            }
            .team-motif5{z-index: 10;position: absolute;top: 61%; left: 71%;width: auto !important;}

            /*Extended*/
            .thumbnail-card{
                overflow: hidden;
                position: relative;
                background-size: 100% 100% !important;
                background-repeat: no-repeat !important;
                background-position: top center !important;
            }
            .thumbnail-card .box{width: 100%;height: 66vh;}
            .thumbnail-card .title{
                z-index: 103;
                position: absolute;
                margin: 0 auto;
                top: 50%;
                left: 0;
                right: 0;
                transform: translateY(-50%);
                width: 80%;
                text-align: center;
                transition: all .3s;
            }
            .thumbnail-card .title h4{font-family: "Montserrat";color: #58595b;}
            .thumbnail-card:hover .title{display: none;}
            .thumbnail-card .content{
                padding: 10%;
                width: 100%;
                height: 100%;
                background: url('<?php bloginfo('stylesheet_directory');?>/images/team/overlay-03.png');
                background-size: cover !important;
                background-repeat: no-repeat !important;
                background-position: center !important;
                position: absolute;
                bottom: -100%;
                transition: all .7s;
            }
            .thumbnail-card:hover .content{bottom: 0;}
            .thumbnail-card:hover .content .text{overflow: hidden; position: absolute; bottom: 0;}
            .thumbnail-card .content .text p{
                font-size: 12px !important;
                line-height: 18px !important;
            }
        </style>

        <div class="container-fluid pt-lg-5p pb-lg-10p pl-lg-10p pr-lg-10p">
            <div class="row">
                <div class="col-lg-12 text-center pb-lg-5p">
	            <div id="temptitle-color">
                        <h2><?php the_field('title_section_6') ?></h2>    
                        <img class="temptitle-motif1 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/partials/right.png"/>
                        <img class="temptitle-motif2 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/partials/left.png"/>
                    </div>                </div>
                <div class="col-lg-12 pl-lg-10p pr-lg-10p">
                    <div class="container-fluid">
                        <div class="row">
                    
                        <?php if(have_rows('repeater_section_6')): ?>
                            <?php while (have_rows('repeater_section_6')): the_row(); ?>
                                <!--People-->
                                <div class="col-lg-4 pb-lg-30">
                                    <div class="thumbnail-card" style="width: 100%; height: 50vh;  background: url('<?php the_sub_field('image_section_6');?>');">
                                        <div class="box"></div>
                                        <div class="content">
                                            <div class="text">
                                                <h3 class="font-white"><?php the_sub_field('team_name');?></h3>
                                                <p class="font-white"><?php the_sub_field('team_positions');?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Mobile-->
    <div class="d-block d-lg-none">
        <style>
            .team-motif4{
                z-index: 10;
                position: absolute;
                top: 25%;
                left: 28% !important;
                /*width: 50% !important;*/
                /*height: auto !important;*/
            }
            .team-motif5{z-index: 10;position: absolute;top: 61%; left: 71%;width: auto !important;}

            /*Extended*/
            .thumbnail-card{
                overflow: hidden;
                position: relative;
                background-size: 100% 100% !important;
                background-repeat: no-repeat !important;
                background-position: top center !important;
            }
            .thumbnail-card .box{width: 100%;height: 66vh;}
            .thumbnail-card .title{
                z-index: 103;
                position: absolute;
                margin: 0 auto;
                top: 50%;
                left: 0;
                right: 0;
                transform: translateY(-50%);
                width: 80%;
                text-align: center;
                transition: all .3s;
            }
            .thumbnail-card .title h4{font-family: "Montserrat";color: #58595b;}
            .thumbnail-card:hover .title{display: none;}
            .thumbnail-card .content{
                padding: 10%;
                width: 100%;
                height: 100%;
                background: url('<?php bloginfo('stylesheet_directory');?>/images/team/overlay-03.png');
                background-size: cover !important;
                background-repeat: no-repeat !important;
                background-position: center !important;
                position: absolute;
                bottom: -100%;
                transition: all .7s;
            }
            .thumbnail-card:hover .content{bottom: 0;}
            .thumbnail-card:hover .content .text{overflow: hidden; position: absolute; bottom: 0;}
            .thumbnail-card .content .text p{
                font-size: 12px !important;
                line-height: 18px !important;
            }
            @media screen and (max-width: 846px) {
                .thumbnail-card{
                    margin: 0 auto;
                    width: 70%;
                }
                .thumbnail-card .box{
                    height: 40vh;
                }
                .teamSection2 .home-carousel3.owl-theme .owl-nav{
                    position: absolute !important;
                    top: 40% !important;
                    width: 100%;
                }
                .teamSection2 .home-carousel3.owl-theme .owl-nav button.owl-prev{
                    margin: unset;
                    position: absolute;
                    top: unset;
                    left: 30px;
                    transform: unset;
                    font-size: 12px !important;
                    color: #fff !important;
                }
                .teamSection2 .home-carousel3.owl-theme .owl-nav button.owl-next{
                    margin: unset;
                    position: absolute;
                    top: unset;
                    right: 30px;
                    transform: unset;
                    font-size: 12px !important;
                    color: #fff !important;
                }
                .teamSection2 .home-carousel3.owl-theme .owl-nav button.owl-prev img{width: 30px;}
                .teamSection2 .home-carousel3.owl-theme .owl-nav button.owl-next img{width: 30px;}
                .teamSection2 .home-carousel3 .owl-dots{margin-top: 5%;}
                .teamSection2 .home-carousel3 .owl-dots .owl-dot{outline: none !important;}
                .teamSection2 .home-carousel3 .owl-dots .owl-dot.active span{background: #0198b7 !important;}
                .teamSection2 .home-carousel3 .owl-dots .owl-dot:hover span{background: #0198b7 !important;}
            }
        </style>

        <div class="container-fluid pt-m-5p pb-m-20p pl-m-0 pr-m-0">
            <div class="row">
                <div class="col-12 pl-m-15p pr-m-15p text-center">
                    <div id="temptitle-color">
                        <h2><?php the_field('section_3_title') ?></h2>    
                        <img class="temptitle-motif1" src="<?php bloginfo('stylesheet_directory');?>/images/partials/right.png"/>
                        <img class="temptitle-motif2" src="<?php bloginfo('stylesheet_directory');?>/images/partials/left.png"/>
                    </div>
                </div>
                <div class="col-12 pl-m-0 pr-m-0 text-center">
                    <div class="home-carousel3 owl-theme">
                        <?php if(have_rows('repeater_section_6')): ?>
                            <?php while (have_rows('repeater_section_6')): the_row(); ?>
                                <!--People-->
                                <div class="col-12 pt-m-3p">
                                    <div class="thumbnail-card" style="background: url('<?php the_sub_field('image_section_6');?>');">
                                        <div class="box"></div>
                                        <div class="content">
                                            <div class="text">
                                                <h3 class="font-white"><?php the_sub_field('team_name');?></h3>
                                                <p class="font-white"><?php the_sub_field('team_positions');?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--from about-->
<section class="aboutSection4">
        <!--Desktop-->
        <style>
            .org_title {
                padding-top: 3%;
            }
            .org_motif1{
                z-index: 10;
                position: absolute;
                top: 29%;
                left: 33% !important;
                /*width: 50% !important;*/
                /*height: auto !important;*/
            }
            .org_motif2{z-index: 10;position: absolute;top: 87%; left: 66%;width: auto !important;}



            @media screen and (max-width: 846px) {
                .corpus_structure {
                    background-color: none !important;
                    top: 1% !important;
                    position: absolute;
                }
            } 
        </style>
        <div class="d-none d-lg-block">
            <div class="container-fluid pl-lg-10p pr-lg-10p">
                <div class="row">
                    <div class="col-lg-12 text-center">
		      <div id="temptitle-color">
                        <h2><?php the_field('text_section_7') ?></h2>    
                        <img class="temptitle-motif1 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/partials/right.png"/>
                        <img class="temptitle-motif2 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/partials/left.png"/>
                      </div>
                    </div>
                    <div class="pb-lg-5p">
                        <img src="<?php the_field('images_section_7') ?>" alt="" class="w-lg-100p h-lg-100p">
                    </div>
                </div>
                <div class="line-dark-grey"></div>
            </div>
        </div>

        <!--Mobile-->
        <div class="d-block d-lg-none">
            <div class="container-fluid pb-m-5p pl-m-10p pr-m-10p">
                <div class="row">
                    <div class="col-12 text-center">
                        <div id="temptitle-color">
                            <h2><?php the_field('text_section_7') ?></h2>    
                            <img class="temptitle-motif1" src="<?php bloginfo('stylesheet_directory');?>/images/partials/right.png"/>
                            <img class="temptitle-motif2" src="<?php bloginfo('stylesheet_directory');?>/images/partials/left.png"/>
                        </div>
                    </div>
                    <!-- <div class="pb-m-5p text-center">
                        <img src="<?php the_field('images_section_7') ?>" alt="" class="w-lg-90p h-lg-100p">
                    </div> -->


                    <a data-toggle="modal" data-target="#image1">
                        <img class="w-lg-90p h-lg-100p" src="<?php the_field('images_section_7', $agenda->ID) ?>">
                    </a>
                    <div id="image1" class="modal-image modal fade">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">X</button>
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content corpus_structure">
                                <img class="w-lg-100p h-lg-100p" src="<?php the_field('images_section_7', $agenda->ID) ?>">
                            </div>
                        </div>
                    </div>


                </div>
                <div class="line-dark-grey mb-m-10p"></div>
            </div>
        </div>
    </section>


<section class="organizationSection">
    <style>
        .team-motif6{
            z-index: 10;
            position: absolute;
            top: -28%;
            left: 33% !important;
            /*width: 50% !important;*/
            /*height: auto !important;*/
        }
        .team-motif7{z-index: 10;position: absolute;top: 87%; left: 66%;width: auto !important;}

        @media screen and (max-width: 846px) {
            .modal_content_popup {
                background-color: none !important;
            }
            .modal-dialog {
                top: 25%;
            }
        } 
    </style>
    <div class="container-fluid pt-lg-5 pl-m-10p pr-m-10p">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div id="temptitle-color">
                    <h2><?php the_field('text_section_8') ?></h2>    
                    <img class="temptitle-motif1" src="<?php bloginfo('stylesheet_directory');?>/images/partials/right.png"/>
                    <img class="temptitle-motif2" src="<?php bloginfo('stylesheet_directory');?>/images/partials/left.png"/>
                </div>
	    </div>
            <div class="col-lg-12 pl-lg-10p pr-lg-10p">
                <div class="text-center">

                <!-- Desktop -->
                <div class="d-none d-lg-block text-center">
                    <img src="<?php the_field('images_section_8') ?>" alt="" class="img-fluid w-lg-80p h-lg-80p">
                </div>



                    <!-- Mobile -->
                    <!-- Placeholder Image -->
                    <div class="d-block d-lg-none">
                            <img data-toggle="modal" data-target=".bd-example-modal-sm" src="<?php the_field('images_section_8') ?>" alt="" class="img-fluid w-lg-80p h-lg-80p">
                        
                        <!-- Popup Image -->
<!-- 
                        <a data-toggle="modal" data-target="#image">
                        <img class="w-lg-90p h-lg-100p" src="<?php the_field('images_section_8', $agenda->ID) ?>">
                        </a>
                        <div id="image1" class="modal-image modal fade">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">X</button>
                                    <img class="w-lg-90p h-lg-100p" src="<?php the_field('images_section_8', $agenda->ID) ?>">
                                </div>
                            </div>
                        </div> -->

                        <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <div class="modal_content_popup _popup">
                                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">X</button> -->
                                    <img src="<?php the_field('images_section_8') ?>" alt="" class="img-fluid w-lg-100p h-lg-80p">
                                </div>
                            </div>
                        </div>
                    
                    </div>                
                </div>
            </div>
        </div>
    </div>
</section>


<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 pl-lg-10p pr-lg-10p">
            <div class="line-dark-grey">

            </div>
        </div>
    </div>
</div>

<section class="bottomSection">
    <!--Desktop-->
    <div class="d-none d-lg-block">
        <style>
            .team-motif8{
                z-index: 10;
                position: absolute;
                top: -19%;
                left: 16% !important;
                /*width: 50% !important;*/
                /*height: auto !important;*/
            }
            .team-motif9{z-index: 10;position: absolute;top: 59%; left: 58%;width: auto !important;}
            .team-motif10{z-index: 10;position: absolute;top: 134%; left: 0;width: 34% !important;}
        </style>
        <div class="container-fluid pt-lg-5p pb-lg-10p">
            <div class="row">
                <div class="col-lg-6 pl-lg-10p">
		  <div id="temptitle-color">
                    <h2><?php the_field('bottom_text') ?></h2>    
                    <img class="temptitle-motif1 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/partials/right.png"/>
                    <img class="temptitle-motif2 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/partials/left.png"/>
                  </div>
                </div>
                <div class="col-lg-6 pl-lg-15p pr-lg-0">
                    <style>
                        .bg-btn{
                            position: relative;
                            padding: 9% 5%;
                            background: url("<?php bloginfo('stylesheet_directory');?>/images/about/partials/bg-btn-03.png");
                            background-size: 40% 40% !important;
                            background-repeat: no-repeat !important;
                            background-position: center !important;
                        }
                    </style>
		    <div class="boxv r-lg-20p">
		      <a href="<?php the_field('bottom_link') ?>">
                          <div class="newbutton-gr" style="background: url('<?php bloginfo('stylesheet_directory');?>/images/button-gr.png');">
                              <p class="font-white"><?php the_field('button_button') ?></p>
                          </div>
                      </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Mobile-->
    <div class="d-block d-lg-none">
        <style>
            @media screen and (max-width: 846px) {
                .team-motif8{
                    z-index: 10;
                    position: absolute;
                    top: -19%;
                    left: 16% !important;
                    /*width: 50% !important;*/
                    /*height: auto !important;*/
                }
                .team-motif9{z-index: 10;position: absolute;top: 59%; left: 58%;width: auto !important;}
                .team-motif10{z-index: 10;position: absolute;top: 134%; left: 0;width: 34% !important;}
                .bottom-title {
                    font-size: 15px !important;
                    padding-top: 13px !important;
                }
                .newbutton-gr p{font-size: 9px !important;}
                .bottomSection #temptitle-color{padding: 15px;}
                .bottomSection #temptitle-color h2{font-size: 12px !important;}
                .bottomSection #temptitle-color .temptitle-motif1,
                .bottomSection #temptitle-color .temptitle-motif2{width: 14px;}
            }
        </style>
        <div class="container-fluid pt-lg-5p pb-lg-10p pl-lg-12p">
            <div class="row">
                <div class="col-6 pl-m-0 pr-m-0">
                    <div id="temptitle-color">
                        <h2><?php the_field('bottom_text') ?></h2>    
                        <img class="temptitle-motif1" src="<?php bloginfo('stylesheet_directory');?>/images/partials/right.png"/>
                        <img class="temptitle-motif2" src="<?php bloginfo('stylesheet_directory');?>/images/partials/left.png"/>
                    </div>
                </div>
                <div class="col-6 pt-m-5p">
                    <a href="<?php echo get_permalink(); ?>">
                        <div class="newbutton-gr" style="background: url('<?php bloginfo('stylesheet_directory');?>/images/button-gr.png');">
                            <p class="font-white"><?php the_field('button_button') ?></p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<?php endwhile; ?>
<?php get_footer(); ?>