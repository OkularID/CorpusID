<?php get_header(''); ?>
<?php while ( have_posts() ) : the_post(); ?>

    <style type="text/css">
        .news-detail{padding: 10% 0 10% 7%;}
        .news-detail a{font-family: "OpenSans Regular";color: #414042;}
        .news-title{margin-bottom: 3%;font-family: "OpenSans Bold";}
    </style>

    <section class="headerSection fadein">
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
    </section>

    <section class="container-fluid news-detail">
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
    </section>


<?php endwhile; ?>
<?php get_footer(); ?>