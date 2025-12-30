<?php
declare(strict_types=1);

function leadmagnetSetup(): void
{
    add_theme_support("title-tag");
    add_theme_support("post-thumbnails");
    add_theme_support("editor-styles");
    add_editor_style("assets/css/editor.css");
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

    // Optional: front-end custom CSS (if you prefer splitting)
    // wp_enqueue_style('leadmagnet-front', get_theme_file_uri('assets/css/front.css'), [], $themeVersion);
}
add_action("wp_enqueue_scripts", "leadmagnetEnqueueAssets");

