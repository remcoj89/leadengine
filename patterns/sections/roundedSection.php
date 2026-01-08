<!--?php
/**
 * Title: Rounded Section
 * Slug: leadmagnet/rounded-section
 * Categories: Banners
 * Inserter: true
 */
?-->

<!-- wp:group {"align":"full","className":"rounded-section","backgroundColor":"primary-900"} -->
<div
  class="wp-block-group alignfull rounded-section has-background"
>
  <!-- TOP CURVE -->
  <div class="rounded-section__shape-top" aria-hidden="true">
    <svg viewBox="0 0 40 2" preserveAspectRatio="none">
      <path
        d="M 0 2 C 6.6667 0 20 0 20 0 C 20 0 33.3333 0 40 2"
        fill="var(--wp--preset--color--jet-black)"></path>
    </svg>
  </div>

  <!-- CONTENT -->
  <!-- wp:group {"layout":{"type":"constrained"}} -->
  <div class="wp-block-group rounded-section__content">
    <!-- hier komt je slot-content -->
     Hello this is a section
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->
