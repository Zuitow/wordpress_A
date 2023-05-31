<?php
/**
 * Medical Care functions and definitions
 *
 * @subpackage Medical Care
 * @since 1.0
 */

function medical_care_setup() {

	add_theme_support( 'align-wide' );
	add_theme_support( "wp-block-styles" );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( "responsive-embeds" );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support('custom-background',array(
		'default-color' => 'ffffff',
	));
	add_image_size( 'medical-care-featured-image', 2000, 1200, true );
	add_image_size( 'medical-care-thumbnail-avatar', 100, 100, true );

	$GLOBALS['content_width'] = 525;
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'medical-care' ),
	) );

	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, and column width.
 	 */
	add_editor_style( array( 'assets/css/editor-style.css', medical_care_fonts_url() ) );

}
add_action( 'after_setup_theme', 'medical_care_setup' );

function medical_care_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'medical-care' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'medical-care' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h3 class="widget-title">',
		'after_title'   => '</h3></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'medical-care' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your pages and posts', 'medical-care' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h3 class="widget-title">',
		'after_title'   => '</h3></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'medical-care' ),
		'id'            => 'footer-1',
		'description'   => __( 'Add widgets here to appear in your footer.', 'medical-care' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'medical-care' ),
		'id'            => 'footer-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'medical-care' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 3', 'medical-care' ),
		'id'            => 'footer-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'medical-care' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 4', 'medical-care' ),
		'id'            => 'footer-4',
		'description'   => __( 'Add widgets here to appear in your footer.', 'medical-care' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'medical_care_widgets_init' );

function medical_care_fonts_url(){
	$medical_care_font_url = '';
	$medical_care_font_family = array();
	$medical_care_font_family[] = 'Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i';
	$medical_care_font_family[] = 'Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$medical_care_font_family[] = 'Titillium Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700';
	$medical_care_font_family[] = 'Open Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800';

	$medical_care_query_args = array(
		'family'	=> rawurlencode(implode('|',$medical_care_font_family)),
	);
	$medical_care_font_url = add_query_arg($medical_care_query_args,'//fonts.googleapis.com/css');
	return $medical_care_font_url;
}

//Enqueue scripts and styles.
function medical_care_scripts() {

	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'medical-care-fonts', medical_care_fonts_url(), array(), null );

	//Bootstarp
	wp_enqueue_style( 'bootstrap-style',get_template_directory_uri().'/assets/css/bootstrap.css' );

	// Theme stylesheet.
	wp_enqueue_style( 'medical-care-style', get_stylesheet_uri() );

	// RTL
	wp_style_add_data('medical-care-style', 'rtl', 'replace');

	// Theme Customize CSS.
	require get_parent_theme_file_path( 'inc/extra_customization.php' );
	wp_add_inline_style( 'medical-care-style',$medical_care_custom_style );

	//font-awesome
	wp_enqueue_style( 'font-awesome-style',get_template_directory_uri().'/assets/css/fontawesome-all.css' );

	//Block Style
	wp_enqueue_style( 'medical-care-block-style',get_template_directory_uri().'/assets/css/blocks.css' );

	//Custom JS
	wp_enqueue_script( 'medical-care-custom.js', get_theme_file_uri( '/assets/js/medical-care-custom.js' ), array( 'jquery' ), true );

	//Nav Focus JS
	wp_enqueue_script( 'medical-care-navigation-focus', get_theme_file_uri( '/assets/js/navigation-focus.js' ), array( 'jquery' ), true );

	//Superfish JS
	wp_enqueue_script( 'superfish-js', get_theme_file_uri( '/assets/js/jquery.superfish.js' ), array( 'jquery' ),true );

	//Bootstarp JS
	wp_enqueue_script( 'bootstrap.js', get_theme_file_uri( '/assets/js/bootstrap.js' ), array( 'jquery' ),true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'medical_care_scripts' );

function medical_care_fonts_scripts() {
	$medical_care_headings_font = esc_html(get_theme_mod('medical_care_headings_text'));
	$medical_care_body_font = esc_html(get_theme_mod('medical_care_body_text'));

	if( $medical_care_headings_font ) {
		wp_enqueue_style( 'medical-care-headings-fonts', '//fonts.googleapis.com/css?family='. $medical_care_headings_font );
	} else {
		wp_enqueue_style( 'medical-care-source-sans', '//fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic');
	}
	if( $medical_care_body_font ) {
		wp_enqueue_style( 'medical-care-body-fonts', '//fonts.googleapis.com/css?family='. $medical_care_body_font );
	} else {
		wp_enqueue_style( 'medical-care-source-body', '//fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,400italic,700,600');
	}
}
add_action( 'wp_enqueue_scripts', 'medical_care_fonts_scripts' );

