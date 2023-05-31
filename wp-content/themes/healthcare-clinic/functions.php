<?php
/**
 * Theme functions and definitions
 *
 * @package healthcare_clinic
 */

if ( ! function_exists( 'healthcare_clinic_enqueue_styles' ) ) :
	/**
	 * Load assets.
	 *
	 * @since 1.0.0
	 */
	function healthcare_clinic_enqueue_styles() {
		wp_enqueue_style( 'medical-care-style-parent', get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'healthcare-clinic-style', get_stylesheet_directory_uri() . '/style.css', array( 'medical-care-style-parent' ), '1.0.0' );
	}
endif;
add_action( 'wp_enqueue_scripts', 'healthcare_clinic_enqueue_styles', 99 );

function healthcare_clinic_setup() {
	add_theme_support( 'align-wide' );
	add_theme_support( "wp-block-styles" );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( "responsive-embeds" );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support('custom-background',array(
		'default-color' => 'ffffff',
	));
	add_image_size( 'healthcare-clinic-featured-image', 2000, 1200, true );
	add_image_size( 'healthcare-clinic-thumbnail-avatar', 100, 100, true );

	$GLOBALS['content_width'] = 525;
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'healthcare-clinic' ),
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

	/*
	* This theme styles the visual editor to resemble the theme style,
	* specifically font, colors, and column width.
	*/
	add_editor_style( array( 'assets/css/editor-style.css', medical_care_fonts_url() ) );
}
add_action( 'after_setup_theme', 'healthcare_clinic_setup' );

function healthcare_clinic_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'healthcare-clinic' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'healthcare-clinic' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h3 class="widget-title">',
		'after_title'   => '</h3></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'healthcare-clinic' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your pages and posts', 'healthcare-clinic' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h3 class="widget-title">',
		'after_title'   => '</h3></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'healthcare-clinic' ),
		'id'            => 'footer-1',
		'description'   => __( 'Add widgets here to appear in your footer.', 'healthcare-clinic' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'healthcare-clinic' ),
		'id'            => 'footer-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'healthcare-clinic' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 3', 'healthcare-clinic' ),
		'id'            => 'footer-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'healthcare-clinic' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 4', 'healthcare-clinic' ),
		'id'            => 'footer-4',
		'description'   => __( 'Add widgets here to appear in your footer.', 'healthcare-clinic' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'healthcare_clinic_widgets_init' );

function healthcare_clinic_customize_register() {
  	global $wp_customize;
	$wp_customize->remove_section( 'medical_care_pro' );
	$wp_customize->remove_section( 'medical_care_header' );
}
add_action( 'customize_register', 'healthcare_clinic_customize_register', 11 );

