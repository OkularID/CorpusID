<?php get_header('page'); ?>
<?php while ( have_posts() ) : the_post(); ?>

    <style type="text/css">
        .highlight-detail{padding: 10% 0 10% 7%;}
        .highlight-detail a{font-family: "OpenSans Regular";color: #414042;}
        .highlight-title{margin-bottom: 3%;font-family: "OpenSans Bold";}
    </style>

    <section class="headerSection fadein">
        <!--Desktop-->
        <div class="d-none d-lg-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 p-0">
                        <div class="boxc pt-lg-6p pl-lg-66p pr-lg-14p text-center">
                            <p class="font-white"><?php the_field('header_sub_title',15) ?></p>
                            <h1 class="font-white m-a w-200x"><?php the_field('header_title',15) ?></h1>
                        </div>
                        <img class="img-fluid d-none d-lg-block" src="<?php the_field('header_image',15) ?>"/>
                        <img class="img-fluid d-lg-none" src="<?php the_field('header_image',15) ?>"/>
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
                        left: 13%;
                        width: 15px !important;
                    }
                    .motifhead-right {
                        z-index: 40;
                        position: absolute;
                        top: 52%;
                        left: 81%;
                        width: 15px !important;
                    }
                    .ttt {
                        font-size: 22px !important;
                    }
                }
            </style>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 p-0">
                        <div class="boxc pt-m-6p text-center">
                            <p class="font-white"><?php the_field('header_sub_title',15) ?></p>
                            <h1 class="font-white ttt m-a w-200x"><?php the_field('header_title',15) ?></h1>
                        </div>
                        <img class="img-fluid mobile_background d-lg-none" src="<?php bloginfo('stylesheet_directory');?>/images/header/mobile_header.jpg"/>
                        <img class="img-fluid motifhead-left d-lg-none" src="<?php bloginfo('stylesheet_directory');?>/images/header/block-left.png"/>
                        <img class="img-fluid motifhead-right d-lg-none" src="<?php bloginfo('stylesheet_directory');?>/images/header/block-right.png"/>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid highlight-detail">
        <div class="d-none d-lg-block">
            <div class="row">
                <div class="col-lg-12 mb-lg-5p slideanimLeft">
                    <a href=""><img class="img-fluid" style="width: 45px; padding-right: 5px;" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/arrow-left-box.png"></a>
                    <a href="">Back</a>
                </div>
                <div class="col-lg-6 slideanimLeft">
                    <p><?php the_field('date'); ?></p>
                    <h4 class="highlight-title"><?php the_title(); ?></h4>
                    <div>
                        <?php the_field('detail'); ?>
                    </div>
                </div>
                <div class="col-lg-6 pr-lg-0">
                    <img class="img-fluid" src="<?php the_field('image'); ?>" alt="">
                </div>
            </div>
        </div>

        <!--Mobile-->
        <div class="d-block d-lg-none">
            <style>
                @media screen and (max-width: 846px) {
                    .backImg {
                        width: 30px !important;
                    }
                }
            </style>
            <div class="row pr-m-5p">
                <div class="col-12 mb-m-5p slideanimLeft">
                    <a href="/highlight/"><img class="img-fluid backImg" style="width: 45px; padding-right: 5px;" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/arrow-left-box.png"></a>
                    <a href="">Back</a>
                </div>
                <div class="col-12 slideanimLeft">
                    <p><?php the_field('date'); ?></p>
                    <h4 class="highlight-title"><?php the_title(); ?></h4>
                    <div>
                        <?php the_field('detail'); ?>
                    </div>
                </div>
                <div class="col-lg-6 pr-lg-0">
                    <img class="img-fluid" src="<?php the_field('image'); ?>" alt="">
                </div>
            </div>
        </div>

    </section>


<?php endwhile; ?>
<?php get_footer(); ?>