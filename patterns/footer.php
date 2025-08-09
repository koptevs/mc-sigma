<?php
/**
 * Title: Footer
 * Slug: mc-sigma/footer
 * Categories: footer
 * Keywords: footer
 * Block Types: core/template-part/footer
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0"}},"color":{"gradient":"linear-gradient(135deg,rgb(26,26,18) 0%,rgb(9,43,85) 100%)"}},"layout":{"type":"default"}} -->
<div class="wp-block-group has-background"
    style="background:linear-gradient(135deg,rgb(26,26,18) 0%,rgb(9,43,85) 100%);padding-top:0;padding-bottom:0">
    <!-- wp:group {"className":"pg-footer-center-row","style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"20px","right":"20px"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group pg-footer-center-row"
        style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:20px;padding-bottom:var(--wp--preset--spacing--40);padding-left:20px">
        <!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|40"}}}} -->
        <div class="wp-block-columns are-vertically-aligned-top">
            <!-- wp:column {"verticalAlignment":"top","width":""} -->
            <div class="wp-block-column is-vertically-aligned-top">
                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"18px"},"spacing":{"padding":{"bottom":"var:preset|spacing|10"}}},"textColor":"white"} -->
                <p class="has-white-color has-text-color has-link-color"
                    style="padding-bottom:var(--wp--preset--spacing--10);font-size:18px;font-style:normal;font-weight:600">
                    <?php echo esc_html__('Contact Address:', 'mc-sigma'); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-text-color"}}},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|20"}}},"textColor":"light-text-color"} -->
                <p class="has-light-text-color has-text-color has-link-color"
                    style="margin-top:0;margin-bottom:var(--wp--preset--spacing--20)">
                    <?php echo esc_html__('Nunc lobortis mattis aliquam faucibus purus in massa arcu odio ut sem nulla pharetra diam amet.', 'mc-sigma'); ?>
                </p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
                <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30)">
                    <!-- wp:image {"id":53,"width":"24px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#fff","#ffffff"]}}} -->
                    <figure class="wp-block-image size-full is-resized"><img
                            src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/map.png" alt=""
                            class="wp-image-53" style="width:24px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-text-color"}}}},"textColor":"light-text-color"} -->
                    <p class="has-light-text-color has-text-color has-link-color"><strong><mark
                                style="background-color:rgba(0, 0, 0, 0)"
                                class="has-inline-color has-light-text-color"><?php echo esc_html__('Address:', 'mc-sigma'); ?><br></mark></strong><?php echo esc_html__('Street name, example 123', 'mc-sigma'); ?>
                    </p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"top"} -->
            <div class="wp-block-column is-vertically-aligned-top">
                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"18px"},"spacing":{"padding":{"bottom":"var:preset|spacing|10"}}},"textColor":"white"} -->
                <p class="has-white-color has-text-color has-link-color"
                    style="padding-bottom:var(--wp--preset--spacing--10);font-size:18px;font-style:normal;font-weight:600">
                    <?php echo esc_html__('About Us', 'mc-sigma'); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="margin-top:0;margin-bottom:0">
                    <!-- wp:navigation {"textColor":"light-text","overlayMenu":"never","hasIcon":false,"style":{"spacing":{"blockGap":"10px"},"typography":{"fontStyle":"normal","fontWeight":"400"}},"layout":{"type":"flex","orientation":"vertical"}} /-->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
                <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30)">
                    <!-- wp:image {"id":51,"width":"24px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#fff","#ffffff"]}}} -->
                    <figure class="wp-block-image size-full is-resized"><img
                            src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/email.png" alt=""
                            class="wp-image-51" style="width:24px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-text-color"}}}},"textColor":"light-text-color"} -->
                    <p class="has-light-text-color has-text-color has-link-color"><strong><mark
                                style="background-color:rgba(0, 0, 0, 0)"
                                class="has-inline-color has-light-text-color"><?php echo esc_html__('Email:', 'mc-sigma'); ?><br></mark></strong><?php echo esc_html__('Email@example.com', 'mc-sigma'); ?>
                    </p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"top","width":""} -->
            <div class="wp-block-column is-vertically-aligned-top">
                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"18px"},"spacing":{"padding":{"bottom":"var:preset|spacing|10"}}},"textColor":"white"} -->
                <p class="has-white-color has-text-color has-link-color"
                    style="padding-bottom:var(--wp--preset--spacing--10);font-size:18px;font-style:normal;font-weight:600">
                    <?php echo esc_html__('Useful Informations', 'mc-sigma'); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="margin-top:0;margin-bottom:0">
                    <!-- wp:paragraph {"className":"footer-mail","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-text-color"}}}},"textColor":"light-text-color"} -->
                    <p class="footer-mail has-light-text-color has-text-color has-link-color">
                        <?php echo esc_html__('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'mc-sigma'); ?>
                    </p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
                <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30)">
                    <!-- wp:image {"id":52,"width":"24px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#fff","#ffffff"]}}} -->
                    <figure class="wp-block-image size-full is-resized"><img
                            src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/phone.png" alt=""
                            class="wp-image-52" style="width:24px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-text-color"}}}},"textColor":"light-text-color"} -->
                    <p class="has-light-text-color has-text-color has-link-color"><strong><mark
                                style="background-color:rgba(0, 0, 0, 0)"
                                class="has-inline-color has-light-text-color"><?php echo esc_html__('Phone:', 'mc-sigma'); ?><br></mark></strong><?php echo esc_html__('+01-123456', 'mc-sigma'); ?>
                    </p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"top"} -->
            <div class="wp-block-column is-vertically-aligned-top">
                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"18px"},"spacing":{"padding":{"bottom":"var:preset|spacing|10"}}},"textColor":"white"} -->
                <p class="has-white-color has-text-color has-link-color"
                    style="padding-bottom:var(--wp--preset--spacing--10);font-size:18px;font-style:normal;font-weight:600">
                    <?php echo esc_html__('Quick Links', 'mc-sigma'); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="margin-top:0;margin-bottom:0">
                    <!-- wp:navigation {"textColor":"light-text","overlayMenu":"never","style":{"spacing":{"blockGap":"10px"},"typography":{"fontStyle":"normal","fontWeight":"400"}},"layout":{"type":"flex","orientation":"vertical"}} /-->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10","margin":{"top":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30)">
                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
                        <p class="has-white-color has-text-color has-link-color">
                            <strong><?php echo esc_html__('Follow Us', 'mc-sigma'); ?></strong>:</p>
                        <!-- /wp:paragraph -->

                        <!-- wp:social-links {"iconColor":"white","iconColorValue":"#fff","iconBackgroundColor":"secondary","iconBackgroundColorValue":"#ffe9b3","size":"has-small-icon-size","style":{"spacing":{"blockGap":{"left":"8px"},"margin":{"top":"var:preset|spacing|10"}}},"layout":{"type":"flex","justifyContent":"left","flexWrap":"nowrap"}} -->
                        <ul class="wp-block-social-links has-small-icon-size has-icon-color has-icon-background-color"
                            style="margin-top:var(--wp--preset--spacing--10)">
                            <!-- wp:social-link {"url":"#","service":"facebook"} /-->

                            <!-- wp:social-link {"url":"#","service":"instagram"} /-->

                            <!-- wp:social-link {"url":"#","service":"x"} /-->
                        </ul>
                        <!-- /wp:social-links -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"20px","right":"20px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
    <div class="wp-block-group"
        style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:20px;padding-bottom:0;padding-left:20px">
        <!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|contrast","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|30","left":"0","right":"0"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
        <div class="wp-block-group"
            style="border-top-color:var(--wp--preset--color--contrast);border-top-width:1px;padding-top:var(--wp--preset--spacing--20);padding-right:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:0">
            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"sml-medium"} -->
            <p class="has-white-color has-text-color has-link-color has-sml-medium-font-size">
                <?php echo esc_html__('Developed By 📌', 'mc-sigma'); ?><a href="http://google.com" target="_blank"
                    rel="noreferrer noopener"><?php echo esc_html__('PinDesign', 'mc-sigma'); ?></a></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:paragraph {"className":"mc-sigma-scrool-top"} -->
    <p class="mc-sigma-scrool-top"></p>
    <!-- /wp:paragraph -->
</div>
<!-- /wp:group -->