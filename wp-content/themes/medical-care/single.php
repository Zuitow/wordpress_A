<?php
/**
 * The template for displaying all single posts
 *
 * @subpackage Medical Care
 * @since 1.0
 */

get_header(); ?>

<?php
	$medical_care_post_sidebar = get_option( 'medical_care_single_post_sidebar' );
	if ( '1' == $medical_care_post_sidebar ) {
	$medical_care_post_column = 'col-lg-12 col-md-12';
	} else { 
	$medical_care_post_column = 'col-lg-8 col-md-8';
	}
?>

<main id="content">
	<div class="container">
		<div class="content-area entry-content">
			<div id="main" class="site-main" role="main">
		       	<div class="row m-0">
		    		<div class="content_area <?php echo esc_html( $medical_care_post_column ); ?>">
				    	<section id="post_section">
							<?php
							/* Start the Loop */
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/post/single-page' );

								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;

								the_post_navigation( array(
									'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'medical-care' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'medical-care' ) . '</span>',
									'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'medical-care' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'medical-care' ) . '</span> ',
								) );

							endwhile; // End of the loop.
							?>
						</section>
					</div>
					<?php if ( '1' != $medical_care_post_sidebar ) {?>
						<div id="sidebar" class="col-lg-4 col-md-4"><?php dynamic_sidebar('sidebar-1'); ?></div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</main>

<?php get_footer();
