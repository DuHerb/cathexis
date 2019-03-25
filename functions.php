<?php

// Scripts and Stylesheets
function startwordpress_scripts() {
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');

    wp_enqueue_script('modernizr-3.6.0', get_template_directory_uri() . '/js/vendor/modernizr-3.6.0.min.js', array('jquery'), true);
    wp_enqueue_script('plugins', get_template_directory_uri() . '/js/plugins.js', array('jquery'), true);
    wp_enqueue_script('btt', get_template_directory_uri() . '/js/btt.js', array('jquery'), true);
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery'), true);
}
add_action('wp_enqueue_scripts', 'startwordpress_scripts');

// Google Fonts
function startwordpress_goggle_fonts() {
    wp_register_style('Overpass Mono', "https://fonts.googleapis.com/css?family=Overpass+Mono");
    wp_register_style('Didact', "https://fonts.googleapis.com/css?family=Didact+Gothic");
    wp_register_style('Muli', 'https://fonts.googleapis.com/css?family=Muli');
    wp_register_style('Quattrocento', 'https://fonts.googleapis.com/css?family=Quattrocento');
    wp_register_style('EB Garamond', 'https://fonts.googleapis.com/css?family=EB+Garamond');
    wp_enqueue_style('EB Garamond');
    wp_enqueue_style('Quattrocento');
    wp_enqueue_style('Muli');
    wp_enqueue_style('Didact');
    wp_enqueue_style('Overpass Mono');
}
add_action('wp_print_styles', 'startwordpress_goggle_fonts');

// Custom Settings

// Custom Setting Menu Page
function custom_settings_page() { ?>
    <div class="wrap">
        <h1>Custom Settings</h1>
        <form method="post" action="options.php">
            <?php
                settings_fields('section');
                do_settings_sections('theme-options');
                submit_button();
                ?>
        </form>
    </div>
 <?php }

// Init Custom Menu
function custom_settings_add_menu() {
    add_menu_page('Custom Settings', 'Custom settings', 'manage_options','custom-settings', 'Custom_settings_page', null, 99);
}
add_action('admin_menu', 'custom_settings_add_menu');

// Init Banner Header and Text Fields
 function setting_banner_text() { ?>
    <textarea name="banner" id="banner" rows="5" cols="30"><?php echo get_option('banner'); ?></textarea>
    <?php
 }

function setting_banner_header() { ?>
    <input type="text" name="banner-header" id="banner-header" value="<?php echo get_option('banner-header'); ?>" />
    <?php
}

function custom_settings_page_setup() {
    add_settings_section('section', 'All Settings', null, 'theme-options');
    add_settings_field('banner-header', 'Banner Header', 'setting_banner_header', 'theme-options', 'section');
    add_settings_field('banner', 'Banner Text', 'setting_banner_text', 'theme-options', 'section');

    register_setting('section', 'banner-header');
    register_setting('section', 'banner');
}
add_action('admin_init', 'custom_settings_page_setup');

// Fix the More Tag jump issue
function remove_more_jump_link($link) {
	$offset = strpos($link, '#more-');
	if ($offset) {
		$end = strpos($link, '"',$offset);
	}
	if ($end) {
		$link = substr_replace($link, '', $offset, $end-$offset);
	}
	return $link;
}
add_filter('the_content_more_link', 'remove_more_jump_link');

//change post order of archive.php or category.php

add_action('pre_get_posts', 'archive_sort_order');
    function archive_sort_order($query){
        if(is_archive()):
            $query->set('order', 'ASC');
             $query->set('orderby', 'title');
        endif;
    }