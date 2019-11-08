<?php get_header(''); ?>
<?php while ( have_posts() ) : the_post(); ?>


<section class="headerSection">

    <div class="d-none d-lg-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="boxc pl-lg-63p pr-lg-3p">
                        <h1 class="font-white m-a w-200x"><?php the_field('header_title') ?></h1>
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
                    top: 50%;
                }
                .mobile_background {
                    width: 100% !important;
                    height: 94vh !important;
                }
                .motifhead-left {
                    z-index: 40;
                    position: absolute;
                    top: 45%;
                    left: 25%;
                    width: 15px !important;
                }
                .motifhead-right {
                    z-index: 40;
                    position: absolute;
                    top: 52%;
                    left: 71%;
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
                    <img class="img-fluid motifhead-right d-lg-none" src="<?php bloginfo('stylesheet_directory');?>/images/header/block-right.png"/>                </div>
            </div>
        </div>
    </div>
</section>

<section class="teamSection1">
<!--Desktop-->
    <div class="d-none d-lg-block">
        <style>
            .team-image {position: absolute;z-index: 1030; width: 89%;}
            .team-motif1{
                z-index: 1030;
                position: absolute;
                top: -1% !important;
                left: 87% !important;
                width: auto !important;
            }
            .team-motif2{
                z-index: 10;
                position: absolute;
                top: 37%;
                left: 13% !important;
                width: 50% !important;
                height: auto !important;
            }
            .team-motif3{z-index: 10;position: absolute;top: 109%; left: -87%;width: auto !important;}
        </style>
        <div class="container-fluid pt-lg-5p pb-lg-15p">
            <div class="row">
                <div class="col-lg-12 pb-lg-5p pl-lg-20p pr-lg-20p text-center">
                    <h3><?php the_field('section_2_title') ?></h3>
                </div>
                <div class="col-lg-6 pt-lg-5p pl-lg-10p pr-lg-5p">
                    <p><?php the_field('section_2_content') ?></p>
                </div>
                <div class="col-lg-6 pt-lg-2p pl-lg-5p pr-lg-5p pos-rel">
                    <img class="img-fluid team-image" src="<?php the_field('section_2_image') ?>">
                    <img class="team-motif1 move-left d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/team/partials-team-03.png"/>
                    <img class="team-motif2 move-left d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/team/partials-team-04.png"/>
                    <img class="team-motif3 move-left d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/team/block-01.png"/>
                </div>
            </div>
        </div>
    </div>

<!--Mobile-->
    <div class="d-block d-lg-none">
        <style>
            @media screen and (max-width: 846px) {
                .team-image {position: relative;z-index: 1030; width: 89%;}
                .team-motif1{
                    z-index: 1030;
                    position: absolute;
                    top: -1% !important;
                    left: 87% !important;
                    width: auto !important;
                }
                .team-motif2{
                    z-index: 10;
                    position: absolute;
                    top: 37%;
                    left: 13% !important;
                    width: 50% !important;
                    height: auto !important;
                }
                .team-motif3{z-index: 10;position: absolute;top: 109%; left: -87%;width: auto !important;}
                .content-mobile {
                    line-height: 21px;
                }
                .imej {
                    padding-left: 40px !important;
                }
            }
        </style>
        <div class="container-fluid pt-m-5p">
            <div class="row">
                <div class="col-12 pl-m-20p pr-m-20p text-center">
                    <h3><?php the_field('section_2_title') ?></h3>
                </div>
                <div class="col-12 pt-m-5p pl-m-5p pr-m-5p">
                    <div class="team-image">
                        <img class="img-fluid imej" src="<?php the_field('section_2_image') ?>">
                    </div>
                    <div class="pt-m-10 pl-m-5p pr-m-5p">
                        <p class="content-mobile pt-m-5p"><?php the_field('section_2_content') ?></p>
                    </div>
                </div>
                <div class="col-12 pt-m-2p pl-m-5p pr-m-5p pos-rel">

<!--                    <img class="team-motif1 move-left d-none d-lg-block" src="--><?php //bloginfo('stylesheet_directory');?><!--/images/team/partials-team-03.png"/>-->
<!--                    <img class="team-motif2 move-left d-none d-lg-block" src="--><?php //bloginfo('stylesheet_directory');?><!--/images/team/partials-team-04.png"/>-->
<!--                    <img class="team-motif3 move-left d-none d-lg-block" src="--><?php //bloginfo('stylesheet_directory');?><!--/images/team/block-01.png"/>-->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="teamSection2">

<!--Desktop-->
    <div class="d-none d-lg-block">
        <style>
            .team-motif4{
                z-index: 10;
                position: absolute;
                top: 25%;
                left: 28% !important;
                /*width: 50% !important;*/
                /*height: auto !important;*/
            }
            .team-motif5{z-index: 10;position: absolute;top: 61%; left: 71%;width: auto !important;}

            /*Extended*/
            .thumbnail-card{
                overflow: hidden;
                position: relative;
                background-size: cover !important;
                background-repeat: no-repeat !important;
                background-position: center !important;
            }
            .thumbnail-card .box{width: 100%;height: 66vh;}
            .thumbnail-card .title{
                z-index: 103;
                position: absolute;
                margin: 0 auto;
                top: 50%;
                left: 0;
                right: 0;
                transform: translateY(-50%);
                width: 80%;
                text-align: center;
                transition: all .3s;
            }
            .thumbnail-card .title h4{font-family: "Montserrat";color: #58595b;}
            .thumbnail-card:hover .title{display: none;}
            .thumbnail-card .content{
                padding: 10%;
                width: 100%;
                height: 100%;
                background: url('<?php bloginfo('stylesheet_directory');?>/images/team/overlay-03.png');
                background-size: cover !important;
                background-repeat: no-repeat !important;
                background-position: center !important;
                position: absolute;
                bottom: -100%;
                transition: all .7s;
            }
            .thumbnail-card:hover .content{bottom: 0;}
            .thumbnail-card:hover .content .text{overflow: hidden; position: absolute; bottom: 0;}
            .thumbnail-card .content .text p{
                font-size: 12px !important;
                line-height: 18px !important;
            }
        </style>

        <div class="container-fluid pt-lg-5p pb-lg-5p pl-lg-10p pr-lg-10p">
            <div class="row">
                <div class="col-lg-12 text-center pt-lg-5p pb-lg-5p">
                    <h3><?php the_field('section_3_title') ?></h3>
                    <!--Motif section-->
                    <img class="team-motif4 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/team/block1.png"/>
                    <img class="team-motif5 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/team/block2.png"/>
                </div>
                <?php if(have_rows('repeater_section_3')): ?>
                    <?php while (have_rows('repeater_section_3')): the_row(); ?>
                        <!--People-->



                        <div class="col-lg-4 pt-lg-2p">
                            <div class="thumbnail-card" style="background: url('<?php the_sub_field('image');?>');">
                                <div class="box"></div>
                                <div class="content">
                                    <div class="text">
                                        <h3 class="font-white"><?php the_sub_field('name');?></h3>
                                        <p class="font-white"><?php the_sub_field('position');?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

<!--Mobile-->
    <div class="d-block d-lg-none">
        <style>
            .team-motif4{
                z-index: 10;
                position: absolute;
                top: 25%;
                left: 28% !important;
                /*width: 50% !important;*/
                /*height: auto !important;*/
            }
            .team-motif5{z-index: 10;position: absolute;top: 61%; left: 71%;width: auto !important;}

            /*Extended*/
            .thumbnail-card{
                overflow: hidden;
                position: relative;
                background-size: cover !important;
                background-repeat: no-repeat !important;
                background-position: center !important;
            }
            .thumbnail-card .box{width: 100%;height: 66vh;}
            .thumbnail-card .title{
                z-index: 103;
                position: absolute;
                margin: 0 auto;
                top: 50%;
                left: 0;
                right: 0;
                transform: translateY(-50%);
                width: 80%;
                text-align: center;
                transition: all .3s;
            }
            .thumbnail-card .title h4{font-family: "Montserrat";color: #58595b;}
            .thumbnail-card:hover .title{display: none;}
            .thumbnail-card .content{
                padding: 10%;
                width: 100%;
                height: 100%;
                background: url('<?php bloginfo('stylesheet_directory');?>/images/team/overlay-03.png');
                background-size: cover !important;
                background-repeat: no-repeat !important;
                background-position: center !important;
                position: absolute;
                bottom: -100%;
                transition: all .7s;
            }
            .thumbnail-card:hover .content{bottom: 0;}
            .thumbnail-card:hover .content .text{overflow: hidden; position: absolute; bottom: 0;}
            .thumbnail-card .content .text p{
                font-size: 12px !important;
                line-height: 18px !important;
            }
        </style>

        <div class="container-fluid pt-m-5p pb-m-5p pl-m-10p pr-m-10p">
            <div class="row">
                <div class="col-12 text-center pt-m-5p pb-m-5p">
                    <h3><?php the_field('section_3_title') ?></h3>
                    <!--Motif section-->
<!--                    <img class="team-motif4 d-none d-lg-block" src="--><?php //bloginfo('stylesheet_directory');?><!--/images/team/block1.png"/>-->
<!--                    <img class="team-motif5 d-none d-lg-block" src="--><?php //bloginfo('stylesheet_directory');?><!--/images/team/block2.png"/>-->
                </div>
                <div class="home-carousel2 owl-theme">
                    <?php if(have_rows('repeater_section_3')): ?>
                        <?php while (have_rows('repeater_section_3')): the_row(); ?>
                            <!--People-->
                            <div class="col-12 pt-lg-2p">
                                <div class="thumbnail-card" style="background: url('<?php the_sub_field('image');?>');">
                                    <div class="box"></div>
                                    <div class="content">
                                        <div class="text">
                                            <h3 class="font-white"><?php the_sub_field('name');?></h3>
                                            <p class="font-white"><?php the_sub_field('position');?></p>
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
</section>


    <section class="organizationSection">
        <style>
            .team-motif6{
                z-index: 10;
                position: absolute;
                top: -28%;
                left: 33% !important;
                /*width: 50% !important;*/
                /*height: auto !important;*/
            }
            .team-motif7{z-index: 10;position: absolute;top: 87%; left: 66%;width: auto !important;}
        </style>
        <div class="container-fluid pt-lg-5 pb-lg-10p">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3><?php the_field('section_4_title') ?></h3>
                    <!--Motif section-->
                    <img class="team-motif6 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/team/block1.png"/>
                    <img class="team-motif7 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/team/block2.png"/>
                </div>
                <div class="col-lg-12 pt-lg-3p pl-lg-10p pr-lg-10p">
                    <div class="text-center">
                        <img src="<?php the_field('section_4_image') ?>" alt="" class="img-fluid w-lg-80p h-lg-80p">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 pl-lg-10p pr-lg-10p">
                <div class="line-dark-grey">

                </div>
            </div>
        </div>
    </div>

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
                    <h3><?php the_field('bottom_text') ?></h3>
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
                    <h3 class="bottom-title"><?php the_field('bottom_text') ?></h3>
                    <!--Motif section-->
                </div>
                <div class="col-6 pt-m-5p">
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