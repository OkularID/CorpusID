<?php get_header('page'); ?>
<?php while ( have_posts() ) : the_post(); ?>


<!--Highlight-->
    <style type="text/css">
        .investmentSection1 h4{color: #414042 !important;}
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
                        <div id="temptitle-color" class="mb-lg-0 text-center float-right">
                            <p class="font-white mb-lg-0"><?php the_field('header_sub_title') ?></p>
                            <h1 class="font-white m-a w-200x"><?php the_field('header_title') ?></h1>
                            <img class="temptitle-motif1 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/partials/left-white.png"/>
                            <img class="temptitle-motif2 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/partials/right-white.png"/>
                        </div>
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



    <!--From annual report-->
    <!--shadows-->
    <style>
        .annual-shadows {
            -webkit-box-shadow: 22px 27px 32px -13px rgba(240,240,240,0.77);
            -moz-box-shadow: 22px 27px 32px -13px rgba(240,240,240,0.77);
            box-shadow: 9px 15px 15px 4px #d1d1d1;
        }
        .investmentSection1 h3{color: #414042 !important;}
        .investmentSection1 a{font-family: "OpenSans Bold";color : #414042;}
    </style>

    <section class="investmentSection1 pos-rel pt-lg-5p pb-lg-10p slideanim">
        <!--Desktop-->
        <div class="d-none d-lg-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 pb-lg-5p pl-lg-15p pr-lg-15p text-center">
                        <h3><?php the_field('title_section_2',11) ?></h3>
                    </div>
                    <div class="col-lg-12 pl-lg-0 pr-lg-0">
                        <div class="container-fluid pl-lg-5p pr-lg-5p">
                            <div class="row">
                                <?php if(have_rows('repeater_section_2',11)): ?>
                                    <?php while (have_rows('repeater_section_2',11)): the_row(); ?>
                                        <div class="col-lg-3 pl-lg-3p pr-lg-3p">
                                            <a href="<?php the_sub_field('file_download',11) ?>" target="_blank"><img src="<?php the_sub_field('images');?>" alt="" class="img-fluid annual-shadows mb-lg-1p"></a>
                                            <div class="text-center pt-lg-15p">
                                                <a href="<?php the_sub_field('file_download',11) ?>" target="_blank"><?php the_sub_field('title');?></a>
                                                <p><?php the_sub_field('date',11);?></p>
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
                    <div class="col-12 pb-m-10p pl-m-20p pr-m-20p text-center my-5 my-lg-0">
                        <h3 class="annual-title"><?php the_field('title_section_2',11) ?></h3>
                    </div>
                    <div class="col-12 pl-m-0 pr-m-0">
                        <div class="container-fluid pl-m-10p pr-m-10p">
                            <div class="row">
                                <?php if(have_rows('repeater_section_2',11)): ?>
                                    <?php while (have_rows('repeater_section_2',11)): the_row(); ?>
                                        <div class="col-6 pl-m-3p pr-m-3p pb-m-15p">
                                            <a href="<?php the_sub_field('file_download',11) ?>" target="_blank"><img src="<?php the_sub_field('images');?>" alt="" class="img-fluid annual-shadows mb-lg-1p"></a>
                                            <div class="text-center pt-lg-15p">
                                                <a href="<?php the_sub_field('file_download',11) ?>" target="_blank"><p class="text"><?php the_sub_field('title');?></p></a>
                                                <p class="text2"><?php the_sub_field('date',11);?></p>
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




<section class="investmentSection1 pt-lg-10p pb-lg-10p pl-lg-5p pr-lg-5p slideanim">
    <style>
	.investmentSection1 .desc{height:115px;}
        @media screen and (max-width: 846px) {
	    .investmentSection1 .desc{height:auto;}
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
                                <div class="col-lg-6 pb-lg-5p pb-m-15p">
                                    <div class="container-fluid pb-lg-5p box-shadoww">
                                        <img src="<?php the_field('image') ?>" alt="" class="img-fluid">
                                        <div class="desc mb-lg-20 pt-lg-3p pl-lg-5p pr-lg-10p of-lg-h">
                                            <p><?php the_field('date'); ?></p>
                                            <b class="font-gray"><?php echo wp_trim_words( get_the_title(), 18, ' ...' ); ?></b>
                                        </div>
                                        <div class="pl-lg-5p pr-lg-10p">
					    <a href="<?php echo get_permalink(); ?>">
					        <div class="newbutton-gr" style="background: url('<?php bloginfo('stylesheet_directory');?>/images/button-gr.png');">
                                                    <p class="font-white">READ MORE</p>
					        </div>
                                            </a>
					</div>
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