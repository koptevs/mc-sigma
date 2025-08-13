<?php
/**
 * Title: Banner With Header
 * Slug: mc-sigma/banner-with-header
 * Categories: mc-sigma
 * Keywords: banner
 * Block Types: core/post-content
 * Post Types: page, wp_template
 */
?><!-- wp:cover {"url":"<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/banner.jpg","id":38,"dimRatio":50,"overlayColor":"primary","isUserOverlayColor":true,"minHeight":700,"contentPosition":"top center","sizeSlug":"full","metadata":{"name":"Banner"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-top-center"
    style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:700px">
    <img class="wp-block-cover__image-background wp-image-38 size-full" alt=""
        src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/banner.jpg"
        data-object-fit="cover" /><span aria-hidden="true"
        class="wp-block-cover__background has-primary-background-color has-background-dim"></span>
    <div class="wp-block-cover__inner-container">

        <!-- wp:pattern {"slug":"mc-sigma/header"} /-->

        <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}},"border":{"bottom":{"color":"#8e8e8e","width":"1px"},"top":[],"right":[],"left":[]}},"layout":{"type":"constrained"}} -->
        <!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
        <main class="wp-block-group"
            style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
            <!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained","contentSize":"950px","justifyContent":"center"}} -->
            <div class="wp-block-group">
                <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"52px","fontStyle":"normal","fontWeight":"600"}},"fontFamily":"body"} -->
                <h2 class="wp-block-heading has-text-align-center has-body-font-family"
                    style="font-size:52px;font-style:normal;font-weight:600">
                    <?php echo esc_html__('Mācību centrs', 'mc-alfa'); ?></h2>
                <!-- /wp:heading -->

                <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"52px","fontStyle":"normal","fontWeight":"600"}},"fontFamily":"body"} -->
                <h2 class="wp-block-heading has-text-align-center has-body-font-family"
                    style="font-size:52px;font-style:normal;font-weight:600">
                    <?php echo esc_html__('MC-Sigma', 'mc-alfa'); ?></h2>
                <!-- /wp:heading -->

                <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"52px","fontStyle":"normal","fontWeight":"600"}},"fontFamily":"body"} -->
                <h2 class="wp-block-heading has-text-align-center has-body-font-family"
                    style="font-size:52px;font-style:normal;font-weight:600">
                    <?php echo esc_html__('profesionālās tālākizglītības centrs.', 'mc-alfa'); ?></h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|button-hover-text"}}},"typography":{"fontSize":"18px"},"spacing":{"margin":{"top":"36px","bottom":"0px"}}},"textColor":"button-hover-text","fontFamily":"body"} -->
                <p class="has-text-align-left has-button-hover-text-color has-text-color has-link-color has-body-font-family"
                    style="margin-top:36px;margin-bottom:0px;font-size:18px">
                    <?php echo esc_html__(' Mācību centrs MC-Sigma ir Latvijā llabākais privātais pieaugušo profesionālās tālākizglītības centrs, kas dibināts 2026. gadā. Mēs piedāvājam plašu izglītības pakalpojumu klāstu, kas pieejams visos Latvijas reģionos gan klātienē, gan attālināti.', 'mc-alfa'); ?>
                </p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|button-hover-text"}}},"typography":{"fontSize":"18px"},"spacing":{"margin":{"top":"10px","bottom":"0px"}}},"textColor":"button-hover-text","fontFamily":"body"} -->
                <p class="has-text-align-left has-button-hover-text-color has-text-color has-link-color has-body-font-family"
                    style="margin-top:10px;margin-bottom:0px;font-size:18px">Mēs aktīvi iesaistāmies dažādu nozaru
                    asociācijās un cieši sadarbojamies ar vietējiem un starptautiskajiem uzņēmumiem, lai nodrošinātu
                    augstas kvalitātes, aktuālas un tirgus prasībām atbilstošas mācības.</p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
                <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
                    <!-- wp:button {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"border":{"radius":"0px","width":"1px"}},"borderColor":"secondary"} -->
                    <div class="wp-block-button"><a
                            class="wp-block-button__link has-border-color has-secondary-border-color wp-element-button"
                            style="border-width:1px;border-radius:0px;font-style:normal;font-weight:400">Vairāk par
                            mums</a></div>
                    <!-- /wp:button -->

                    <!-- wp:button {"backgroundColor":"secondary","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
                    <div class="wp-block-button"><a
                            class="wp-block-button__link has-secondary-background-color has-background wp-element-button"
                            style="font-style:normal;font-weight:400">Macību programmas</a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </main>
        <!-- /wp:group -->
    </div>
</div>
<!-- /wp:cover -->