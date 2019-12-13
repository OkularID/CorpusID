<?php get_header('page'); ?>
<?php while ( have_posts() ) : the_post(); ?>


<section class="headerSection">
    <!--Desktop-->
    <div class="d-none d-lg-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="boxc pl-lg-55p pr-lg-12p text-center">
			<div id="temptitle-color" class="mb-lg-0 text-center float-right">
                            <p class="font-white mb-lg-0"><?php the_field('header_section_subtitle') ?></p>
                            <h1 class="font-white m-a w-200x"><?php the_field('header_section_title') ?></h1>
                            <img class="temptitle-motif1 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/partials/left-white.png"/>
                            <img class="temptitle-motif2 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/partials/right-white.png"/>
                        </div>
                    </div>
                    <img class="img-fluid d-none d-lg-block" src="<?php the_field('header_section') ?>"/>
                    <img class="img-fluid d-lg-none" src="<?php bloginfo('stylesheet_directory');?>/images/transaction/bg-trx-01.png"/>
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
                    top: 37%;
                    left: 17%;
                    width: 15px !important;
                }
                .motifhead-right {
                    z-index: 40;
                    position: absolute;
                    top: 52%;
                    left: 82%;
                    width: 15px !important;
                }
            }
        </style>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="boxc">
                        <p class="font-white text-center"><?php the_field('header_section_subtitle') ?></p>
                        <h1 class="font-white header-title pl-m-20p pr-m-20p text-center"><?php the_field('header_section_title') ?></h1>
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
            .transaction-image {position: absolute; z-index: 1030;  width: 70%; height: auto;}
            .transaction-motif1{
                z-index: 1030;
                position: absolute;
                top: 10% !important;
                left: 26% !important;
                width: auto !important;
            }
            .transaction-motif2{
                z-index: 10;
                position: absolute;
                top: 64%;
                left: 59% !important;
                width: 50% !important;
                height: auto !important;
            }
            .title_motif1 {
                position: absolute;
                left: 32px;
                top: 26%;
            }
            .title_motif2 {
                padding-left: 49%;
            }
        </style>
        <div class="container-fluid pt-lg-5p pb-lg-15p">
            <div class="row">
                <div class="col-lg-12 pb-lg-5p pl-lg-25p pr-lg-25p text-center">
                    <h3><?php the_field('title_section_2') ?></h3>
                </div>
                <div class="col-lg-6 pt-lg-5p pl-lg-10p pr-lg-5p pos-rel">
                    <img class="img-fluid transaction-image" src="<?php the_field('image_section_2') ?>">
                    <!--Motif-->
                    <img class="transaction-motif1 move-left d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/investment/partials/partial-02.png"/>
                    <img class="transaction-motif2 move-left d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/investment/partials/partial-03.png"/>
                </div>
                <div class="col-lg-6 pt-lg-10p pl-lg-5p pr-lg-3p">
		   <div id="temptitle-color">
                        <h2><?php the_field('title_content_section_2') ?></h2>    
                        <img class="temptitle-motif1 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/partials/right.png"/>
                        <img class="temptitle-motif2 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/partials/left.png"/>
                    </div>
                    <div class="d-lg-block"><?php the_field('content_section_2') ?></div>
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
                .transaction-motif1 {
                    width: 20% !important;
                    left: 31% !important;
                    top: -6% !important;
                }
                .transaction-motif2 {
                    z-index: 10;
                    position: absolute;
                    top: 29%;
                    left: 56% !important;
                    width: 50% !important;
                    height: auto !important;
                }
		#temptitle-color h2{font-size:20px !important;}
            }
        </style>
        <div class="container-fluid pt-m-5p pb-m-10p">
            <div class="row">
                <div class="col-12 pb-m-10p pl-m-20p pr-m-20p text-center my-5 my-lg-0">
                    <h3 class="header-title1 font-gray"><?php the_field('title_section_2') ?></h3>
                </div>
                <div class="col-12 pb-m-20p pos-rel text-center">
                    <img class="img-fluid investment-image" src="<?php the_field('image_section_2') ?>">
                    <!--Motif-->
                    <img class="transaction-motif1 move-left d-block d-lg-none" src="<?php bloginfo('stylesheet_directory');?>/images/investment/partials/partial-02.png"/>
                    <img class="transaction-motif2 move-left d-block d-lg-none" src="<?php bloginfo('stylesheet_directory');?>/images/investment/partials/partial-03.png"/>
                </div>
                <div class="col-12 pt-m-3p pl-m-10p pr-m-10p">
                    <div id="temptitle-color" class="mt-m-10p">
                        <h2><?php the_field('title_content_section_2') ?></h2>    
                        <img class="temptitle-motif1" src="<?php bloginfo('stylesheet_directory');?>/images/partials/right.png"/>
                        <img class="temptitle-motif2" src="<?php bloginfo('stylesheet_directory');?>/images/partials/left.png"/>
                    </div>
                    <div class="pt-m-3p content_ pl-m-0 pr-m-0"><?php the_field('content_section_2') ?></div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="serviceSection">
        <div class="d-none d-lg-block">
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
                .img_solution {
                    width: 200% !important;
                    height: auto !important;
                }
                .owl-carousel .owl-stage-outer {
                    overflow: unset;
                }
                .owl-carousel .owl-item img {
                    width: 70%;
                }
                .service-motif3{
                    z-index: 1030 !important;
                    position: absolute;
                    top: -6%;
                    left: 62% !important;
                    width: auto;
                }
                .owl-prev img {
                    width: 48px;
                }
                .owl-next img {
                    width: 48px;
                }
                .solution_slider.owl-theme .owl-nav{
                    position: absolute;
                    top: -46%;
                    right: 15%;
                }
                .solution_slider.owl-theme .owl-nav button.owl-prev{
                    left: -74px;
                }
                .solution_slider.owl-theme .owl-nav button.owl-next{
                    right: -31px;
                }
                .owl-theme .owl-dots .owl-dot {
                    display: none;
                }
                .positionService {
                    padding: 2% 20%;
                }
                ._sub {
                    padding: 2% 0% 21% 21%
                }
            </style>
            <div class="container-fluid pt-lg-10p bg-black font-white">
                <div class="row">
                    <div class="col-lg-6 pl-lg-10p pb-lg-5p">
                        <h2><?php the_field('section_3_title') ?></h2>
                        <!--Motif-->
                        <img class="service-motif1 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/investment/partials/block-02.png"/>
                        <img class="service-motif2 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/investment/partials/block-03.png"/>
                    </div>
                    <div class="col-lg-6"></div>
                    <div class="col-lg-12 px-lg-0">
                        <div class="solution_slider owl-theme">
                            <?php if(have_rows('repeater_section_3')): ?>
                                <?php while (have_rows('repeater_section_3')): the_row(); ?>
                                    <div class="item">
                                        <div class="positionService m-lg-0 px-lg-10">
                                            <h3><span style="color: #009DAF;"><?php the_sub_field('big_num');?></span> <?php the_sub_field('num');?></h3>
                                        </div>
                                        <div class="_sub">
                                            <?php the_sub_field('sub');?>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--Mobile-->
        <div class="d-block d-lg-none">
            <style>
                @media screen and (max-width: 846px) {
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
                    .img_solution {
                        width: 100% !important;
                        padding-left: 10px;
                        padding-right: 10px;
                        height: auto !important;
                    }
                    .owl-carousel .owl-stage-outer {
                        overflow: unset;
                    }
                    .owl-carousel .owl-item img {
                        width: 70%;
                    }
                    .owl-prev img {
                        width: 48px;
                    }
                    .owl-next img {
                        width: 48px;
                    }
                    .solution_slider.owl-theme .owl-nav{
                        position: absolute;
                        top: -240%;
                        right: 15%;
                    }
                    .solution_slider.owl-theme .owl-nav button.owl-prev{
                        left: -74px;
                    }
                    .solution_slider.owl-theme .owl-nav button.owl-next{
                        right: -31px;
                    }
                    .owl-theme .owl-dots .owl-dot {
                        display: none;
                    }
                    .positionService {
                        padding: 10% 0 0 20%;
                    }
                    ._sub {
                        padding: 2% 0% 21% 14%;
                    }
                }
            </style>
            <div class="container-fluid pt-m-10p pb-m-10p bg-black font-white">
                <div class="row">
                    <div class="col-12 pl-m-10p pb-m-5p">
                        <div id="temptitle-color">
                            <h2 style="color: #fff !important;"><?php the_field('section_3_title') ?></h2>   
                            <img class="temptitle-motif1" src="<?php bloginfo('stylesheet_directory');?>/images/partials/left-white.png"/>
                            <img class="temptitle-motif2" src="<?php bloginfo('stylesheet_directory');?>/images/partials/right-white.png"/>
                        </div>
                        <!--Motif-->
                        <img class="service-motif1 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/investment/partials/block-02.png"/>
                        <img class="service-motif2 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/investment/partials/block-03.png"/>
                    </div>
                    <div class="col-12"></div>
                    <div class="col-m-12 px-lg-0">
                        <div class="solution_slider owl-theme">
                            <?php if(have_rows('repeater_section_3')): ?>
                                <?php while (have_rows('repeater_section_3')): the_row(); ?>
                                    <div class="item">
                                        <div class="positionService m-m-0 px-m-10">
                                            <h3><span style="color: #009DAF;"><?php the_sub_field('big_num');?></span> <?php the_sub_field('num');?></h3>
                                        </div>
                                        <div class="_sub">
                                            <?php the_sub_field('sub');?>
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
            .title_btm {
                position: absolute;
                padding-left: 6%;
                top: -11px;
            }
            .title_btm2 {
                position: absolute;
                padding-left: 42%;
            }
        </style>
        <div class="container-fluid pt-m-10p">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="boxv font-white">

                        <img class="title_btm d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/partials/left-white.png"/>
                            <h1 class="pt-lg-0 pl-lg-9p"><?php the_field('bottom_title') ?></h1>
                        <img class="title_btm2 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/partials/right-white.png"/>


                        <br>
                        <p class="mt-lg-25 pl-lg-9p pr-lg-50p"><?php the_field('bottom_content') ?></p>
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
                .m-bottomSection{
                    background-size: cover !important;
                    background-repeat: no-repeat !important;
                    background-position: center !important;
                    padding: 10%;
                    width: 100%;
                    height: auto;
                }
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
                .m_img {
                    height: 144px;
                }
            }
        </style>
        <div class="container-fluid m-bottomSection" style="background: url('<?php bloginfo('stylesheet_directory');?>/images/investment/bottom-02.jpg');">
            <div class="row">
                <div class="col-12 p-0">
                    <div id="temptitle-color">
                        <h2 style="color: #fff !important;"><?php the_field('bottom_title') ?></h2>   
                        <img class="temptitle-motif1" src="<?php bloginfo('stylesheet_directory');?>/images/partials/left-white.png"/>
                        <img class="temptitle-motif2" src="<?php bloginfo('stylesheet_directory');?>/images/partials/right-white.png"/>
                    </div>
                    <div class="font-white pl-m-7p">
                        <p class="bottom_content_text bottom_content_mobile"><?php the_field('bottom_content') ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php endwhile; ?>
<?php get_footer(); ?>