<?php
/**
 * The template for displaying the homepage.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bowark
 * 
 * Template Name: Home Page
 */

get_header(); ?>

  <div class="layout-container clear">

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
                    
                    <div class="homepage">

			<!-- Adds left project -->            
                <?php
        $args = array(
            'post_type' => 'project',
            'category_name' => 'current',
            'posts_per_page' => 1
        );
        $the_query = new WP_Query($args);
        ?>
                   
        <?php if (have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
		
		<div class="section group arrow-left-thumb">
                <div class="col span_6_of_12 thumbnail">
                    <span></span>
                    <?php
                        $thumbnail_id = get_post_thumbnail_id();
                        $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'thumbnail-size', true);
                    ?>
                    <p><a href="<?php the_permalink(); ?>"><img class="img-responsive" src="<?php echo $thumbnail_url[0]; ?>" alt="<?php the_title(); ?>"></a></p>
                 </div>
                 <div class="col span_6_of_12 home-text">
                     <h1 class="entry-title"><span><?php the_title(); ?></span></h1>
                    <?php the_content(); ?>
                     <p><a class="button" href="<?php the_permalink(); ?>">Learn More<i class="fa fa-angle-right"></i></a></p>
                </div>
                </div>
            <?php endwhile;
        endif; ?>
                <?php wp_reset_query(); ?>

			<!-- Adds right project -->            
                <?php
        $args = array(
            'post_type' => 'project',
            'category_name' => 'projects',
            'posts_per_page' => 1
        );
        $the_query = new WP_Query($args);
        ?>
                   
        <?php if (have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
		
		<div class="section group arrow-right-thumb">
                 <div class="col span_6_of_12 home-text">
                     <h1 class="entry-title"><span><?php the_title(); ?></span></h1>
                    <?php the_content(); ?>
                     <p><a class="button" href="<?php the_permalink(); ?>">Learn More<i class="fa fa-angle-right"></i></a></p>
                </div>
                <div class="col span_6_of_12 thumbnail">
                    <span></span>
                    <?php
                        $thumbnail_id = get_post_thumbnail_id();
                        $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'thumbnail-size', true);
                    ?>
                    <p><a href="<?php the_permalink(); ?>"><img class="img-responsive" src="<?php echo $thumbnail_url[0]; ?>" alt="<?php the_title(); ?>"></a></p>
                 </div>
                </div>
            <?php endwhile;
        endif; ?>
                <?php wp_reset_query(); ?>
                        
                    </div><!-- .homepage -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
