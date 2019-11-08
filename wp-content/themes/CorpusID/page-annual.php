<?php get_header(''); ?>
<?php while ( have_posts() ) : the_post(); ?>

    <!--shadows-->
    <style>
        .annual-shadows {
            -webkit-box-shadow: 22px 27px 32px -13px rgba(240,240,240,0.77);
            -moz-box-shadow: 22px 27px 32px -13px rgba(240,240,240,0.77);
            box-shadow: 9px 15px 15px 4px #d1d1d1;
        }
        .investmentSection1 h3{color: #808285;}
        .investmentSection1 a{font-family: "OpenSans Bold";color : #414042;}
    </style>

<section class="headerSection fadein">
    <!--Desktop-->
    <div class="d-none d-lg-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="boxc pt-lg-6p pl-lg-65p pr-lg-15p text-center">
                        <p class="font-white"><?php the_field('header_subtitle') ?></p>
                        <h1 class="font-white m-a w-200x">
                            <?php the_field('header_title') ?>
                        </h1>
                    </div>
                    <img class="img-fluid d-none d-lg-block" src="<?php the_field('header_background') ?>"/>
                    <img class="img-fluid d-lg-none" src="<?php the_field('header_background') ?>"/>
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
                    top: 39%;
                    left: 27%;
                    width: 15px !important;
                }
                .motifhead-right {
                    z-index: 40;
                    position: absolute;
                    top: 50%;
                    left: 70%;
                    width: 15px !important;
                }
            }
        </style>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="boxc">
                        <p class="font-white text-center"><?php the_field('header_subtitle') ?></p>
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

<section class="investmentSection1 pos-rel pt-lg-10p pb-lg-10p slideanim">
    <!--Desktop-->
    <div class="d-none d-lg-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 pb-lg-5p pl-lg-15p pr-lg-15p text-center">
                    <h3><?php the_field('title_section_2') ?></h3>
                </div>
                <div class="col-lg-12 pl-lg-0 pr-lg-0">
                    <div class="container-fluid pl-lg-5p pr-lg-5p">
                        <div class="row">
                            <?php if(have_rows('repeater_section_2')): ?>
                                <?php while (have_rows('repeater_section_2')): the_row(); ?>
                                    <div class="col-lg-3 pl-lg-3p pr-lg-3p">
                                        <a href="<?php the_sub_field('file_download') ?>" target="_blank"><img src="<?php the_sub_field('images');?>" alt="" class="img-fluid annual-shadows mb-lg-1p"></a>
                                        <div class="text-center pt-lg-15p">
                                            <a href="<?php the_sub_field('file_download') ?>" target="_blank"><?php the_sub_field('title');?></a>
                                            <p><?php the_sub_field('date');?></p>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <img class="home-motif-02 move-right d-none d-lg-block" style="bottom:3%;left: -10%;" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/home-icon-04.png"/>
            </div>
        </div>
    </div>

    <!--Mobile-->
    <div class="d-block d-lg-none">
        <style>
            @media screen and (max-width: 846px) {
                .annual-title {
                    font-size: 18px !important;
                }
                .text {
                    font-size: 14px !important;
                    line-height: 16px !important;
                }
                .text2 {
                    line-height: 10px !important;
                }
            }
        </style>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 pb-lg-5p pl-lg-15p pr-lg-15p text-center">
                    <h3 class="annual-title"><?php the_field('title_section_2') ?></h3>
                </div>
                <div class="col-12 pl-m-0 pr-m-0">
                    <div class="container-fluid pl-m-10p pr-m-10p">
                        <div class="row">
                            <?php if(have_rows('repeater_section_2')): ?>
                                <?php while (have_rows('repeater_section_2')): the_row(); ?>
                                    <div class="col-6 pl-m-3p pr-m-3p">
                                        <a href="<?php the_sub_field('file_download') ?>" target="_blank"><img src="<?php the_sub_field('images');?>" alt="" class="img-fluid annual-shadows mb-lg-1p"></a>
                                        <div class="text-center pt-lg-15p">
                                            <a href="<?php the_sub_field('file_download') ?>" target="_blank"><p class="text"><?php the_sub_field('title');?></p></a>
                                            <p class="text2"><?php the_sub_field('date');?></p>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <img class="home-motif-02 move-right d-none d-lg-block" style="bottom:3%;left: -10%;" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/home-icon-04.png"/>
            </div>
        </div>
    </div>
</section>


<?php endwhile; ?>
<?php get_footer(); ?>