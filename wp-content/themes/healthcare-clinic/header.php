<?php
/**
 * The header for our theme
 *
 * @subpackage Healthcare Clinic
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
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'healthcare-clinic' ); ?></a>

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
						<div class="col-lg-3 col-md-3">
							<div class="links text-center text-lg-left text-md-left">
								<?php if( get_theme_mod('healthcare_clinic_facebook') != ''){ ?>
									<a href="<?php echo esc_url(get_theme_mod('healthcare_clinic_facebook','')); ?>"><i class="fab fa-facebook-f mr-3"></i></a>
								<?php }?>
								<?php if( get_theme_mod('healthcare_clinic_twitter') != ''){ ?>
									<a href="<?php echo esc_url(get_theme_mod('healthcare_clinic_twitter','')); ?>"><i class="fab fa-twitter mr-3"></i></a>
								<?php }?>
								<?php if( get_theme_mod('healthcare_clinic_youtube') != ''){ ?>
									<a href="<?php echo esc_url(get_theme_mod('healthcare_clinic_youtube','')); ?>"><i class="fab fa-youtube mr-3"></i></a>
								<?php }?>
								<?php if( get_theme_mod('healthcare_clinic_instagram') != ''){ ?>
									<a href="<?php echo esc_url(get_theme_mod('healthcare_clinic_instagram','')); ?>"><i class="fab fa-instagram mr-3"></i></a>
								<?php }?>
							</div>
						</div>
						<div class="col-lg-9 col-md-9">
							<div class="topbar_links text-center text-lg-right text-md-right">
							   	<?php if( get_theme_mod('healthcare_clinic_link1') != '' || get_theme_mod('healthcare_clinic_text1') != ''){ ?>
									<a href="<?php echo esc_url(get_theme_mod('healthcare_clinic_link1','')); ?>"><?php echo esc_html(get_theme_mod('healthcare_clinic_text1','')); ?></a><span> | </span>
								<?php }?>
								<?php if( get_theme_mod('healthcare_clinic_link2') != '' || get_theme_mod('healthcare_clinic_text2') != ''){ ?>
									<a href="<?php echo esc_url(get_theme_mod('healthcare_clinic_link2','')); ?>"><?php echo esc_html(get_theme_mod('healthcare_clinic_text2','')); ?></a><span> | </span>
								<?php }?>
								<?php if( get_theme_mod('healthcare_clinic_link3') != '' || get_theme_mod('healthcare_clinic_text3') != ''){ ?>
									<a href="<?php echo esc_url(get_theme_mod('healthcare_clinic_link3','')); ?>"><?php echo esc_html(get_theme_mod('healthcare_clinic_text3','')); ?></a>
								<?php }?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="menu_box">
					<div class="row">
						<div class="col-lg-3 col-md-5 col-sm-5 col-8 align-self-center">
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
						<div class="col-lg-9 col-md-7 col-sm-7 col-4 align-self-center">
							<?php if(has_nav_menu('primary')){ ?>
								<div class="toggle-nav text-right py-2">
									<button role="tab"><?php esc_html_e('MENU','healthcare-clinic'); ?></button>
						        </div>
							<?php }?>
							<?php get_template_part('template-parts/navigation/navigation'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
