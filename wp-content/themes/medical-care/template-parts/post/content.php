<?php
/**
 * Template part for displaying posts
 *
 * @subpackage Medical Care
 * @since 1.0
 */
?>

<div id="Category-section" class="entry-content">
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="postbox smallpostimage">
			<h3><a href="<?php echo the_permalink(); ?>"><?php the_title();?></a></h3>
			<?php
                if(has_post_thumbnail()) { ?>
		        <div class="box-content">
	            	<?php the_post_thumbnail(); ?>
	            </div>
	        <?php }?>
        	<div class="overlay">
        		<div class="date-box">
        			<?php if( get_option('medical_care_date',true) != 'off'){ ?>
        				<span><i class="far fa-calendar-alt"></i><?php the_time( get_option( 'date_format' ) ); ?></span>
        			<?php }?>
        			<?php if( get_option('medical_care_admin',true) != 'off'){ ?>
        				<span class="entry-author"><i class="far fa-user"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?></a></span>
        			<?php }?>
        			<?php if( get_option('medical_care_comment',true) != 'off'){ ?>
      					<span class="entry-comments"><i class="fas fa-comments"></i> <?php comments_number( __('0 Comments','medical-care'), __('0 Comments','medical-care'), __('% Comments','medical-care')); ?></span>
      				<?php }?>
    			</div>
        		<p><?php the_excerpt();?></p>
        	</div>
	      	<div class="clearfix"></div> 
	  	</div>
	</div>
</div>