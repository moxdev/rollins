<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rollins_Ridge
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
        <?php if(function_exists( 'rr_test_footer_colophon' ) ) {
            rr_test_footer_colophon();
        } ?>
	</footer><!-- #colophon -->
    <nav id="site-navigation-mobile" class="mobile-navigation">
        <?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_id' => 'mobile-menu', 'container' => '' ) ); ?>
    </nav><!-- #site-navigation-mobile -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
