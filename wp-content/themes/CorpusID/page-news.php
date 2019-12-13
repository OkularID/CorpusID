<?php get_header('page'); ?>
<?php while ( have_posts() ) : the_post(); ?>


    <section class="headerSection">
        <!--Desktop-->
        <div class="d-none d-lg-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 p-0">
                        <div class="boxc pt-lg-6p pl-lg-66p pr-lg-14p text-center">
                            <h1 class="font-white m-a w-200x">
                                <?php the_field('header_title') ?>
                            </h1>
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
                    .header-title_mobile {
                        font-size: 20px !important;
                    }
                    .boxc_mobile {
                        top: 55%;
                    }
                }
            </style>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 p-0">
                        <div class="boxc_mobile">
                            <h1 class="font-white header-title_mobile text-center"><?php the_field('header_title') ?></h1>
                        </div>
                        <!--                    <img class="img-fluid d-none d-lg-block" src="--><?php //the_field('header_background') ?><!--"/>-->
                        <img class="img-fluid d-lg-none" src="<?php bloginfo('stylesheet_directory');?>/images/header/header-background-01.png"/>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="investmentSection1">
        <div class="container-fluid pt-lg-5p">
            <div class="row">
                <div class="col-lg-12 pb-lg-5p pl-lg-5p pr-lg-5p text-center">
                    <h4 class="font-gray"><?php the_field('title_section_2') ?></h4>
                </div>
            </div>
        </div>
    </section>

    <!--search and filter section-->
