<?php
/**
 * The Header for our theme.
 * @package Medical Hospital
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
  } else {
    do_action( 'wp_body_open' );
  }?>
  
  <?php if(get_theme_mod('medical_hospital_preloader',false) || get_theme_mod('medical_hospital_preloader_responsive',false)){ ?>
    <?php if(get_theme_mod( 'medical_hospital_preloader_type','Square') == 'Square'){ ?>
      <div id="overlayer"></div>
      <span class="tg-loader">
        <span class="tg-loader-inner"></span>
      </span>
    <?php }else if(get_theme_mod( 'medical_hospital_preloader_type') == 'Circle') {?>    
      <div class="preloader text-center">
        <div class="preloader-container">
          <span class="animated-preloader"></span>
        </div>
      </div>
    <?php }?>
  <?php }?>
  <header role="banner">
    <a class="screen-reader-text skip-link" href="#maincontent"><?php esc_html_e( 'Skip to content', 'medical-hospital' ); ?><span class="screen-reader-text"><?php esc_html_e( 'Skip to Content', 'medical-hospital' ); ?></span></a>
    <?php if (has_nav_menu('responsive')){ ?>
     <div class="toggle-menu responsive-menu p-2">
        <button role="tab"><i class="<?php echo esc_html(get_theme_mod('medical_hospital_menu_open_icon','fas fa-bars')); ?> me-2"></i><?php echo esc_html( get_theme_mod('medical_hospital_mobile_menu_label', __('Menu','medical-hospital'))); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('medical_hospital_mobile_menu_label', __('Menu','medical-hospital'))); ?></span></button>
      </div>
      <div id="sidelong-respmenu" class="nav respside-nav">
        <nav id="primary-site-navigation" class="nav-menu" role="navigation" aria-label="<?php esc_attr_e( 'Responsive Menu', 'medical-hospital' ); ?>">
          <?php 
            wp_nav_menu( array( 
              'theme_location' => 'responsive',
              'container_class' => 'main-menu-navigation clearfix' ,
              'menu_class' => 'clearfix',
              'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
              'fallback_cb' => 'wp_page_menu',
            ) ); 
          ?>
          <a href="javascript:void(0)" class="closebtn responsive-menu"><?php echo esc_html( get_theme_mod('medical_hospital_close_menu_label', __('Close Menu','medical-hospital'))); ?><i class="<?php echo esc_html(get_theme_mod('medical_hospital_menu_close_icon','fas fa-times-circle')); ?> m-3"></i><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('medical_hospital_close_menu_label', __('Close Menu','medical-hospital'))); ?></span></a>
        </nav>
      </div>
    <?php }?>
    <div id="header">
      <?php if(get_theme_mod('medical_hospital_top_header',true) == true || get_theme_mod('medical_hospital_hide_topbar_responsive',true) == true){ ?>
        <div class="topbar">
          <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <div id="sidelong-topmenu" class="nav side-nav">
                  <nav id="primary-site-navigation" class="nav-menu" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'medical-hospital' ); ?>">
                    <?php if (has_nav_menu('topmenu')){
                      wp_nav_menu( array( 
                        'theme_location' => 'topmenu',
                        'container_class' => 'main-menu-navigation clearfix' ,
                        'menu_class' => 'clearfix',
                        'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                        'fallback_cb' => 'wp_page_menu',
                      ) ); 
                    } ?>
                  </nav>
                </div>
              </div>
              <div class="col-lg-6 col-md-12 align-self-center">
                <div class="social-media text-lg-end text-center">
                  <?php if( get_theme_mod( 'medical_hospital_facebook') != '') { ?>
                    <a href="<?php echo esc_url( get_theme_mod( 'medical_hospital_facebook','' ) ); ?>"><i class="<?php echo esc_html(get_theme_mod('medical_hospital_facebook_icon','fab fa-facebook-f')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Facebook', 'medical-hospital' ); ?></span></a>
                  <?php } ?>
                  <?php if( get_theme_mod( 'medical_hospital_twitter') != '') { ?>
                    <a href="<?php echo esc_url( get_theme_mod( 'medical_hospital_twitter','' ) ); ?>"><i class="<?php echo esc_html(get_theme_mod('medical_hospital_twitter_icon','fab fa-twitter')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Twitter', 'medical-hospital' ); ?></span></a>
                  <?php } ?>
                  <?php if( get_theme_mod( 'medical_hospital_tumblr' ) != '') { ?>
                    <a href="<?php echo esc_url( get_theme_mod( 'medical_hospital_tumblr','' ) ); ?>"><i class="<?php echo esc_html(get_theme_mod('medical_hospital_tumblr_icon','fab fa-tumblr')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Tumblr', 'medical-hospital' ); ?></span></a>
                  <?php } ?>
                  <?php if( get_theme_mod( 'medical_hospital_pintrest') != '') { ?>
                    <a href="<?php echo esc_url( get_theme_mod( 'medical_hospital_pintrest','' ) ); ?>"><i class="<?php echo esc_html(get_theme_mod('medical_hospital_pintrest_icon','fab fa-pinterest-p')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Pinterest', 'medical-hospital' ); ?></span></a>
                  <?php } ?>
                  <?php if( get_theme_mod( 'medical_hospital_insta') != '') { ?>
                    <a href="<?php echo esc_url( get_theme_mod( 'medical_hospital_insta','' ) ); ?>"><i class="<?php echo esc_html(get_theme_mod('medical_hospital_insta_icon','fab fa-instagram')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Instagram', 'medical-hospital' ); ?></span></a>
                  <?php } ?>
                  <?php if( get_theme_mod( 'medical_hospital_linkdin') != '') { ?>
                    <a href="<?php echo esc_url( get_theme_mod( 'medical_hospital_linkdin','' ) ); ?>"><i class="<?php echo esc_html(get_theme_mod('medical_hospital_linkdin_icon','fab fa-linkedin-in')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Linkedin', 'medical-hospital' ); ?></span></a>
                  <?php } ?>
                  <?php if( get_theme_mod( 'medical_hospital_youtube') != '') { ?>
                    <a href="<?php echo esc_url( get_theme_mod( 'medical_hospital_youtube','' ) ); ?>"><i class="<?php echo esc_html(get_theme_mod('medical_hospital_youtube_icon','fab fa-youtube')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Youtube', 'medical-hospital' ); ?></span></a>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php }?>
      <div class="menu-sec <?php if( get_theme_mod( 'medical_hospital_sticky_header') != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>">
        <div class="container">
          <div class="row">
            <div class="logo col-lg-3 col-md-5 col-9 align-self-center">
              <?php if ( has_custom_logo() ) : ?>
                <div class="site-logo"><?php the_custom_logo(); ?></div>
              <?php endif; ?>
              <?php $blog_info = get_bloginfo( 'name' ); ?>
              <?php if ( ! empty( $blog_info ) ) : ?>
                <?php if( get_theme_mod('medical_hospital_show_site_title',true) != ''){ ?>
                  <?php if ( is_front_page() && is_home() ) : ?>
                    <h1 class="site-title p-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                  <?php else : ?>
                    <p class="site-title m-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                  <?php endif; ?>
                <?php }?>
              <?php endif; ?>
              <?php if( get_theme_mod('medical_hospital_show_tagline',true) != ''){ ?>
                <?php
                $description = get_bloginfo( 'description', 'display' );
                if ( $description || is_customize_preview() ) :
                ?>
                  <p class="site-description m-0">
                    <?php echo esc_html($description); ?>
                  </p>
                <?php endif; ?>
              <?php }?>
            </div>
            <div class="menubox align-self-center <?php if(get_theme_mod('medical_hospital_show_search',true)) { ?>col-lg-8 col-md-6 col-1" <?php } else { ?>col-lg-9 col-md-7 col-2 <?php } ?>">
              <div id="sidelong-menu" class="nav side-nav">
                <nav id="primary-site-navigation" class="nav-menu" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'medical-hospital' ); ?>">
                  <?php if (has_nav_menu('primary')){
                    wp_nav_menu( array( 
                      'theme_location' => 'primary',
                      'container_class' => 'main-menu-navigation clearfix' ,
                      'menu_class' => 'clearfix',
                      'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                      'fallback_cb' => 'wp_page_menu',
                    ) ); 
                  } ?>
                </nav>
              </div>
            </div>
            <?php if(get_theme_mod('medical_hospital_show_search',true) ){ ?>
              <div class="search-box col-lg-1 col-md-1 col-1 position-relative align-self-center">
                <div class="wrap"><?php get_search_form(); ?></div>
              </div>
            <?php }?>
          </div>
        </div>
      </div>
    </div>   
  </header>

  <?php if(get_theme_mod('medical_hospital_post_featured_image') == 'banner' ){
    if( is_singular() ) {?>
      <div id="page-site-header">
        <div class='page-header'> 
          <?php the_title( '<h1>', '</h1>' ); ?>
        </div>
      </div>
    <?php }
  }?>