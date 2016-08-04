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

    <?php if(function_exists('rr_test_sidebar_content')) {
        rr_test_sidebar_content();
    } ?>

</div><!-- #secondary -->
