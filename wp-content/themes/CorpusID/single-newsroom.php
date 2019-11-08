<?php get_header(''); ?>
<?php while ( have_posts() ) : the_post(); ?>

    <style type="text/css">
        .news-detail{padding: 10% 0 10% 7%;}
        .news-detail a{font-family: "OpenSans Regular";color: #414042;}
        .news-title{margin-bottom: 3%;font-family: "OpenSans Bold";}
    </style>

    <section class="headerSection fadein">
        <div class="d-none d-lg-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 p-0">
                        <div class="boxc pt-lg-6p pl-lg-66p pr-lg-14p text-center">
                            <h1 class="font-white m-a w-200x">
                                <?php the_field('header_title',35); ?>
                            </h1>
                        </div>
                        <img class="img-fluid d-none d-lg-block" src="<?php the_field('header_image',35); ?>"/>
                        <img class="img-fluid d-lg-none" src="<?php the_field('header_image',35); ?>"/>
                    </div>
                </div>
            </div>
        </div>

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
<!--                            <p class="font-white text-center">--><?php //the_field('header_section_subtitle') ?><!--</p>-->
                            <h1 class="font-white header-title text-center"><?php the_field('header_title',35); ?></h1>
                        </div>
                        <img class="img-fluid mobile_background d-lg-none" src="<?php bloginfo('stylesheet_directory');?>/images/header/mobile_header.jpg"/>
                        <img class="img-fluid motifhead-left d-lg-none" src="<?php bloginfo('stylesheet_directory');?>/images/header/block-left.png"/>
                        <img class="img-fluid motifhead-right d-lg-none" src="<?php bloginfo('stylesheet_directory');?>/images/header/block-right.png"/>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid news-detail">
        <!--Desktop-->
        <div class="d-none d-lg-block">
            <div class="row">
                <div class="col-lg-12 mb-lg-5p slideanimLeft">
                    <a href=""><img class="img-fluid" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/arrow-left-box.png"></a>
                    <a href="">Back</a>
                </div>
                <div class="col-lg-6 slideanimLeft">
                    <p><?php the_field('date'); ?></p>
                    <h4 class="news-title"><?php the_title(); ?></h4>
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
                .backImg {
                    width: 30px !important;
                }
            </style>
            <div class="row pl-m-5p pr-m-5p">
                <div class="col-12 mb-m-5p slideanimLeft">
                    <a href=""><img class="backImg" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/arrow-left-box.png"></a>
                    <a href="/staging/newsroom">Back</a>
                </div>
                <div class="col-12 slideanimLeft pl-m-5p pr-m-5p">
                    <p><?php the_field('date'); ?></p>
                    <h4 class="news-title"><?php the_title(); ?></h4>
                    <div>
                        <?php the_field('detail'); ?>
                    </div>
                </div>
                <div class="col-12 pr-m-0">
                    <img class="img-fluid w-m-88p" src="<?php the_field('image'); ?>" alt="">
                </div>
            </div>
        </div>
    </section>


<?php endwhile; ?>
<?php get_footer(); ?>