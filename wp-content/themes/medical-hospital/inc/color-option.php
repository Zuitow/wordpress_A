<?php
	
	$medical_hospital_theme_color = get_theme_mod('medical_hospital_theme_color');

	$medical_hospital_custom_css = '';

	if($medical_hospital_theme_color != false){
		$medical_hospital_custom_css .='input[type="submit"], a.button, #footer input[type="submit"], #comments input[type="submit"].submit, #comments a.comment-reply-link:hover, #sidebar .tagcloud a:hover, span.page-number,span.page-links-title, .nav-menu ul ul a, .social-media i:hover, #contact-us, h1.page-title, h1.search-title, .textbox a , .blogbtn a , .woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, nav.woocommerce-MyAccount-navigation ul li, .inner, .footerinner .tagcloud a, .bradcrumbs a , .readbutton a, #sidebar h3::before,  .pagination .current , span.meta-nav , .title-box, #sidebar input[type="submit"], .tags a:hover, #comments a.comment-reply-link, .main-service-box:nth-child(odd), .main-service-box:nth-child(even), .topbar .nav li a:hover, .back-to-top, .woocommerce-product-search button, .woocommerce .widget_price_filter .ui-slider-horizontal .ui-slider-range, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle{';
			$medical_hospital_custom_css .='background-color: '.esc_attr($medical_hospital_theme_color).';';
		$medical_hospital_custom_css .='}';
	}
	if($medical_hospital_theme_color != false){
		$medical_hospital_custom_css .='a, .nav-menu ul li a:active, #sidebar ul li a:hover, .nav-menu ul ul a:hover, .logo h1 a, .logo p.site-title a, .blog-sec h2 a, .main-service-box a i, .footerinner ul li a:hover, #sidebar h3 , span.post-title, .entry-content a,  .nav-menu .current_page_ancestor > a , .post-info i, #wrapper h1, .tags a i, .comment-meta.commentmetadata a,.nav-menu ul li a:hover, #wrapper .related-posts h3 a {';
			$medical_hospital_custom_css .='color: '.esc_attr($medical_hospital_theme_color).';';
		$medical_hospital_custom_css .='}';
	}
	if($medical_hospital_theme_color != false){
		$medical_hospital_custom_css .=' a.button, #sidebar form,  #sidebar aside, .nav-menu ul ul, .tags a:hover, .pagination a:hover, .pagination .current,.nav-menu ul ul a:hover{';
			$medical_hospital_custom_css .='border-color: '.esc_attr($medical_hospital_theme_color).';';
		$medical_hospital_custom_css .='}';
	}
	if($medical_hospital_theme_color != false){
		$medical_hospital_custom_css .=' .back-to-top::before{';
			$medical_hospital_custom_css .='border-bottom-color: '.esc_attr($medical_hospital_theme_color).';';
		$medical_hospital_custom_css .='}';
	}

	// Layout Options
	$medical_hospital_theme_layout = get_theme_mod( 'medical_hospital_theme_layout_options','Default Theme');
    if($medical_hospital_theme_layout == 'Default Theme'){
		$medical_hospital_custom_css .='body{';
			$medical_hospital_custom_css .='max-width: 100%;';
		$medical_hospital_custom_css .='}';
	}else if($medical_hospital_theme_layout == 'Container Theme'){
		$medical_hospital_custom_css .='body{';
			$medical_hospital_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$medical_hospital_custom_css .='}';
		$medical_hospital_custom_css .='#contact-us{';
			$medical_hospital_custom_css .='position:static;';
		$medical_hospital_custom_css .='}';
	}else if($medical_hospital_theme_layout == 'Box Container Theme'){
		$medical_hospital_custom_css .='body{';
			$medical_hospital_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$medical_hospital_custom_css .='}';
		$medical_hospital_custom_css .='#contact-us{';
			$medical_hospital_custom_css .='position:static;';
		$medical_hospital_custom_css .='}';
	}


	/*------------------ Slider Opacity -------------------*/

	$medical_hospital_slider_layout = get_theme_mod( 'medical_hospital_slider_opacity_color','0.7');
	if($medical_hospital_slider_layout == '0'){
		$medical_hospital_custom_css .='#slider img{';
			$medical_hospital_custom_css .='opacity:0';
		$medical_hospital_custom_css .='}';
	}else if($medical_hospital_slider_layout == '0.1'){
		$medical_hospital_custom_css .='#slider img{';
			$medical_hospital_custom_css .='opacity:0.1';
		$medical_hospital_custom_css .='}';
	}else if($medical_hospital_slider_layout == '0.2'){
		$medical_hospital_custom_css .='#slider img{';
			$medical_hospital_custom_css .='opacity:0.2';
		$medical_hospital_custom_css .='}';
	}else if($medical_hospital_slider_layout == '0.3'){
		$medical_hospital_custom_css .='#slider img{';
			$medical_hospital_custom_css .='opacity:0.3';
		$medical_hospital_custom_css .='}';
	}else if($medical_hospital_slider_layout == '0.4'){
		$medical_hospital_custom_css .='#slider img{';
			$medical_hospital_custom_css .='opacity:0.4';
		$medical_hospital_custom_css .='}';
	}else if($medical_hospital_slider_layout == '0.5'){
		$medical_hospital_custom_css .='#slider img{';
			$medical_hospital_custom_css .='opacity:0.5';
		$medical_hospital_custom_css .='}';
	}else if($medical_hospital_slider_layout == '0.6'){
		$medical_hospital_custom_css .='#slider img{';
			$medical_hospital_custom_css .='opacity:0.6';
		$medical_hospital_custom_css .='}';
	}else if($medical_hospital_slider_layout == '0.7'){
		$medical_hospital_custom_css .='#slider img{';
			$medical_hospital_custom_css .='opacity:0.7';
		$medical_hospital_custom_css .='}';
	}else if($medical_hospital_slider_layout == '0.8'){
		$medical_hospital_custom_css .='#slider img{';
			$medical_hospital_custom_css .='opacity:0.8';
		$medical_hospital_custom_css .='}';
	}else if($medical_hospital_slider_layout == '0.9'){
		$medical_hospital_custom_css .='#slider img{';
			$medical_hospital_custom_css .='opacity:0.9';
		$medical_hospital_custom_css .='}';
	}

	/*---------------Slider Content Layout -------------------*/

	$medical_hospital_slider_layout = get_theme_mod( 'medical_hospital_slider_alignment_option','Center Align');
    if($medical_hospital_slider_layout == 'Left Align'){
		$medical_hospital_custom_css .='#slider .carousel-caption{';
			$medical_hospital_custom_css .='text-align:left;';
		$medical_hospital_custom_css .='}';
		$medical_hospital_custom_css .='#slider .carousel-caption{';
		$medical_hospital_custom_css .='left:15%; right:25%;';
		$medical_hospital_custom_css .='}';
	}else if($medical_hospital_slider_layout == 'Center Align'){
		$medical_hospital_custom_css .='#slider .carousel-caption{';
			$medical_hospital_custom_css .='text-align:center;';
		$medical_hospital_custom_css .='}';
	}else if($medical_hospital_slider_layout == 'Right Align'){
		$medical_hospital_custom_css .='#slider .carousel-caption{';
			$medical_hospital_custom_css .='text-align:right;';
		$medical_hospital_custom_css .='}';
		$medical_hospital_custom_css .='#slider .carousel-caption{';
		$medical_hospital_custom_css .='left:25%; right:15%;';
		$medical_hospital_custom_css .='}';
	}

	/*-------- Blog Post Alignment ------*/
	$medical_hospital_post_alignment = get_theme_mod('medical_hospital_blog_post_alignment', 'left');
	if($medical_hospital_post_alignment == 'center' ){
		$medical_hospital_custom_css .='.blog-sec, .blog-sec h2, .post-info, .blogbtn{';
			$medical_hospital_custom_css .='text-align: '. $medical_hospital_post_alignment .';';
		$medical_hospital_custom_css .='}';
	}elseif($medical_hospital_post_alignment == 'left' ){
		$medical_hospital_custom_css .='.blog-sec, .blog-sec h2, .post-info, .blogbtn{';
			$medical_hospital_custom_css .=' text-align: '. $medical_hospital_post_alignment .';';
		$medical_hospital_custom_css .='}';
	}elseif($medical_hospital_post_alignment == 'right' ){
		$medical_hospital_custom_css .='.blog-sec, .blog-sec h2, .post-info, .blogbtn{';
			$medical_hospital_custom_css .='text-align: '. $medical_hospital_post_alignment .';';
		$medical_hospital_custom_css .='}';
	}

	/*--------- Preloader Color Option -------*/
	$medical_hospital_preloader_color = get_theme_mod('medical_hospital_preloader_color');

	if($medical_hospital_preloader_color != false){
		$medical_hospital_custom_css .=' .tg-loader{';
			$medical_hospital_custom_css .='border-color: '.esc_attr($medical_hospital_preloader_color).';';
		$medical_hospital_custom_css .='} ';
		$medical_hospital_custom_css .=' .tg-loader-inner, .preloader .preloader-container .animated-preloader, .preloader .preloader-container .animated-preloader:before{';
			$medical_hospital_custom_css .='background-color: '.esc_attr($medical_hospital_preloader_color).';';
		$medical_hospital_custom_css .='} ';
	}

	$medical_hospital_preloader_bg_color = get_theme_mod('medical_hospital_preloader_bg_color');

	if($medical_hospital_preloader_bg_color != false){
		$medical_hospital_custom_css .=' #overlayer, .preloader{';
			$medical_hospital_custom_css .='background-color: '.esc_attr($medical_hospital_preloader_bg_color).';';
		$medical_hospital_custom_css .='} ';
	}

	/*------------ Button Settings option-----------------*/

	$medical_hospital_top_button_padding = get_theme_mod('medical_hospital_top_button_padding');
	$medical_hospital_bottom_button_padding = get_theme_mod('medical_hospital_bottom_button_padding');
	$medical_hospital_left_button_padding = get_theme_mod('medical_hospital_left_button_padding');
	$medical_hospital_right_button_padding = get_theme_mod('medical_hospital_right_button_padding');
	if($medical_hospital_top_button_padding != false || $medical_hospital_bottom_button_padding != false || $medical_hospital_left_button_padding != false || $medical_hospital_right_button_padding != false){
		$medical_hospital_custom_css .='.blogbtn a, .readbutton a, .textbox a, #comments input[type="submit"].submit{';
			$medical_hospital_custom_css .='padding-top: '.esc_attr($medical_hospital_top_button_padding).'px; padding-bottom: '.esc_attr($medical_hospital_bottom_button_padding).'px; padding-left: '.esc_attr($medical_hospital_left_button_padding).'px; padding-right: '.esc_attr($medical_hospital_right_button_padding).'px; display:inline-block;';
		$medical_hospital_custom_css .='}';
	}

	$medical_hospital_button_border_radius = get_theme_mod('medical_hospital_button_border_radius');
	$medical_hospital_custom_css .='.blogbtn a, .readbutton a, .textbox a, #comments input[type="submit"].submit, .hvr-sweep-to-right:before{';
		$medical_hospital_custom_css .='border-radius: '.esc_attr($medical_hospital_button_border_radius).'px;';
	$medical_hospital_custom_css .='}';

	/*----------- Copyright css -----*/
	$medical_hospital_copyright_top_padding = get_theme_mod('medical_hospital_top_copyright_padding');
	$medical_hospital_copyright_bottom_padding = get_theme_mod('medical_hospital_top_copyright_padding');
	if($medical_hospital_copyright_top_padding != false || $medical_hospital_copyright_bottom_padding != false){
		$medical_hospital_custom_css .='.inner{';
			$medical_hospital_custom_css .='padding-top: '.esc_attr($medical_hospital_copyright_top_padding).'px; padding-bottom: '.esc_attr($medical_hospital_copyright_bottom_padding).'px; ';
		$medical_hospital_custom_css .='}';
	} 

	$medical_hospital_copyright_alignment = get_theme_mod('medical_hospital_copyright_alignment', 'center');
	if($medical_hospital_copyright_alignment == 'center' ){
		$medical_hospital_custom_css .='#footer .copyright p{';
			$medical_hospital_custom_css .='text-align: '. $medical_hospital_copyright_alignment .';';
		$medical_hospital_custom_css .='}';
	}elseif($medical_hospital_copyright_alignment == 'left' ){
		$medical_hospital_custom_css .='#footer .copyright p{';
			$medical_hospital_custom_css .=' text-align: '. $medical_hospital_copyright_alignment .';';
		$medical_hospital_custom_css .='}';
	}elseif($medical_hospital_copyright_alignment == 'right' ){
		$medical_hospital_custom_css .='#footer .copyright p{';
			$medical_hospital_custom_css .='text-align: '. $medical_hospital_copyright_alignment .';';
		$medical_hospital_custom_css .='}';
	}

	$medical_hospital_copyright_font_size = get_theme_mod('medical_hospital_copyright_font_size');
	$medical_hospital_custom_css .='#footer .copyright p{';
		$medical_hospital_custom_css .='font-size: '.esc_attr($medical_hospital_copyright_font_size).'px;';
	$medical_hospital_custom_css .='}';

	/*------ Topbar padding ------*/
	$medical_hospital_top_topbar_padding = get_theme_mod('medical_hospital_top_topbar_padding');
	$medical_hospital_bottom_topbar_padding = get_theme_mod('medical_hospital_bottom_topbar_padding');
	if($medical_hospital_top_topbar_padding != false || $medical_hospital_bottom_topbar_padding != false){
		$medical_hospital_custom_css .='#contact-us{';
			$medical_hospital_custom_css .='padding-top: '.esc_attr($medical_hospital_top_topbar_padding).'px !important; padding-bottom: '.esc_attr($medical_hospital_bottom_topbar_padding).'px !important; ';
		$medical_hospital_custom_css .='}';
	}

	/*------ Woocommerce ----*/
	$medical_hospital_product_border = get_theme_mod('medical_hospital_product_border',true);

	if($medical_hospital_product_border == false){
		$medical_hospital_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$medical_hospital_custom_css .='border: 0;';
		$medical_hospital_custom_css .='}';
	}

	$medical_hospital_product_top = get_theme_mod('medical_hospital_product_top_padding', 10);
	$medical_hospital_product_bottom = get_theme_mod('medical_hospital_product_bottom_padding', 10);
	$medical_hospital_product_left = get_theme_mod('medical_hospital_product_left_padding', 10);
	$medical_hospital_product_right = get_theme_mod('medical_hospital_product_right_padding', 10);
	$medical_hospital_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$medical_hospital_custom_css .='padding-top: '.esc_attr($medical_hospital_product_top).'px; padding-bottom: '.esc_attr($medical_hospital_product_bottom).'px; padding-left: '.esc_attr($medical_hospital_product_left).'px; padding-right: '.esc_attr($medical_hospital_product_right).'px;';
	$medical_hospital_custom_css .='}';

	$medical_hospital_product_border_radius = get_theme_mod('medical_hospital_product_border_radius');
	$medical_hospital_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$medical_hospital_custom_css .='border-radius: '.esc_attr($medical_hospital_product_border_radius).'px;';
	$medical_hospital_custom_css .='}';

	/*----- WooCommerce button css --------*/
	$medical_hospital_product_button_top = get_theme_mod('medical_hospital_product_button_top_padding',10);
	$medical_hospital_product_button_bottom = get_theme_mod('medical_hospital_product_button_bottom_padding',10);
	$medical_hospital_product_button_left = get_theme_mod('medical_hospital_product_button_left_padding',15);
	$medical_hospital_product_button_right = get_theme_mod('medical_hospital_product_button_right_padding',15);
	$medical_hospital_custom_css .='.woocommerce ul.products li.product .button, .woocommerce div.product form.cart .button, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button, .woocommerce #payment #place_order, .woocommerce-page #payment #place_order, button.woocommerce-button.button.woocommerce-form-login__submit, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$medical_hospital_custom_css .='padding-top: '.esc_attr($medical_hospital_product_button_top).'px; padding-bottom: '.esc_attr($medical_hospital_product_button_bottom).'px; padding-left: '.esc_attr($medical_hospital_product_button_left).'px; padding-right: '.esc_attr($medical_hospital_product_button_right).'px;';
	$medical_hospital_custom_css .='}';

	$medical_hospital_product_button_border_radius = get_theme_mod('medical_hospital_product_button_border_radius');
	$medical_hospital_custom_css .='.woocommerce ul.products li.product .button, .woocommerce div.product form.cart .button, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button, a.checkout-button.button.alt.wc-forward, .woocommerce #payment #place_order, .woocommerce-page #payment #place_order, button.woocommerce-button.button.woocommerce-form-login__submit{';
		$medical_hospital_custom_css .='border-radius: '.esc_attr($medical_hospital_product_button_border_radius).'px;';
	$medical_hospital_custom_css .='}';

	/*----- WooCommerce product sale css --------*/
	$medical_hospital_product_sale_top = get_theme_mod('medical_hospital_product_sale_top_padding');
	$medical_hospital_product_sale_bottom = get_theme_mod('medical_hospital_product_sale_bottom_padding');
	$medical_hospital_product_sale_left = get_theme_mod('medical_hospital_product_sale_left_padding');
	$medical_hospital_product_sale_right = get_theme_mod('medical_hospital_product_sale_right_padding');
	$medical_hospital_custom_css .='.woocommerce span.onsale {';
		$medical_hospital_custom_css .='padding-top: '.esc_attr($medical_hospital_product_sale_top).'px; padding-bottom: '.esc_attr($medical_hospital_product_sale_bottom).'px; padding-left: '.esc_attr($medical_hospital_product_sale_left).'px; padding-right: '.esc_attr($medical_hospital_product_sale_right).'px;';
	$medical_hospital_custom_css .='}';

	$medical_hospital_product_sale_border_radius = get_theme_mod('medical_hospital_product_sale_border_radius',50);
	$medical_hospital_custom_css .='.woocommerce span.onsale {';
		$medical_hospital_custom_css .='border-radius: '.esc_attr($medical_hospital_product_sale_border_radius).'px;';
	$medical_hospital_custom_css .='}';

	$medical_hospital_menu_case = get_theme_mod('medical_hospital_product_sale_position', 'Right');
	if($medical_hospital_menu_case == 'Right' ){
		$medical_hospital_custom_css .='.woocommerce ul.products li.product .onsale{';
			$medical_hospital_custom_css .=' left:auto; right:0;';
		$medical_hospital_custom_css .='}';
	}elseif($medical_hospital_menu_case == 'Left' ){
		$medical_hospital_custom_css .='.woocommerce ul.products li.product .onsale{';
			$medical_hospital_custom_css .=' left:-10px; right:auto;';
		$medical_hospital_custom_css .='}';
	}

	$medical_hospital_product_sale_font_size = get_theme_mod('medical_hospital_product_sale_font_size',13);
	$medical_hospital_custom_css .='.woocommerce span.onsale {';
		$medical_hospital_custom_css .='font-size: '.esc_attr($medical_hospital_product_sale_font_size).'px;';
	$medical_hospital_custom_css .='}';

	/*---- Slider Image overlay -----*/
	$medical_hospital_slider_image_overlay = get_theme_mod('medical_hospital_slider_image_overlay',true);
	if($medical_hospital_slider_image_overlay == false){
		$medical_hospital_custom_css .='#slider img {';
			$medical_hospital_custom_css .='opacity: 1;';
		$medical_hospital_custom_css .='}';
	}

	$medical_hospital_slider_overlay_color = get_theme_mod('medical_hospital_slider_overlay_color');
	if($medical_hospital_slider_overlay_color != false){
		$medical_hospital_custom_css .='#slider  {';
			$medical_hospital_custom_css .='background-color: '.esc_attr($medical_hospital_slider_overlay_color).';';
		$medical_hospital_custom_css .='}';
	}

	/*---- Comment form ----*/
	$medical_hospital_comment_width = get_theme_mod('medical_hospital_comment_width', '100');
	$medical_hospital_custom_css .='#comments textarea{';
		$medical_hospital_custom_css .=' width:'.esc_attr($medical_hospital_comment_width).'%;';
	$medical_hospital_custom_css .='}';

	$medical_hospital_comment_submit_text = get_theme_mod('medical_hospital_comment_submit_text', 'Post Comment');
	if($medical_hospital_comment_submit_text == ''){
		$medical_hospital_custom_css .='#comments p.form-submit {';
			$medical_hospital_custom_css .='display: none;';
		$medical_hospital_custom_css .='}';
	}

	$medical_hospital_comment_title = get_theme_mod('medical_hospital_comment_title', 'Leave a Reply');
	if($medical_hospital_comment_title == ''){
		$medical_hospital_custom_css .='#comments h2#reply-title {';
			$medical_hospital_custom_css .='display: none;';
		$medical_hospital_custom_css .='}';
	}

	/*------ Footer background css -------*/
	$medical_hospital_footer_bg_color = get_theme_mod('medical_hospital_footer_bg_color');
	if($medical_hospital_footer_bg_color != false){
		$medical_hospital_custom_css .='#footer{';
			$medical_hospital_custom_css .='background-color: '.esc_attr($medical_hospital_footer_bg_color).';';
		$medical_hospital_custom_css .='}';
	}

	$medical_hospital_footer_bg_image = get_theme_mod('medical_hospital_footer_bg_image');
	if($medical_hospital_footer_bg_image != false){
		$medical_hospital_custom_css .='#footer{';
			$medical_hospital_custom_css .='background: url('.esc_attr($medical_hospital_footer_bg_image).');';
		$medical_hospital_custom_css .='}';
	}

	/*----- Featured image css -----*/
	$medical_hospital_feature_image_border_radius = get_theme_mod('medical_hospital_feature_image_border_radius');
	if($medical_hospital_feature_image_border_radius != false){
		$medical_hospital_custom_css .='.blog-sec img{';
			$medical_hospital_custom_css .='border-radius: '.esc_attr($medical_hospital_feature_image_border_radius).'px;';
		$medical_hospital_custom_css .='}';
	}

	$medical_hospital_feature_image_shadow = get_theme_mod('medical_hospital_feature_image_shadow');
	if($medical_hospital_feature_image_shadow != false){
		$medical_hospital_custom_css .='.blog-sec img{';
			$medical_hospital_custom_css .='box-shadow: '.esc_attr($medical_hospital_feature_image_shadow).'px '.esc_attr($medical_hospital_feature_image_shadow).'px '.esc_attr($medical_hospital_feature_image_shadow).'px #aaa;';
		$medical_hospital_custom_css .='}';
	}

	/*------ Sticky header padding ------------*/
	$medical_hospital_top_sticky_header_padding = get_theme_mod('medical_hospital_top_sticky_header_padding');
	$medical_hospital_bottom_sticky_header_padding = get_theme_mod('medical_hospital_bottom_sticky_header_padding');
	$medical_hospital_custom_css .=' .fixed-header{';
		$medical_hospital_custom_css .=' padding-top: '.esc_attr($medical_hospital_top_sticky_header_padding).'px; padding-bottom: '.esc_attr($medical_hospital_bottom_sticky_header_padding).'px';
	$medical_hospital_custom_css .='}';

		// featured image dimention
	$medical_hospital_blog_image_dimension = get_theme_mod('medical_hospital_blog_image_dimension', 'default');
	$medical_hospital_feature_image_custom_width = get_theme_mod('medical_hospital_feature_image_custom_width',250);
	$medical_hospital_feature_image_custom_height = get_theme_mod('medical_hospital_feature_image_custom_height',250);
	if($medical_hospital_blog_image_dimension == 'custom'){
		$medical_hospital_custom_css .='.blog-sec img{';
			$medical_hospital_custom_css .='width: '.esc_attr($medical_hospital_feature_image_custom_width).'px; height: '.esc_attr($medical_hospital_feature_image_custom_height).'px;';
		$medical_hospital_custom_css .='}';
	}

	/*------ Related products ---------*/
	$medical_hospital_related_products = get_theme_mod('medical_hospital_single_related_products',true);
	if($medical_hospital_related_products == false){
		$medical_hospital_custom_css .=' .related.products{';
			$medical_hospital_custom_css .='display: none;';
		$medical_hospital_custom_css .='}';
	}

	/*-------- Menu Font Size --------*/
	$medical_hospital_menu_font_size = get_theme_mod('medical_hospital_menu_font_size',14);
	if($medical_hospital_menu_font_size != false){
		$medical_hospital_custom_css .='#sidelong-menu .nav-menu li a{';
			$medical_hospital_custom_css .='font-size: '.esc_attr($medical_hospital_menu_font_size).'px;';
		$medical_hospital_custom_css .='}';
	}

	$medical_hospital_menu_font_weight = get_theme_mod('medical_hospital_menu_font_weight');
	$medical_hospital_custom_css .='.nav-menu li a, .topbar .nav li a, .nav ul li a{';
		$medical_hospital_custom_css .='font-weight: '.esc_attr($medical_hospital_menu_font_weight).';';
	$medical_hospital_custom_css .='}';

	$medical_hospital_menu_case = get_theme_mod('medical_hospital_menu_case', 'uppercase');
	if($medical_hospital_menu_case == 'uppercase' ){
		$medical_hospital_custom_css .='#sidelong-menu .nav-menu li a{';
			$medical_hospital_custom_css .=' text-transform: uppercase;';
		$medical_hospital_custom_css .='}';
	}elseif($medical_hospital_menu_case == 'capitalize' ){
		$medical_hospital_custom_css .='#sidelong-menu .nav-menu li a{';
			$medical_hospital_custom_css .=' text-transform: capitalize;';
		$medical_hospital_custom_css .='}';
	}

	// Social Icons Font Size
	$medical_hospital_social_icons_font_size = get_theme_mod('medical_hospital_social_icons_font_size', '16');
	$medical_hospital_custom_css .='.social-media i{';
		$medical_hospital_custom_css .='font-size: '.esc_attr($medical_hospital_social_icons_font_size).'px;';
	$medical_hospital_custom_css .='}';

	// Featured image header
	$header_image_url = medical_hospital_banner_image( $image_url = '' );
	$medical_hospital_custom_css .='#page-site-header{';
		$medical_hospital_custom_css .='background-image: url('. esc_url( $header_image_url ).'); background-size: cover;';
	$medical_hospital_custom_css .='}';

	$medical_hospital_post_featured_image = get_theme_mod('medical_hospital_post_featured_image', 'in-content');
	if($medical_hospital_post_featured_image == 'banner' ){
		$medical_hospital_custom_css .='.single #wrapper h1, .page #wrapper h1, .page #wrapper img, .page .title-box{';
			$medical_hospital_custom_css .=' display: none;';
		$medical_hospital_custom_css .='}';
		$medical_hospital_custom_css .='.page-template-custom-front-page #page-site-header{';
			$medical_hospital_custom_css .=' display: none;';
		$medical_hospital_custom_css .='}';
	}

	// Woocommerce Shop page pagination
	$medical_hospital_shop_page_navigation = get_theme_mod('medical_hospital_shop_page_navigation',true);
	if ($medical_hospital_shop_page_navigation == false) {
		$medical_hospital_custom_css .='.woocommerce nav.woocommerce-pagination{';
			$medical_hospital_custom_css .='display: none;';
		$medical_hospital_custom_css .='}';
	}

	/*---- Slider Height ------*/
	$medical_hospital_slider_height = get_theme_mod('medical_hospital_slider_height');
	$medical_hospital_custom_css .='#slider img{';
		$medical_hospital_custom_css .='height: '.esc_attr($medical_hospital_slider_height).'px;';
	$medical_hospital_custom_css .='}';
	$medical_hospital_custom_css .='@media screen and (max-width: 768px){
		#slider img{';
		$medical_hospital_custom_css .='height: auto;';
	$medical_hospital_custom_css .='} }';

	/*----- Blog Post display type css ------*/
	$medical_hospital_blog_post_display_type = get_theme_mod('medical_hospital_blog_post_display_type', 'blocks');
	if($medical_hospital_blog_post_display_type == 'without blocks' ){
		$medical_hospital_custom_css .='.blog .blog-sec, .blog #sidebar .widget{';
			$medical_hospital_custom_css .='border: 0;';
		$medical_hospital_custom_css .='}';
	}

	/*---------- Responsive style ---------*/

	//Toggle Button Color Option
	$medical_hospital_toggle_button_bg_color_settings = get_theme_mod('medical_hospital_toggle_button_bg_color_settings');
	$medical_hospital_custom_css .='.toggle-menu {';
	$medical_hospital_custom_css .='background-color: '.esc_attr($medical_hospital_toggle_button_bg_color_settings).';';
	$medical_hospital_custom_css .='} ';

	
	if (get_theme_mod('medical_hospital_hide_topbar_responsive',true) == true && get_theme_mod('medical_hospital_top_header',true) == false) {
		$medical_hospital_custom_css .='.topbar{';
			$medical_hospital_custom_css .=' display: none;';
		$medical_hospital_custom_css .='} ';
	}
	if (get_theme_mod('medical_hospital_hide_topbar_responsive',true) == false) {
		$medical_hospital_custom_css .='@media screen and (max-width: 575px){
			.topbar{';
			$medical_hospital_custom_css .=' display: none;';
		$medical_hospital_custom_css .='} }';
	} else if(get_theme_mod('medical_hospital_hide_topbar_responsive',true) == true){
		$medical_hospital_custom_css .='@media screen and (max-width: 575px){
			.topbar{';
			$medical_hospital_custom_css .=' display: block;';
		$medical_hospital_custom_css .='} }';
	}
	if (get_theme_mod('medical_hospital_sticky_header_responsive') == false) {
		$medical_hospital_custom_css .='@media screen and (max-width: 575px){
			.sticky{';
			$medical_hospital_custom_css .=' position: static;';
		$medical_hospital_custom_css .='} }';
	}

	$medical_hospital_resp_sidebar = get_theme_mod( 'medical_hospital_sidebar_hide_show',true);
    if($medical_hospital_resp_sidebar == true){
    	$medical_hospital_custom_css .='@media screen and (max-width:575px) {';
		$medical_hospital_custom_css .='#sidebar{';
			$medical_hospital_custom_css .='display:block;';
		$medical_hospital_custom_css .='} }';
	}else if($medical_hospital_resp_sidebar == false){
		$medical_hospital_custom_css .='@media screen and (max-width:575px) {';
		$medical_hospital_custom_css .='#sidebar{';
			$medical_hospital_custom_css .='display:none;';
		$medical_hospital_custom_css .='} }';
	}

	// Metabox Seperator
	$medical_hospital_metabox_seperator = get_theme_mod('medical_hospital_metabox_seperator');
	if($medical_hospital_metabox_seperator != '' ){
		$medical_hospital_custom_css .='.post-info span:after{';
			$medical_hospital_custom_css .=' content: "'.esc_attr($medical_hospital_metabox_seperator).'"; padding-left:10px;';
		$medical_hospital_custom_css .='}';
		$medical_hospital_custom_css .='.post-info span:last-child:after{';
			$medical_hospital_custom_css .=' content: none;';
		$medical_hospital_custom_css .='}';
	}

	// Site title Font Size
	$medical_hospital_site_title_font_size = get_theme_mod('medical_hospital_site_title_font_size', '25');
	$medical_hospital_custom_css .='.logo h1, .logo p.site-title{';
		$medical_hospital_custom_css .='font-size: '.esc_attr($medical_hospital_site_title_font_size).'px;';
	$medical_hospital_custom_css .='}';

	// Site tagline Font Size
	$medical_hospital_site_tagline_font_size = get_theme_mod('medical_hospital_site_tagline_font_size', '12');
	$medical_hospital_custom_css .='.logo p.site-description{';
		$medical_hospital_custom_css .='font-size: '.esc_attr($medical_hospital_site_tagline_font_size).'px;';
	$medical_hospital_custom_css .='}';

	/*---- Slider Content Position -----*/
	$medical_hospital_top_position = get_theme_mod('medical_hospital_slider_top_position');
	$medical_hospital_bottom_position = get_theme_mod('medical_hospital_slider_bottom_position');
	$medical_hospital_left_position = get_theme_mod('medical_hospital_slider_left_position');
	$medical_hospital_right_position = get_theme_mod('medical_hospital_slider_right_position');
	if($medical_hospital_top_position != false || $medical_hospital_bottom_position != false || $medical_hospital_left_position != false || $medical_hospital_right_position != false){
		$medical_hospital_custom_css .='#slider .carousel-caption{';
			$medical_hospital_custom_css .='top: '.esc_attr($medical_hospital_top_position).'%; bottom: '.esc_attr($medical_hospital_bottom_position).'%; left: '.esc_attr($medical_hospital_left_position).'%; right: '.esc_attr($medical_hospital_right_position).'%;';
		$medical_hospital_custom_css .='}';
	}

	// responsive settings
	if (get_theme_mod('medical_hospital_preloader_responsive',false) == true && get_theme_mod('medical_hospital_preloader',false) == false) {
		$medical_hospital_custom_css .='@media screen and (min-width: 575px){
			.preloader, #overlayer, .tg-loader{';
			$medical_hospital_custom_css .=' visibility: hidden;';
		$medical_hospital_custom_css .='} }';
	}
	if (get_theme_mod('medical_hospital_preloader_responsive',false) == false) {
		$medical_hospital_custom_css .='@media screen and (max-width: 575px){
			.preloader, #overlayer, .tg-loader{';
			$medical_hospital_custom_css .=' visibility: hidden;';
		$medical_hospital_custom_css .='} }';
	}

	// scroll to top
	$medical_hospital_scroll = get_theme_mod( 'medical_hospital_backtotop_responsive',true);
	if (get_theme_mod('medical_hospital_backtotop_responsive',true) == true && get_theme_mod('medical_hospital_hide_scroll',true) == false) {
    	$medical_hospital_custom_css .='.show-back-to-top{';
			$medical_hospital_custom_css .='visibility: hidden !important;';
		$medical_hospital_custom_css .='} ';
	}
    if($medical_hospital_scroll == true){
    	$medical_hospital_custom_css .='@media screen and (max-width:575px) {';
		$medical_hospital_custom_css .='.show-back-to-top{';
			$medical_hospital_custom_css .='visibility: visible !important;';
		$medical_hospital_custom_css .='} }';
	}else if($medical_hospital_scroll == false){
		$medical_hospital_custom_css .='@media screen and (max-width:575px) {';
		$medical_hospital_custom_css .='.show-back-to-top{';
			$medical_hospital_custom_css .='visibility: hidden !important;';
		$medical_hospital_custom_css .='} }';
	}

	/*------ Footer background css -------*/
	$medical_hospital_copyright_bg_color = get_theme_mod('medical_hospital_copyright_bg_color');
	if($medical_hospital_copyright_bg_color != false){
		$medical_hospital_custom_css .='.inner{';
			$medical_hospital_custom_css .='background-color: '.esc_attr($medical_hospital_copyright_bg_color).';';
		$medical_hospital_custom_css .='}';
	}

	// site logo padding 
	$medical_hospital_logo_spacing = get_theme_mod('medical_hospital_logo_spacing', '');
	$medical_hospital_custom_css .='.logo{';
	$medical_hospital_custom_css .='padding: '.esc_attr($medical_hospital_logo_spacing).'px;';
	$medical_hospital_custom_css .='}';

	// site title color
	$medical_hospital_site_title_text_color = get_theme_mod('medical_hospital_site_title_text_color');
	$medical_hospital_custom_css .='.logo h1 a, .logo p.site-title a{';
		$medical_hospital_custom_css .='color: '.esc_attr($medical_hospital_site_title_text_color).' !important;';
	$medical_hospital_custom_css .='}';

	// site tagline color
	$medical_hospital_site_tagline_text_color = get_theme_mod('medical_hospital_site_tagline_text_color');
	$medical_hospital_custom_css .='.logo p.site-description{';
		$medical_hospital_custom_css .='color: '.esc_attr($medical_hospital_site_tagline_text_color).' !important;';
	$medical_hospital_custom_css .='}';

	// responsive slider
	if (get_theme_mod('medical_hospital_slider_responsive',true) == true && get_theme_mod('medical_hospital_slider_hide',false) == false) {
		$medical_hospital_custom_css .='@media screen and (min-width: 575px){
			#slider{';
			$medical_hospital_custom_css .=' display: none;';
		$medical_hospital_custom_css .='} }';
	}
	if (get_theme_mod('medical_hospital_slider_responsive',true) == false) {
		$medical_hospital_custom_css .='@media screen and (max-width: 575px){
			#slider{';
			$medical_hospital_custom_css .=' display: none;';
		$medical_hospital_custom_css .='} }';
	}

	// slider button
	if (get_theme_mod('medical_hospital_slider_button_responsive',true) == true && get_theme_mod('medical_hospital_slider_button',true) == false) {
		$medical_hospital_custom_css .='@media screen and (min-width: 575px){
			.readbutton{';
			$medical_hospital_custom_css .=' display: none;';
		$medical_hospital_custom_css .='} }';
	}
	if (get_theme_mod('medical_hospital_slider_button_responsive',true) == false) {
		$medical_hospital_custom_css .='@media screen and (max-width: 575px){
			.readbutton{';
			$medical_hospital_custom_css .=' display: none;';
		$medical_hospital_custom_css .='} }';
	}

	/*------ Slider Show/Hide ------*/
	$medical_hospital_slider_hide = get_theme_mod('medical_hospital_slider_hide');
	if($medical_hospital_slider_hide == false ){
		$medical_hospital_custom_css .='.page-template-custom-front-page .top-service{';
			$medical_hospital_custom_css .='margin-top:10em;';
		$medical_hospital_custom_css .='}';
	}

	// menu padding
	$medical_hospital_menu_padding = get_theme_mod('medical_hospital_menu_padding',10);
	$medical_hospital_custom_css .='.nav-menu ul li a, .sf-arrows ul .sf-with-ul, .sf-arrows .sf-with-ul{';
		$medical_hospital_custom_css .='padding: '.esc_attr($medical_hospital_menu_padding).'px;';
	$medical_hospital_custom_css .='}';

	// menu color
	$medical_hospital_menu_color = get_theme_mod('medical_hospital_menu_color');

	$medical_hospital_custom_css .='.nav-menu a,.nav-menu .current_page_item > a, .nav-menu .current-menu-item > a, .nav-menu .current_page_ancestor > a{';
			$medical_hospital_custom_css .='color: '.esc_attr($medical_hospital_menu_color).' !important;';
	$medical_hospital_custom_css .='}';

	// menu hover color
	$medical_hospital_menu_hover_color = get_theme_mod('medical_hospital_menu_hover_color');
	$medical_hospital_custom_css .='.nav-menu a:hover, .nav-menu ul li a:hover, .nav-menu ul.sub-menu a:hover, .nav-menu ul.sub-menu li a:hover{';
			$medical_hospital_custom_css .='color: '.esc_attr($medical_hospital_menu_hover_color).' !important;';
	$medical_hospital_custom_css .='}';

	// Submenu color
	$medical_hospital_submenu_menu_color = get_theme_mod('medical_hospital_submenu_menu_color');
	$medical_hospital_custom_css .='.nav-menu ul.sub-menu a, .nav-menu ul.sub-menu li a{';
			$medical_hospital_custom_css .='color: '.esc_attr($medical_hospital_submenu_menu_color).' !important;';
	$medical_hospital_custom_css .='}';

	// Single post image border radious
	$medical_hospital_single_post_img_border_radius = get_theme_mod('medical_hospital_single_post_img_border_radius', 0);
	$medical_hospital_custom_css .='.feature-box img{';
		$medical_hospital_custom_css .='border-radius: '.esc_attr($medical_hospital_single_post_img_border_radius).'px;';
	$medical_hospital_custom_css .='}';

	// Single post image box shadow
	$medical_hospital_single_post_img_box_shadow = get_theme_mod('medical_hospital_single_post_img_box_shadow',0);
	$medical_hospital_custom_css .='.feature-box img{';
		$medical_hospital_custom_css .='box-shadow: '.esc_attr($medical_hospital_single_post_img_box_shadow).'px '.esc_attr($medical_hospital_single_post_img_box_shadow).'px '.esc_attr($medical_hospital_single_post_img_box_shadow).'px #ccc;';
	$medical_hospital_custom_css .='}';