<?php get_header(''); ?>
<?php while ( have_posts() ) : the_post(); ?>

    <style type="text/css">
        .career-form .back a{font-family: "OpenSans Regular";}
        .career-form .header-title{position:relative;margin-left: -3%;padding: 30px;width: 350px;}
        .career-form label,input,.career-form select{font-family: "OpenSans Regular";color: #6D6E71;font-size: 14px !important;}
        .career-form input,.career-form textarea,.career-form select{
            display: block;
            padding: 10px;
            width: 100%;
            border: 1px solid #a7a9ac;
        }
        .career-form form input::-webkit-outer-spin-button,
        .career-form form input::-webkit-inner-spin-button{
            /* display: none; <- Crashes Chrome on hover */
            -webkit-appearance: none;
            margin: 0;
        }
        .career-form form input[type=number] {
            -moz-appearance:textfield; /* Firefox */
        }
        .career-form .button-gr{
            padding: 0;
            border: none;
            background: transparent;
        }
        .career-form .button-gr p{
            top: 50%;
            transform: translateY(-50%);
        }
    </style>

<section class="headerSection">
    <!--Desktop-->
    <div class="d-none d-lg-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="boxc pl-lg-64p pr-lg-2p">
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
                    height: 100vh !important;
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

<!--Desktop Form-->
<div class="d-none d-lg-block">
    <section class="container-fluid career-form pt-lg-10p pb-lg-10p pl-lg-7p pr-lg-7p">
        <div class="row">
            <div class="col-lg-12 back mb-lg-5p">
                <a href="<?php the_field('button_link') ?>"><img class="img-fluid w-lg-50 mr-lg-10" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/arrow-left-box.png"></a>
                <a class="font-gray" href="<?php the_field('button_link') ?>"><?php the_field('button') ?></a>
            </div>
            <div class="col-lg-12 pl-lg-7p pr-lg-5p">
                <div class="header-title mb-lg-3p">
                    <h1 class="font-gray"><?php the_field('section_2_title') ?></h1>
                    <img class="home-icon-01 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/home-icon-11.png"/>
                    <img class="home-icon-02 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/home-icon-12.png"/>
                </div>
                <form action="">
                    <table class="w-lg-100p">
                        <tr>
                            <td class="pb-lg-3p pr-lg-3p">
                                <label>Name</label>
                                <input class="mb-lg-20" type="text">
                                <label>Email</label>
                                <input class="mb-lg-20" type="email">
                                <label>Phone</label>
                                <input class="mb-lg-20" type="number">
                                <label>Company / University</label>
                                <input class="mb-lg-20" type="text">
                                <label>Position</label>
                                <select id="position">
                                    <option>Choose One</option>
                                    <option>Software Engineer</option>
                                    <option>DevOps</option>
                                    <option>Project Manager</option>
                                    <option>Backend Engineer</option>
                                    <option>Data Science</option>
                                </select>
                            </td>
                            <td class="pl-lg-3p">
                                <label>Message</label>
                                <textarea class="mb-lg-20" rows="13"></textarea>
                                <label>Choose file</label>
                                <input type="file" class="form-control-file">
                                <small class="form-text text-muted">Upload your CV, Maximum upload file size 2MB.</small>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <button type="button" class="button-gr">
                                    <p class="font-white">SUBMIT</p>
                                    <img class="w-lg-120 h-lg-50" src="<?php bloginfo('stylesheet_directory');?>/images/button-gr.png">
                                </button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </section>
</div>

<!--Mobile Form-->
<div class="d-block d-lg-none">
    <style>
        @media screen and (max-width: 846px) {
            .header-title1 {
                padding: 10px;
            }
            .career-form .button-gr p {
                top: 72%;
            }
            .join {
                font-size: 25px !important;
            }
        }
    </style>
    <section class="container-fluid career-form pt-m-10p pb-m-10p pl-m-7p pr-m-7p">
        <div class="row">
            <div class="col-12 back mb-m-5p">
                <a href="<?php the_field('button_link') ?>"><img class="img-fluid w-m-10p mr-m-10" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/arrow-left-box.png"></a>
                <a class="font-gray" href="<?php the_field('button_link') ?>"><?php the_field('button') ?></a>
            </div>
            <div class="col-12">
                <div class="header-title1 text-center">
                    <h1 class="font-gray join"><?php the_field('section_2_title') ?></h1>
                    <img class="home-icon-01 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/home-icon-11.png"/>
                    <img class="home-icon-02 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/home-icon-12.png"/>
                </div>
                <form action="">
<!--                    <table class="w-lg-100p">-->
                        <tr>
                            <td class="pb-lg-3p pr-lg-3p">
                                <label>Name</label>
                                <input class="mb-m-20" type="text">
                                <label>Email</label>
                                <input class="mb-m-20" type="email">
                                <label>Phone</label>
                                <input class="mb-m-20" type="number">
                                <label>Company / University</label>
                                <input class="mb-m-20" type="text">
                                <label>Position</label>
                                <select id="position">
                                    <option>Choose One</option>
                                    <option>Software Engineer</option>
                                    <option>DevOps</option>
                                    <option>Project Manager</option>
                                    <option>Backend Engineer</option>
                                    <option>Data Science</option>
                                </select>
                            </td>
                            <td class="pl-lg-3p">
                                <label>Message</label>
                                <textarea class="mb-lg-20" rows="13"></textarea>
                                <label>Choose file</label>
                                <input type="file" class="form-control-file">
                                <small class="form-text text-muted">Upload your CV, Maximum upload file size 2MB.</small>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <button type="button" class="button-gr">
                                    <br>
                                    <p class="font-white">SUBMIT</p>
                                    <img class="w-m-100 h-m-32" src="<?php bloginfo('stylesheet_directory');?>/images/button-gr.png">
                                </button>
                            </td>
                        </tr>
<!--                    </table>-->
                </form>
            </div>
        </div>
    </section>
</div>

<?php endwhile; ?>
<?php get_footer(); ?>