<?php get_header('page'); ?>
<?php while ( have_posts() ) : the_post(); ?>

    <style type="text/css">
        .investmentSection1 h4{color: #808285;}
        .box-shadoww {
            -webkit-box-shadow: 0px 27px 23px 2px rgba(232,225,232,0.44);
            -moz-box-shadow: 0px 27px 23px 2px rgba(232,225,232,0.44);
            box-shadow: 0px 27px 23px 2px rgba(232,225,232,0.44);
        }
        .button-gr p {
            left: 15px;
        }
    </style>

<section class="headerSection fadein">
    <!--Desktop-->
    <div class="d-none d-lg-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="boxc pt-lg-6p pl-lg-66p pr-lg-14p text-center">
                        <p class="font-white"><?php the_field('header_sub_title') ?></p>
                        <h1 class="font-white m-a w-200x"><?php the_field('header_title') ?></h1>
                    </div>
                    <img class="img-fluid d-none d-lg-block" src="<?php the_field('header_image') ?>"/>
                    <img class="img-fluid d-lg-none" src="<?php the_field('header_image') ?>"/>
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
                        <p class="font-white text-center"><?php the_field('header_sub_title') ?></p>
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

<section class="investmentSection1 pt-lg-10p pb-lg-10p pl-lg-5p pr-lg-5p slideanim">
    <style>
        @media screen and (max-width: 846px) {

        }
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 pb-lg-5p pl-lg-5p pr-lg-5p text-center">
                <h4><?php the_field('title_section_2') ?></h4>
            </div>
            <div class="col-lg-12">
                <div class="container-fluid">
                    <div class="row">
                        <?php
                        $params = array('post_type' => 'financial_highlight' , 'order' => 'DESC', 'post_status' => 'publish', 'posts_per_page' => -1);
                        $fh = new WP_Query($params);
                        if($fh->have_posts()){
                            while ($fh->have_posts()) : $fh->the_post();
                                ?>
                                <div class="col-lg-6 pb-lg-5p">
                                    <div class="container-fluid pb-lg-5p box-shadoww">
                                        <img src="<?php the_field('image') ?>" alt="" class="img-fluid">
                                        <div class="mb-lg-20 pt-lg-3p pl-lg-5p pr-lg-10p h-lg-105 of-lg-h">
                                            <p><?php the_field('date'); ?></p>
                                            <b class="font-gray"><?php echo wp_trim_words( get_the_title(), 18, ' ...' ); ?></b>
                                        </div>
                                        <a class="button-gr pl-lg-5p d-lg-inline" href="<?php echo get_permalink(); ?>">
                                            <p class="font-white">READ MORE</p>
                                            <img class="w-lg-150 h-lg-50" src="<?php bloginfo('stylesheet_directory');?>/images/button-gr.png">
                                        </a>
                                    </div>
                                </div>
                            <?php  endwhile;} ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endwhile; ?>
<?php get_footer(); ?>