<?php
/**
 * Displays footer site info
 *
 * @subpackage Medical Care
 * @since 1.0
 * @version 1.4
 */

?>
<div class="site-info">
	<?php
        echo esc_html( get_theme_mod( 'medical_care_footer_text' ) );
        printf(
            /* translators: %s: Medical Care WordPress Theme. */
            '<a href="' . esc_attr__( 'https://www.ovationthemes.com/wordpress/free-medical-wordpress-theme/', 'medical-care' ) . '"> %s</a>',
            esc_html__( 'Medical Care WordPress Theme', 'medical-care' )
        );
    ?>
</div>
