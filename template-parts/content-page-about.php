<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bowark
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title"><span>', '</span></h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
            
            <?php the_content(); ?>
		
		<div class="section group arrow-left-thumb">
                <div class="col span_6_of_12 thumbnail">
                    <span></span>
                    <?php
                        $thumbnail_id = get_post_thumbnail_id();
                        $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'thumbnail-size', true);
                    ?>
                    <p><a href="<?php the_permalink(); ?>"><img class="img-responsive" src="<?php echo $thumbnail_url[0]; ?>" alt="<?php the_title(); ?>"></a></p>
                 </div>
                 <div class="col span_6_of_12">
                    <?php the_excerpt(); ?>
                </div>
                </div>

		<?php	wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bowark' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'bowark' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
