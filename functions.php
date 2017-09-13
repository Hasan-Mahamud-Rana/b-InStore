<?php
/*

This place is much cleaner. Put your theme specific codes here,
anything else you may want to use plugins to keep things tidy.

*/

/*
1. lib/clean.php
  - head cleanup
	- post and images related cleaning
*/
require_once('lib/clean.php'); // do all the cleaning and enqueue here

/*
2. lib/enqueue-style.php
    - enqueue Foundation and Reverie CSS
*/
require_once('lib/enqueue-style.php');

/*
3. lib/foundation.php
	- add pagination
*/
require_once('lib/foundation.php'); // load Foundation specific functions like top-bar
/*
4. lib/nav.php
	- custom walker for top-bar and related
*/
require_once('lib/nav.php'); // filter default wordpress menu classes and clean wp_nav_menu markup
/*
5. lib/presstrends.php
    - add PressTrends, tracks how many people are using Reverie
*/
//require_once('lib/presstrends.php'); // load PressTrends to track the usage of Reverie across the web, comment this line if you don't want to be tracked

/**********************
Add theme supports
 **********************/
if( ! function_exists( 'reverie_theme_support' ) ) {
    function reverie_theme_support() {
        // Add language supports.
        load_theme_textdomain('reverie', get_template_directory() . '/lang');

        // Add post thumbnail supports. http://codex.wordpress.org/Post_Thumbnails
        add_theme_support('post-thumbnails');
        // set_post_thumbnail_size(150, 150, false);
        add_image_size('fd-lrg', 1024, 99999);
        add_image_size('small', 200, 99999);
        add_image_size('large', 200, 99999);
        add_image_size('cases', 400, 9999);
        add_image_size('slider-img', 1280, 9999);

        // rss thingy
        add_theme_support('automatic-feed-links');

        // Add post formats support. http://codex.wordpress.org/Post_Formats
        add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));

        // Add menu support. http://codex.wordpress.org/Function_Reference/register_nav_menus
        add_theme_support('menus');
        register_nav_menus(array(
            'primary' => __('Primary Navigation', 'reverie'),
            'additional' => __('Additional Navigation', 'reverie'),
            'utility' => __('Utility Navigation', 'reverie')
        ));

        // Add custom background support
        add_theme_support( 'custom-background',
            array(
                'default-image' => '',  // background image default
                'default-color' => '', // background color default (dont add the #)
                'wp-head-callback' => '_custom_background_cb',
                'admin-head-callback' => '',
                'admin-preview-callback' => ''
            )
        );
    }
}
add_action('after_setup_theme', 'reverie_theme_support'); /* end Reverie theme support */

/* Custom function for controlling the lenght of the excerpt */
function get_excerpt(){
$excerpt = get_the_excerpt();
$excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
$excerpt = strip_shortcodes($excerpt);
$excerpt = substr($excerpt, 0, 250);
$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
$excerpt = $excerpt.'...';
return $excerpt;
}

/* Custom function for controlling the lenght of the micro excerpt (only used on search queries) */
function get_microexcerpt(){
$excerpt = get_the_excerpt();
$excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
$excerpt = strip_shortcodes($excerpt);
$excerpt = substr($excerpt, 0, 140);
$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
$excerpt = $excerpt.'...';
return $excerpt;
}

/*Custom shortcode blue "Læs mere" button*/
function read_more( $atts, $content = null ) {
    return '<span class="button tiny radius">' . $content . '</span>';
}
add_shortcode( 'read-more', 'read_more' );

/*Custom shortcode "Fakta boks"*/
function fakta_boksfunc( $atts, $content = null ) {
    extract( shortcode_atts( array(
        'headline' => 'Faktaboks',
    ), $atts ) );

    return '<div class="small-12 medium-12 large-4 columns panel insert"><h4>' . $headline . '</h4><p>' . $content . '</p></div>';
}
add_shortcode( 'fakta-boks', 'fakta_boksfunc' );

/*Custom shortcode "direktion img" aligning img and text horizontal */
function boss_time( $atts, $content = null ) {
    return '<div class="small-12 medium-2 large-2 columns direktion">' . $content . '</div>';
}
add_shortcode( 'align', 'boss_time' );


/*Adding filter to create searchbox within foundation topbar*/
add_filter('wp_nav_menu_items','add_search_box_to_menu', 10, 2);
/* the custom function used to put searchbox within foundation topbar */
function add_search_box_to_menu( $items, $args ) {

    if( $args->theme_location == 'primary' ) {

        return $items."<li class='menu-header-search'>".get_search_form()."</li>";

    }

    return $items;

}


// create widget areas: sidebar, footer
$sidebars = array('Sidebar');
foreach ($sidebars as $sidebar) {
    register_sidebar(array('name'=> $sidebar,
    	'id' => 'Sidebar',
        'before_widget' => '<article id="%1$s" class="panel widget %2$s">',
        'after_widget' => '</article>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
}
$sidebars = array('Footer');
foreach ($sidebars as $sidebar) {
    register_sidebar(array('name'=> $sidebar,
    	'id' => 'Footer',
        'before_widget' => '<div class="small-12 medium-6 large-4 columns"><article id="%1$s" class="widget %2$s">',
        'after_widget' => '</article></div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
}

// return entry meta information for posts, used by multiple loops, you can override this function by defining them first in your child theme's functions.php file
if ( ! function_exists( 'reverie_entry_meta' ) ) {
    function reverie_entry_meta() {
        /*echo '<span class="byline author">'. __('Written by', 'reverie') .' <a href="'. get_author_posts_url(get_the_author_meta('ID')) .'" rel="author" class="fn">'. get_the_author() .', </a></span>';*/
        echo '<span class="radius secondary label updated" datetime="'. get_the_time('c') .'" pubdate>'. get_the_time('j F, Y') .'</span>';
    }
};

require_once(get_template_directory().'/lib/custom-post-contact.php');
function add_shortcode_imageradio() {
wpcf7_add_shortcode( 'imageradio', 'imageradio_handler', true );
}
function imageradio_handler( $tag ){
$tag = new WPCF7_FormTag( $tag );

$atts = array(
'type' => 'radio',
'name' => $tag->name,
'list' => $tag->name . '-options' );

$input = sprintf(
'<input %s />',
wpcf7_format_atts( $atts ) );
$datalist = '';
$datalist .= '<div class="imgradio">';
foreach ( $tag->values as $val ) {
list($radiovalue,$imagepath) = explode("!", $val);

$datalist .= sprintf( '<label><input type="radio" name="%s" value="%s" class="hideradio" /><img src="%s"></label>', $tag->name, $radiovalue, $imagepath );

}
$datalist .= '</div>';

return $datalist;
}




?>
