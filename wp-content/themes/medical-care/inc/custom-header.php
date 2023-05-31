<?php
/**
 * Custom header implementation
 */

function medical_care_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'medical_care_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 		 =>	false,
		'width'                  => 1600,
		'height'                 => 400,
		'wp-head-callback'       => 'medical_care_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'medical_care_custom_header_setup' );

if ( ! function_exists( 'medical_care_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see medical_care_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'medical_care_header_style' );
function medical_care_header_style() {
	if ( get_header_image() ) :
	$medical_care_custom_css = "
        #header{
			background-image:url('".esc_url(get_header_image())."') !important;
			background-position: center top;
		}";
	   	wp_add_inline_style( 'medical-care-style', $medical_care_custom_css );
	endif;
}
endif; // medical_care_header_style

// Heading

if( class_exists( 'WP_Customize_Control' ) ) {
	class Medical_Care_Customizer_Customcontrol_Section_Heading extends WP_Customize_Control {
 
 		// Declare the control type.
		public $type = 'section';

		// Render the control to be displayed in the Customizer.
		public function render_content() {
		?>
			<div class="head-customize-section-description cus-head">
				<span class="title head-customize-control-title"><?php echo esc_html( $this->label ); ?></span>
				<?php if ( !empty( $this->description ) ) : ?>
				<span class="description-customize-control-description"><?php echo esc_html( $this->description ); ?></span>
			<?php endif; ?>
			</div>
		<?php
		}
	}
}