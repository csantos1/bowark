<?php
/**
 * The template for displaying the About child pages.
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
 * Template Name: About
 * 
 */

get_header(); ?>

  <div class="layout-container clear">

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page-about' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					// comments_template();
				endif;

			endwhile; // End of the loop.
			?>
                    <?php wp_reset_query(); ?>
                    
        	<div class="section group">
                    <?php
        $args = array(
            'post_type' => 'project',
            'category_name' => 'current'
        );
        $the_query = new WP_Query($args);
        ?>
        <?php if (have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
              <div class="col span_6_of_12 project-listing">
                <div class="col span_4_of_12">
                    <?php
                        $thumbnail_id = get_post_thumbnail_id();
                        $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'thumbnail-size', true);
                    ?>
                    <p><a href="<?php the_permalink(); ?>"><img class="img-responsive img-rounded" src="<?php echo $thumbnail_url[0]; ?>" alt="<?php the_title(); ?>"></a></p>
                 </div>
                 <div class="col span_8_of_12">    
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <?php the_content(); ?>
                </div>
                </div>
                    
            <?php endwhile;
        endif; ?>
                <?php wp_reset_query(); ?>
                    
                    <?php
        $args = array(
            'post_type' => 'project',
            'category_name' => 'projects'
        );
        $the_query = new WP_Query($args);
        ?>
        <?php if (have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
              <div class="col span_6_of_12 project-listing">
                <div class="col span_4_of_12">
                    <?php
                        $thumbnail_id = get_post_thumbnail_id();
                        $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'thumbnail-size', true);
                    ?>
                    <p><a href="<?php the_permalink(); ?>"><img class="img-responsive img-rounded" src="<?php echo $thumbnail_url[0]; ?>" alt="<?php the_title(); ?>"></a></p>
                 </div>
                 <div class="col span_8_of_12">    
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <?php the_content(); ?>
                </div>
                </div>
                    
            <?php endwhile;
        endif; ?>
                <?php wp_reset_query(); ?>
                </div><!-- section group -->
                <div class="clearfix"></div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar('about');
get_footer();
