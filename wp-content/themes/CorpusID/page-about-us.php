<?php get_header(''); ?>
<?php while ( have_posts() ) : the_post(); ?>


<section class="headerSection">
<!--Desktop-->
    <div class="d-none d-lg-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="boxc pl-lg-62p pr-lg-3p">
                        <h1 class="font-white m-a w-200x"><?php the_field('header_title') ?></h1>
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
                height: 100vh !important;
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
        </style>
        <div class="container-fluid pt-lg-5p pb-lg-5p">
            <div class="row">
                <div class="col-lg-12 pb-lg-10p pl-lg-20p pr-lg-20p text-center">
                    <h3><?php the_field('about_section_2_title') ?></h3>
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
                .content1 p{
                    line-height: 20px;
                }
            }
        </style>
        <div class="container-fluid pt-m-5p pb-m-5p">
            <div class="row">
                <div class="col-12 pb-m-10p pl-m-20p pr-m-20p text-center">
                    <h3 class="about1-header"><?php the_field('about_section_2_title') ?></h3>
                </div>
                <div class="col-12 pos-rel">
                    <div class="text-center">
                        <img class="img-fluid about-image1" src="<?php the_field('about_images_section_2') ?>">
                    </div>
                    <img class="about-motif0 move-left d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/about/partials/partials-03.png"/>
                </div>
                <div class="col-12 pt-m-2p pb-m-10p pl-m-5p pr-m-5p">
                    <div class="content1 pb-m-10p">
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
            .about-motif1{z-index: 10;position: absolute;top: 6%; left: -74%;width: auto !important;}
            .about-motif1-2{z-index: 10;position: absolute;top: 21%; left: 50%;width: auto !important;}
            .about-motif2{z-index: 10;position: absolute;top: 75%; left: -83%;width: auto !important;}

        </style>
        <div class="container-fluid font-white mb-lg-m20p pt-lg-10p pb-lg-30p pl-lg-5p pr-lg-5p" style="background: black;">
            <div class="row">
                <div class="col-lg-6 pt-lg-11p pl-lg-4p pos-rel">
                    <h1><?php the_field('about_section_3_title') ?></h1>
                    <p><?php the_field('about_section_3_content') ?></p>
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
                .content2{
                    line-height: 20px;
                }
            }
        </style>
        <div class="container-fluid font-white pt-m-10p pb-m-0 pl-m-5p pr-m-5p" style="background: black;">
            <div class="row">
                <div class="col-12 pos-rel">
                    <h1 class="text-center"><?php the_field('about_section_3_title') ?></h1>
                    <p class="content2"><?php the_field('about_section_3_content') ?></p>
                </div>
                <div class="col-12">
                    <img class="img-fluid" src="<?php the_field('about_section_3_image') ?>" alt="">
