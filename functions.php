<?php

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-thumbnails', array( 'post' ) );          // Posts only
add_theme_support( 'post-thumbnails', array( 'page' ) );          // Pages only
add_theme_support( 'post-thumbnails', array( 'post', 'movie' ) ); // Posts and Movies

add_post_type_support('forum', array('thumbnail')); // Forum Featured Image

add_theme_support( 'custom-logo' );
add_theme_support( 'custom-logo', array(
	'height'      => 100,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );
 
 
if( function_exists('acf_add_options_page') ) {
 	
 	// add parent
	$parent = acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title' 	=> 'Theme Settings',
		'redirect' 		=> false
	));	
} 

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header' ),
    )
  );
}

add_action( 'init', 'register_my_menus' );


/* Enqueue Register Styles & Scripts */
function my_add_scripts() {
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'scripts.js', get_template_directory_uri() . '/assets/js/scripts.js', array(), '1.0.0', true );
    wp_enqueue_script('flexslider', get_stylesheet_directory_uri().'/assets/js/jquery.flexslider.js', array('jquery'));
    wp_enqueue_script('flexslider-init', get_stylesheet_directory_uri().'/assets/js/flexslider-init.js', array('jquery', 'flexslider'));
}

add_action( 'wp_enqueue_scripts', 'my_add_scripts' );

function my_add_styles() {
    wp_enqueue_style('flexslider', get_stylesheet_directory_uri().'/assets/css/flexslider.css'); 
}

add_action('wp_enqueue_scripts', 'my_add_styles');



/* Ad customise section */
function cynthia_customise_footer( $wp_customize ){

    $wp_customize->add_section(
        'contact_section',
        [   'title' => 'Contact Section',
            'descrtiption' => 'Contact Details',
            'priority' => 12
        ]
    );

    $wp_customize->add_setting(
        'contact_section_copyright',
        [
            'default' => 'Copyright'
        ]
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'contact_section_copyright',  
            [
                'label' => 'Copyright',
                'section' => 'contact_copyright',
                'settings' => 'contact_section_copyright'
            ]
        )
    );

    
    $wp_customize->add_setting(
        'contact_section_text',
        [
            'default' => 'Text'
        ]
    );


    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'contact_section_text',
            [
                'label' => 'Info',
                'section' => 'contact_section',
                'settings' => 'contact_section_text',
                'type' => 'textarea'
            ]
        )
    );


}


