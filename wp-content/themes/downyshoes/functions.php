<?php
function settup_theme(){
	// Hỗ trợ thubmail
	add_theme_support('post-thumbnails');
	// Remove chiều cao, chiều rộng của hình ảnh trong bài viết
	add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
	add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );
	function remove_width_attribute( $html ) {
	   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
	   return $html;
	}
	add_filter('max_srcset_image_width', 'returnOne');
	function returnOne(){
		return 1;
	}
	// Thêm sidebar
	// if (function_exists('register_sidebar')){
	// 	register_sidebar(array(
	// 		'name'=> 'Cột phải',
	// 		'id' => 'sidebar',
	// 		'before_widget' => '<div class="widget">',
	// 		'after_widget'  => "</div></div>\n",
	// 		'before_title'  => '<h3 class="title-w"><span><i class="fa fa-bars"></i>',
	// 		'after_title'   => "</span></h3><div class='content-view'>\n",
	// 	));
	// }
	if (function_exists('register_sidebar')){
		register_sidebar(array(
		'name'=> 'Cột bên',
		'id' => 'sidebar',
	));
	}
	// Thêm menu
	register_nav_menus(
		array(
            'top_nav' => 'Top menu',
			'main_nav' => 'Main menu',
			'footer_nav' => 'Footer menu',

		)
	);
	// Hàm get đoạn mô tả bài viết
	function teaser($limit) {
		$excerpt = explode(' ', get_the_excerpt(), $limit);
		if (count($excerpt)>=$limit) {
			array_pop($excerpt);
			$excerpt = implode(" ",$excerpt).'[...]';
		} else {
			$excerpt = implode(" ",$excerpt);
		}
		$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
		return $excerpt.'...';
	}
	// Hàm để tăng lượt xem sử dung trong file single.php
	function setpostview($postID){
	    $count_key ='views';
	    $count = get_post_meta($postID, $count_key, true);
	    if($count == ''){
	        $count = 0;
	        delete_post_meta($postID, $count_key);
	        add_post_meta($postID, $count_key, '1');
	    } else {
	        $count++;
	        update_post_meta($postID, $count_key, $count);
	    }
	}
	// Hàm hiển thị lượt xem
	function getpostviews($postID){
	    $count_key ='views';
	    $count = get_post_meta($postID, $count_key, true);
	    if($count == ''){
	        delete_post_meta($postID, $count_key);
	        add_post_meta($postID, $count_key, '1');
	        return "1";
	    }
	    return $count;
	}
}
add_action('init','settup_theme');

function slider_post_type(){
    /*
     * Biến $label để chứa các text liên quan đến tên hiển thị của Post Type trong Admin
     */
    $label = array(
        'name' => 'Ảnh slider', //Tên post type dạng số nhiều
        'singular_name' => 'Ảnh slider' //Tên post type dạng số ít
    );
 
    /*
     * Biến $args là những tham số quan trọng trong Post Type
     */
    $args = array(
        'labels' => $label, //Gọi các label trong biến $label ở trên
        'description' => 'Ảnh slider', //Mô tả của post type
        'supports' => array(
            'title',
             'thumbnail',
            
        ), //Các tính năng được hỗ trợ trong post type
        
        'hierarchical' => false, //Cho phép phân cấp, nếu là false thì post type này giống như Post, true thì giống như Page
        'public' => true, //Kích hoạt post type
        'show_ui' => true, //Hiển thị khung quản trị như Post/Page
        'show_in_menu' => true, //Hiển thị trên Admin Menu (tay trái)
        'show_in_nav_menus' => true, //Hiển thị trong Appearance -> Menus
        'show_in_admin_bar' => true, //Hiển thị trên thanh Admin bar màu đen.
        'menu_position' => 5, //Thứ tự vị trí hiển thị trong menu (tay trái)
        'menu_icon' => 'dashicons-images-alt2', //Đường dẫn tới icon sẽ hiển thị
        'can_export' => true, //Có thể export nội dung bằng Tools -> Export
        'has_archive' => true, //Cho phép lưu trữ (month, date, year)
        'exclude_from_search' => false, //Loại bỏ khỏi kết quả tìm kiếm
        'publicly_queryable' => true, //Hiển thị các tham số trong query, phải đặt true
        'capability_type' => 'post' //
    );
 
    register_post_type('slider', $args); //Tạo post type với slug tên là sanpham và các tham số trong biến $args ở trên
	function catch_that_image() {
		global $post, $posts;
		$first_img = '';
		ob_start();
		ob_end_clean();
		$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
		$first_img = $matches [1] [0];
	   
		if(empty($first_img)){ //Defines a default image
		  $first_img = "/images/default.jpg"; //Duong dan anh mac dinh khi khong tim duoc anh dai dien
		}
		return $first_img;
	  }
}
add_action('init', 'slider_post_type');
function precentSale($price, $priceSale){
	$sale = $priceSale *100 / $price;
	$precentSale = 100 - $sale;
	return number_format($precentSale,1);
}

