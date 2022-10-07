<div class="mid_slider_w3lsagile">
    <div class="col-md-3 mid_slider_text">
        <h5>Mẫu giày</h5>
    </div>
    <div class="col-md-9 mid_slider_info">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <?php $i=0; ?>
                <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=6&post_type=slider'); ?>
                <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                <li data-target="#myCarousel" data-slide-to="<?php echo $i ?>"
                    class="<?php if($i==0) { echo "active";}; ?>"></li>
                <?php $i++; ?>
                <!-- <?php echo $i; ?> -->
                <?php endwhile; wp_reset_postdata(); ?>

                <!-- <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                <li data-target="#myCarousel" data-slide-to="3" class=""></li> -->
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="row">
                        <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=4&post_type=slider'); ?>
                        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>



                        <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                            <div class="thumbnail"><img
                                    src="<?php echo get_the_post_thumbnail_url( get_the_id(), 'full' ); ?>" alt="Image"
                                    style="max-width:100%;">
                            </div>
                        </div>

                        <?php endwhile; wp_reset_postdata(); ?>
                    </div>
                </div>



                <div class="item">
                    <div class="row">
                        <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=4&post_type=slider&offset=4'); ?>
                        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                        <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                            <div class="thumbnail"><img
                                    src="<?php echo get_the_post_thumbnail_url( get_the_id(), 'full' ); ?>" alt="Image"
                                    style="max-width:100%;">
                            </div>
                        </div>

                        <?php endwhile; wp_reset_postdata(); ?>
                    </div>
                </div>
                <!-- <div class="item">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                            <div class="thumbnail"><img src="<?php bloginfo('template_directory')?>/images/g1.jpg"
                                    alt="Image" style="max-width:100%;">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                            <div class="thumbnail"><img src="<?php bloginfo('template_directory')?>/images/g2.jpg"
                                    alt="Image" style="max-width:100%;">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                            <div class="thumbnail"><img src="<?php bloginfo('template_directory')?>/images/g3.jpg"
                                    alt="Image" style="max-width:100%;">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                            <div class="thumbnail"><img src="<?php bloginfo('template_directory')?>/images/g4.jpg"
                                    alt="Image" style="max-width:100%;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                            <div class="thumbnail"><img src="<?php bloginfo('template_directory')?>/images/g1.jpg"
                                    alt="Image" style="max-width:100%;">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                            <div class="thumbnail"><img src="<?php bloginfo('template_directory')?>/images/g2.jpg"
                                    alt="Image" style="max-width:100%;">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                            <div class="thumbnail"><img src="<?php bloginfo('template_directory')?>/images/g3.jpg"
                                    alt="Image" style="max-width:100%;">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                            <div class="thumbnail"><img src="<?php bloginfo('template_directory')?>/images/g4.jpg"
                                    alt="Image" style="max-width:100%;">
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="fa fa-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="fa fa-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <!-- The Modal -->

        </div>
    </div>

    <div class="clearfix"> </div>
</div>