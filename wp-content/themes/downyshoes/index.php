<?php get_header() ?>
<div class="grids_bottom">
    <div class="style-grids">
        <div class="col-md-6 style-grid style-grid-1">
            <img src="<?php bloginfo('template_directory')?>/images/b1.jpg" alt="shoe">
        </div>
    </div>
    <div class="col-md-6 style-grid style-grid-2">
        <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=1&post_type=thunbmail'); ?>
        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
        <div class="style-image-1_info">
            <div class="style-grid-2-text_info">
                <h3><?php the_title(); ?></h3>
                <p><?php the_content() ?></p>
                <div class="shop-button">
                    <a href="<?php bloginfo('url') ?>/cua-hang/">Cửa hàng</a>
                </div>
            </div>
        </div>
        <div class="style-image-2">
            <img src="<?php echo get_the_post_thumbnail_url( get_the_id(), 'full' ); ?>" alt="shoe">
            <div class="style-grid-2-text">
                <h3><?php the_title() ?></h3>
            </div>
        </div>

        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>

    </div>
    <div class="clearfix"></div>
</div>
</div>
<!-- //grids_bottom-->
<!-- /girds_bottom2-->
<div class="grids_sec_2">
    <div class="style-grids_main">
        <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=1&post_type=thunbmail&offset=1'); ?>
        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
        <div class="col-md-6 grids_sec_2_left">
            <div class="grid_sec_info">
                <div class="style-grid-2-text_info">
                    <h3><?php the_title() ?></h3>
                    <p><?php the_content() ?></p>
                    <div class="shop-button">
                        <a href="<?php bloginfo('url') ?>/cua-hang/">Cửa hàng</a>
                    </div>
                </div>
            </div>
            <div class="style-image-2">
                <img src="<?php echo get_the_post_thumbnail_url( get_the_id(), 'full' ); ?>" alt="shoe">
                <div class="style-grid-2-text">
                    <h3><?php the_title() ?></h3>
                </div>
            </div>
        </div>

        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=1&post_type=thunbmail&offset=2'); ?>
        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
        <div class="col-md-6 grids_sec_2_left">
            <div class="style-image-2">
                <img src="<?php echo get_the_post_thumbnail_url( get_the_id(), 'full' ); ?>" alt="shoe">
                <div class="style-grid-2-text">
                    <h3>Air force</h3>
                </div>
            </div>
            <div class="grid_sec_info last">
                <div class="style-grid-2-text_info">
                    <h3><?php the_title() ?></h3>
                    <p><?php the_content() ?></p>
                    <div class="shop-button two">
                        <a href="<?php bloginfo('url') ?>/cua-hang/">Cửa hàng</a>
                    </div>
                </div>
            </div>
        </div>

        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>


        <div class="clearfix"></div>
    </div>
</div>
<!-- //grids_bottom2-->
<!-- /Properties -->
<?php get_template_part('slider')  ?>
<!--//banner -->
<!-- /newsletter-->
<div class="newsletter_w3layouts_agile">
    <div class="col-sm-6 newsleft">
        <h3>Sign up for Newsletter !</h3>
    </div>
    <div class="col-sm-6 newsright">
        <form action="#" method="post">
            <input type="email" placeholder="Enter your email..." name="email" required="">
            <input type="submit" value="Submit">
        </form>
    </div>

    <div class="clearfix"></div>
</div>
<!-- //newsletter-->

<?php get_footer() ?>