<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bowark
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'bowark'); ?></a>

	<header id="masthead" class="site-header" role="banner">
            <div class="layout-container">
                <div class="section group">
		<div class="site-branding col span_4_of_12">
        
			<?php
			if ( get_theme_mod( 'bowark_logo' ) ) : ?>
				<div class='site-logo'>
                    <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'bowark_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
                </div>
			<?php else : ?>
				<div class='site-logo'><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" /></a></div>
            
			<?php
			
            endif;
 ?>
		</div><!-- .site-branding -->
                
                <div class="col span_1_of_12"></div>

		<nav id="site-navigation" class="main-navigation col span_7_of_12" role="navigation">
        
        <div id="mobile-header">
            <a id="responsive-menu-button" href="#sidr-main"><i class="fa fa-bars"></span></i>
</a>
        </div>
                    <div class="top-menu section group">
                        <?php wp_nav_menu(array('theme_location' => 'top', 'menu_id' => 'top-menu', 'container' => 'div', 'container_class' => 'col span_12_of_12')); ?>
                    </div>
                    
                    <div class="main-menu section group">
			<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu', 'container' => 'div', 'container_class' => 'col span_12_of_12')); ?>
                    </div>

		</nav><!-- #site-navigation -->
                </div>
            </div><!-- .layout-container -->
	</header><!-- #masthead -->
        
        <?php putRevSlider("slider1","homepage") ?>
        
        <?php if(!is_front_page()) { ?>
            <?php putRevSlider( "inner" ) ?>
        <?php } ?>

	<div id="content" class="site-content">
