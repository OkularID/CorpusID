<?php get_header('page'); ?>
<?php while ( have_posts() ) : the_post(); ?>

    <style type="text/css">
        .investmentSection1 h3{color: #414042 !important;}
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
        .mapSection .header-title h1{
	  margin-bottom: 5%;
	  font-size: 30px !important;
	}
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
        .contactimage {
            position: absolute;
            z-index: 11 !important;
            width: 84%;
        }
        .contact-motif-01{
            z-index: 10 !important;
            position: absolute;
            top: 18%;
            left: 0;
            width: 50%;}
	.mapbrief{
	  overflow:hidden;
	  width:100%;
	  height:35vh;
	}
    </style>

<section class="headerSection">
    <!--Desktop-->
    <div class="d-none d-lg-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p-0">
		    <div class="boxv text-center" style="right: 15%;width: 50%;">
                        <div id="temptitle-color" class="mb-lg-0 text-center float-right">
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
        <div class="container-fluid pt-lg-5p pb-lg-10p">
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
                    <div class="pb-lg-15p"><?php the_field('content_section_2') ?></div>
                    <img class="img-fluid contactimage" src="<?php the_field('image_section_2') ?>">
                    <img class="contact-motif-01 move-right d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/contact/motif.png"/>
                </div>
                <div class="col-lg-6 mb-lg-10p contactform pl-lg-5p pr-lg-10p">
                    <style>
                        .text_area_message {
                            height: 169px !important;
                        }
                        .button_contact_submit {
                            color: white;
                            background-color: #2a9bd9;
                            width: 27% !important;
                        }
                    </style>
                    <?php echo do_shortcode('[contact-form-7 id="725" title="Form Contact"]'); ?>
<!--                    <form action="">-->
<!--                        <label>Name</label>-->
<!--                        <input class="mb-lg-10" type="text">-->
<!--                        <label>Email</label>-->
<!--                        <input class="mb-lg-10" type="email">-->
<!--                        <label>Phone</label>-->
<!--                        <input class="mb-lg-10" type="number">-->
<!--                        <label>Company</label>-->
<!--                        <input class="mb-lg-10" type="text">-->
<!--                        <label>Message</label>-->
<!--                        <textarea class="mb-lg-10" rows="5"></textarea>-->
<!--                        <button type="button" class="button-gr">-->
<!--                            <p class="font-white">SUBMIT</p>-->
<!--                            <img class="w-lg-120 h-lg-50" src="--><?php //bloginfo('stylesheet_directory');?><!--/images/button-gr.png">-->
<!--                        </button>-->
<!--                    </form>-->
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
					<div class="mapbrief">
                                          <?php the_sub_field('brief') ?>
					</div>
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
                .contactimage {
                    position: absolute;
                    z-index: 1030 !important;
                    width: 90%;
                    height: auto;
                    left: 13px !important
                }
                .contact_motif {
                    position: absolute;
                    z-index: 1020 !important;
                    top: 84px;
                    left: -37px;
                    width: 37%;
                    height: auto;
                }
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
                    color: #414042 !important;
                }
		.mapSection iframe{height:50vh !important;}
                .header_title_address {
                    height: 65vh !important;
                    overflow: hidden;
                }
		.mapSection .contact-carousel.owl-theme .owl-nav{
		    bottom: 10%;
		    left: 15%;
		    right: unset;
		}
                .mapSection .contact-carousel.owl-theme .owl-nav button.owl-prev {
                    margin: auto !important;
                    position: absolute;
                    top: -15px !important;
                    left: -18px;
                    transform: unset;
                    font-size: 35px !important;
		    width: 50px;
                    color: #fff !important;
                }
                .mapSection .contact-carousel.owl-theme .owl-nav button.owl-next {
                    margin: auto !important;
                    position: absolute;
                    top: -15px !important;
                    left: 20px;
                    transform: unset;
                    font-size: 35px !important;
		    width: 50px;
                    color: #fff !important;
                }
                /*Contact form mobile*/
                .text_area_message {
                    height: 169px !important;
                }
                .button_contact_submit {
                    color: white;
                    background-color: #2a9bd9;
                    width: 27% !important;
                }
		#temptitle-color .temptitle-motif1,
		#temptitle-color .temptitle-motif2{width:auto;}
            }
        </style>
        <div class="container-fluid pt-m-10p pb-m-10p">
            <div class="row">
                <!-- Brief -->
                <div class="col-12 pb-m-10p pl-m-20p pr-m-20p text-center my-5 my-lg-0">
                    <h3 class="header-title1"><?php the_field('title_section_2') ?></h3>
                </div>
                <div class="col-12 pl-m-10p pr-m-10p">
                    <div id="temptitle-color">
                        <h2><?php the_field('title_content') ?></h2>    
                        <img class="temptitle-motif1" src="<?php bloginfo('stylesheet_directory');?>/images/partials/right.png"/>
                        <img class="temptitle-motif2" src="<?php bloginfo('stylesheet_directory');?>/images/partials/left.png"/>
                    </div>
                </div>
                <div class="col-12 mb-m-10p pb-m-45p pl-m-5p pr-m-5p">
                    <div class="content_"><?php the_field('content_section_2') ?></div>
                    <img class="img-fluid pt-m-10p pb-m-10p pl-m-5p pr-m-5p contactimage text-center" src="<?php the_field('image_section_2') ?>">
                    <img class="contact_motif move-right d-block d-lg-none" src="<?php bloginfo('stylesheet_directory');?>/images/contact/motif.png"/>
                </div>
                <div class="col-12 mb-lg-10p contactform pl-lg-5p pr-lg-5p">
                    <p>Please fill out the form, and we’ll respond to you shortly.</p>

                    <?php echo do_shortcode('[contact-form-7 id="725" title="Form Contact"]'); ?>

                    <!--                    <form action="">-->
