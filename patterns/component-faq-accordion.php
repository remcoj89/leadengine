<?php
/**
 * Title: Component FAQ Accordion
 * Slug: leadmagnet/component-faq-accordion
 * Description: A FAQ accordion component for displaying questions and answers.
 * Categories: component
 * Inserter: yes
 */
?>

<!-- wp:generateblocks/element {"uniqueId":"cac31ed0","tagName":"div","styles":{"marginTop":"4rem"},"css":".gb-element-cac31ed0{margin-top:4rem}","metadata":{"name":"Faq wrapper"}} -->
<div class="gb-element-cac31ed0">
  <!-- wp:accordion {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"padding":{"top":"var:preset|spacing|1","bottom":"var:preset|spacing|1","left":"var:preset|spacing|2","right":"var:preset|spacing|2"}},"border":{"radius":{"topLeft":"16px","topRight":"16px","bottomLeft":"16px","bottomRight":"16px"}}},"backgroundColor":"jet-black","textColor":"white"} -->
  <div role="group" class="wp-block-accordion has-white-color has-jet-black-background-color has-text-color has-background has-link-color" style="border-top-left-radius:16px;border-top-right-radius:16px;border-bottom-left-radius:16px;border-bottom-right-radius:16px;padding-top:var(--wp--preset--spacing--1);padding-right:var(--wp--preset--spacing--2);padding-bottom:var(--wp--preset--spacing--1);padding-left:var(--wp--preset--spacing--2)">
    <!-- wp:accordion-item -->
    <div class="wp-block-accordion-item">
      <!-- wp:accordion-heading -->
      <h3 class="wp-block-accordion-heading">
      <button class="wp-block-accordion-heading__toggle">
        <span class="wp-block-accordion-heading__toggle-title">Veel gestelde vraag</span><span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span>
      </button></h3>
      <!-- /wp:accordion-heading -->

      <!-- wp:accordion-panel -->
      <div role="region" class="wp-block-accordion-panel">
        <!-- wp:paragraph -->
        <p>Lorem ipsum dolor sit amet consectetur, adipiscing elit conubia fermentum cubilia sem, dis lobortis fames suspendisse. Morbi ultrices rhoncus himenaeos turpis iaculis suscipit aptent, montes odio pellentesque cursus semper fermentum tempus, sociis consequat at phasellus fusce sociosqu.</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:accordion-panel -->
    </div>
    <!-- /wp:accordion-item -->
  </div>
  <!-- /wp:accordion -->
</div>
<!-- /wp:generateblocks/element -->
