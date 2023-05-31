<?php
/**
 * The template for displaying all pages.
 * @package Medical Hospital
 */
get_header(); ?>

<?php do_action('medical_hospital_page_header'); ?>

<main id="maincontent" role="main" class="main-wrap-box py-4">
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="title-box text-center">
            <div class="container">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
        <div class="container">
            <?php $medical_hospital_page_layout = get_theme_mod( 'medical_hospital_single_page_layout','One Column');
            if($medical_hospital_page_layout == 'One Column'){ ?>
                <div id="wrapper">
                    <?php if(get_theme_mod('medical_hospital_single_page_breadcrumb',true) != ''){ ?>
                        <div class="bradcrumbs">
                            <?php medical_hospital_the_breadcrumb(); ?>
                        </div>
                    <?php }?> 
                    <div class="feature-box">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="entry-content"><?php the_content(); ?> </div>
                    <?php wp_link_pages( array(
                            'before'      => '<div class="page-links"><span class="page-links-title p-3">' . __( 'Pages:', 'medical-hospital' ) . '</span>',
                            'after'       => '</div>',
                            'link_before' => '<span class="page-number py-2 px-3">',
                            'link_after'  => '</span>',
                            'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'medical-hospital' ) . ' </span>%',
                            'separator'   => '<span class="screen-reader-text">, </span>',
                    )   ); ?>       
                    <div class="clearfix"></div>
                    <?php
                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) {
                            comments_template();
                        }
                    ?>
                </div>
            <?php }else if($medical_hospital_page_layout == 'Left Sidebar'){ ?>
                <div class="row">
                    <div  id="sidebar" class="col-lg-3 col-md-4">
                        <?php dynamic_sidebar('sidebar-2'); ?>
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <div id="wrapper">
                            <?php if(get_theme_mod('medical_hospital_single_page_breadcrumb',true) != ''){ ?>
                                <div class="bradcrumbs">
                                    <?php medical_hospital_the_breadcrumb(); ?>
                                </div>
                            <?php }?> 
                            <div class="feature-box">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="entry-content"><?php the_content(); ?> </div>
                            <?php wp_link_pages( array(
                                    'before'      => '<div class="page-links"><span class="page-links-title p-3">' . __( 'Pages:', 'medical-hospital' ) . '</span>',
                                    'after'       => '</div>',
                                    'link_before' => '<span class="page-number py-2 px-3">',
                                    'link_after'  => '</span>',
                                    'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'medical-hospital' ) . ' </span>%',
                                    'separator'   => '<span class="screen-reader-text">, </span>',
                            )   ); ?>       
                            <div class="clearfix"></div>
                            <?php
                                // If comments are open or we have at least one comment, load up the comment template.
                                if ( comments_open() || get_comments_number() ) {
                                    comments_template();
                                }
                            ?>
                        </div>
                    </div>
                </div>
            <?php }else if($medical_hospital_page_layout == 'Right Sidebar'){ ?>
                <div class="row">
                    <div class="col-lg-9 col-md-8">
                        <div id="wrapper">
                            <?php if(get_theme_mod('medical_hospital_single_page_breadcrumb',true) != ''){ ?>
                                <div class="bradcrumbs">
                                    <?php medical_hospital_the_breadcrumb(); ?>
                                </div>
                            <?php }?> 
                            <div class="feature-box">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="entry-content"><?php the_content(); ?> </div>
                            <?php wp_link_pages( array(
                                    'before'      => '<div class="page-links"><span class="page-links-title p-3">' . __( 'Pages:', 'medical-hospital' ) . '</span>',
                                    'after'       => '</div>',
                                    'link_before' => '<span class="page-number py-2 px-3">',
                                    'link_after'  => '</span>',
                                    'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'medical-hospital' ) . ' </span>%',
                                    'separator'   => '<span class="screen-reader-text">, </span>',
                            )   ); ?>       
                            <div class="clearfix"></div>
                            <?php
                                // If comments are open or we have at least one comment, load up the comment template.
                                if ( comments_open() || get_comments_number() ) {
                                    comments_template();
                                }
                            ?>
                        </div>
                    </div>
                    <div  id="sidebar" class="col-lg-3 col-md-4">
                        <?php dynamic_sidebar('sidebar-2'); ?>
                    </div>
                </div>
            <?php }?>
        </div>
    <?php endwhile; // end of the loop. 
    wp_reset_postdata();?>
</main>

<?php do_action('medical_hospital_page_left_footer'); ?>

<?php get_footer(); ?>