<!--                    <img class="about-motif1 move-left d-none d-lg-block" src="--><?php //bloginfo('stylesheet_directory');?><!--/images/about/partials/block2-03.png"/>-->
<!--                    <img class="about-motif1-2 move-left d-none d-lg-block" src="--><?php //bloginfo('stylesheet_directory');?><!--/images/about/partials/block2-04.png"/>-->
<!---->
<!--                    <img class="about-motif move-left d-none d-lg-block" src="--><?php //bloginfo('stylesheet_directory');?><!--/images/about/partials/partials2-04.png"/>-->
<!--                    <img class="about-motif2 move-left d-none d-lg-block" src="--><?php //bloginfo('stylesheet_directory');?><!--/images/about/partials/block-01.png"/>-->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="aboutSection2">
<!--Desktop-->
    <div class="d-none d-lg-block">
        <div class="container-fluid pt-lg-5p pb-lg-5p pl-lg-5p pr-lg-5p">
            <div class="row">
                <div class="col-lg-12 pt-lg-5p pb-lg-10p text-center">
                    <div class="container-fluid">
                        <div class="row">
                            <?php if(have_rows('repeater_section_3')): ?>
                                <?php while (have_rows('repeater_section_3')): the_row(); ?>
                                    <div class="col-lg-6">
                                        <img class="img-fluid" src="<?php the_sub_field('icon');?>" alt="">
                                        <h2 class="font-white"><?php the_sub_field('icon_title');?></h2>
                                        <p class="pt-lg-12p pl-lg-10p pl-lg-10p font-black pl-lg-10p pr-lg-10p"><?php the_sub_field('icon_content');?></p>
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
                    left: 0;
                    transform: unset;
                    font-size: 12px !important;
                    color: #fff !important;
                }
                .about-slider-carousel.owl-theme .owl-nav button.owl-next{
                    margin: unset;
                    position: absolute;
                    top: unset;
                    right: 0;
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
            }
        </style>
        <div class="container-fluid pt-m-5p pb-m-5p pl-m-5p pr-m-5p iconn">
            <div class="row">
                <div class="col-12 pt-m-5p pb-m-35p text-center">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="about-slider-carousel owl-theme">
                                    <?php if(have_rows('repeater_section_3')): ?>
                                        <?php while (have_rows('repeater_section_3')): the_row(); ?>
                                            <div class="item about_slider">
                                                <div class="col-12">
                                                    <img class="img-fluid bg-black" src="<?php the_sub_field('icon');?>" alt="">
                                                    <h2 class="font-white bg-black"><?php the_sub_field('icon_title');?></h2>
                                                    <p class="font-black pl-m-10p pr-m-10p content3"><?php the_sub_field('icon_content');?></p>
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
        </div>
    </div>
</section>

<!--Journey Section-->
    <!-- MILESTONE SECTION -->

<section class="aboutSection3">

<!--Desktop-->
    <div class="d-none d-lg-block"">
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
                bottom: 35%;
                right: 30px;
                width: 60px;
            }
            .milestone .owl-theme .owl-nav button.owl-prev{
                margin: 0;
                position: unset;
                top: unset;
                left: unset;
                transform: unset;
                font-size: 12px !important;
                color: #fff !important;
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
        </style>
        <div class="container-fluid pb-lg-10p">
            <div class="row">
                <div class="col-lg-12 pl-lg-10p">
                    <h2><?php the_field('about_section_4_title') ?></h2>
                </div>
                <div class="col-lg-12 pt-lg-5p pb-lg-5p pl-lg-10p pr-lg-10p">
                    <div class="milestone">
                        <div class="line"></div>
                        <div id="sync2" class="owl-carousel owl-theme">
                            <?php if(have_rows('journey_repeater' )): ?>
                                <?php while (have_rows('journey_repeater')): the_row(); ?>
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
                                                        <img src="<?php the_sub_field('images');?>" alt="" class="img-fluid w-lg-100p h-lg-100p">
                                                    </div>
                                                    <div class="col-lg-9 pl-lg-0 pr-lg-0">
                                                        <div class="brief">
                                                            <h3 class="font-white"><?php the_sub_field('year');?></h3>
                                                            <p class="font-white"><b><?php the_sub_field('title');?></b></p><br>
                                                            <div class="font-white">
                                                                <p><?php the_sub_field('content');?></p>
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
    <div class="d-block d-lg-none"">
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
                padding: 10% 5%;
                width: 100%;
                background:url("<?php bloginfo('stylesheet_directory');?>/images/about/partials/about-background-04.png");
                background-size: 100% 100% !important;
                background-repeat: no-repeat !important;
                background-position: center !important;
                height: auto !important;
            }
            .milestoneMobile .boxMobile .desc{
                width: 100%;
                height: 100px;
                overflow: hidden;
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
            }
            .milestone .owl-theme .owl-dots{display: none;}
            .milestone .owl-theme .owl-nav{
                position: absolute;
                margin-top: 0;
                bottom: 35%;
                right: 30px;
                width: 60px;
            }
            .milestone .owl-theme .owl-nav button.owl-prev{
                font-size: 60px !important;
                color: #fff !important;
            }
            .milestone .owl-theme .owl-nav button.owl-prev img{width: 75%}
            .milestone .owl-theme .owl-nav button.owl-next{
                font-size: 60px !important;
                color: #fff !important;
            }
            .milestone .owl-theme .owl-nav button.owl-next img{width: 75%}
        }
    </style>
    <div class="container-fluid pb-m-10p">
        <div class="row">
            <div class="col-12 pl-m-10p">
                <h2><?php the_field('about_section_4_title') ?></h2>
            </div>
            <div class="col-12 pt-m-5p pb-m-5p pl-m-10p pr-m-10p">
                <div class="milestone">
                    <div class="home-carousel2 owl-theme">
                        <?php if(have_rows('journey_repeater' )): ?>
                            <?php while (have_rows('journey_repeater')): the_row(); ?>
                                <div class="item">
                                    <div class="boxMobile">
                                        <div class="brief">
                                            <img class="w-m-100p" src="<?php the_sub_field('images');?>"/>
                                            <div class="milestoneMobile pos-rel">
                                                <p class="year_"><?php the_sub_field('year');?></p>
                                                <div class="boxMobile">
                                                    <p class="font-white"><b><?php the_sub_field('title');?></b></p>
                                                    <div class="desc">
                                                        <p class="font-white"><?php the_sub_field('content');?></p>
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

