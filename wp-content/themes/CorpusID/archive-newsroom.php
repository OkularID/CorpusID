<?php get_header('archive'); ?>


    <style>
        .investmentSection1 h3{color: #414042 !important;}
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
        .ne-pagenav{display: inline-block;}
        .ne-pagenav img{width: 50px;}
        .ne-pagination{display: inline-block;padding:15px;width: auto;}
        .ne-pagination .page-numbers{font-family: "OpenSans Regular";color: #58595b;}
        .ne-pagination .current{font-family: "OpenSans Bold";color: #58595b;}
        .box-shadoww {
            -webkit-box-shadow: 0px 27px 23px 2px rgba(232,225,232,0.44);
            -moz-box-shadow: 0px 27px 23px 2px rgba(232,225,232,0.44);
            box-shadow: 0px 27px 23px 2px rgba(232,225,232,0.44);
        }
        .button-gr p {
	    display: block;
	    width: 100%;
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
                        <!-- <h1 class="font-white m-a w-200x">
                            <?php the_field('header_title',35); ?>
                        </h1> -->
                        <div id="temptitle-color" class="mb-lg-0 text-center float-right">
                            <h1 class="font-white m-a w-200x" style='width:300px'><?php the_field('header_title', 35) ?></h1>
                            <img class="temptitle-motif1 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/partials/left-white.png"/>
                            <img class="temptitle-motif2 d-none d-lg-block" src="<?php bloginfo('stylesheet_directory');?>/images/partials/right-white.png"/>
                        </div>
                    </div>
                    <img class="img-fluid d-none d-lg-block" src="<?php the_field('header_image',35); ?>"/>
                    <img class="img-fluid d-lg-none" src="<?php the_field('header_image',35); ?>"/>
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
                    left: 27%;
                    width: 15px !important;
                }
                .motifhead-right {
                    z-index: 40;
                    position: absolute;
                    top: 47%;
                    left: 69%;
                    width: 15px !important;
                }
            }
        </style>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="boxc">
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

    <section class="investmentSection1 pt-lg-5p pb-lg-10p pt-m-10p pl-lg-5p pr-lg-5p slideanim">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 pb-lg-5p text-center d-none d-lg-block">
                    <h3><?php the_field('title_section_2',35); ?></h3>
                </div>
                <div class="col-12 pb-m-10p pl-m-20p pr-m-20p text-center my-5 my-lg-0 d-block d-lg-none">
                    <h3><?php the_field('title_section_2',35); ?></h3>
                </div>
                <!--search and filter section-->
                <!-- <div class="col-lg-12 filterSection pb-lg-5p">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3">
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
                            <div class="col-lg-5">
                                <div class="sort-box">
                                    <div class="sort-title">
                                        <p>CATEGORY</p>
                                    </div><div class="sort-button">
                                        <select name="sort">
                                            <option value="NEWS">NEWS</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
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
                <!--news sections-->
                <div class="col-lg-12 highlightSection">
                    <div class="container-fluid">
                        <div class="row">
                            <?php
                            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                            $params = array('post_type' => 'newsroom' , 'order' => 'DESC', 'post_status' => 'publish', 'posts_per_page' => 6, 'paged' => $paged);
                            $ne = new WP_Query($params);
                            if($ne->have_posts()){
                                while ($ne->have_posts()) : $ne->the_post();
                                    ?>
                                    <div class="col-lg-6 pb-lg-5p">
                                        <div class="container-fluid pb-lg-5p box-shadoww">
                                            <img src="<?php the_field('image') ?>" alt="" class="img-fluid">
                                            <div class="mb-lg-20 pt-lg-3p pl-lg-5p pr-lg-10p h-lg-105 of-lg-h">
                                                <p><?php the_field('date'); ?></p>
                                                <b class="font-gray"><?php echo wp_trim_words( get_the_title(), 18, ' ...' ); ?></b>
                                            </div>
					    <div class="pl-lg-5p pr-lg-5p">
                                              <a href="<?php echo get_permalink(); ?>">
						<div class="newbutton-gr" style="background: url('<?php bloginfo('stylesheet_directory');?>/images/button-gr.png');">
                                                  <p class="font-white">READ MORE</p>
						</div>
                                              </a>
					    </div>
                                        </div>
                                    </div>
                                <?php  endwhile;} ?>
                            <div class="ne-pagenav">
                                <?php posts_nav_link( ' ', '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/homepage/arrow-left-box.png" />', '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/homepage/arrow-right-box.png" />' ); ?>
                            </div>
                            <div class="ne-pagination">
                                <?php
                                echo paginate_links( array(
                                    'current' => max( 1, get_query_var('paged') ),
                                    'prev_next' => false,
                                    'prev_text' => __( '<< Previous' ),
                                    'next_text' => __( 'Next >>' )
                                ) );
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



<?php get_footer(); ?>