<!--                        <label>Name</label>-->
<!--                        <input class="mb-lg-10" type="text">-->
<!--                        <label>Email</label>-->
<!--                        <input class="mb-lg-10" type="email">-->
<!--                        <label>Phone</label>-->
<!--                        <input class="mb-lg-10" type="number">-->
<!--                        <label>Company</label>-->
<!--                        <input class="mb-lg-10" type="text">-->
<!--                        <label>Message</label>-->
<!--                        <textarea class="mb-lg-10" rows="5"></textarea>-->
<!--                        <button type="button" class="button-gr">-->
<!--                            <p class="font-white">SUBMIT</p>-->
<!--                            <img class="w-lg-100 h-lg-35" src="--><?php //bloginfo('stylesheet_directory');?><!--/images/button-gr.png">-->
<!--                        </button>-->
<!--                    </form>-->
                </div>

                <!-- Maps -->
                <div class="container-fluid mapSection bg-black">
                    <div class="contact-carousel owl-theme">
                        <?php if(have_rows('repeater_section_3')):
                            $x = 1; ?>
                            <?php while (have_rows('repeater_section_3')): the_row(); ?>
                            <div class="item">
                                <div class="row">
                                    <div class="col-12 pl-m-0 pr-m-0">
                                        <?php the_sub_field('maps') ?>
                                    </div>
                                    <div class="col-12 font-white pt-m-10p pb-m-10p pl-m-10p pr-m-10p">
                                        <div class="header_title_address">
					    <div id="temptitle-color">
                        			<h2 style="color: #fff !important;"><?php the_sub_field('title') ?></h2>    
                        			<img class="temptitle-motif1" src="<?php bloginfo('stylesheet_directory');?>/images/partials/left-white.png"/>
                        			<img class="temptitle-motif2" src="<?php bloginfo('stylesheet_directory');?>/images/partials/right-white.png"/>
                    			    </div>
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
                <div class="col-lg-6 pl-lg-10p">
		  <div id="temptitle-color">
                    <h2><?php the_field('title_bottom') ?></h2>    
                    <img class="temptitle-motif1 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/partials/right.png"/>
                    <img class="temptitle-motif2 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/partials/left.png"/>
                  </div>
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
		    <div class="boxv r-lg-20p">
		      <a href="<?php the_field('link_btn_bottom') ?>">
                          <div class="newbutton-gr" style="background: url('<?php bloginfo('stylesheet_directory');?>/images/button-gr.png');">
                              <p class="font-white"><?php the_field('btn_bottom') ?></p>
                          </div>
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
                .newbutton-gr p{font-size: 9px !important;}
                .bottomSection #temptitle-color{padding: 15px;}
                .bottomSection #temptitle-color h2{font-size: 12px !important;}
                .bottomSection #temptitle-color .temptitle-motif1,
                .bottomSection #temptitle-color .temptitle-motif2{width: 14px;}
            }
        </style>
        <div class="container-fluid pt-m-10p pb-m-10p pl-m-10p pr-m-10p">
            <div class="row">
                <div class="col-6 pl-m-0 pr-m-0">
                    <div id="temptitle-color">
                        <h2><?php the_field('title_bottom') ?></h2>    
                        <img class="temptitle-motif1" src="<?php bloginfo('stylesheet_directory');?>/images/partials/right.png"/>
                        <img class="temptitle-motif2" src="<?php bloginfo('stylesheet_directory');?>/images/partials/left.png"/>
                    </div>
                </div>
                <div class="col-6 pt-m-5p text-right">
                    <a href="<?php the_field('link_btn_bottom') ?>">
                        <div class="newbutton-gr" style="background: url('<?php bloginfo('stylesheet_directory');?>/images/button-gr.png');">
                            <p class="font-white"><?php the_field('btn_bottom') ?></p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>




<?php endwhile; ?>
<?php get_footer(); ?>