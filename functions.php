<?php
declare(strict_types=1);

function leadmagnetSetup(): void
{
    add_theme_support("title-tag");
    add_theme_support("post-thumbnails");
    add_theme_support("editor-styles");
    add_editor_style("assets/css/editor.css");
    
    // Register custom block styles
    register_block_style(
        'core/list',
        array(
            'name'         => 'checkmark',
            'label'        => __('Checkmark List', 'leadengine'),
            'style_handle' => 'leadmagnet-block-styles',
        )
    );
}
add_action("after_setup_theme", "leadmagnetSetup");

function leadmagnetEnqueueAssets(): void
{
    $themeVersion = wp_get_theme()->get("Version");

    wp_enqueue_style(
        "leadmagnet-style",
        get_stylesheet_uri(),
        [],
        $themeVersion,
    );

    // Block styles for custom block styles
    wp_enqueue_style(
        "leadmagnet-block-styles",
        get_theme_file_uri("assets/css/block-styles.css"),
        ["leadmagnet-style"],
        $themeVersion,
    );
}

/**
 * Add inline font-face CSS to ensure fonts load correctly
 */
function leadmagnetAddFontFaces(): void
{
    $themeUri = get_template_directory_uri();
    
    $fontFaces = "
    /* Merriweather Regular */
    @font-face {
      font-family: 'Merriweather';
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: url('{$themeUri}/assets/fonts/Merriweather24pt-Regular.woff2') format('woff2'),
           url('{$themeUri}/assets/fonts/Merriweather24pt-Regular.woff') format('woff');
    }
    
    /* Merriweather Bold */
    @font-face {
      font-family: 'Merriweather';
      font-style: normal;
      font-weight: 700;
      font-display: swap;
      src: url('{$themeUri}/assets/fonts/Merriweather24pt-Bold.woff2') format('woff2'),
           url('{$themeUri}/assets/fonts/Merriweather24pt-Bold.woff') format('woff');
    }
    
    /* Lato Regular */
    @font-face {
      font-family: 'Lato';
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: url('{$themeUri}/assets/fonts/Lato-Regular.woff2') format('woff2'),
           url('{$themeUri}/assets/fonts/Lato-Regular.woff') format('woff');
    }
    
    /* Lato Bold */
    @font-face {
      font-family: 'Lato';
      font-style: normal;
      font-weight: 700;
      font-display: swap;
      src: url('{$themeUri}/assets/fonts/Lato-Bold.woff2') format('woff2'),
           url('{$themeUri}/assets/fonts/Lato-Bold.woff') format('woff');
    }
    
    /* Lato Italic */
    @font-face {
      font-family: 'Lato';
      font-style: italic;
      font-weight: 400;
      font-display: swap;
      src: url('{$themeUri}/assets/fonts/Lato-Italic.woff2') format('woff2'),
           url('{$themeUri}/assets/fonts/Lato-Italic.woff') format('woff');
    }
    ";
    
    wp_add_inline_style('leadmagnet-style', $fontFaces);
}
add_action("wp_enqueue_scripts", "leadmagnetEnqueueAssets");
add_action("wp_enqueue_scripts", "leadmagnetAddFontFaces", 20);

