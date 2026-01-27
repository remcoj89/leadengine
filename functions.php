<?php
declare(strict_types=1);

/**
 * Theme Setup
 */
function leadmagnet_setup(): void
{
    add_theme_support("title-tag");
    add_theme_support("post-thumbnails");
    add_theme_support("editor-styles");
    add_editor_style("assets/css/editor.css");
}
add_action("after_setup_theme", "leadmagnet_setup");

/**
 * Register Block Styles & Categories
 */
function leadmagnet_register_block_features(): void
{
    // Register Pattern Categories
    if ( function_exists( 'register_block_pattern_category' ) ) {
        register_block_pattern_category(
            'section',
            array( 'label' => __( 'Secties', 'leadmagnet' ) )
        );
        register_block_pattern_category(
            'cards',
            array( 'label' => __( 'Cards', 'leadmagnet' ) )
        );
    }

    // Register Custom Block Styles
    register_block_style(
        'core/list',
        array(
            'name'         => 'checkmark',
            'label'        => __('Checkmark List', 'leadmagnet'), // Gecorrigeerd naar leadmagnet
            'style_handle' => 'leadmagnet-block-styles',
        )
    );
}
add_action('init', 'leadmagnet_register_block_features');

/**
 * Enqueue Assets
 */
function leadmagnet_enqueue_assets(): void
{
    $themeVersion = wp_get_theme()->get("Version");

    wp_enqueue_style(
        "leadmagnet-style",
        get_stylesheet_uri(),
        [],
        $themeVersion,
    );

    wp_enqueue_style(
        "leadmagnet-block-styles",
        get_theme_file_uri("assets/css/block-styles.css"),
        ["leadmagnet-style"],
        $themeVersion,
    );
}
add_action("wp_enqueue_scripts", "leadmagnet_enqueue_assets");

/**
 * Enqueue Editor Assets
 */
function leadmagnet_enqueue_editor_assets(): void
{
    $themeVersion = wp_get_theme()->get("Version");

    wp_enqueue_style(
        "leadmagnet-style",
        get_stylesheet_uri(),
        [],
        $themeVersion,
    );

    wp_enqueue_style(
        "leadmagnet-block-styles",
        get_theme_file_uri("assets/css/block-styles.css"),
        ["leadmagnet-style"],
        $themeVersion,
    );
}
add_action("enqueue_block_editor_assets", "leadmagnet_enqueue_editor_assets");

/**
 * Add inline font-face CSS
 */
function leadmagnet_add_font_faces(): void
{
    $themeUri = get_template_directory_uri();
    $fontFaces = "
    @font-face {
      font-family: 'Merriweather';
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: url('{$themeUri}/assets/fonts/Merriweather24pt-Regular.woff2') format('woff2');
    }
    @font-face {
      font-family: 'Merriweather';
      font-style: normal;
      font-weight: 700;
      font-display: swap;
      src: url('{$themeUri}/assets/fonts/Merriweather24pt-Bold.woff2') format('woff2');
    }
    @font-face {
      font-family: 'Lato';
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: url('{$themeUri}/assets/fonts/Lato-Regular.woff2') format('woff2');
    }
    @font-face {
      font-family: 'Lato';
      font-style: normal;
      font-weight: 700;
      font-display: swap;
      src: url('{$themeUri}/assets/fonts/Lato-Bold.woff2') format('woff2');
    }
    ";

    // Voeg toe aan frontend
    wp_add_inline_style('leadmagnet-style', $fontFaces);

    // Zorg dat het ook in de editor verschijnt
    if (is_admin()) {
        wp_add_inline_style('wp-edit-blocks', $fontFaces);
    }
}
add_action("wp_enqueue_scripts", "leadmagnet_add_font_faces", 20);
add_action("enqueue_block_editor_assets", "leadmagnet_add_font_faces");
