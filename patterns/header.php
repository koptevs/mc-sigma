<?php
/**
 * Title: Header
 * Slug: mc-sigma/header
 * Categories: header, mc-sigma
 * Keywords: header
 * Block Types: core/template-part/header
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"15px","bottom":"15px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}},"border":{"bottom":{"color":"#8e8e8e","width":"1px"},"top":[],"right":[],"left":[]}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" id="sticky-header"
    style="border-bottom-color:#8e8e8e;border-bottom-width:1px;margin-top:0;margin-bottom:0;padding-top:15px;padding-right:var(--wp--preset--spacing--40);padding-bottom:15px;padding-left:var(--wp--preset--spacing--40)">
    <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignwide">
        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group">
            <!-- wp:site-title {"level":0,"style":{"spacing":{"margin":{"right":"var:preset|spacing|20"}}}} /-->

            <!-- wp:navigation {"ref":96,"style":{"layout":{"selfStretch":"fit","flexSize":null}},"fontFamily":"body"} /-->
        </div>
        <!-- /wp:group -->

        <!-- wp:buttons {"className":"sigma-header-button"} -->
        <div class="wp-block-buttons sigma-header-button"><!-- wp:button -->
            <div class="wp-block-button"><a
                    class="wp-block-button__link wp-element-button"><?php echo esc_html__('Sazinieties ar mums', 'mc-alfa'); ?></a>
            </div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->