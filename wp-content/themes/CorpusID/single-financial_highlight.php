<?php get_header(''); ?>
<?php while ( have_posts() ) : the_post(); ?>

    <style type="text/css">
        .highlight-detail{padding: 10% 0 10% 7%;}
        .highlight-detail a{font-family: "OpenSans Regular";color: #414042;}
        .highlight-title{margin-bottom: 3%;font-family: "OpenSans Bold";}
    </style>
    <section class="headerSection fadein">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="boxc pt-lg-6p pl-lg-66p pr-lg-14p text-center">
                        <p class="font-white"><?php the_field('header_sub_title',15) ?></p>
                        <h1 class="font-white m-a w-200x"><?php the_field('header_title',15) ?></h1>
                    </div>
                    <img class="img-fluid d-none d-lg-block" src="<?php the_field('header_image',15) ?>"/>
                    <img class="img-fluid d-lg-none" src="<?php the_field('header_image',15) ?>"/>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid highlight-detail">

        <div class="row">
            <div class="col-lg-12 mb-lg-5p slideanimLeft">
                <a href=""><img class="img-fluid" style="width: 45px; padding-right: 5px;" src="<?php bloginfo('stylesheet_directory');?>/images/homepage/arrow-left-box.png"></a>
                <a href="">Back</a>
            </div>
            <div class="col-lg-6 slideanimLeft">
                <p><?php the_field('date'); ?></p>
                <h4 class="highlight-title"><?php the_title(); ?></h4>
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