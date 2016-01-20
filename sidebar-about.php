<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bowark
 */
?>

<aside id="secondary" class="widget-area" role="complementary">

    <div class="side-menu-container">
        <div class="side-menu">
             <?php wp_nav_menu(array('theme_location' => 'about', 'menu_id' => 'about-menu', 'container' => 'div', 'container_class' => 'col span_12_of_12')); ?>
        </div>
    </div>
    
    <div class="clearfix"></div>

	<?php dynamic_sidebar( 'sidebar-about' ); ?>

</aside><!-- #secondary -->

</div>
