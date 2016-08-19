<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rollins_Ridge
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'rr_test' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="flex-wrapper">
			<div class="site-branding flex-item">
				<a id="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="Rollins Ridge Apartments logo"></a>
			</div><!-- .site-branding .flex-item -->

			<div class="phone-wrapper">
				<?php $phone = get_theme_mod('setting_phone');
				    if ($phone): ?>
				        <div class="masthead-tel flex-item">
				            <a id="tel-link" href="tel:<?php echo $phone; ?>">Call and Schedule Your Tour! &nbsp;<span><?php echo $phone; ?></span></a>
				        </div><!-- .masthead-tel .flex-item -->
				    <?php endif;
				?>
				<nav id="site-navigation" class="main-navigation flex-item" role="navigation">
					<button class="menu-toggle flex-item" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( '', 'rr_test' ); ?><span class="hamburger-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hamburger.png" alt="Rollins Ridge Apartments logo"></span></button>

					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation flex-item-->
			</div><!-- phone-wrapper flex-item -->
		</div><!-- .flex-wrapper-->
	</header><!-- #masthead -->

	<?php if ( function_exists( 'rr_test_load_flexslider' ) ) {
		rr_test_load_flexslider();
	}?>

	<div id="content" class="site-content">