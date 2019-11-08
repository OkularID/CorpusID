<?php get_header(''); ?>
<?php while ( have_posts() ) : the_post(); ?>

    <style type="text/css">
        .investmentSection1 h3{color: #808285;}
        .investmentSection1 .header-title{position:relative;margin-left: -2%;padding: 20px;width: 360px;}
        .investmentSection1 .contactform label,input,.contactform select{font-family: "OpenSans Regular";color: #6D6E71;font-size: 14px !important;}
        .investmentSection1 .contactform input,.contactform textarea,.contactform select{
            display: block;
            padding: 5px 10px;
            width: 100%;
            border: 1px solid #a7a9ac;
            font-size: 14px !important;
        }
        .investmentSection1 .contactform form input::-webkit-outer-spin-button,
        .investmentSection1 .contactform form input::-webkit-inner-spin-button{
            /* display: none; <- Crashes Chrome on hover */
            -webkit-appearance: none;
            margin: 0;
        }
        .investmentSection1 .contactform form input[type=number] {
            -moz-appearance:textfield; /* Firefox */
        }
        .investmentSection1 .contactform .button-gr{
            padding: 0;
            border: none;
            background: transparent;
        }
        .investmentSection1 .contactform .button-gr p{
            top: 50%;
            transform: translateY(-50%);
        }
        .mapSection{padding: 0;}
        .mapSection .header-title h1{margin-bottom: 5%;}
        .mapSection iframe{width: 100% !important;height: 100% !important;}
        .mapSection .counter{
            position: absolute;
            margin: 0 auto;
            bottom: 11%;
            right: 10%;
            width: 100px;
            text-align: center;
        }
        .mapSection .contact-carousel.owl-theme .owl-dots{display: none;}
        .mapSection .contact-carousel.owl-theme .owl-nav{position: absolute;margin-top: 0;bottom: 10%;right: 21%;}
        .mapSection .contact-carousel.owl-theme .owl-nav button.owl-prev{
            margin: 0;
            position: unset;
            top: unset;
            left: unset;
            transform: unset;
            font-size: 12px !important;
            color: #fff !important;
        }
        .mapSection .contact-carousel.owl-theme .owl-nav button.owl-prev img{width: 75%}
        .mapSection .contact-carousel.owl-theme .owl-nav button.owl-next{
            margin: 0 0 0 -16px;
            position: unset;
            top: unset;
            right: unset;
            transform: unset;
            font-size: 12px !important;
            color: #fff !important;
        }
        .mapSection .contact-carousel.owl-theme .owl-nav button.owl-next img{width: 75%}
        .contact-motif-01{position: absolute;top: 32%;left: 0;width: 50%;}
    </style>

<section class="headerSection">
    <!--Desktop-->
    <div class="d-none d-lg-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="boxc pl-lg-62p pr-lg-2p">
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
                    top: 40%;
                    left: 29%;
                    width: 15px !important;
                }
                .motifhead-right {
                    z-index: 40;
                    position: absolute;
                    top: 46%;
                    left: 68%;
                    width: 15px !important;
                }
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


<section class="investmentSection1">
    <!--Desktop-->
    <div class="d-none d-lg-block">
        <div class="container-fluid pt-lg-10p pb-lg-10p">
            <div class="row">
                <!-- Brief -->
                <div class="col-lg-12 pb-lg-5p pl-lg-25p pr-lg-25p text-center">
                    <h3><?php the_field('title_section_2') ?></h3>
                </div>
                <div class="col-lg-12 pl-lg-10p pr-lg-10p">
                    <div class="header-title mb-lg-3p">
                        <h1 class="font-gray"><?php the_field('title_content') ?></h1>
                        <img class="home-icon-01 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/home-icon-11.png"/>
                        <img class="home-icon-02 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/home-icon-12.png"/>
                    </div>
                </div>
                <div class="col-lg-6 mb-lg-10p pl-lg-10p pr-lg-0">
                    <div><?php the_field('content_section_2') ?></div>
                    <img class="img-fluid contactimage" src="<?php the_field('image_section_2') ?>">
                    <img class="contact-motif-01 move-right d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/contact/motif.png"/>
                </div>
                <div class="col-lg-6 mb-lg-10p contactform pl-lg-5p pr-lg-10p">
                    <form action="">
                        <label>Name</label>
                        <input class="mb-lg-10" type="text">
                        <label>Email</label>
                        <input class="mb-lg-10" type="email">
                        <label>Phone</label>
                        <input class="mb-lg-10" type="number">
                        <label>Company</label>
                        <input class="mb-lg-10" type="text">
                        <label>Message</label>
                        <textarea class="mb-lg-10" rows="5"></textarea>
                        <button type="button" class="button-gr">
                            <p class="font-white">SUBMIT</p>
                            <img class="w-lg-120 h-lg-50" src="<?php bloginfo('stylesheet_directory');?>/images/button-gr.png">
                        </button>
                    </form>
                </div>

                <!-- Maps -->
                <div class="container-fluid mapSection">
                    <div class="contact-carousel owl-theme">
                        <?php if(have_rows('repeater_section_3')):
                            $x = 1; ?>
                            <?php while (have_rows('repeater_section_3')): the_row(); ?>
                            <div class="item">
                                <div class="row">
                                    <div class="col-lg-8 pl-lg-0 pr-lg-0">
                                        <?php the_sub_field('maps') ?>
                                    </div>
                                    <div class="col-lg-4 bg-black font-white pt-lg-10p pb-lg-15p pl-lg-5p pr-lg-5p">
                                        <div class="header-title">
                                            <h1 class="font-white"><?php the_sub_field('title') ?></h1>
                                            <img class="home-icon-01 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/home-icon.png"/>
                                            <img class="home-icon-02 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/home-icon-02.png"/>
                                        </div>
                                        <?php the_sub_field('brief') ?>
                                        <p class="counter font-white"><i><?php echo "$x"; $x++; ?> of <?php $count = count(get_field('repeater_section_3')); echo "$count" ?></i></p>
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

    <!--Mobile-->
    <div class="d-block d-lg-none">
        <style>
            @media screen and (max-width: 846px) {
                .investmentSection1 .header-title {
                    padding-left: 0 !important;
                    padding-right: 0 !important;
                }
                .contactimage {position: relative; z-index: 1030;  width: 90%; height: auto; left: 13px !important}
                .header-title1 {
                    font-size: 20px !important;
                    color: grey !important;
                }
                .content_ p{
                    line-height: 18px !important;
                }
                .font-gray {
                    font-size: 25px !important;
                }
                .office_name {
                    font-size: 25px !important;
                }
                .phone_ p{
                    line-height: 21px !important;
                }
                .tt {
                    font-size: 30px !important;
                    color: grey !important;
                }
                .header_title_address {
                    height: 278px !important;
                    overflow: hidden;
                }
                .mapSection .contact-carousel.owl-theme .owl-nav button.owl-prev {
                    margin: auto !important;
                    position: absolute;
                    top: -15px !important;
                    left: -18px;
                    transform: unset;
                    font-size: 35px !important;
                    color: #fff !important;
                }
                .mapSection .contact-carousel.owl-theme .owl-nav button.owl-next {
                    margin: auto !important;
                    position: absolute;
                    top: -15px !important;
                    left: 4px;
                    transform: unset;
                    font-size: 35px !important;
                    color: #fff !important;
                }
            }
        </style>
        <div class="container-fluid pt-m-10p pb-m-10p">
            <div class="row">
                <!-- Brief -->
                <div class="col-12 pb-m-5p pl-m-25p pr-m-25p text-center">
                    <h3 class="header-title1"><?php the_field('title_section_2') ?></h3>
                </div>
                <div class="col-12 pl-m-0 pr-m-0">
                    <div class="header-title">
                        <h1 class="tt text-center"><?php the_field('title_content') ?></h1>
                        <img class="home-icon-01 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/home-icon-11.png"/>
                        <img class="home-icon-02 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/home-icon-12.png"/>
                    </div>
                </div>
                <div class="col-12 mb-m-10p pl-m-5p pr-m-5p">
                    <div class="content_"><?php the_field('content_section_2') ?></div>
                    <img class="img-fluid contactimage text-center" src="<?php the_field('image_section_2') ?>">
<!--                    <img class="contact-motif-01 move-right d-none d-lg-block" src="--><?php //bloginfo('stylesheet_directory');?><!--/images/contact/motif.png"/>-->
                </div>
                <div class="col-12 mb-lg-10p contactform pl-lg-5p pr-lg-5p">
                    <p>Please fill out the form, and we’ll respond to you shortly.</p>
                    <form action="">
                        <label>Name</label>
                        <input class="mb-lg-10" type="text">
                        <label>Email</label>
                        <input class="mb-lg-10" type="email">
                        <label>Phone</label>
                        <input class="mb-lg-10" type="number">
                        <label>Company</label>
                        <input class="mb-lg-10" type="text">
                        <label>Message</label>
                        <textarea class="mb-lg-10" rows="5"></textarea>
                        <button type="button" class="button-gr">
                            <p class="font-white">SUBMIT</p>
                            <img class="w-lg-100 h-lg-35" src="<?php bloginfo('stylesheet_directory');?>/images/button-gr.png">
                        </button>
                    </form>
                </div>

                <!-- Maps -->
                <div class="container-fluid mapSection">
                    <div class="contact-carousel owl-theme">
                        <?php if(have_rows('repeater_section_3')):
                            $x = 1; ?>
                            <?php while (have_rows('repeater_section_3')): the_row(); ?>
                            <div class="item">
                                <div class="row">
                                    <div class="col-12 pl-m-0 pr-m-0">
                                        <?php the_sub_field('maps') ?>
                                    </div>
                                    <div class="col-12 bg-black font-white pt-m-10p pb-m-10p pl-m-10p pr-m-10p">
                                        <div class="header_title_address">
                                            <h1 class="font-white office_name"><?php the_sub_field('title') ?></h1>
                                            <img class="home-icon-01 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/home-icon.png"/>
                                            <img class="home-icon-02 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/home-icon-02.png"/>
                                            <div class="phone_">
                                                <?php the_sub_field('brief') ?>
                                            </div>
                                        </div>
                                            <div class="pt-m-10p">
                                                <p class="counter font-white"><i><?php echo "$x"; $x++; ?> of <?php $count = count(get_field('repeater_section_3')); echo "$count" ?></i></p>
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
                    <h3><?php the_field('title_bottom') ?></h3>
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
                        <b class=""><?php the_field('btn_bottom') ?></b>
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
                    <h3 class="bottom-title"><?php the_field('title_bottom') ?></h3>
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
                        <b class="out-team"><?php the_field('btn_bottom') ?></b>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<?php endwhile; ?>
<?php get_footer(); ?>