/** Register our sidebars and widgetized areas. */
function extremis_widgets_init() {

	register_sidebar( array(
		'name'          => 'Social Sidebar',
		'id'            => 'social_sidebar',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="social-feed-title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'extremis_widgets_init' );



add_action( 'init', 'wpb_register_testimonial' );

function wpb_register_testimonial() {

    $labels = array( 
        'name' => _x( 'Testimonials', 'testimonial' ),
        'singular_name' => _x( 'testimonial', 'testimonial' ),
        'add_new' => _x( 'Add New', 'testimonial' ),
        'add_new_item' => _x( 'Add New testimonial', 'testimonial' ),
        'edit_item' => _x( 'Edit testimonial', 'testimonial' ),
        'new_item' => _x( 'New testimonial', 'testimonial' ),
        'view_item' => _x( 'View testimonial', 'testimonial' ),
        'search_items' => _x( 'Search Testimonials', 'testimonial' ),
        'not_found' => _x( 'No testimonials found', 'testimonial' ),
        'not_found_in_trash' => _x( 'No testimonials found in Trash', 'testimonial' ),
        'parent_item_colon' => _x( 'Parent testimonial:', 'testimonial' ),
        'menu_name' => _x( 'Testimonials', 'testimonial' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        
        'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'custom-fields', 'revisions' ),
        
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'testimonial', $args );
}


$key = "testimonial";
$meta_boxes = array(
"person-name" => array(
"name" => "person-name",
"title" => "Person's Name",
"description" => "Enter the name of the person who gave you the testimonial."),
"position" => array(
"name" => "position",
"title" => "Position in Company",
"description" => "Enter their position in their specific company."),
"company" => array(
"name" => "company",
"title" => "Company Name",
"description" => "Enter the client Company Name"),
"link" => array(
"name" => "link",
"title" => "Client Link",
"description" => "Enter the link to client's site, or you can enter the link to your portfolio page where you have the client displayed.")
);
 
function wpb_create_meta_box() {
global $key;
 
if( function_exists( 'add_meta_box' ) ) {
add_meta_box( 'new-meta-boxes', ucfirst( $key ) . ' Information', 'display_meta_box', 'testimonial', 'normal', 'high' );
}
}
 
function display_meta_box() {
global $post, $meta_boxes, $key;
?>
 
<div class="form-wrap">
 
<?php
wp_nonce_field( plugin_basename( __FILE__ ), $key . '_wpnonce', false, true );
 
foreach($meta_boxes as $meta_box) {
$data = get_post_meta($post->ID, $key, true);
?>
 
<div class="form-field form-required">
<label for="<?php echo $meta_box[ 'name' ]; ?>"><?php echo $meta_box[ 'title' ]; ?></label>
<input type="text" name="<?php echo $meta_box[ 'name' ]; ?>" value="<?php echo (isset($data[ $meta_box[ 'name' ] ]) ? htmlspecialchars( $data[ $meta_box[ 'name' ] ] ) : ''); ?>" />
<p><?php echo $meta_box[ 'description' ]; ?></p>
</div>
 
<?php } ?>
 
</div>
<?php
}
 
function wpb_save_meta_box( $post_id ) {
global $post, $meta_boxes, $key;
 
foreach( $meta_boxes as $meta_box ) {
if (isset($_POST[ $meta_box[ 'name' ] ])) {
$data[ $meta_box[ 'name' ] ] = $_POST[ $meta_box[ 'name' ] ];
}
}
 
if (!isset($_POST[ $key . '_wpnonce' ])) 
return $post_id;

if ( !wp_verify_nonce( $_POST[ $key . '_wpnonce' ], plugin_basename(__FILE__) ) )
return $post_id;
 
if ( !current_user_can( 'edit_post', $post_id ))
return $post_id;
 
update_post_meta( $post_id, $key, $data );
}
 
add_action( 'admin_menu', 'wpb_create_meta_box' );
add_action( 'save_post', 'wpb_save_meta_box' );




/* FOOTER CUSTOM */

function theme_customise_footer( $wp_customize ){

    $wp_customize->add_section(
        'contact_section',
        [   'title' => 'Contact Section',
            'descrtiption' => 'Details for contact section',
            'priority' => 12
        ]
    );

    $wp_customize->add_setting(
        'contact_section_email',
        [
            'default' => 'name@email'
        ]
    );


    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'contact_section_email',
            [
                'label' => 'Email',
                'section' => 'contact_section',
                'settings' => 'contact_section_email'
            ]
        )
    );

    $wp_customize->add_setting(
        'contact_section_phone',
        [
            'default' => '+44 (0) 12345 67890'
        ]
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'contact_section_phone',
            [
                'label' => 'Telephone Number',
                'section' => 'contact_section',
                'settings' => 'contact_section_phone'
            ]
        )
    );

    $wp_customize->add_setting(
        'contact_section_address',
        [
            'default' => 'Road, Town, County. POST CODE'
        ]
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'contact_section_address',
            [
                'label' => 'Address',
                'section' => 'contact_section',
                'settings' => 'contact_section_address'
            ]
        )
    );

    $wp_customize->add_setting(
        'contact_section_name',
        [
            'default' => 'Company Name'
        ]
    );


    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'contact_section_name',
            [
                'label' => 'Compnay Name',
                'section' => 'contact_section',
                'settings' => 'contact_section_name',
                'type' => 'textarea'
            ]
        )
    );


}

add_action( 'customize_register', 'theme_customise_footer' );

/* FOOTER CUSTOM */