function medical_care_enqueue_admin_script( $hook ) {

	// Admin JS
	wp_enqueue_script( 'medical-care-admin.js', get_theme_file_uri( '/assets/js/medical-care-admin.js' ), array( 'jquery' ), true );

	wp_localize_script('medical-care-admin.js', 'medical_care_scripts_localize',
        array(
            'ajax_url' => esc_url(admin_url('admin-ajax.php'))
        )
    );
}
add_action( 'admin_enqueue_scripts', 'medical_care_enqueue_admin_script' );

// Enqueue editor styles for Gutenberg
function medical_care_block_editor_styles() {
	// Block styles.
	wp_enqueue_style( 'medical-care-block-editor-style', trailingslashit( esc_url ( get_template_directory_uri() ) ) . '/assets/css/editor-blocks.css' );

	// Add custom fonts.
	wp_enqueue_style( 'medical-care-fonts', medical_care_fonts_url(), array(), null );
}
add_action( 'enqueue_block_editor_assets', 'medical_care_block_editor_styles' );

function medical_care_front_page_template( $template ) {
	return is_home() ? '' : $template;
}
add_filter( 'frontpage_template',  'medical_care_front_page_template' );

require get_parent_theme_file_path( '/inc/custom-header.php' );

require get_parent_theme_file_path( '/inc/template-tags.php' );

require get_parent_theme_file_path( '/inc/template-functions.php' );

require get_parent_theme_file_path( '/inc/customizer.php' );

require get_parent_theme_file_path( '/inc/dashboard/dashboard.php' );

require get_parent_theme_file_path( '/inc/typofont.php' );

require get_parent_theme_file_path('/inc/wptt-webfont-loader.php' );

add_filter('loop_shop_columns', 'medical_care_loop_columns');
	if (!function_exists('medical_care_loop_columns')) {
		function medical_care_loop_columns() {
		return 3;
	}
}

function medical_care_sanitize_dropdown_pages( $page_id, $setting ) {
	$page_id = absint( $page_id );
	return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

function medical_care_sanitize_choices( $input, $setting ) {
    global $wp_customize;
    $control = $wp_customize->get_control( $setting->id );
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

function medical_care_sanitize_phone_number( $phone ) {
	return preg_replace( '/[^\d+]/', '', $phone );
}

function medical_care_sanitize_select( $input, $setting ){
    $input = sanitize_key($input);
    $choices = $setting->manager->get_control( $setting->id )->choices;
    return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}

function medical_care_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

function medical_care_callback_sanitize_switch( $value ) {
	
	// Switch values must be equal to 1 of off. Off is indicator and should not be translated.
	return ( ( isset( $value ) && $value == 1 ) ? 1 : 'off' );

}

function medical_care_sanitize_checkbox( $input ) {
	return ( ( isset( $input ) && true == $input ) ? true : false );
}

function medical_care_sanitize_number_absint( $number, $setting ) {
	// Ensure $number is an absolute integer (whole number, zero or greater).
	$number = absint( $number );

	// If the input is an absolute integer, return it; otherwise, return the default
	return ( $number ? $number : $setting->default );
}

function medical_care_excerpt_more( $link ) {
	if ( is_admin() ) {
		return $link;
	}

	$link = sprintf(
		'<div class="link-more"><a href="%1$s" class="more-link">%2$s</a></div>',
		esc_url( get_permalink( get_the_ID() ) ),
		/* translators: %s: Name of current post */
		sprintf( __( 'Read More<span class="screen-reader-text"> "%s"</span>', 'medical-care' ), get_the_title( get_the_ID() ) )
	);
	return ' &hellip; ' . $link;
}
add_filter( 'excerpt_more', 'medical_care_excerpt_more' );

function medical_care_notice(){
    global $pagenow;
    if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {
        wp_safe_redirect( admin_url("themes.php?page=medical-care-guide-page") );
    }
}
add_action('after_setup_theme', 'medical_care_notice');

function medical_care_add_new_page() {
    $edit_page = admin_url().'post-new.php?post_type=page';
    echo json_encode(['page_id'=>'','edit_page_url'=> $edit_page ]);
    exit;
}
add_action( 'wp_ajax_medical_care_add_new_page','medical_care_add_new_page' );

// Customiser Sections Dropdown

function medical_care_slider_dropdown(){
	if(get_option('medical_care_slider_arrows') == true ) {
		return true;
	}
	return false;
}
function medical_care_service_dropdown(){
	if(get_option('medical_care_services_enable') == true ) {
		return true;
	}
	return false;
}
