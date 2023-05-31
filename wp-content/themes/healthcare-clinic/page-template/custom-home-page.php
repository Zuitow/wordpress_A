<?php
/**
 * Template Name: Custom Home Page
 */
get_header(); ?>

<main id="content">
  <?php if( get_option('medical_care_slider_arrows') == '1'){ ?>
    <section id="slider" class="mt-3">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <?php
          for ( $i = 1; $i <= 4; $i++ ) {
            $healthcare_clinic_mod =  get_theme_mod( 'medical_care_post_setting' . $i );
            if ( 'page-none-selected' != $healthcare_clinic_mod ) {
              $healthcare_clinic_slide_pages[] = $healthcare_clinic_mod;
            }
          }
           if( !empty($healthcare_clinic_slide_pages) ) :
          $healthcare_clinic_args = array(
            'post_type' =>array('post','page'),
            'post__in' => $healthcare_clinic_slide_pages
          );
          $healthcare_clinic_query = new WP_Query( $healthcare_clinic_args );
          if ( $healthcare_clinic_query->have_posts() ) :
            $i = 1;
        ?>
        <div class="carousel-inner" role="listbox">
          <?php  while ( $healthcare_clinic_query->have_posts() ) : $healthcare_clinic_query->the_post(); ?>
          <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
            <img src="<?php esc_url(the_post_thumbnail_url('full')); ?>"/>
            <div class="carousel-caption slider-inner">
              <div class="inner_carousel">
                <h2><?php the_title();?></h2>
                <p><?php echo esc_html(wp_trim_words(get_the_content(),'25') );?></p>
                <div class="getstarted-btn">
                  <a href="<?php the_permalink(); ?>" class="blogbutton-small" title="<?php esc_attr_e( 'Know More', 'healthcare-clinic' ); ?>"><?php esc_html_e('Know More','healthcare-clinic'); ?></a>
                </div>
              </div>
            </div>
          </div>
          <?php $i++; endwhile;
          wp_reset_postdata();?>
        </div>
        <?php else : ?>
        <div class="no-postfound"></div>
          <?php endif;
        endif;?>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
          </a>
      </div>
      <div class="clearfix"></div>
    </section>
  <?php }?>

  <?php if( get_theme_mod('healthcare_clinic_middle_sec_settigs1') != ''){ ?>
    <section id="middle-sec">
      <div class="container">
        <div class="row">
          <?php
            for ( $healthcare_clinic_s = 1; $healthcare_clinic_s <= 3; $healthcare_clinic_s++ ) {
              $healthcare_clinic_post_mod =  get_theme_mod( 'healthcare_clinic_middle_sec_settigs'.$healthcare_clinic_s );

              if ( 'post-none-selected' != $healthcare_clinic_post_mod ) {
                $healthcare_clinic_post[] = $healthcare_clinic_post_mod;
              }
            }
             if( !empty($healthcare_clinic_post) ) :
            $healthcare_clinic_args = array(
              'post_type' =>'post',
              'post__in' => $healthcare_clinic_post
            );
            $healthcare_clinic_post_query = new WP_Query( $healthcare_clinic_args );
            if ( $healthcare_clinic_post_query->have_posts() ) :
              $healthcare_clinic_m = 1;
          ?>
          <?php while ( $healthcare_clinic_post_query->have_posts() ) : $healthcare_clinic_post_query->the_post(); ?>
            <div class="col-lg-4 col-md-4">
              <div class="mid-inner-box p-3 mb-3">
                <i class="<?php echo esc_attr(get_theme_mod('healthcare_clinic_mid_section_icon'.$healthcare_clinic_m)); ?>"></i>
                <h4 class="my-3"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
                <p><?php echo esc_html(wp_trim_words(get_the_content(),'25') );?></p>
              </div>
            </div>
          <?php $healthcare_clinic_m++; endwhile;
          wp_reset_postdata();?>
          <?php else : ?>
          <div class="no-postfound"></div>
            <?php endif;
          endif;?>
        </div>
      </div>
    </section>
  <?php }?>

  <div id="our-services">
    <div class="container">
      <?php if( get_theme_mod('medical_care_our_services_subtitle') != ''){ ?>
        <strong><?php echo esc_html(get_theme_mod('medical_care_our_services_subtitle','')); ?></strong>
      <?php }?>
      <?php if( get_theme_mod('medical_care_our_services_title') != ''){ ?>
        <h3><?php echo esc_html(get_theme_mod('medical_care_our_services_title','')); ?></h3>
      <?php }?>

      <div class="row">
        <?php
        $healthcare_clinic_catData1=  get_theme_mod('medical_care_category_setting');if($healthcare_clinic_catData1){
        $healthcare_clinic_page_query = new WP_Query(array( 'category_name' => esc_html($healthcare_clinic_catData1 ,'healthcare-clinic')));?>
          <?php while( $healthcare_clinic_page_query->have_posts() ) : $healthcare_clinic_page_query->the_post(); ?>
            <div class="col-lg-4 col-md-4">
              <div class="box">
                <?php the_post_thumbnail(); ?>
                <div class="box-content">
                  <a href="<?php the_permalink(); ?>"><h4><?php the_title();?></h4></a>
                  <p><?php echo esc_html(wp_trim_words(get_the_content(),'15') );?></p>
                </div>
                <div class="box-button">
                  <a href="<?php the_permalink(); ?>"><?php esc_html_e('Read More','healthcare-clinic');?></a>
                </div>
              </div>
            </div>
          <?php endwhile;
          wp_reset_postdata();
        }?>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
