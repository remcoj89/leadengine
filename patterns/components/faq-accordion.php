<?php
/**
 * Title: FAQ Accordion
 * Slug: leadmagnet/faq-accordion
 * Categories: accordion
 * Inserter: true
 */
?>


 <!-- wp:accordion {"style":{"border":{"radius":{"topLeft":"16px","topRight":"16px","bottomLeft":"16px","bottomRight":"16px"}}}} -->
  <div role="group" class="wp-block-accordion" style="border-top-left-radius:16px;border-top-right-radius:16px;border-bottom-left-radius:16px;border-bottom-right-radius:16px">

    <!-- wp:accordion-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"border":{"radius":{"topLeft":"16px","topRight":"16px","bottomLeft":"16px","bottomRight":"16px"}}},"backgroundColor":"jet-black","textColor":"white"} -->
    <div class="wp-block-accordion-item has-white-color has-jet-black-background-color has-text-color has-background has-link-color" style="border-top-left-radius:16px;border-top-right-radius:16px;border-bottom-left-radius:16px;border-bottom-right-radius:16px">

      <!-- wp:accordion-heading {"style":{"spacing":{"padding":{"top":"var:preset|spacing|1","bottom":"var:preset|spacing|1","left":"var:preset|spacing|2","right":"var:preset|spacing|2"}},"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontStyle":"bold","fontWeight":"600"}},"textColor":"white","fontFamily":"merriweather"} -->
      <h3 class="wp-block-accordion-heading has-white-color has-text-color has-link-color has-merriweather-font-family" style="font-style:bold;font-weight:600"><button class="wp-block-accordion-heading__toggle" style="padding-top:var(--wp--preset--spacing--1);padding-right:var(--wp--preset--spacing--2);padding-bottom:var(--wp--preset--spacing--1);padding-left:var(--wp--preset--spacing--2)"><span class="wp-block-accordion-heading__toggle-title">Werk je ook 's avonds?</span><span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span></button></h3>
      <!-- /wp:accordion-heading -->

      <!-- wp:accordion-panel {"style":{"spacing":{"padding":{"top":"var:preset|spacing|2","bottom":"var:preset|spacing|2","left":"var:preset|spacing|2","right":"var:preset|spacing|2"}}}} -->
      <div role="region" class="wp-block-accordion-panel" style="padding-top:var(--wp--preset--spacing--2);padding-right:var(--wp--preset--spacing--2);padding-bottom:var(--wp--preset--spacing--2);padding-left:var(--wp--preset--spacing--2)">
        <!-- wp:paragraph -->
        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit quisque, metus ad posuere integer proin eleifend neque varius, nullam venenatis gravida elementum nam mauris pretium. Per tellus tristique maecenas at orci risus massa magna ultrices himenaeos id pulvinar mollis, primis vehicula dictum arcu rhoncus nascetur sed aenean aliquet parturient integer tempor. Neque porta pharetra vehicula blandit ultricies mattis aliquam felis eleifend, ligula lectus sociosqu mollis purus litora scelerisque platea, class sed id torquent odio dis mauris mus.<br></p>
        <!-- /wp:paragraph -->
      </div>
    <!-- /wp:accordion-panel -->
    </div>
    <!-- /wp:accordion-item -->
  </div>
  <!-- /wp:accordion -->
