<!DOCTYPE html>
<html lang="zxx">

<head>
    <script type="application/x-javascript">
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>
    <!-- //custom-theme -->
    <link href="<?php bloginfo('template_directory')?>/css/bootstrap.css" rel="stylesheet" type="text/css"
        media="all" />
    <!-- <link href="<?php bloginfo('template_directory')?>/css/bootstrap.min.css" rel="stylesheet" type="text/css"
        media="all" /> -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/css/shop.css" type="text/css" media="screen"
        property="" />
    <link href="<?php bloginfo('template_directory')?>/css/style7.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php bloginfo('template_directory')?>/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php bloginfo('template_directory')?>/css/shop.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php bloginfo('template_directory')?>/css/checkout.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php bloginfo('template_directory')?>/css/easy-responsive-tabs.css" rel="stylesheet" type="text/css"
        media="all" />

    <!-- font-awesome-icons -->
    <link href="<?php bloginfo('template_directory')?>/css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <link
        href="//fonts.googleapis.com/css?family=Montserrat:100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
        rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">

    <?php wp_head() ?>
</head>

<body>
    <?php if(is_home()) {?>
    <!-- banner -->
    <div class="banner_top" id="home">
        <div class="wrapper_top_w3layouts">

            <div class="header_agileits">
                <div class="logo">
                    <h1><a class="navbar-brand" href="<?php bloginfo('url') ?>"><span>Downy</span> <i>Shoes</i></a></h1>
                </div>
                <div class="overlay overlay-contentpush">
                    <button type="button" class="overlay-close"><i class="fa fa-times" aria-hidden="true"></i></button>

                    <nav>
                        <!-- <ul>
                            <li><a href="index.html" class="active">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="404.html">Team</a></li>
                            <li><a href="shop.html">Shop Now</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul> -->
                        <?php wp_nav_menu( 
                                    array( 
                                        'theme_location' => 'main_nav', 
                                        'container' => 'false', 
                                        'menu_id' => 'main_nav', 
                                        'menu_class' => 'main_nav'
                                    ) 
                                ); ?>
                    </nav>
                </div>
                <div class="mobile-nav-button">
                    <button id="trigger-overlay" type="button"><i class="fa fa-bars" aria-hidden="true"></i></button>
                </div>
                <!-- cart details -->
                <div class="top_nav_right">
                    <div class="shoecart shoecart2 cart cart box_1">
                        <form action="#" method="post" class="last">
                            <input type="hidden" name="cmd" value="_cart">
                            <input type="hidden" name="display" value="1">
                            <button class="top_shoe_cart" type="submit" name="submit" value=""><i
                                    class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
                        </form>
                    </div>

                </div>
                <!-- //cart details -->
                <!-- search -->
                <div class="search_w3ls_agileinfo">
                    <div class="cd-main-header">
                        <ul class="cd-header-buttons">
                            <li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
                        </ul>
                    </div>
                    <div id="cd-search" class="cd-search">
                        <form action="#" method="post">
                            <input name="Search" type="search" placeholder="Click enter after typing...">
                        </form>
                    </div>
                </div>
                <!-- //search -->

                <div class="clearfix"></div>
            </div>
            <!-- /slider -->
            <div class="slider">
                <div class="callbacks_container">
                    <ul class="rslides callbacks callbacks1" id="slider4">

                        <li>
                            <div class="banner-top2">
                                <div class="banner-info-wthree">
                                    <h3>Nike</h3>
                                    <p>See how good they feel.</p>

                                </div>

                            </div>
                        </li>
                        <li>
                            <div class="banner-top3">
                                <div class="banner-info-wthree">
                                    <h3>Heels</h3>
                                    <p>For All Walks of Life.</p>

                                </div>

                            </div>
                        </li>
                        <li>
                            <div class="banner-top">
                                <div class="banner-info-wthree">
                                    <h3>Sneakers</h3>
                                    <p>See how good they feel.</p>

                                </div>

                            </div>
                        </li>
                        <li>
                            <div class="banner-top1">
                                <div class="banner-info-wthree">
                                    <h3>Adidas</h3>
                                    <p>For All Walks of Life.</p>

                                </div>

                            </div>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
            <!-- //slider -->
            <ul class="top_icons">
                <li><a href="#"><span class="fa fa-facebook" aria-hidden="true"></span></a></li>
                <li><a href="#"><span class="fa fa-twitter" aria-hidden="true"></span></a></li>
                <li><a href="#"><span class="fa fa-linkedin" aria-hidden="true"></span></a></li>
                <li><a href="#"><span class="fa fa-google-plus" aria-hidden="true"></span></a></li>

            </ul>
        </div>
    </div>
    <!-- //banner -->
    <?php } else {?>
    <div class="banner_top innerpage" id="home">
        <div class="wrapper_top_w3layouts">
            <div class="header_agileits">
                <div class="logo inner_page_log">
                    <h1><a class="navbar-brand" href="<?php bloginfo('url') ?>"><span>Downy</span> <i>Shoes</i></a></h1>
                </div>
                <div class="overlay overlay-contentpush">
                    <button type="button" class="overlay-close"><i class="fa fa-times" aria-hidden="true"></i></button>

                    <nav>
                        <ul>
                            <?php wp_nav_menu( 
                                    array( 
                                        'theme_location' => 'main_nav', 
                                        'container' => 'false', 
                                        'menu_id' => 'main_nav', 
                                        'menu_class' => 'main_nav'
                                    ) 
                                ); ?>
                        </ul>
                    </nav>
                </div>
                <div class="mobile-nav-button">
                    <button id="trigger-overlay" type="button"><i class="fa fa-bars" aria-hidden="true"></i></button>
                </div>
                <!-- cart details -->
                <div class="top_nav_right">
                    <div class="shoecart shoecart2 cart cart box_1">
                        <form action="#" method="post" class="last">
                            <input type="hidden" name="cmd" value="_cart">
                            <input type="hidden" name="display" value="1">
                            <button class="top_shoe_cart" type="submit" name="submit" value=""><i
                                    class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- //cart details -->
        <!-- search -->
        <div class="search_w3ls_agileinfo">
            <div class="cd-main-header">
                <ul class="cd-header-buttons">
                    <li>
                        <a class="cd-search-trigger" href="#cd-search"> <span></span></a>
                    </li>
                </ul>
            </div>
            <div id="cd-search" class="cd-search">
                <form action="#" method="post">
                    <input name="Search" type="search" placeholder="Click enter after typing...">
                </form>
            </div>
        </div>
        <!-- //search -->
        <div class="clearfix"></div>
        <!-- /banner_inner -->
        <div class="services-breadcrumb_w3ls_agileinfo">
            <div class="inner_breadcrumb_agileits_w3">

                <ul class="short">
                    <!-- <li><a href="index.html">Home</a><i>|</i></li>
                    <li>Shop</li> -->
                    <?php
                    /**
                     * Hook: woocommerce_before_main_content.
                     *
                     * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
                     * @hooked woocommerce_breadcrumb - 20
                     * @hooked WC_Structured_Data::generate_website_data() - 30
                     */
                    do_action( 'woocommerce_before_main_content' );
?>
                </ul>
            </div>
        </div>
        <!-- //banner_inner -->
    </div>
    <?php }?>