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
                    
        	<div class="section group project-listing">
                    
                    <h2><span><em>Latest</em> Projects</span></h2>
                    
        <!-- Adds list of projects -->            
                <?php
        $args = array(
            'post_type' => 'project'
        );
        $the_query = new WP_Query($args);
        ?>
                    <ul class="project-list">
        <?php if (have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <li>
              <div class="section group">
                <div class="col span_4_of_12">
                    <?php
                        $thumbnail_id = get_post_thumbnail_id();
                        $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'thumbnail-size', true);
                    ?>
                    <p><a href="<?php the_permalink(); ?>"><img class="img-responsive" src="<?php echo $thumbnail_url[0]; ?>" alt="<?php the_title(); ?>"></a></p>
                 </div>
                 <div class="col span_8_of_12">    
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <?php the_excerpt(); ?>
                </div>
                </div>
                        </li>
                        
                        <?php $project_count = $the_query->current_post + 1; ?>
                    <?php if ( $project_count % 2 == 0): ?>
                        <div class="clearfix"></div>
                    <?php endif; ?>
                    
            <?php endwhile;
        endif; ?>
                    </ul>
                <?php wp_reset_query(); ?>
                </div><!-- section group -->
                <div class="clearfix"></div>
                
                
            <!-- Adds list of features -->        
                    <?php 
			$query = new WP_Query( 'pagename=features' );
			// The Loop
			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) {
					$query->the_post();
					echo '<h3><span>';
					echo the_title();
					echo '</span></h3>';
                                        echo the_excerpt();
                                        echo '<div class="section group">';
					echo '<div class="col span_7_of_12 features-list">';
					the_content();
					echo '</div>';//
					if ( has_post_thumbnail() ) { 
					echo '<div class="col span_5_of_12">';
					the_post_thumbnail('full');
}					echo '</div>';//
					echo '</div>';//
				}
			}
			
			/* Restore original Post Data */
			wp_reset_postdata();
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar('about');
get_footer();
