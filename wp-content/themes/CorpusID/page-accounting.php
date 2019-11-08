<?php get_header(''); ?>
<?php while ( have_posts() ) : the_post(); ?>

<section class="headerSection">
    <!--Desktop-->
    <div class="d-none d-lg-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="boxc pl-lg-62p pr-lg-20p text-center">
                        <p class="font-white"><?php the_field('header_section_subtitle') ?></p>
                        <h1 class="font-white m-a w-200x">
                            <?php the_field('header_section_title') ?>
                        </h1>
                    </div>
                    <img class="img-fluid d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/header/header-background-01.png"/>
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
                    top: 45%;
                }
                .mobile_background {
                    width: 100% !important;
                    height: 94vh !important;
                }
                .motifhead-left {
                    z-index: 40;
                    position: absolute;
                    top: 38%;
                    left: 22%;
                    width: 15px !important;
                }
                .motifhead-right {
                    z-index: 40;
                    position: absolute;
                    top: 52%;
                    left: 77%;
                    width: 15px !important;
                }
            }
        </style>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="boxc">
                        <p class="font-white text-center"><?php the_field('header_section_subtitle') ?></p>
                        <h1 class="font-white header-title text-center"><?php the_field('header_section_title') ?></h1>
                    </div>
                    <img class="img-fluid mobile_background d-lg-none" src="<?php bloginfo('stylesheet_directory');?>/images/header/mobile_header.jpg"/>
                    <img class="img-fluid motifhead-left d-lg-none" src="<?php bloginfo('stylesheet_directory');?>/images/header/block-left.png"/>
                    <img class="img-fluid motifhead-right d-lg-none" src="<?php bloginfo('stylesheet_directory');?>/images/header/block-right.png"/>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="investmentSection1">
    <!--Desktop-->
    <div class="d-none d-lg-block">
        <style>
            .accounting-image {position: absolute; z-index: 1030;  width: 70%; height: auto;}
            .accounting-motif1{
                z-index: 1030;
                position: absolute;
                top: 10% !important;
                left: 26% !important;
                width: auto !important;
            }
            .accounting-motif2{
                z-index: 10;
                position: absolute;
                top: 66%;
                left: 59% !important;
                width: 50% !important;
                height: auto !important;
            }
        </style>
        <div class="container-fluid pt-lg-5p pb-lg-15p">
            <div class="row">
                <div class="col-lg-12 pb-lg-5p pl-lg-25p pr-lg-25p text-center">
                    <h3><?php the_field('title_section_2') ?></h3>
                </div>
                <div class="col-lg-6 pt-lg-5p pl-lg-10p pr-lg-5p pos-rel">
                    <img class="img-fluid accounting-image" src="<?php the_field('image_section_2') ?>">
                    <!--Motif-->
                    <img class="accounting-motif1 move-left d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/investment/partials/partial-02.png"/>
                    <img class="accounting-motif2 move-left d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/investment/partials/partial-03.png"/>
                </div>
                <div class="col-lg-6 pt-lg-10p pl-lg-5p pr-lg-0">
                    <h3 class="pr-lg-50p"><?php the_field('title_content_section_2') ?></h3>
                    <p class="pt-lg-5p"><?php the_field('content_section_2') ?></p>
                </div>
            </div>
        </div>
    </div>

    <!--Mobile-->
    <div class="d-block d-lg-none">
        <style>
            @media screen and (max-width: 846px) {
                .header-title1 {
                    font-size: 18px !important;
                }
                .investment-image {position: relative; z-index: 1030;  width: 70%; height: auto;}
                .content-title {
                    font-size: 22px !important;
                }
                .content_sec {
                    font-size: 13px !important;
                }
                .content_sec p{
                    line-height: 20px !important;
                }
                .accounting-motif1 {
                    width: 20% !important;
                    left: 31% !important;
                    top: -6% !important;
                }
                .accounting-motif2 {
                    z-index: 10;
                    position: absolute;
                    top: 29%;
                    left: 56% !important;
                    width: 50% !important;
                    height: auto !important;
                }
            }
        </style>
        <div class="container-fluid pt-m-5p pb-m-10p">
            <div class="row">
                <div class="col-12 pb-m-5p pl-m-25p pr-m-25p text-center">
                    <h3 class="header-title1 font-gray"><?php the_field('title_section_2') ?></h3>
                </div>
                <div class="col-12 pb-m-20p pos-rel text-center">
                    <img class="img-fluid investment-image" src="<?php the_field('image_section_2') ?>">
                    <!--Motif-->
                    <img class="accounting-motif1 move-left d-block d-lg-none" src="<?php bloginfo('stylesheet_directory');?>/images/investment/partials/partial-02.png"/>
                    <img class="accounting-motif2 move-left d-block d-lg-none" src="<?php bloginfo('stylesheet_directory');?>/images/investment/partials/partial-03.png"/>
                </div>
                <div class="col-12 pt-m-3p">
                    <h2 class="content-title pl-m-5p font-gray"><?php the_field('title_content_section_2') ?></h2>
                    <div class="content_sec pt-m-3p pl-m-5p pr-m-5p"><?php the_field('content_section_2') ?></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="serviceSection">
    <style>
        .service-motif1{
            z-index: 1030;
            position: absolute;
            top: -12% !important;
            left: 14% !important;
            width: auto !important;
        }
        .service-motif2{
            z-index: 10;
            position: absolute;
            top: 37%;
            left: 52% !important;
            width: auto;
        }
        .service-motif3 {
            z-index: 1030 !important;
            position: absolute;
            top: -6%;
            left: 40% !important;
            width: auto;
        }
    </style>
    <div class="container-fluid pt-lg-10p pb-lg-10p bg-black font-white">
        <div class="row">
            <div class="col-lg-6 pl-lg-10p pb-lg-5p">
                <h2><?php the_field('section_3_title') ?></h2>
                <!--Motif-->
                <img class="service-motif1 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/investment/partials/block-02.png"/>
                <img class="service-motif2 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/investment/partials/block-03.png"/>

            </div>
            <div class="col-lg-6">
                <!--Slider-->
            </div>
            <div class="col-lg-12 pl-lg-5p pr-lg-5p">
                <div class="container-fluid" style="overflow: unset !important;">
                    <div class="row">
                        <?php if(have_rows('repeater_section_3')): ?>
                            <?php while (have_rows('repeater_section_3')): the_row(); ?>
                                <div class="col-lg-6 pl-lg-5p pr-lg-5p">
                                    <img src="<?php the_sub_field('image');?>" alt="" class="img-fluid w-lg-100p">
                                    <img class="service-motif3 move-right d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/investment/partials/partial-04.png"/>
                                    <div class="positionService">
                                        <h3><span><?php the_sub_field('big_num');?></span> <?php the_sub_field('num');?></h3>
                                    </div>
                                    <p><?php the_sub_field('sub');?></p>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bottomSection">
    <!--Desktop-->
    <div class="d-none d-lg-block">
        <style>
            .boxv {
                top: 50%;
            }
            .service-motif4 {
                z-index: 1030 !important;
                position: absolute;
                top: 51%;
                left: 76% !important;
                width: auto;
            }
        </style>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="boxv font-white">
                        <h1 class="pt-lg-0 pl-lg-9p"><?php the_field('bottom_title') ?></h1>
                        <br>
                        <p class="pl-lg-9p pr-lg-50p"><?php the_field('bottom_content') ?></p>
                    </div>
                    <img class="img-fluid d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/investment/bottom-02.jpg"/>
                    <img class="img-fluid d-lg-none" src="<?php bloginfo('stylesheet_directory');?>/images/investment/bottom-02.jpg"/>
                    <img class="service-motif4 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/investment/partials/block-01.png"/>
                </div>
            </div>
        </div>
    </div>

    <!--Mobile-->
    <div class="d-block d-lg-none">
        <style>
            @media screen and (max-width: 846px) {
                .boxv {
                    top: 50%;
                }
                .bottom_title {
                    font-size: 25px !important;
                }
                .bottom_content_text {
                    line-height: 20px !important;
                }
                .bottom_content_mobile {
                    overflow: hidden;height: 60px;
                }
            }
        </style>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="boxv font-white pl-m-7p">
                        <h1 class="bottom_title"><?php the_field('bottom_title') ?></h1>
                        <br>
                        <p class="bottom_content_text bottom_content_mobile"><?php the_field('bottom_content') ?></p>
                    </div>
                    <img class="img-fluid d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/investment/bottom-02.jpg"/>
                    <img class="img-fluid d-lg-none" src="<?php bloginfo('stylesheet_directory');?>/images/investment/bottom-02.jpg"/>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endwhile; ?>
<?php get_footer(); ?>