<!-- footer -->
<div class="footer_agileinfo_w3">
    <div class="footer_inner_info_w3ls_agileits">
        <div class="col-md-3 footer-left">
            <h2><a href="index.html"><span>D</span>owny Shoes </a></h2>
            <p>
                Được thành lập vào năm 2021,Downy Shoes đã tự phát triển và hoàn thiện mình để mang đến cho người tiêu
                dùng mọi thứ có giá trị từ Giày dép.
            </p>
            <!-- <p>
                Chúng tôi tập trung vào chất lượng, kể một câu chuyện mạnh mẽ thông qua các sản phẩm, cho dù đó là sự
                phức tạp trong quá trình xây dựng hay các ý tưởng vượt ranh giới được thể hiện thông qua định hướng sáng
                tạo.
            </p>
            <p>Downy Shoes hi vọng bạn sẽ thích trải nghiệm mua sắm của mình với chúng tôi và vui lòng liên hệ với bộ
                phận Dịch vụ khách hàng của chúng tôi nếu có câu hỏi, thắc mắc.
            </p> -->




        </div>
        <div class="col-md-9 footer-right">
            <div class="sign-grds">
                <div class="col-md-4 sign-gd">
                    <h4> <span>Thông tin </span> hỗ trợ </h4>

                    <?php wp_nav_menu( 
                                    array( 
                                        'theme_location' => 'footer_nav', 
                                        'container' => 'false', 
                                        'menu_id' => 'footer_nav', 
                                        'menu_class' => 'footer_nav'
                                    ) 
                                ); ?>

                </div>

                <div class="col-md-5 sign-gd-two">
                    <h4> <span>Thông tin</span> liên hệ</h4>
                    <div class="address">
                        <div class="address-grid">
                            <div class="address-left">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            <div class="address-right">
                                <h6>Số điện thoại</h6>
                                <p>0965454664</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="address-grid">
                            <div class="address-left">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </div>
                            <div class="address-right">
                                <h6>Email</h6>
                                <p>Email :<a href="mailto:example@email.com"> mail@example.com</a></p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="address-grid">
                            <div class="address-left">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <div class="address-right">
                                <h6>Địa chỉ</h6>
                                <p>Broome St, NY 10002,California, USA.

                                </p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 sign-gd flickr-post">
                    <h4> Xã hội <span></span></h4>
                    <ul class="social-nav model-3d-0 footer-social social two">
                        <li>
                            <a href="#" class="facebook">
                                <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="twitter">
                                <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="instagram">
                                <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="pinterest">
                                <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //footer -->
<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;">
    </span></a>
<!-- js -->
<script type="text/javascript" src="<?php bloginfo('template_directory')?>/js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- /nav -->
<script src="<?php bloginfo('template_directory')?>/js/modernizr-2.6.2.min.js"></script>
<script src="<?php bloginfo('template_directory')?>/js/classie.js"></script>
<script src="<?php bloginfo('template_directory')?>/js/demo1.js"></script>
<!-- //nav -->
<!-- cart-js -->
<script src="<?php bloginfo('template_directory')?>/js/minicart.js"></script>
<script>
shoe.render();

shoe.cart.on('shoe_checkout', function(evt) {
    var items, len, i;

    if (this.subtotal() > 0) {
        items = this.items();

        for (i = 0, len = items.length; i < len; i++) {}
    }
});
</script>
<!-- //cart-js -->
<!--search-bar-->
<script src="<?php bloginfo('template_directory')?>/js/search.js"></script>
<!--//search-bar-->
<script src="<?php bloginfo('template_directory')?>/js/responsiveslides.min.js"></script>
<script>
$(function() {
    $("#slider4").responsiveSlides({
        auto: true,
        pager: true,
        nav: true,
        speed: 1000,
        namespace: "callbacks",
        before: function() {
            $('.events').append("<li>before event fired.</li>");
        },
        after: function() {
            $('.events').append("<li>after event fired.</li>");
        }
    });
});
</script>
<!-- js for portfolio lightbox -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?php bloginfo('template_directory')?>/js/move-top.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory')?>/js/easing.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($) {
    $(".scroll").click(function(event) {
        event.preventDefault();
        $('html,body').animate({
            scrollTop: $(this.hash).offset().top
        }, 1000);
    });
});
</script>
<!-- //end-smoth-scrolling -->

<script type="text/javascript" src="<?php bloginfo('template_directory')?>/js/bootstrap-3.1.1.min.js"></script>

<?php wp_footer() ?>
</body>

</html>