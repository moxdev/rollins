<?php
/**
 * Rollins Ridge Theme Custom phone number link in the header for front-page.php.
 *
 * @package Rollins_Ridge
 */

/**
 * Adds a "Call us today!" link with phone number if company information includes a phone number.
 *
 */

function rr_test_header_call_us_now() {
    $phone = get_theme_mod('setting_phone');
        if ($phone): ?>
            <div class="masthead-tel flex-item">
                <a id="tel-link" href="tel:<?php echo $phone; ?>">Call us today! <span class="phone-number"><?php echo $phone; ?></span></a>
            </div>
        <?php endif;
}