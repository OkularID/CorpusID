<?php get_header('page'); ?>
<?php while ( have_posts() ) : the_post(); ?>

    <style type="text/css">
        .investmentSection1 h3{color: #808285;}
        .investmentSection1 .container-fluid .img-fluid{position: absolute;z-index: 1030;top: 5%;right: 5%;width: 85%;}
        .career-motif-01{z-index: 10;position: absolute;top: -4%;right: 38%;width: 360px !important;}
        .career-motif-02{z-index: 1030;position: absolute;bottom: 13%;right: 10%;width: auto !important;}
        .positionSection{background: linear-gradient(180deg, #000 70%, #fff 30%);}
        .positionSection .career-title{position:relative;padding: 20px 30px;width: auto;}
        .positionSection .button-white{letter-spacing: 0;}
        .positionSection .career-carousel img{width: auto;}
        .positionSection .career-carousel .btn-title p{
            top: 40px;
            left: 0;
            transform: translateY(-50%);
            width: 120px;
            color: #fff !important;
            z-index: 1030;
        }
        .positionSection .career-carousel .owl-dots{display: none;}
        .positionSection .career-carousel.owl-theme .owl-nav{position: absolute;margin-top: 0;top: -40%;right: 5%;}
        .positionSection .career-carousel.owl-theme .owl-nav button.owl-prev{
            margin: 0;
            position: unset;
            top: unset;
            left: unset;
            transform: unset;
            font-size: 12px !important;
            color: #fff !important;
        }
        .positionSection .career-carousel.owl-theme .owl-nav button.owl-next{
            margin: 0 0 0 -2px;
            position: unset;
            top: unset;
            right: unset;
            transform: unset;
            font-size: 12px !important;
            color: #fff !important;
        }
        .bottomSection .boxv{right: 4%;}
        .bg-btn{
            position: relative;
            padding: 9% 5%;
            background: url("<?php bloginfo('stylesheet_directory');?>/images/about/partials/bg-btn-03.png");
            background-size: 100% 40% !important;
            background-repeat: no-repeat !important;
            background-position: center !important;
            width: 220px;
            float: right;
        }
        .career-modal .modal-lg{max-width: 950px;}
        .career-modal .close{
            position: absolute;
            padding: 1px 0 10px;
            top: -30px;
            right: -40px;
            width: 35px;
            height: 35px;
            font-size: 28px;
            color: #fff;
            background: transparent;
            border-radius: 100%;
            border: 1px solid #fff;
            opacity: 1;
        }
        .career-modal .career-modal-content{padding: 5% 6%;}
        .career-modal img,.career-modal h4{display: inline-block;}
        .career-modal .career-modal-content p{margin-bottom: 0;line-height: 30px;color: unset;}
        .career-modal .career-modal-content ul{padding-left: 20px;}
        .career-modal .button-gr{
            float: right;
            margin: 20px;
        }
        .career-modal .button-gr p{
            top: 50%;
            left: 0;
            transform: translateY(-50%);
        }
        .modal-line{margin: 3% 0;border-bottom: 1px solid #bcbec0;}

        .head_motif {
            position: absolute;
            left: 61%;
            top: -11px;
        }
        .head_motif2 {
            position: absolute;
            top: 98%;
            right: 22%; 
        }

    </style>

<section class="headerSection fadein">
    <!--Desktop-->
    <div class="d-none d-lg-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="boxc pl-lg-64p pr-lg-2p">

                        <img class="head_motif d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/partials/left-white.png"/>
                            <h1 class="font-white m-a w-200x"><?php the_field('title_header') ?></h1>
                        <img class="head_motif2 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/partials/right-white.png"/>

                    </div>
                    <img class="img-fluid d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/restructing/bg-2-01.png"/>
                    <img class="img-fluid d-lg-none" src="<?php bloginfo('stylesheet_directory');?>/images/restructing/bg-2-01.png"/>
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
                    left: 35%;
                    width: 15px !important;
                }
                .motifhead-right {
                    z-index: 40;
                    position: absolute;
                    top: 46%;
                    left: 62%;
                    width: 15px !important;
                }
            }
        </style>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="boxc">
                        <h1 class="font-white header-title text-center"><?php the_field('title_header') ?></h1>
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
    <style>
        .title_color {
            color: #414042 !important;
        }
    </style>
    <div class="d-none d-lg-block">
        <div class="container-fluid pos-rel pt-lg-5p pb-lg-10p pl-lg-5p pr-lg-5p slideanim">
            <div class="row">
                <div class="col-lg-12 pb-lg-5p text-center">
                    <h3 class="title_color"><?php the_field('title_section_2') ?></h3>
                </div>
                <div class="col-lg-5 pt-lg-10p pb-lg-10p">
                    <?php the_field('content_section_2') ?>
                </div>
                <div class="col-lg-7 pl-lg-10p">
                    <img class="img-fluid" src="<?php the_field('image_section_2') ?>">
                    <img class="career-motif-01 move-left d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/career/motif.png"/>
                </div>
                <img class="career-motif-02 move-right d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/home-icon-04.png"/>
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
                .content_sec p{
                    line-height: 20px !important;
                }
                .career_images {
                    position: absolute;
                    z-index: 1030 !important;
                    width: 90%;
                    height: auto;
                    left: 13px !important
                }
                .career_motif {
                    position: absolute;
                    z-index: 1020 !important;
                    top: -15px;
                    left: -8px;
                    width: 37%;
                    height: auto;
                }
            }
        </style>
        <div class="container-fluid pt-m-5p pb-m-10p">
            <div class="row">
                <div class="col-12 pb-m-5p pl-m-25p pr-m-25p text-center">
                    <h3 class="header-title1 font-gray"><?php the_field('title_section_2') ?></h3>
                </div>
                <div class="col-12 pos-rel text-center">
                    <img class="investment-image" src="<?php the_field('image_section_2') ?>">
                    <!--Motif-->
                    <img class="career_motif move-right d-block d-lg-none" src="<?php bloginfo('stylesheet_directory');?>/images/contact/motif.png"/>
                </div>
                <div class="col-12 pt-m-3p">
<!--                    <h2 class="content-title pl-m-5p font-gray">--><?php //the_field('title_content_section_3') ?><!--</h2>-->
                    <div class="content_sec pt-m-3p pl-m-5p pr-m-5p"><?php the_field('content_section_2') ?></div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--Position section-->
<section class="positionSection">
    <!--Desktop-->
<!--    <div class="d-none d-lg-block">-->
<!--        <div class="container-fluid pos-rel pt-lg-10p pb-lg-10p pl-lg-7p pr-lg-7p">-->
<!--            <div class="row">-->
<!--                <div class="career-title mb-lg-5p slideanim">-->
<!--                    <h1 class="font-white">--><?php //the_field('title_section_3') ?><!--</h1>-->
<!--                    <img class="home-icon-01 d-none d-lg-block" src="--><?php //bloginfo('stylesheet_directory');?><!--/images/homepage/home-icon.png"/>-->
<!--                    <img class="home-icon-02 d-none d-lg-block" src="--><?php //bloginfo('stylesheet_directory');?><!--/images/homepage/home-icon-02.png"/>-->
<!--                </div>-->
<!--                <div class="col-lg-12 slideanim">-->
<!--                    <div class="container-fluid" style="overflow: unset !important;">-->
<!--                        <div class="row">-->
<!--                            <div class="career-carousel owl-theme">-->
<!--                                --><?php //if(have_rows('positions')): ?>
<!--                                    --><?php //while (have_rows('positions')): the_row(); ?>
<!--                                        <div class="item">-->
<!--                                            <div class="col-lg-12 pt-lg-10 pb-lg-10 pl-lg-2p pr-lg-2p">-->
<!--                                                <div class="bg-white pt-lg-15p pb-lg-15p pl-lg-10p pr-lg-10p box-shadow h-lg-100p">-->
<!--                                                    <img src="--><?php //the_sub_field('icon');?><!--" alt="" class="img-fluid">-->
<!--                                                    <div class="mb-lg-20 pt-lg-10p of-lg-h h-lg-100">-->
<!--                                                        <h4>--><?php //the_sub_field('title');?><!--</h4>-->
<!--                                                    </div>-->
<!--                                                    <table>-->
<!--                                                        <tr>-->
<!--                                                            <td class="pr-lg-25">-->
<!--                                                                <a class="button-gr btn-title" href="" data-toggle="modal" data-target="#--><?php //echo preg_replace('/[^A-Za-z0-9\-]/', '',strtolower(get_sub_field('title'))); ?><!--" data-dismiss="modal">-->
<!--                                                                    <p class="font-white">--><?php //the_field('button_detail_text'); ?><!--</p>-->
<!--                                                                    <img class="w-lg-120 h-lg-50" src="--><?php //bloginfo('stylesheet_directory');?><!--/images/button-gr.png">-->
<!--                                                                </a>-->
<!--                                                            </td>-->
<!--                                                            <td>-->
<!--                                                                <a href="--><?php //the_field('button_apply_link'); ?><!--" class="button-white">--><?php //the_field('button_apply_text'); ?><!--</a>-->
<!--                                                            </td>-->
<!--                                                        </tr>-->
<!--                                                    </table>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    --><?php //endwhile; ?>
<!--                                --><?php //endif; ?>
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

    <!--Mobile-->
<!--    <div class="d-block d-lg-none">-->
<!--        <style>-->
<!--            @media screen and (max-width: 846px) {-->
<!--                .career_position {-->
<!--                    font-size: 23px !important;-->
<!--                }-->
<!--                .positionSection .career-title {-->
<!--                    position: relative;-->
<!--                    padding: 0px 28px !important;-->
<!--                    width: auto;-->
<!--                }-->
<!--                .positionSection .career-carousel .btn-title p {-->
<!--                    top: 18px;-->
<!--                    left: -9px;-->
<!--                    transform: translateY(-50%);-->
<!--                    width: 102px;-->
<!--                    color: #fff !important;-->
<!---->
<!--                }-->
<!--                .button-white {-->
<!--                    font-size: 12px;-->
<!--                    padding: 7px 10px !important;-->
<!--                }-->
<!--            }-->
<!--        </style>-->
<!--        <div class="container-fluid pos-rel pt-m-10p pb-m-10p pl-m-7p pr-m-7p">-->
<!--            <div class="row">-->
<!--                <div class="career-title mb-m-5p slideanim">-->
<!--                    <h1 class="font-white career_position">--><?php //the_field('title_section_3') ?><!--</h1>-->
<!--                    <img class="home-icon-01 d-none d-lg-block" src="--><?php //bloginfo('stylesheet_directory');?><!--/images/homepage/home-icon.png"/>-->
<!--                    <img class="home-icon-02 d-none d-lg-block" src="--><?php //bloginfo('stylesheet_directory');?><!--/images/homepage/home-icon-02.png"/>-->
<!--                </div>-->
<!--                <div class="col-12 slideanim">-->
<!--                    <div class="container-fluid" style="overflow: unset !important;">-->
<!--                        <div class="row">-->
<!--                            <div class="career-carousel owl-theme">-->
<!--                                --><?php //if(have_rows('positions')): ?>
<!--                                    --><?php //while (have_rows('positions')): the_row(); ?>
<!--                                        <div class="item">-->
<!--                                            <div class="col-12 pt-m-10 pb-m-10 pl-m-5p pr-m-5p">-->
<!--                                                <div class="bg-white pt-m-15p pb-m-15p pl-m-10p pr-m-10p box-shadow h-m-100p">-->
<!--                                                    <img src="--><?php //the_sub_field('icon');?><!--" alt="" class="img-fluid">-->
<!--                                                    <div class="mb-m-20 pt-m-10p of-m-h h-m-100">-->
<!--                                                        <h4>--><?php //the_sub_field('title');?><!--</h4>-->
<!--                                                    </div>-->
<!--                                                    <div class="col-12 pl-m-0 pr-m-0">-->
<!--                                                        <div class="row">-->
<!--                                                            <div class="col-6 pl-m-5p pr-m-1p">-->
<!--                                                                <a class="button-gr btn-title" href="" data-toggle="modal" data-target="#--><?php //echo preg_replace('/[^A-Za-z0-9\-]/', '',strtolower(get_sub_field('title'))); ?><!--" data-dismiss="modal">-->
<!--                                                                    <p class="font-white">--><?php //the_field('button_detail_text'); ?><!--</p>-->
<!--                                                                    <img class="w-m-80p h-m-33" src="--><?php //bloginfo('stylesheet_directory');?><!--/images/button-gr.png">-->
<!--                                                                </a>-->
<!--                                                            </div>-->
<!--                                                            <div class="col-6 pl-m-1p pr-m-0">-->
<!--                                                                <a href="--><?php //the_field('button_apply_link'); ?><!--" class="button-white">--><?php //the_field('button_apply_text'); ?><!--</a>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!---->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    --><?php //endwhile; ?>
<!--                                --><?php //endif; ?>
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

</section>

<div class="">
    <div class="line-dark-grey w-lg-90p ma-lg">

    </div>
</div>

<section class="bottomSection pt-lg-10p">
    <style>
            .btm_motif {
                position: absolute;
                left: 56%;
                top: -11px;
            }
            .btm_motif1 {
                position: absolute;
                top: 98%;
                right: 12%;
            }
    </style>
    <div class="d-none d-lg-block">
        <div class="container-fluid pb-lg-10p pl-lg-7p pr-lg-7p">
            <div class="row">
                <div class="col-lg-6 pl-lg-3p slideanimLeft">
  		  <div id="temptitle-color">
                    <h2><?php the_field('title_bottom_section') ?></h2>    
                    <img class="temptitle-motif1 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/partials/right.png"/>
                    <img class="temptitle-motif2 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/partials/left.png"/>
                  </div>
                </div>
                <div class="col-lg-6 pr-lg-3p text-right">
                    <div class="boxv">
                        <a class="button-gr btn-title" href="<?php the_field('btn_link_bottom') ?>">
                            <p class="font-white"><?php the_field('btn_bottom') ?></p>
                            <img class="w-lg-200 h-lg-50" src="<?php bloginfo('stylesheet_directory');?>/images/button-gr.png">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Mobile-->
    <div class="d-block d-lg-none">
        <style>
            @media screen and (max-width: 846px) {
                .tm {
                    padding-right: 0 !important;
                }
                .bottom-title {
                    font-size: 13px !important;
                }
            }
        </style>
        <div class="container-fluid pt-lg-5p pb-lg-10p pl-lg-10p">
            <div class="row">
                <div class="col-6">
                    <h3 class="bottom-title"><?php the_field('title_bottom_section') ?></h3>
                    <!--Motif section-->
                </div>
                <div class="col-6 tm">
                    <style>
                        @media screen and (max-width: 846px) {
                            .bg-btn{
                                position: relative;
                                padding: 10% 3%;
                                background: url("<?php bloginfo('stylesheet_directory');?>/images/about/partials/bg-btn-03.png");
                                background-size: 43% 50% !important;
                                background-repeat: no-repeat !important;
                                background-position: center !important;
                                top: -9px !important;
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

<section class="popupSection">
    <!-- Popup -->

    <!--Desktop-->
    <div class="">
        <style>
            /*Mobile styling*/
            @media screen and (max-width: 846px) {
                .pk {
                    margin-top: 25% !important;
                }
                .close_btn_mobile {
                    top: -38px !important;
                    right: 0 !important;
                }
            }
        </style>
        <?php if(have_rows('positions')): ?>
            <?php while (have_rows('positions')): the_row(); ?>
                <div class="career-modal modal fade st" id="<?php echo preg_replace('/[^A-Za-z0-9\-]/', '',strtolower(get_sub_field('title'))); ?>">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content pk">
                            <button type="button" class="close close_btn_mobile" data-dismiss="modal">&times;</button>
                            <div class="container-fluid career-modal-content">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <table class="w-lg-100p">
                                            <tr>
                                                <td class="w-lg-15p"><img src="<?php the_sub_field('icon');?>" alt="" class="img-fluid"></td>
                                                <td><h4 class="w-lg-300"><?php the_sub_field('title');?></h4></td>
                                                <td>
                                                    <a class="button-gr d-lg-inline" href="<?php the_field('button_apply_link'); ?>">
                                                        <p class="font-white"><?php the_field('button_apply_text'); ?></p>
                                                        <img class="w-lg-120 h-lg-50" src="<?php bloginfo('stylesheet_directory');?>/images/button-gr.png">
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                        <div class="modal-line"></div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <?php the_sub_field('requirements');?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <?php the_sub_field('responsibilities');?>
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

    <!--Mobile-->
<!--    <div class="d-block d-lg-none">-->
<!--        --><?php //if(have_rows('positions')): ?>
<!--            --><?php //while (have_rows('positions')): the_row(); ?>
<!--                <div class="career-modal modal fade st" id="--><?php //echo preg_replace('/[^A-Za-z0-9\-]/', '',strtolower(get_sub_field('title'))); ?><!--">-->
<!--                    <div class="modal-dialog modal-dialog-centered modal-lg">-->
<!--                        <div class="modal-content">-->
<!--                            <button type="button" class="close" data-dismiss="modal">&times;</button>-->
<!--                            <div class="container-fluid career-modal-content">-->
<!--                                <div class="row">-->
<!--                                    <div class="col-12">-->
<!--                                        <table class="w-m-100p">-->
<!--                                            <tr>-->
<!--                                                <td class="w-m-15p"><img src="--><?php //the_sub_field('icon');?><!--" alt="" class="img-fluid"></td>-->
<!--                                                <td><h4 class="w-m-300">--><?php //the_sub_field('title');?><!--</h4></td>-->
<!--                                                <td>-->
<!--                                                    <a class="button-gr d-lg-inline" href="--><?php //the_field('button_apply_link'); ?><!--">-->
<!--                                                        <p class="font-white">--><?php //the_field('button_apply_text'); ?><!--</p>-->
<!--                                                        <img class="w-m-120 h-m-50" src="--><?php //bloginfo('stylesheet_directory');?><!--/images/button-gr.png">-->
<!--                                                    </a>-->
<!--                                                </td>-->
<!--                                            </tr>-->
<!--                                        </table>-->
<!--                                        <div class="modal-line"></div>-->
<!--                                    </div>-->
<!--                                    <div class="col-12">-->
<!--                                        <div>-->
<!--                                            --><?php //the_sub_field('requirements');?>
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="col-12">-->
<!--                                        <div>-->
<!--                                            --><?php //the_sub_field('responsibilities');?>
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            --><?php //endwhile; ?>
<!--        --><?php //endif; ?>
<!--    </div>-->
</section>


<?php endwhile; ?>
<?php get_footer(); ?>