function healthcare_clinic_enqueue_comments_reply() {
    if( get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'comment_form_before', 'healthcare_clinic_enqueue_comments_reply' );

function healthcare_clinic_customize( $wp_customize ) {

    wp_enqueue_style('customizercustom_css', esc_url( get_stylesheet_directory_uri() ). '/assets/css/customizer.css');

    $wp_customize->add_section('healthcare_clinic_pro', array(
        'title'    => __('UPGRADE HEALTHCARE PREMIUM', 'healthcare-clinic'),
        'priority' => 1,
    ));

    $wp_customize->add_setting('healthcare_clinic_pro', array(
        'default'           => null,
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control(new Healthcare_Clinic_Pro_Control($wp_customize, 'healthcare_clinic_pro', array(
        'label'    => __('HEALTHCARE CLICNIC PREMIUM', 'healthcare-clinic'),
        'section'  => 'healthcare_clinic_pro',
        'settings' => 'healthcare_clinic_pro',
        'priority' => 1,
    )));

// Social Media
  $wp_customize->add_section('healthcare_clinic_urls',array(
      'title' => __('Social Media', 'healthcare-clinic'),
      'description' => __( 'Add social media links in the below feilds', 'healthcare-clinic' ),
      'priority' => 4,
  ) );

	$wp_customize->add_setting('healthcare_clinic_facebook',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control('healthcare_clinic_facebook',array(
		'label' => esc_html__('Facebook URL','healthcare-clinic'),
		'section' => 'healthcare_clinic_urls',
		'setting' => 'healthcare_clinic_facebook',
		'type'    => 'url'
	));

	$wp_customize->add_setting('healthcare_clinic_twitter',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control('healthcare_clinic_twitter',array(
		'label' => esc_html__('Twitter URL','healthcare-clinic'),
		'section' => 'healthcare_clinic_urls',
		'setting' => 'healthcare_clinic_twitter',
		'type'    => 'url'
	));

	$wp_customize->add_setting('healthcare_clinic_youtube',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control('healthcare_clinic_youtube',array(
		'label' => esc_html__('Youtube URL','healthcare-clinic'),
		'section' => 'healthcare_clinic_urls',
		'setting' => 'healthcare_clinic_youtube',
		'type'    => 'url'
	));

	$wp_customize->add_setting('healthcare_clinic_instagram',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control('healthcare_clinic_instagram',array(
		'label' => esc_html__('Instagram URL','healthcare-clinic'),
		'section' => 'healthcare_clinic_urls',
		'setting' => 'healthcare_clinic_instagram',
		'type'    => 'url'
	));

	// Top Bar Links
    $wp_customize->add_section('healthcare_clinic_topbar_links',array(
        'title' => __('Header Settings', 'healthcare-clinic'),
        'description' => __( 'Add menu links in the below feilds', 'healthcare-clinic' ),
        'priority' => 4,
    ) );

	$wp_customize->add_setting('healthcare_clinic_text1',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('healthcare_clinic_text1',array(
		'label' => esc_html__('Text 1','healthcare-clinic'),
		'section' => 'healthcare_clinic_topbar_links',
		'setting' => 'healthcare_clinic_text1',
		'type'    => 'text'
	));

	$wp_customize->selective_refresh->add_partial( 'healthcare_clinic_text1', array(
	'selector' => '.topbar_links a',
	'render_callback' => 'medical_care_customize_partial_healthcare_clinic_text1',
	) );

	$wp_customize->add_setting('healthcare_clinic_link1',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control('healthcare_clinic_link1',array(
		'label' => esc_html__('URL 1','healthcare-clinic'),
		'section' => 'healthcare_clinic_topbar_links',
		'setting' => 'healthcare_clinic_link1',
		'type'    => 'url'
	));

	$wp_customize->add_setting('healthcare_clinic_text2',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('healthcare_clinic_text2',array(
		'label' => esc_html__('Text 2','healthcare-clinic'),
		'section' => 'healthcare_clinic_topbar_links',
		'setting' => 'healthcare_clinic_text2',
		'type'    => 'text'
	));

	$wp_customize->add_setting('healthcare_clinic_link2',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control('healthcare_clinic_link2',array(
		'label' => esc_html__('URL 2','healthcare-clinic'),
		'section' => 'healthcare_clinic_topbar_links',
		'setting' => 'healthcare_clinic_link2',
		'type'    => 'url'
	));

	$wp_customize->add_setting('healthcare_clinic_text3',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('healthcare_clinic_text3',array(
		'label' => esc_html__('Text 3','healthcare-clinic'),
		'section' => 'healthcare_clinic_topbar_links',
		'setting' => 'healthcare_clinic_text3',
		'type'    => 'text'
	));

	$wp_customize->add_setting('healthcare_clinic_link3',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control('healthcare_clinic_link3',array(
		'label' => esc_html__('URL 3','healthcare-clinic'),
		'section' => 'healthcare_clinic_topbar_links',
		'setting' => 'healthcare_clinic_link3',
		'type'    => 'url'
	));

	// About us
	$wp_customize->add_section( 'healthcare_clinic_middle_section' , array(
    	'title'      => __( 'About us Settings', 'healthcare-clinic' ),
		'priority'   => 6,
	) );

	$healthcare_clinic_args = array('numberposts' => -1);
	$healthcare_clinic_post_list = get_posts($healthcare_clinic_args);
	$s = 0;
	$healthcare_clinic_pst_sls[]= __('Select','healthcare-clinic');
	foreach ($healthcare_clinic_post_list as $key => $healthcare_clinic_p_post) {
		$healthcare_clinic_pst_sls[$healthcare_clinic_p_post->ID]=$healthcare_clinic_p_post->post_title;
	}
	for ( $s = 1; $s <= 3; $s++ ) {
		$wp_customize->add_setting('healthcare_clinic_mid_section_icon'.$s,array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field'
		));
		$wp_customize->add_control('healthcare_clinic_mid_section_icon'.$s,array(
			'label' => esc_html__('Icon','healthcare-clinic'),
			'description' => esc_html__('Add the fontawesome class to add icon ex: fas fa-envelope','healthcare-clinic'),
			'section' => 'healthcare_clinic_middle_section',
			'setting' => 'healthcare_clinic_mid_section_icon',
			'type'    => 'text'
		));

		$wp_customize->add_setting('healthcare_clinic_middle_sec_settigs'.$s,array(
			'sanitize_callback' => 'medical_care_sanitize_choices',
		));
		$wp_customize->add_control('healthcare_clinic_middle_sec_settigs'.$s,array(
			'type'    => 'select',
			'choices' => $healthcare_clinic_pst_sls,
			'label' => __('Select post','healthcare-clinic'),
			'section' => 'healthcare_clinic_middle_section',
		));

		$wp_customize->selective_refresh->add_partial( 'healthcare_clinic_middle_sec_settigs'.$s, array(
		'selector' => '#middle-sec i',
		'render_callback' => 'medical_care_customize_partial_healthcare_clinic_middle_sec_settigs'.$s,
		) );
	}
	wp_reset_postdata();

}
add_action( 'customize_register', 'healthcare_clinic_customize' );

define('HEALTHCARE_CLINIC_PRO_LINK',__('https://www.ovationthemes.com/wordpress/clinic-wordpress-theme/','healthcare-clinic'));

/* Pro control */
if (class_exists('WP_Customize_Control') && !class_exists('Healthcare_Clinic_Pro_Control')):
    class Healthcare_Clinic_Pro_Control extends WP_Customize_Control{

    public function render_content(){?>
        <label style="overflow: hidden; zoom: 1;">
	        <div class="col-md-2 col-sm-6 upsell-btn">
                <a href="<?php echo esc_url( HEALTHCARE_CLINIC_PRO_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE HEALTHCARE PREMIUM','healthcare-clinic');?> </a>
	        </div>
            <div class="col-md-4 col-sm-6">
                <img class="healthcare_clinic_img_responsive" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/screenshot.png">

            </div>
	        <div class="col-md-3 col-sm-6">
	            <h3 style="margin-top:10px; margin-left: 20px; text-decoration:underline; color:#333;"><?php esc_html_e('HEALTHCARE PREMIUM - Features', 'healthcare-clinic'); ?></h3>
                <ul style="padding-top:10px">
                    <li class="upsell-healthcare_clinic"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Responsive Design', 'healthcare-clinic');?> </li>
                    <li class="upsell-healthcare_clinic"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Boxed or fullwidth layout', 'healthcare-clinic');?> </li>
                    <li class="upsell-healthcare_clinic"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Shortcode Support', 'healthcare-clinic');?> </li>
                    <li class="upsell-healthcare_clinic"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Demo Importer', 'healthcare-clinic');?> </li>
                    <li class="upsell-healthcare_clinic"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Section Reordering', 'healthcare-clinic');?> </li>
                    <li class="upsell-healthcare_clinic"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Contact Page Template', 'healthcare-clinic');?> </li>
                    <li class="upsell-healthcare_clinic"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Multiple Blog Layouts', 'healthcare-clinic');?> </li>
                    <li class="upsell-healthcare_clinic"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Unlimited Color Options', 'healthcare-clinic');?> </li>
                    <li class="upsell-healthcare_clinic"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Designed with HTML5 and CSS3', 'healthcare-clinic');?> </li>
                    <li class="upsell-healthcare_clinic"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Customizable Design & Code', 'healthcare-clinic');?> </li>
                    <li class="upsell-healthcare_clinic"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Cross Browser Support', 'healthcare-clinic');?> </li>
                    <li class="upsell-healthcare_clinic"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Detailed Documentation Included', 'healthcare-clinic');?> </li>
                    <li class="upsell-healthcare_clinic"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Stylish Custom Widgets', 'healthcare-clinic');?> </li>
                    <li class="upsell-healthcare_clinic"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Patterns Background', 'healthcare-clinic');?> </li>
                    <li class="upsell-healthcare_clinic"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('WPML Compatible (Translation Ready)', 'healthcare-clinic');?> </li>
                    <li class="upsell-healthcare_clinic"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Woo-commerce Compatible', 'healthcare-clinic');?> </li>
                    <li class="upsell-healthcare_clinic"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Full Support', 'healthcare-clinic');?> </li>
                    <li class="upsell-healthcare_clinic"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('10+ Sections', 'healthcare-clinic');?> </li>
                    <li class="upsell-healthcare_clinic"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Live Customizer', 'healthcare-clinic');?> </li>
                   	<li class="upsell-healthcare_clinic"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('AMP Ready', 'healthcare-clinic');?> </li>
                   	<li class="upsell-healthcare_clinic"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Clean Code', 'healthcare-clinic');?> </li>
                   	<li class="upsell-healthcare_clinic"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('SEO Friendly', 'healthcare-clinic');?> </li>
                   	<li class="upsell-healthcare_clinic"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Supper Fast', 'healthcare-clinic');?> </li>
                </ul>
        	</div>
		    <div class="col-md-2 col-sm-6 upsell-btn upsell-btn-bottom">
	            <a href="<?php echo esc_url( HEALTHCARE_CLINIC_PRO_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE HEALTHCARE PREMIUM','healthcare-clinic');?> </a>
		    </div>
        </label>
    <?php } }
endif;

if ( ! defined( 'MEDICAL_CARE_SUPPORT' ) ) {
	define('MEDICAL_CARE_SUPPORT',__('https://wordpress.org/support/theme/healthcare-clinic','healthcare-clinic'));
}
if ( ! defined( 'MEDICAL_CARE_REVIEW' ) ) {
	define('MEDICAL_CARE_REVIEW',__('https://wordpress.org/support/theme/healthcare-clinic/reviews/#new-post','healthcare-clinic'));
}
if ( ! defined( 'MEDICAL_CARE_LIVE_DEMO' ) ) {
define('MEDICAL_CARE_LIVE_DEMO',__('https://www.ovationthemes.com/demos/healthcare-clinic/','healthcare-clinic'));
}
if ( ! defined( 'MEDICAL_CARE_BUY_PRO' ) ) {
define('MEDICAL_CARE_BUY_PRO',__('https://www.ovationthemes.com/wordpress/clinic-wordpress-theme/','healthcare-clinic'));
}
if ( ! defined( 'MEDICAL_CARE_PRO_DOC' ) ) {
define('MEDICAL_CARE_PRO_DOC',__('https://www.ovationthemes.com/docs/ot-healthcare-clinic-pro-doc','healthcare-clinic'));
}
if ( ! defined( 'MEDICAL_CARE_THEME_NAME' ) ) {
define('MEDICAL_CARE_THEME_NAME',__('Premium Healthcare Theme','healthcare-clinic'));
}
