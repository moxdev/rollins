<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rollins_Ridge
 */
?>

<div id="secondary" class="widget-area" role="complementary">
    <?php  if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-global') ) :
         endif;
    ?>

    <?php if(function_exists('residential_one_properties_sidebar_content')) {
        residential_one_properties_sidebar_content();
    } ?>
</div><!-- #secondary -->
