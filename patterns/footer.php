<?php
/**
 * Title: Footer
 * Slug: mc-sigma/footer
 * Categories: footer, mc-sigma
 * Keywords: footer
 * Block Types: core/template-part/footer
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"gradient":"footer-gradient","fontFamily":"body","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-footer-gradient-gradient-background has-background has-body-font-family"
     style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
     <!-- wp:group {"className":"pg-footer-center-row","style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"layout":{"type":"default"}} -->
     <div class="wp-block-group pg-footer-center-row"
          style="margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
          <!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|40"}}}} -->
          <div class="wp-block-columns are-vertically-aligned-top">
               <!-- wp:column {"verticalAlignment":"top","width":""} -->
               <div class="wp-block-column is-vertically-aligned-top">
                    <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"18px"},"spacing":{"padding":{"bottom":"var:preset|spacing|10"}}},"textColor":"white"} -->
                    <p class="has-text-align-center has-white-color has-text-color has-link-color"
                         style="padding-bottom:var(--wp--preset--spacing--10);font-size:18px;font-style:normal;font-weight:600">
                         Sazinieties ar mums</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top","justifyContent":"left"}} -->
                    <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--20)">
                         <!-- wp:image {"id":53,"width":"24px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#fff","#ffffff"]}}} -->
                         <figure class="wp-block-image size-full is-resized"><img
                                   src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/map.png"
                                   alt="" class="wp-image-53" style="width:24px" /></figure>
                         <!-- /wp:image -->

                         <!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
                         <div class="wp-block-group">
                              <!-- wp:paragraph {"align":"center","className":"has-light-text-color has-text-color has-link-color","style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
                              <p class="has-text-align-center has-light-text-color has-text-color has-link-color has-white-color"
                                   style="font-style:normal;font-weight:400">Adrese:</p>
                              <!-- /wp:paragraph -->

                              <!-- wp:paragraph {"align":"center","className":"has-light-text-color has-text-color has-link-color","textColor":"button-hover-text-color"} -->
                              <p
                                   class="has-text-align-center has-light-text-color has-text-color has-link-color has-button-hover-text-color-color has-text-color">
                                   Rīga, Saules iela 123</p>
                              <!-- /wp:paragraph -->
                         </div>
                         <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top","justifyContent":"left"}} -->
                    <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--20)">
                         <!-- wp:image {"id":51,"width":"24px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#fff","#ffffff"]}}} -->
                         <figure class="wp-block-image size-full is-resized"><img
                                   src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/email.png"
                                   alt="" class="wp-image-51" style="width:24px" /></figure>
                         <!-- /wp:image -->

                         <!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
                         <div class="wp-block-group">
                              <!-- wp:paragraph {"align":"center","className":"has-light-text-color has-text-color has-link-color","style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
                              <p class="has-text-align-center has-light-text-color has-text-color has-link-color has-white-color"
                                   style="font-style:normal;font-weight:400">Email:</p>
                              <!-- /wp:paragraph -->

                              <!-- wp:paragraph {"align":"center","className":"has-light-text-color has-text-color has-link-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|button-hover-text-color"}}}},"textColor":"button-hover-text-color"} -->
                              <p
                                   class="has-text-align-center has-light-text-color has-text-color has-link-color has-button-hover-text-color-color">
                                   mail@example.com</p>
                              <!-- /wp:paragraph -->
                         </div>
                         <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top","justifyContent":"left"}} -->
                    <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--20)">
                         <!-- wp:image {"id":52,"width":"24px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#fff","#ffffff"]}}} -->
                         <figure class="wp-block-image size-full is-resized"><img
                                   src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/phone.png"
                                   alt="" class="wp-image-52" style="width:24px" /></figure>
                         <!-- /wp:image -->

                         <!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
                         <div class="wp-block-group">
                              <!-- wp:paragraph {"align":"center","className":"has-light-text-color has-text-color has-link-color","style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
                              <p class="has-text-align-center has-light-text-color has-text-color has-link-color has-white-color"
                                   style="font-style:normal;font-weight:400">Tālr. nr.:</p>
                              <!-- /wp:paragraph -->

                              <!-- wp:paragraph {"align":"center","className":"has-light-text-color has-text-color has-link-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|button-hover-text-color"}}}},"textColor":"button-hover-text-color"} -->
                              <p
                                   class="has-text-align-center has-light-text-color has-text-color has-link-color has-button-hover-text-color-color">
                                   +371 223 322</p>
                              <!-- /wp:paragraph -->
                         </div>
                         <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
               </div>
               <!-- /wp:column -->

               <!-- wp:column {"verticalAlignment":"top"} -->
               <div class="wp-block-column is-vertically-aligned-top">
                    <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"18px"},"spacing":{"padding":{"bottom":"var:preset|spacing|10"}}},"textColor":"white"} -->
                    <p class="has-text-align-center has-white-color has-text-color has-link-color"
                         style="padding-bottom:var(--wp--preset--spacing--10);font-size:18px;font-style:normal;font-weight:600">
                         Par Mums</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10","margin":{"top":"var:preset|spacing|20","bottom":"0"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
                    <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:0">
                         <!-- wp:navigation {"ref":335,"textColor":"light-text","overlayMenu":"never","hasIcon":false,"style":{"spacing":{"blockGap":"10px"},"typography":{"fontStyle":"normal","fontWeight":"400"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} /-->
                    </div>
                    <!-- /wp:group -->
               </div>
               <!-- /wp:column -->

               <!-- wp:column {"verticalAlignment":"top","width":""} -->
               <div class="wp-block-column is-vertically-aligned-top">
                    <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"18px"},"spacing":{"padding":{"bottom":"var:preset|spacing|10"}}},"textColor":"white"} -->
                    <p class="has-text-align-center has-white-color has-text-color has-link-color"
                         style="padding-bottom:var(--wp--preset--spacing--10);font-size:18px;font-style:normal;font-weight:600">
                         Useful Informations</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"var:preset|spacing|20","bottom":"0"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:0">
                         <!-- wp:paragraph {"className":"footer-mail has-light-text-color has-text-color has-link-color","textColor":"light-text-color"} -->
                         <p
                              class="footer-mail has-light-text-color has-text-color has-link-color has-light-text-color-color has-text-color">
                              It is a long established fact that a reader will be distracted by the readable content of
                              a page when looking at its layout. </p>
                         <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
               </div>
               <!-- /wp:column -->

               <!-- wp:column {"verticalAlignment":"top"} -->
               <div class="wp-block-column is-vertically-aligned-top"><!-- wp:group {"layout":{"type":"default"}} -->
                    <div class="wp-block-group">
                         <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"18px"},"spacing":{"padding":{"bottom":"var:preset|spacing|10"}}},"textColor":"white"} -->
                         <p class="has-text-align-center has-white-color has-text-color has-link-color"
                              style="padding-bottom:var(--wp--preset--spacing--10);font-size:18px;font-style:normal;font-weight:600">
                              Quick Links</p>
                         <!-- /wp:paragraph -->

                         <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
                         <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--20)">
                              <!-- wp:navigation {"ref":335,"textColor":"light-text","overlayMenu":"never","style":{"spacing":{"blockGap":"10px"},"typography":{"fontStyle":"normal","fontWeight":"400"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} /-->

                              <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10","margin":{"top":"var:preset|spacing|30"}}},"layout":{"type":"constrained","justifyContent":"right"}} -->
                              <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30)">
                                   <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
                                   <p class="has-text-align-center has-white-color has-text-color has-link-color">
                                        <strong>Follow Us</strong>:
                                   </p>
                                   <!-- /wp:paragraph -->

                                   <!-- wp:group {"layout":{"type":"constrained"}} -->
                                   <div class="wp-block-group">
                                        <!-- wp:social-links {"iconColor":"white","iconColorValue":"#fff","iconBackgroundColor":"secondary","iconBackgroundColorValue":"#ffe9b3","size":"has-small-icon-size","style":{"spacing":{"blockGap":{"left":"8px"},"margin":{"top":"var:preset|spacing|10"}}},"layout":{"type":"flex","justifyContent":"center","flexWrap":"nowrap"}} -->
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
                         <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
               </div>
               <!-- /wp:column -->
          </div>
          <!-- /wp:columns -->
     </div>
     <!-- /wp:group -->

     <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"margin":{"top":"var:preset|spacing|30","bottom":"0"},"blockGap":"0px"},"dimensions":{"minHeight":"0px"}},"layout":{"type":"default"}} -->
     <div class="wp-block-group"
          style="min-height:0px;margin-top:var(--wp--preset--spacing--30);margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
          <!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|contrast","width":"1px"}},"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0","right":"0"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
          <div class="wp-block-group"
               style="border-top-color:var(--wp--preset--color--contrast);border-top-width:1px;padding-top:0px;padding-right:0;padding-bottom:0px;padding-left:0">
               <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"sml-medium"} -->
               <p class="has-white-color has-text-color has-link-color has-sml-medium-font-size">
                    Developed By 📌<a href="http://google.com" target="_blank" rel="noreferrer noopener">PinDesign</a>
               </p>
               <!-- /wp:paragraph -->
          </div>
          <!-- /wp:group -->
     </div>
     <!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"mc-sigma-scrool-top"} -->
<p class="mc-sigma-scrool-top"></p>
<!-- /wp:paragraph -->