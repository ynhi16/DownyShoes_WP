<?php get_header() ?>
<!-- Get post News Query -->
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="container page">
    <h2 class="title">
        <?php the_title() ?></h2>
    <div class="row">
        <!-- <div class="col-xs-12 col-sm-12 col-md-3">
                <div class="sidebar">
                    <?php get_sidebar() ?>
                </div>
            </div> -->
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div>
                <?php the_content() ?>
            </div>
        </div>


    </div>
</div>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer()?>