<!--    <section class="filterSection">
        <div class="container-fluid pl-lg-12p pb-lg-5p">
            <div class="row">
                <div class="col-lg-12">
                    <div class="container-fluid pb-lg-3p">
                        <div class="row">
                            <div class="col-lg-2">
                                <input type="text" placeholder="SORT BY | RECENT UPDATE">
                            </div>
                            <div class="col-lg-5 pl-lg-5p">
                                <input type="text" placeholder="CATEGORY | NEWS">
                            </div>
                            <div class="col-lg-5 pl-lg-10p">
                                <input type="text" placeholder="SEARCH">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->

    <!--news sections-->
    <section class="highlightSection">
        <style>
            .box-shadoww {
                -webkit-box-shadow: 0px 27px 23px 2px rgba(232,225,232,0.44);
                -moz-box-shadow: 0px 27px 23px 2px rgba(232,225,232,0.44);
                box-shadow: 0px 27px 23px 2px rgba(232,225,232,0.44);
            }
            .button-gr p {
                left: 15px;
            }
        </style>
        <div class="container-fluid pl-lg-10p pr-lg-10p">
            <div class="row">
                <div class="col-lg-12">
                    <div class="container-fluid pb-lg-0">
                        <div class="row">
                            <div class="col-lg-6 pb-lg-5p">
                                <div class="container-fluid pb-lg-5p box-shadoww">
                                    <img src="<?php bloginfo('stylesheet_directory');?>/images/news/news1.png" alt="" class="img-fluid">
                                    <div class="mb-lg-20 pt-lg-3p pl-lg-5p pr-lg-10p h-lg-100 of-lg-h">
                                        <p>01 JANUARY 2019</p>
                                        <b class="font-gray">Sri Mulyani To Investors: Ri Economy Does Not Join Global Weakening Flow</b>
                                    </div>
                                    <a class="button-gr pl-lg-5p d-lg-inline" href="">
                                        <p class="font-white">READ MORE</p>
                                        <img class="w-lg-150 h-lg-50" src="<?php bloginfo('stylesheet_directory');?>/images/button-gr.png">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 pb-lg-5p">
                                <div class="container-fluid pb-lg-5p box-shadoww">
                                    <img src="<?php bloginfo('stylesheet_directory');?>/images/news/news3.png" alt="" class="img-fluid">
                                    <div class="mb-lg-20 pt-lg-3p pl-lg-5p pr-lg-10p h-lg-100 of-lg-h">
                                        <p>01 JANUARY 2019</p>
                                        <b class="font-gray">Sri Mulyani To Investors: Ri Economy Does Not Join Global Weakening Flow</b>
                                    </div>
                                    <a class="button-gr pl-lg-5p d-lg-inline" href="">
                                        <p class="font-white">READ MORE</p>
                                        <img class="w-lg-150 h-lg-50" src="<?php bloginfo('stylesheet_directory');?>/images/button-gr.png">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 pb-lg-5p">
                                <div class="container-fluid pb-lg-5p box-shadoww">
                                    <img src="<?php bloginfo('stylesheet_directory');?>/images/news/news2.png" alt="" class="img-fluid">
                                    <div class="mb-lg-20 pt-lg-3p pl-lg-5p pr-lg-10p h-lg-100 of-lg-h">
                                        <p>01 JANUARY 2019</p>
                                        <b class="font-gray">Sri Mulyani To Investors: Ri Economy Does Not Join Global Weakening Flow</b>
                                    </div>
                                    <a class="button-gr pl-lg-5p d-lg-inline" href="">
                                        <p class="font-white">READ MORE</p>
                                        <img class="w-lg-150 h-lg-50" src="<?php bloginfo('stylesheet_directory');?>/images/button-gr.png">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 pb-lg-5p">
                                <div class="container-fluid pb-lg-5p box-shadoww">
                                    <img src="<?php bloginfo('stylesheet_directory');?>/images/news/news2.png" alt="" class="img-fluid">
                                    <div class="mb-lg-20 pt-lg-3p pl-lg-5p pr-lg-10p h-lg-100 of-lg-h">
                                        <p>01 JANUARY 2019</p>
                                        <b class="font-gray">Sri Mulyani To Investors: Ri Economy Does Not Join Global Weakening Flow</b>
                                    </div>
                                    <a class="button-gr pl-lg-5p d-lg-inline" href="">
                                        <p class="font-white">READ MORE</p>
                                        <img class="w-lg-150 h-lg-50" src="<?php bloginfo('stylesheet_directory');?>/images/button-gr.png">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 pb-lg-5p">
                                <div class="container-fluid pb-lg-5p box-shadoww">
                                    <img src="<?php bloginfo('stylesheet_directory');?>/images/highlight/highlight-02.png" alt="" class="img-fluid">
                                    <div class="mb-lg-20 pt-lg-3p pl-lg-5p pr-lg-10p h-lg-100 of-lg-h">
                                        <p>01 JANUARY 2019</p>
                                        <b class="font-gray">Sri Mulyani To Investors: Ri Economy Does Not Join Global Weakening Flow</b>
                                    </div>
                                    <a class="button-gr pl-lg-5p d-lg-inline" href="">
                                        <p class="font-white">READ MORE</p>
                                        <img class="w-lg-150 h-lg-50" src="<?php bloginfo('stylesheet_directory');?>/images/button-gr.png">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 pb-lg-5p">
                                <div class="container-fluid pb-lg-5p box-shadoww">
                                    <img src="<?php bloginfo('stylesheet_directory');?>/images/news/news4.png" alt="" class="img-fluid">
                                    <div class="mb-lg-20 pt-lg-3p pl-lg-5p pr-lg-10p h-lg-100 of-lg-h">
                                        <p>01 JANUARY 2019</p>
                                        <b class="font-gray">As Touch Dollar Rp. 14,500, said Sri Mulyani</b>
                                    </div>
                                    <a class="button-gr pl-lg-5p d-lg-inline" href="">
                                        <p class="font-white">READ MORE</p>
                                        <img class="w-lg-150 h-lg-50" src="<?php bloginfo('stylesheet_directory');?>/images/button-gr.png">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="paginationSection">
        <div class="container-fluid pt-lg-0 pb-lg-10p pl-lg-13p">
            <div class="row">
                <div class="col-lg-12">
                    <img src="<?php bloginfo('stylesheet_directory');?>/images/news/pager-03.png" alt="" class="img-fluid w-lg-6p"> 1 2 3 4 5
                </div>
            </div>
        </div>
    </section>



<?php endwhile; ?>
<?php get_footer(); ?>