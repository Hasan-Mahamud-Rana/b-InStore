<?php
add_action( 'init', 'create_custom_contact_post_type' );
add_action( 'init', 'create_contact_taxonomies', 0 );
function create_contact_taxonomies() {
    register_taxonomy(
        'contact_person_catagory',
        'contact',
        array(
            'labels' => array(
                'name' => 'Contact person job title',
                'add_new_item' => 'Add New contact person job title',
                'new_item_name' => "New contact person job title"
            ),
            'show_ui' => true,
            'show_tagcloud' => false,
            'hierarchical' => true,
            'show_admin_column' => true,
          'rewrite' => array( 'hierarchical' => true, 'with_front' => false ),
        )
    );
}
add_filter( 'post_class', 'custom_taxonomy_post_class', 10, 3 );
    if( !function_exists( 'custom_taxonomy_post_class' ) ) {
        function custom_taxonomy_post_class( $classes, $class, $ID ) {
            $taxonomy = 'contact_person_catagory';
            $terms = get_the_terms( (int) $ID, $taxonomy );
            if( !empty( $terms ) ) {
                foreach( (array) $terms as $order => $term ) {
                    if( !in_array( $term->slug, $classes ) ) {
                        $classes[] = $term->slug;
                    }
                }
            }
            return $classes;
        }
    }
/**
 * Register a contact post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function create_custom_contact_post_type() {

/* Register our stylesheet. */
 $labels = array(
  'name'               => _x( 'Contacts', 'post type general name', 'your-plugin-textdomain' ),
  'singular_name'      => _x( 'contact', 'post type singular name', 'your-plugin-textdomain' ),
  'menu_name'          => _x( 'Contacts', 'admin menu', 'your-plugin-textdomain' ),
  'name_admin_bar'     => _x( 'contact', 'add new on admin bar', 'your-plugin-textdomain' ),
  'add_new'            => _x( 'Add New', 'contact', 'your-plugin-textdomain' ),
  'add_new_item'       => __( 'Add New contact', 'your-plugin-textdomain' ),
  'new_item'           => __( 'New contact', 'your-plugin-textdomain' ),
  'edit_item'          => __( 'Edit contact', 'your-plugin-textdomain' ),
  'view_item'          => __( 'View contact', 'your-plugin-textdomain' ),
  'all_items'          => __( 'All contacts', 'your-plugin-textdomain' ),
  'search_items'       => __( 'Search contacts', 'your-plugin-textdomain' ),
  'parent_item_colon'  => __( 'Parent contacts:', 'your-plugin-textdomain' ),
  'not_found'          => __( 'No contacts found.', 'your-plugin-textdomain' ),
  'not_found_in_trash' => __( 'No contacts found in Trash.', 'your-plugin-textdomain' )
 );

 $args = array(
  'labels'             => $labels,
  'public'             => true,
  'publicly_queryable' => true,
  'show_ui'            => true,
  'show_in_menu'       => true,
  'query_var'          => true,
  'rewrite'            => array( 'slug' => 'contact' ),
  'capability_type'    => 'post',
  'has_archive'        => true,
  'hierarchical'       => false,
  'menu_icon'          => 'dashicons-book',
  'menu_position'      => null,
  'taxonomy'           => 'contact_person_catagory',
  'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'post-formats' )


 );

 register_post_type( 'contact', $args );
}