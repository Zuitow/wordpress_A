<?php
/**
 * The header for our theme
 *
 * @subpackage Medical Care
 * @since 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
	if ( function_exists( 'wp_body_open' ) ) {
	    wp_body_open();
	} else {
	    do_action( 'wp_body_open' );
	}
?>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'medical-care' ); ?></a>

	<?php if( get_option('medical_care_theme_loader') == '1'){ ?>
		<div class="preloader">
			<div class="load">
		  		<hr/><hr/><hr/><hr/>
			</div>
		</div>
	<?php }?>

	<div id="page" class="site">
		<div id="header">
			<div class="wrap_figure">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-3 align-self-center">
							<div class="logo">
						        <?php if ( has_custom_logo() ) : ?>
				            		<?php the_custom_logo(); ?>
					            <?php endif; ?>
				              	<?php $medical_care_blog_info = get_bloginfo( 'name' ); ?>

						                <?php if ( ! empty( $medical_care_blog_info ) ) : ?>
						                  	<?php if ( is_front_page() && is_home() ) : ?>
												<?php if( get_option('medical_care_logo_title','') != 'off' ){ ?>
						                    			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
												<?php }?>
						                  	<?php else : ?>
												<?php if( get_option('medical_care_logo_title','') != 'off' ){ ?>
				                      				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
												<?php }?>
					                  		<?php endif; ?>
						                <?php endif; ?>

				                	<?php
				                  		$medical_care_description = get_bloginfo( 'description', 'display' );
					                  	if ( $medical_care_description || is_customize_preview() ) :
					                ?>
					                <?php if( get_option('medical_care_logo_text','') != 'off' ){ ?>
					                  	<p class="site-description">
					                    	<?php echo esc_attr($medical_care_description); ?>
					                  	</p>
					                <?php } ?>
				              	<?php endif; ?>
						    </div>
						</div>						
						<div class="col-lg-9 col-md-9 align-self-center ">
							<div class="row contact_info">
					   		<div class="col-lg-5 col-md-5">
					   			<div class="row">
					   				<?php if( get_theme_mod('medical_care_our_location') != '' || get_theme_mod('medical_care_address') != '' ){ ?>
						   				<div class="col-lg-2 col-md-3">
						   					<i class="fas fa-map-marker-alt"></i>
						   				</div>
						   				<div class="col-lg-10 col-md-9">
											<strong><?php echo esc_html(get_theme_mod('medical_care_our_location','')); ?></strong>
											<p><?php echo esc_html(get_theme_mod('medical_care_address','')); ?></p>
						   				</div>
						   			<?php }?>
					   			</div>
					   		</div>
					   		<div class="col-lg-3 col-md-3">
					   			<div class="row">
					   				<?php if( get_theme_mod('medical_care_our_contact') != '' || get_theme_mod('medical_care_phone_no') != '' ){ ?>
						   				<div class="col-lg-3 col-md-4">
						   					<i class="fas fa-phone-volume"></i>
						   				</div>
						   				<div class="col-lg-9 col-md-8">
											<strong><?php echo esc_html(get_theme_mod('medical_care_our_contact','')); ?></strong>
											<p><?php echo esc_html(get_theme_mod('medical_care_phone_no','')); ?></p>
						   				</div>
						   			<?php }?>
					   			</div>
					   		</div>
					   		<div class="col-lg-4 col-md-4">
					   			<div class="row">
					   				<?php if( get_theme_mod('medical_care_days_open') != '' || get_theme_mod('medical_care_opening_time') != '' ){ ?>
						   				<div class="col-lg-3 col-md-4">
						   					<i class="far fa-clock"></i>
						   				</div>
						   				<div class="col-lg-9 col-md-8">
											<strong><?php echo esc_html(get_theme_mod('medical_care_days_open','')); ?></strong>
											<p><?php echo esc_html(get_theme_mod('medical_care_opening_time','')); ?></p>
						   				</div>
						   			</div>
						   		<?php }?>
					   		</div>
							</div>
					   	</div>
					</div>
				</div>
			</div>
			<div class="menu_box">
				<div class="container">
					<div class="row">
						<div class="col-lg-9 col-md-9 align-self-center">
							<div class="toggle-nav text-center py-2">
								<?php if(has_nav_menu('primary')){ ?>
									<button role="tab"><?php esc_html_e('MENU','medical-care'); ?></button>
								<?php }?>
					        </div>
					        <?php get_template_part('template-parts/navigation/navigation'); ?>
						</div>
						<div class="col-lg-3 col-md-3 align-self-center">
							<div class="search-box">
								<?php get_search_form(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