function my_custom_wc_theme_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'my_custom_wc_theme_support' );


add_filter( 'woocommerce_product_add_to_cart', 'woocommerce_custom_product_add_to_cart_text' );  
function woocommerce_custom_product_add_to_cart_text() {
	$button_new = $button_text. '&raquo; ' . $button;
	
	return $button_new;

}

// add_filter( 'woocommerce_product_add_to_cart_text', 'woo_archive_custom_cart_button_text' );   
// function woo_archive_custom_cart_button_text() {
//         return __( '', 'woocommerce' );
// }

// ảnh index
function thumbnail_post_type(){
    /*
     * Biến $label để chứa các text liên quan đến tên hiển thị của Post Type trong Admin
     */
    $label = array(
        'name' => 'Ảnh đại diện', //Tên post type dạng số nhiều
        'singular_name' => 'Ảnh đại diện' //Tên post type dạng số ít
    );
 
    /*
     * Biến $args là những tham số quan trọng trong Post Type
     */
    $args = array(
        'labels' => $label, //Gọi các label trong biến $label ở trên
        'description' => 'Ảnh đại diện', //Mô tả của post type
        'supports' => array(
            'title',
             'thumbnail',
			 'editor'
            
        ), //Các tính năng được hỗ trợ trong post type
        
        'hierarchical' => false, //Cho phép phân cấp, nếu là false thì post type này giống như Post, true thì giống như Page
        'public' => true, //Kích hoạt post type
        'show_ui' => true, //Hiển thị khung quản trị như Post/Page
        'show_in_menu' => true, //Hiển thị trên Admin Menu (tay trái)
        'show_in_nav_menus' => true, //Hiển thị trong Appearance -> Menus
        'show_in_admin_bar' => true, //Hiển thị trên thanh Admin bar màu đen.
        'menu_position' => 5, //Thứ tự vị trí hiển thị trong menu (tay trái)
        'menu_icon' => 'dashicons-format-aside', //Đường dẫn tới icon sẽ hiển thị
        'can_export' => true, //Có thể export nội dung bằng Tools -> Export
        'has_archive' => true, //Cho phép lưu trữ (month, date, year)
        'exclude_from_search' => false, //Loại bỏ khỏi kết quả tìm kiếm
        'publicly_queryable' => true, //Hiển thị các tham số trong query, phải đặt true
        'capability_type' => 'post' //
    );
 
    register_post_type('thunbmail', $args); //Tạo post type với slug tên là sanpham và các tham số trong biến $args ở trên
	
}
add_action('init', 'thumbnail_post_type');
function example_use_widgets_block_editor( $use_widgets_block_editor ) {
    if ( 123 === get_current_user_id() ) {
        return false;
    }
    return $use_widgets_block_editor;
}
add_filter( 'use_widgets_block_editor', 'example_use_widgets_block_editor' );

// function add_quickmore() {
// 	echo '';
// }
// add_action('woocommerce_before_shop_loop_item_title', 'add_quickmore',1);
function remove_sale_flash(){
	remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );
 }
 add_action( 'woocommerce_before_single_product_summary', 'remove_sale_flash', 1 );

function remove_loop_rating(){
	remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
 }
 add_action( 'woocommerce_after_shop_loop_item_title', 'remove_loop_rating', 1 );