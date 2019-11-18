<!-- Footer -->
<footer>
    <!--Desktop-->
    <div class="d-none d-lg-block">
        <div class="container-fluid pt-lg-5p pb-lg-1p pl-lg-7p pr-lg-7p bg-black">
            <div class="row">
                <div class="col-lg-5 pos-rel">
                    <ul class="boxc">
                        <?php if(have_rows('footer_menu',530)): ?>
                            <?php while (have_rows('footer_menu',530)): the_row(); ?>
                                <li><a href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>
                <div class="col-lg-2 social pl-lg-0 pr-lg-0">
                    <p><?php the_field('title',530) ?></p>
                    <ul>
                        <?php if(have_rows('social',530)): ?>
                            <?php while (have_rows('social',530)): the_row(); ?>
                                <li><a href="<?php the_sub_field('link');?>"><img src="<?php the_sub_field('logo');?>"></a></li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>
                <div class="col-lg-5 group pl-lg-50">
                    <p><?php the_field('title_2',530) ?></p>
                    <ul>
                        <?php if(have_rows('corpus_group',530)): ?>
                            <?php while (have_rows('corpus_group',530)): the_row(); ?>
                                <li><a href="<?php the_sub_field('link');?>"><img src="<?php the_sub_field('logo');?>"></a></li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>
                <div class="line-grey w-lg-100p mt-lg-20 mb-lg-10"></div>
                <div class="col-lg-12 copy">
                    <p><?php the_field('copyright',530) ?></p>
                </div>
            </div>
        </div>
    </div>

    <!--Mobile-->
    <div class="d-lg-none">
        <style>
            @media screen and (max-width: 846px) {
                .boxc_footer {
                    position: relative;


                }
                .ToS {
                    font-size: 13px;
                }
                .connect_ {
                    font-size: 13px !important;
                }
                .groups_ {
                    font-size: 13px !important;
                }
                .groups_icon {
                    width: 75px !important;
                }
            }
        </style>
        <div class="container-fluid pt-m-5p pb-m-1p pl-m-7p pr-m-7p bg-black">
            <div class="row">
                <div class="col-12 pl-m-0 pr-m-0">
                    <ul class="boxc_footer ToS text-center">
                        <?php if(have_rows('footer_menu',530)): ?>
                            <?php while (have_rows('footer_menu',530)): the_row(); ?>
                                <li><a href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>
                <div class="col-12 social pt-m-5p pl-m-0 pr-m-0 text-center">
                    <p class="connect_"><?php the_field('title',530) ?></p>
                    <ul>
                        <?php if(have_rows('social',530)): ?>
                            <?php while (have_rows('social',530)): the_row(); ?>
                                <li><a href="<?php the_sub_field('link');?>"><img src="<?php the_sub_field('logo');?>"></a></li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>
                <div class="col-12 group text-center pl-m-0 pr-m-0">
                    <p class="groups_"><?php the_field('title_2',530) ?></p>
                    <ul>
                        <?php if(have_rows('corpus_group',530)): ?>
                            <?php while (have_rows('corpus_group',530)): the_row(); ?>
                                <li><a href="<?php the_sub_field('link');?>"><img class="groups_icon" src="<?php the_sub_field('logo');?>"></a></li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>
                <div class="line-grey w-lg-100p mt-lg-20 mb-lg-10"></div>
                <div class="col-lg-12 copy">
                    <p><?php the_field('copyright',530) ?></p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!--Javascript-->
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory');?>/node_modules/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory');?>/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory');?>/node_modules/owl.carousel/dist/owl.carousel.js"></script>

<script type="text/javascript" src="<?php bloginfo('stylesheet_directory');?>/style/script/extends.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory');?>/style/script/app.js"></script>
<script src="<?php bloginfo('stylesheet_directory');?>node_modules/animatecss/wow.min.js"></script>
<!-- Animate CSS -->
<script>
    new WOW().init();
</script>
<?php wp_footer(); ?>
</body>
</html>