<section class="aboutSection4">
<!--Desktop-->
    <div class="d-none d-lg-block">
        <div class="container-fluid pb-lg-5p pl-lg-10p pr-lg-10p">
            <div class="row">
                <div class="col-lg-12 pb-lg-5p">
                    <h3 class="text-center pb-lg-5p font-gray"><?php the_field('about_section_5_title') ?></h3>
                </div>
                <div class="pb-lg-5p">
                    <img src="<?php the_field('about_section_5_image') ?>" alt="" class="w-lg-100p h-lg-100p">
                </div>
            </div>
            <div class="line-dark-grey"></div>
        </div>
    </div>

<!--Mobile-->
    <div class="d-block d-lg-none">
        <style>

        </style>
        <div class="container-fluid pb-m-5p pl-m-10p pr-m-10p">
            <div class="row">
                <div class="col-12 pb-m-5p">
                    <h3 class="text-center pb-m-5p font-gray"><?php the_field('about_section_5_title') ?></h3>
                </div>
                <div class="pb-m-5p text-center">
                    <img src="<?php the_field('about_section_5_image') ?>" alt="" class="w-lg-90p h-lg-100p">
                </div>
            </div>
            <div class="line-dark-grey"></div>
        </div>
    </div>
</section>


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
                <div class="col-lg-6 pl-lg-10p pr-lg-20p">
                    <h3><?php the_field('text_bottom') ?></h3>
                    <!--Motif section-->
                    <img class="team-motif8 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/team/block1.png"/>
                    <img class="team-motif9 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/team/block2.png"/>
                    <img class="team-motif10 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/team/block-01.png"/>
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
                    <div class="bg-btn font-white text-center">
                        <b class=""><?php the_field('button_bottom') ?></b>
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
            }
        </style>
        <div class="container-fluid pt-lg-5p pb-lg-10p pl-lg-12p">
            <div class="row">
                <div class="col-6 pl-m-0 pr-m-0">
                    <h3 class="bottom-title"><?php the_field('text_bottom') ?></h3>
                    <!--Motif section-->
                </div>
                <div class="col-6">
                    <style>
                        @media screen and (max-width: 846px) {
                            .bg-btn{
                                position: relative;
                                padding: 9% 5%;
                                background: url("<?php bloginfo('stylesheet_directory');?>/images/about/partials/bg-btn-03.png");
                                background-size: 65% 51% !important;
                                background-repeat: no-repeat !important;
                                background-position: center !important;
                            }
                            .out-team {
                                font-size: 13px !important;
                            }
                        }
                    </style>
                    <div class="bg-btn font-white text-center">
                        <b class="out-team"><?php the_field('button_bottom') ?></b>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


<?php endwhile; ?>
<?php get_footer(); ?>