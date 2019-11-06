<?php get_header(''); ?>
<?php while ( have_posts() ) : the_post(); ?>

    <!-- Home Header -->
    <div class="container-fluid home-header fadein">
        <div class="row">
            <div class="home-carousel owl-theme">
                <?php if(have_rows('header_background_repeater')): ?>
                    <?php while (have_rows('header_background_repeater')): the_row(); ?>
                        <div class="item">
                            <div class="col-lg-12 p-0">
                                <div class="boxc">
                                    <div class="header-title">
                                        <h1 class="font-white"><?php the_sub_field('header_title');?></h1>
                                        <img class="home-icon-01 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/home-icon.png"/>
                                        <img class="home-icon-02 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/home-icon-02.png"/>
                                    </div>
                                </div>
                                <img class="img-fluid d-none d-lg-block" src="<?php the_sub_field('background_image');?>"/>
                                <img class="img-fluid d-lg-none" src="<?php the_sub_field('background_image');?>"/>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <style>
        .button-gr p {
            top: -2px !important;
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
        }
    </style>
    <div class="d-block d-lg-none">
        <div class="container-fluid home-brief pos-rel bg-black pt-m-10p pb-m-10p pl-m-10p pr-m-10p">
            <div class="row">
            <div class="col-12">
                <div class="brief-title mb-lg-3p">
                    <h2 class="font-white"><?php the_field('section_2_title') ?></h2>
                    <img class="home-icon-01 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/home-icon.png"/>
                    <img class="home-icon-02 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/home-icon-02.png"/>
                </div>
            </div>
            <div class="col-12 pb-m-10p">
                <img class="img-fluid" src="<?php the_field('image_section_2') ?>"/>
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
                .home-discover .boxc .header-title {
                    width: 90%;
                }
                .home-discover h1 {
                    font-size: 20px !important;
                }
                .home-discover .boxc {
                    width: 263px;
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
                                <div class="boxc">
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
            }
        </style>
        <div class="container-fluid home-contact pos-rel pt-m-20p pb-m-20p">
            <div class="row">
                <div class="boxc w-50p">
                    <div class="contact-title mb-m-3p">
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
<!--                    <img class="home-motif-09 move-left d-none d-lg-block" src="--><?php //bloginfo('stylesheet_directory');?><!--/images/homepage/home-icon-15.png"/>-->
                </div>
            </div>
        </div>
    </div>
</section>


<?php endwhile; ?>
<?php get_footer(); ?>