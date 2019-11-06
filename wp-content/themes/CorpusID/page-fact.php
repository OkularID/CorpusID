<?php get_header(''); ?>
<?php while ( have_posts() ) : the_post(); ?>

    <style type="text/css">
        .investmentSection1 h4{color: #808285;}
        .investmentSection1 .sort-box{width:250px;border: 1px solid #d1d3d4;}
        .investmentSection1 .sort-title{
            display: inline-block;
            padding: 10px;
            width: auto;
            border-right: 1px solid #d1d3d4;
        }
        .investmentSection1 .sort-title p{margin-bottom: 0;}
        .investmentSection1 .sort-button{
            display: inline-block;
            padding: 10px;
            width: auto;
        }
        .investmentSection1 .sort-button select{
            border: none;
            font-family: "OpenSans Regular";
            font-size: 14px !important;
            line-height: 26px;
            letter-spacing: 0.21px;
            color: #6D6E71;
        }
        .investmentSection1 .search-box{
            float: right;
            width: 260px;
            border: 1px solid #d1d3d4;
        }
        .investmentSection1 .search-input{
            display: inline-block;
            padding: 10px;
            border-right: 1px solid #d1d3d4;
        }
        .investmentSection1 .search-input input{
            border: none;
            font-family: "OpenSans Regular";
            font-size: 14px !important;
            line-height: 26px;
            letter-spacing: 0.21px;
            color: #6D6E71;
        }
        .investmentSection1 .search-icon{
            display: inline-block;
            padding: 10px;
            width: 80px;
            width: auto;
        }
        .investmentSection1 .search-icon button{
            display: inline-block;
            width: 20px;
            padding: 0;
            border: none;
            background: transparent;
            outline: none;
        }
        .investmentSection1 .fact-title{font-family: "OpenSans Bold";font-size: 15px;}
        .box-shadoww {
            -webkit-box-shadow: 30px 21px 26px -16px rgba(217,214,217,1);
            -moz-box-shadow: 30px 21px 26px -16px rgba(217,214,217,1);
            box-shadow: 30px 21px 26px -16px rgba(217,214,217,1);
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
                        <p class="font-white">Insights</p>
                        <h1 class="font-white m-a w-200x">
                            <b>Factsheet</b>
                        </h1>
                    </div>
                    <img class="img-fluid d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/report/bg-report-01.png"/>
                    <img class="img-fluid d-lg-none" src="<?php bloginfo('stylesheet_directory');?>/images/report/bg-report-01.png"/>
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
                    top: 39%;
                    left: 27%;
                    width: 15px !important;
                }
                .motifhead-right {
                    z-index: 40;
                    position: absolute;
                    top: 50%;
                    left: 70%;
                    width: 15px !important;
                }
            }
        </style>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="boxc">
                        <p class="font-white text-center"><?php the_field('header_subtitle') ?></p>
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
    <div class="d-none d-lg-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 pb-lg-5p text-center">
                    <h4 class="ma-lg w-lg-70p">More than just satisfying our clients, we do a relentless effort to give a deep impression to our clients from personal, <b>humble and professional service</b>.</h4>
                </div>

                <!--search and filter section-->
                <!-- <div class="col-lg-12 filterSection pb-lg-5p">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="sort-box">
                                <div class="sort-title">
                                    <p>SORT BY</p>
                                </div><div class="sort-button">
                                    <select name="sort">
                                        <option value="RECENT UPDATE">RECENT UPDATE</option>
                                        <option value="RECENT UPDATE">RECENT UPDATE</option>
                                        <option value="RECENT UPDATE">RECENT UPDATE</option>
                                        <option value="RECENT UPDATE">RECENT UPDATE</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="search-box">
                                <div class="search-input">
                                    <input type="text" placeholder="SEARCH">
                                </div>
                                <div class="search-icon">
                                    <button type="submit"><img class="img-fluid" src="<?php bloginfo('stylesheet_directory');?>/images/search-icon.png"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

                <!--galery sections-->
                <div class="col-lg-12 highlightSection">
                    <div class="container-fluid">
                        <div class="row">
                            <?php
                            $params = array('post_type' => 'factsheet' , 'order' => 'DESC', 'post_status' => 'publish', 'posts_per_page' => -1);
                            $fact = new WP_Query($params);
                            if($fact->have_posts()){
                                while ($fact->have_posts()) : $fact->the_post();
                                    ?>
                                    <div class="col-lg-3 pb-lg-5p pl-lg-3p pr-lg-3p text-center">
                                        <a href="<?php the_field('file'); ?>" target="_blank"><img src="<?php the_field('image'); ?>" alt="" class="img-fluid box-shadoww mb-lg-10p"></a>
                                        <a href="<?php the_field('file'); ?>" target="_blank"><div class="fact-title font-gray"><?php the_title(); ?></div></a>
                                        <p class="font-gray"><?php the_field('date'); ?></p>
                                    </div>
                                <?php endwhile;} ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="d-block d-lg-none">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 pb-lg-5p text-center">
                    <h4 class="ma-lg w-lg-70p">More than just satisfying our clients, we do a relentless effort to give a deep impression to our clients from personal, <b>humble and professional service</b>.</h4>
                </div>

                <!--galery sections-->
                <div class="col-12 highlightSection">
                    <div class="container-fluid">
                        <div class="row">
                            <?php
                            $params = array('post_type' => 'factsheet' , 'order' => 'DESC', 'post_status' => 'publish', 'posts_per_page' => -1);
                            $fact = new WP_Query($params);
                            if($fact->have_posts()){
                                while ($fact->have_posts()) : $fact->the_post();
                                    ?>
                                    <div class="col-6 pb-m-5p pl-m-5p pr-m-5p text-center">
                                        <a href="<?php the_field('file'); ?>" target="_blank"><img src="<?php the_field('image'); ?>" alt="" class="img-fluid box-shadoww mb-lg-10p"></a>
                                        <a href="<?php the_field('file'); ?>" target="_blank"><div class="fact-title font-gray"><?php the_title(); ?></div></a>
                                        <p class="font-gray"><?php the_field('date'); ?></p>
                                    </div>
                                <?php endwhile;} ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<?php endwhile; ?>
<?php get_footer(); ?>