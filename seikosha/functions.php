<?php

/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package base-theme-1
 * @since 1.0.5
 */

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.3
 *
 * @return void
 */


function my_theme_enqueue_block_editor_assets() {
    wp_enqueue_style(
        'my-theme-editor-styles',
        get_template_directory_uri() . '/assets/css/style.css',
        array(),
        filemtime(get_template_directory() . '/assets/css/style.css')
    );
	
}
add_action('enqueue_block_editor_assets', 'my_theme_enqueue_block_editor_assets');

function my_theme_add_editor_styles() {
    add_theme_support('editor-styles');
    add_editor_style( get_template_directory_uri() . '/assets/css/basic.css');
    add_editor_style( get_template_directory_uri() . '/assets/css/border.css');
    add_editor_style( get_template_directory_uri() . '/assets/css/style.css');
    add_editor_style( get_template_directory_uri() . '/assets/css/footer.css');
    add_editor_style( get_template_directory_uri() . '/assets/css/editor/style.css');
    add_editor_style( get_template_directory_uri() . '/assets/css/font-awesome/css/all.css');

}
add_action('after_setup_theme', 'my_theme_add_editor_styles');

function base_theme_1_styles() {

	wp_enqueue_style(
		'base-theme-1-front-page',
		get_template_directory_uri() . '/assets/css/style-page.css'
	);

	wp_enqueue_style(
		'base-theme-1-basic',
		get_template_directory_uri() . '/assets/css/basic.css',
		[],
		wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_style(
		'base-theme-1-style',
		get_template_directory_uri() . '/assets/css/style.css',
		[],
		wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_style(
		'base-theme-1-product',
		get_template_directory_uri() . '/assets/css/product.css',
		[],
		wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_style(
		'base-theme-1-accordion',
		get_template_directory_uri() . '/assets/css/accordion.css',
		[],
		wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_style(
		'base-theme-1-border',
		get_template_directory_uri() . '/assets/css/border.css',
		[],
		wp_get_theme()->get( 'Version' )
	);


	wp_enqueue_style(
		'base-theme-1-footer',
		get_template_directory_uri() . '/assets/css/footer.css',
		[],
		wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_style(
		'base-theme-1-swiper',
		get_template_directory_uri() . '/assets/css/swiper.min.css',
		[],
		wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_style(
		'base-theme-1-swiper-bunder',
		get_template_directory_uri() . '/assets/css/swiper-bundle.min.css',
		[],
		wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_style(
		'base-theme-1-font-notosanjp',
		get_template_directory_uri() . '/assets/css/font/notosanjp.css',
		[],
		wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_style(
		'base-theme-1-font-fontawesome',
		get_template_directory_uri() . '/assets/css/font/fontawesome-all.css',
		[],
		wp_get_theme()->get( 'Version' )
	);
}

function theme_slug_enqueue_scripts() {
	wp_enqueue_script( 
		'theme-slug-jquery',
		get_parent_theme_file_uri( 'assets/js/jquery.min.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

	wp_enqueue_script( 
		'theme-slug-navi',
		get_parent_theme_file_uri( 'assets/js/navi.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

	wp_enqueue_script( 
		'theme-slug-script',
		get_parent_theme_file_uri( 'assets/js/script.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

	wp_enqueue_script( 
		'theme-slug-swiper',
		get_parent_theme_file_uri( 'assets/js/swiper.min.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

	wp_enqueue_script( 
		'theme-slug-swiper-bundle',
		get_parent_theme_file_uri( 'assets/js/swiper-bundle.min.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
}

function my_register_patterns() {
    if (function_exists('register_block_pattern')) {
        register_block_pattern(
            'my-theme/base-theme',
            array(
                'title'       => __('Slide Text', 'my-theme'),
                'description' => _x('A description of your pattern', 'Block pattern description', 'my-theme'),
                'content'     => file_get_contents(get_template_directory() . '/patterns/slide-text.php'),
            )
        );
		register_block_pattern(
            'my-theme/base-theme',
            array(
                'title'       => __('Menu Home', 'my-theme'),
                'description' => _x('A description of your pattern', 'Block pattern description', 'my-theme'),
                'content'     => file_get_contents(get_template_directory() . '/patterns/menu-home.php'),
            )
        );

		register_block_pattern(
            'my-theme/base-theme',
            array(
                'title'       => __('List Social', 'my-theme'),
                'description' => _x('A description of your pattern', 'Block pattern description', 'my-theme'),
                'content'     => file_get_contents(get_template_directory() . '/patterns/socials.php'),
            )
        );

		register_block_pattern(
            'my-theme/base-theme',
            array(
                'title'       => __('List Category', 'my-theme'),
                'description' => _x('A description of your pattern', 'Block pattern description', 'my-theme'),
                'content'     => file_get_contents(get_template_directory() . '/patterns/categories.php'),
            )
        );

		register_block_pattern(
            'my-theme/base-theme',
            array(
                'title'       => __('Footer', 'my-theme'),
                'description' => _x('A description of your pattern', 'Block pattern description', 'my-theme'),
                'content'     => file_get_contents(get_template_directory() . '/patterns/footer.php'),
            )
        );
    }
}
add_action('init', 'my_register_patterns');

add_action( 'wp_enqueue_scripts', 'base_theme_1_styles' );

add_action( 'wp_enqueue_scripts', 'theme_slug_enqueue_scripts' );

function unregister_all_patterns() {
    remove_theme_support('core-block-patterns');
}
add_action('after_setup_theme', 'unregister_all_patterns');

function mytheme_register_pattern_categories() {
	register_block_pattern_category(
        'front-page',
        array( 'label' => __( 'Front Page', 'my-theme' ) )
    );
}
add_action( 'init', 'mytheme_register_pattern_categories' );

function enqueue_font_awesome_editor() {
    // Enqueue Font Awesome for Gutenberg editor
    add_theme_support('editor-styles');
    add_editor_style(get_template_directory_uri() . '/assets/css/font-awesome-editor.css');
}

add_action('after_setup_theme', 'enqueue_font_awesome_editor');
