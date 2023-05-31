<?php
/**
 * The template part for displaying post
 * @package Medical Hospital
 * @subpackage medical_hospital
 * @since 1.0
 */
?>
<?php 
  $archive_year  = get_the_time('Y'); 
  $archive_month = get_the_time('m'); 
  $archive_day   = get_the_time('d'); 
?> 
<?php
  $content = apply_filters( 'the_content', get_the_content() );
  $audio = false;
  // Only get audio from the content if a playlist isn't present.
  if ( false === strpos( $content, 'wp-playlist-script' ) ) {
    $audio = get_media_embedded_in_content( $content, array( 'audio' ) );
  }
?>
<article class="blog-sec p-2 mb-4">
  <div class="mainimage">
    <?php
      if ( ! is_single() ) {
      // If not a single post, highlight the audio file.
        if ( ! empty( $audio ) ) {
          foreach ( $audio as $audio_html ) {
            echo '<div class="entry-audio">';
              echo $audio_html;
            echo '</div><!-- .entry-audio -->';
          }
        };
      };
    ?>
  </div>
  <h2><a href="<?php echo esc_url(get_permalink() ); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
  <?php if(get_theme_mod('medical_hospital_metafields_date',true) == 1 || get_theme_mod('medical_hospital_metafields_author',true) == 1 || get_theme_mod('medical_hospital_metafields_comment',true) == 1 || get_theme_mod( 'medical_hospital_metafields_time',true) == 1){ ?>
    <div class="post-info py-2 mb-2">
      <?php if(get_theme_mod('medical_hospital_metafields_date',true)==1){ ?>
        <i class="<?php echo esc_attr(get_theme_mod('medical_hospital_postdate_icon',"fa fa-calendar pe-2" )); ?>"></i><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><span class="entry-date ms-1 me-2"><?php echo esc_html( get_the_date() ); ?></span><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a>
      <?php }?>
      <?php if(get_theme_mod('medical_hospital_metafields_author',true)==1){ ?>
        <i class="<?php echo esc_attr(get_theme_mod('medical_hospital_postauthor_icon',"fa fa-user pe-2" )); ?>"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><span class="entry-author ms-1 me-2"> <?php the_author(); ?></span><span class="screen-reader-text"><?php the_author(); ?></span></a>
      <?php }?>
      <?php if(get_theme_mod('medical_hospital_metafields_comment',true)==1){ ?>
        <i class="<?php echo esc_attr(get_theme_mod('medical_hospital_postcomment_icon',"fa fa-comments pe-2" )); ?>"></i><span class="entry-comments ms-1 me-2"> <?php comments_number( __('0 Comments','medical-hospital'), __('0 Comments','medical-hospital'), __('% Comments','medical-hospital') ); ?></span> 
      <?php }?>
      <?php if( get_theme_mod( 'medical_hospital_metafields_time',true) != '') { ?>
        <i class="<?php echo esc_attr(get_theme_mod('medical_hospital_posttime_icon',"fa fa-clock pe-2" )); ?>"></i><span class="entry-comments ms-1 me-2"><?php echo esc_html( get_the_time() ); ?></span>
      <?php }?>
    </div>
  <?php }?>
  <?php if(get_theme_mod('medical_hospital_blog_post_content') == 'Full Content'){ ?>
    <?php the_content(); ?>
  <?php }
  if(get_theme_mod('medical_hospital_blog_post_content', 'Excerpt Content') == 'Excerpt Content'){ ?>
    <?php if(get_the_excerpt()) { ?>
      <div class="entry-content"><p><?php $medical_hospital_excerpt = get_the_excerpt(); echo esc_html( medical_hospital_string_limit_words( $medical_hospital_excerpt, esc_attr(get_theme_mod('medical_hospital_post_excerpt_number','20')))); ?> <?php echo esc_html( get_theme_mod('medical_hospital_button_excerpt_suffix','...') ); ?></p></div>
    <?php }?>
  <?php }?>
  <?php if ( get_theme_mod('medical_hospital_blog_button_text','Read Full') != '' ) {?>
    <div class="blogbtn mt-3">
      <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small hvr-sweep-to-right"><?php echo esc_html( get_theme_mod('medical_hospital_blog_button_text',__('Read Full', 'medical-hospital')) ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('medical_hospital_blog_button_text',__('Read Full', 'medical-hospital')) ); ?></span></a>
    </div>
  <?php }?>
</article>