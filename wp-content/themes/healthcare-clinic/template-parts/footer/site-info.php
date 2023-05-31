<?php
/**
 * Displays footer site info
 *
 * @subpackage Healthcare Clinic
 * @since 1.0
 * @version 1.4
 */

?>
<div class="site-info">
	<?php
        echo esc_html( get_theme_mod( 'medical_care_footer_text' ) );
        printf(
            /* translators: %s: Healthcare WordPress Theme. */
            '<a href="' . esc_attr__( 'https://www.ovationthemes.com/wordpress/free-healthcare-wordpress-theme/', 'healthcare-clinic' ) . '"> %s</a>',
            esc_html__( 'Healthcare WordPress Theme', 'healthcare-clinic' )
        );
    ?>
</div>
