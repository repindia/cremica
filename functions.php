<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"), false);
	   wp_enqueue_script('jquery');
	}
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }

add_theme_support( 'post-thumbnails' );

/*
|------------------------------------------------------------------------
|	REGISTER STYLE FOR ADMIN AREA
|------------------------------------------------------------------------
*/

function admin_files_init() {
    if ( is_admin() ) {
        $file_dir=get_bloginfo('template_directory');
        wp_enqueue_style("admin_style", $file_dir."/admin/css/admin.css", false, "1.0", "all");
        wp_enqueue_script("admin_style", $file_dir."/admin/js/admin.js", false, "1.0", "all");

        // For Uploder in Theme Options
        if(function_exists('wp_enqueue_media')){
				wp_enqueue_media();
			} else {
				wp_enqueue_style('thickbox');
				wp_enqueue_script('media-upload');
				wp_enqueue_script('thickbox');
		}
    }
}

add_action( 'admin_print_styles', 'admin_files_init');

/*
|------------------------------------------------------------------------
|	MENUS
|------------------------------------------------------------------------
*/

// HEADER MENU

function register_header_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
}

add_action( 'init', 'register_header_menu' );

// FOOTER MENU

function register_footer_menu() {
    register_nav_menu('footer-menu',__( 'Footer Menu' ));
}

add_action( 'init', 'register_footer_menu' );

// ABOUT MENU

function register_about_menu() {
    register_nav_menu('about-menu',__( 'About Page Menu' ));
}

add_action( 'init', 'register_about_menu' );


/*-----------------------------------------------------------------------------------------------
    CUSTOM POST TYPES
------------------------------------------------------------------------------------------------*/



// ------------------------- 1. CUSTOM ARTICLES POST TYPE ----------------------//


function custom_articles_post_type() {

    $labels = array(

        'name'               => _x( 'Articles', 'post type general name' ),
        'singular_name'      => _x( 'Articles', 'post type singular name' ),
        'add_new'            => _x( 'Add New Article', 'article' ),
        'add_new_item'       => __( 'Add New Article' ),
        'edit_item'          => __( 'Edit Article' ),
        'new_item'           => __( 'New Article' ),
        'all_items'          => __( 'All Article' ),
        'view_item'          => __( 'View Article' ),
        'search_items'       => __( 'Search Articles' ),
        'not_found'          => __( 'No Articles found' ),
        'not_found_in_trash' => __( 'No Articles found in the Trash' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Articles'

    );

    $args = array(
        'labels'        => $labels,
        'description'   => 'Holds our Articles and Article specific data',
        'public'        => true,
        'menu_position' => 5,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
        'has_archive'   => false,
    );

    register_post_type( 'article', $args );

    flush_rewrite_rules();

}

add_action( 'init', 'custom_articles_post_type' );


// ------------------------- 2. CUSTOM HOMEPAGE SLIDER POST TYPE ----------------------//


function custom_homepage_slider_post_type() {

    $labels = array(

        'name'               => _x( 'Homepage Slider', 'post type general name' ),
        'singular_name'      => _x( 'Homepage Slider', 'post type singular name' ),
        'add_new'            => _x( 'Add New', 'article' ),
        'add_new_item'       => __( 'Add New Homepage Slider' ),
        'edit_item'          => __( 'Edit Homepage Slider' ),
        'new_item'           => __( 'New Homepage Slider' ),
        'all_items'          => __( 'All Homepage Slider' ),
        'view_item'          => __( 'View Homepage Sliders' ),
        'search_items'       => __( 'Search homepages' ),
        'not_found'          => __( 'No homepages found' ),
        'not_found_in_trash' => __( 'No homepages found in the Trash' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Homepage Slider'

    );

    $args = array(
        'labels'        => $labels,
        'description'   => 'Holds our Homepage and Homepage Slider specific data',
        'public'        => true,
        'menu_position' => 5,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
        'has_archive'   => false,
    );

    register_post_type( 'homepage_slider', $args );

    flush_rewrite_rules();

}

add_action( 'init', 'custom_homepage_slider_post_type' );


// ------------------------- 3. CUSTOM JOURNEY POST TYPE ----------------------//


function custom_journey_post_type() {

    $labels = array(

        'name'               => _x( 'Journey', 'post type general name' ),
        'singular_name'      => _x( 'Journey', 'post type singular name' ),
        'add_new'            => _x( 'Add New', 'article' ),
        'add_new_item'       => __( 'Add New Journey' ),
        'edit_item'          => __( 'Edit Journey' ),
        'new_item'           => __( 'New Journey' ),
        'all_items'          => __( 'All Journey' ),
        'view_item'          => __( 'View Journeys' ),
        'search_items'       => __( 'Search Journey' ),
        'not_found'          => __( 'No Journey found' ),
        'not_found_in_trash' => __( 'No Journey found in the Trash' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Journey'

    );

    $args = array(
        'labels'        => $labels,
        'description'   => 'Holds our Journey and Journey  specific data',
        'public'        => true,
        'menu_position' => 5,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
        'has_archive'   => false,
    );

    register_post_type( 'journey', $args );

    flush_rewrite_rules();

}

add_action( 'init', 'custom_journey_post_type' );

// ------------------------- 4. CUSTOM NEWS POST TYPE ----------------------//


function custom_news_post_type() {

    $labels = array(

        'name'               => _x( 'News', 'post type general name' ),
        'singular_name'      => _x( 'News', 'post type singular name' ),
        'add_new'            => _x( 'Add New', 'article' ),
        'add_new_item'       => __( 'Add New News' ),
        'edit_item'          => __( 'Edit News' ),
        'new_item'           => __( 'New News' ),
        'all_items'          => __( 'All News' ),
        'view_item'          => __( 'View News' ),
        'search_items'       => __( 'Search News' ),
        'not_found'          => __( 'No News found' ),
        'not_found_in_trash' => __( 'No News found in the Trash' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'News'

    );

    $args = array(
        'labels'        => $labels,
        'description'   => 'Holds our Journey and Journey  specific data',
        'public'        => true,
        'menu_position' => 5,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
        'has_archive'   => false,
    );

    register_post_type( 'news', $args );

    flush_rewrite_rules();

}

add_action( 'init', 'custom_news_post_type' );


// ------------------------- 4. CUSTOM EVENTS POST TYPE ----------------------//


function custom_events_post_type() {

    $labels = array(

        'name'               => _x( 'Events', 'post type general name' ),
        'singular_name'      => _x( 'News', 'post type singular name' ),
        'add_new'            => _x( 'Add New', 'article' ),
        'add_new_item'       => __( 'Add New Events' ),
        'edit_item'          => __( 'Edit Events' ),
        'new_item'           => __( 'New Events' ),
        'all_items'          => __( 'All Events' ),
        'view_item'          => __( 'View Events' ),
        'search_items'       => __( 'Search Events' ),
        'not_found'          => __( 'No Events found' ),
        'not_found_in_trash' => __( 'No Events found in the Trash' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Events'

    );

    $args = array(
        'labels'        => $labels,
        'description'   => 'Holds our Journey and Journey  specific data',
        'public'        => true,
        'menu_position' => 5,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
        'has_archive'   => false,
    );

    register_post_type( 'events', $args );

    flush_rewrite_rules();

}

add_action( 'init', 'custom_events_post_type' );


/*-----------------------------------------------------------------------------------------------
    META BOXES
------------------------------------------------------------------------------------------------*/

//---------------------- 1. META BOX FOR HOME PAGE SLIDER KNOW MORE LINK  -------------------------//

add_action( 'add_meta_boxes', 'homepage_slider_link' );

add_action( 'save_post', 'homepage_slider_link_save' );



function homepage_slider_link() {
    add_meta_box( 'homepage_slider_link_id', 'Know More Link', 'homepage_slider_link_render', 'homepage_slider', 'normal', 'high' );
}



function homepage_slider_link_render( $post) {
    $values = get_post_custom( $post->ID );
    $homepage_slider_link = isset( $values['homepage_slider_link'] ) ? esc_attr( $values['homepage_slider_link'][0] ) : "#";
    wp_nonce_field( 'customAwardsMetaLinkNounce', 'customAwardsMetaLinkNounce' );
    ?>
    <p>
        <input type="text" class="regular-text" name="homepage_slider_link" id="homepage_slider_link" value="<?php echo  $homepage_slider_link;?> " >
    </p>
    <p>This is the link which will take you to a page when you click on know more text</p>
<?php

}



function homepage_slider_link_save($post_id){
    // Bail if we're doing an auto save
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    // if our nonce isn't there, or we can't verify it, bail
    if( !isset( $_POST['customAwardsMetaLinkNounce'] ) || !wp_verify_nonce( $_POST['customAwardsMetaLinkNounce'], 'customAwardsMetaLinkNounce' ) ) return;
    // if our current user can't edit this post, bail
    if( !current_user_can( 'edit_post' ) ) return;
    // Make sure your data is set before trying to save it
    if( isset( $_POST['homepage_slider_link'] ) )
        update_post_meta( $post_id, 'homepage_slider_link', wp_kses( $_POST['homepage_slider_link'] ,wp_kses_allowed_html( 'post' ) ) );

}

//---------------------- 2. META BOX FOR HOMEPAGE JOURNEY TEXT -------------------------//

add_action( 'add_meta_boxes', 'homepage_journey_text' );

add_action( 'save_post', 'homepage_journey_save' );



function homepage_journey_text() {
    add_meta_box( 'homepage_journey_id', 'Journey Text', 'homepage_journey_render', 'journey', 'normal', 'high' );
}



function homepage_journey_render( $post) {
    $values = get_post_custom( $post->ID );
    $homepage_journey = isset( $values['homepage_journey'] ) ? esc_attr( $values['homepage_journey'][0] ) : "#";
    wp_nonce_field( 'customAwardsMetaLinkNounce', 'customAwardsMetaLinkNounce' );
    ?>
    <p>
        <input type="text" class="regular-text" name="homepage_journey" id="homepage_journey" value="<?php echo  $homepage_journey;?> " >
    </p>
    <p>This is the link which will come on homepage journey sections.</p>
<?php

}



function homepage_journey_save($post_id){
    // Bail if we're doing an auto save
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    // if our nonce isn't there, or we can't verify it, bail
    if( !isset( $_POST['customAwardsMetaLinkNounce'] ) || !wp_verify_nonce( $_POST['customAwardsMetaLinkNounce'], 'customAwardsMetaLinkNounce' ) ) return;
    // if our current user can't edit this post, bail
    if( !current_user_can( 'edit_post' ) ) return;
    // Make sure your data is set before trying to save it
    if( isset( $_POST['homepage_journey'] ) )
        update_post_meta( $post_id, 'homepage_journey', wp_kses( $_POST['homepage_journey'] ,wp_kses_allowed_html( 'post' ) ) );

}




/*
|------------------------------------------------------------------------
|    THEME OPTIONS
|------------------------------------------------------------------------
*/

function theme_options_menu() {

	add_menu_page(
	    'General Theme Settings',    // The title to be displayed in the browser window for this page.
	    'Theme Options',            // The text to be displayed for this menu item
	    'administrator',            // Which type of users can see this menu item
	    'theme_options',            // The unique ID - that is, the slug - for this menu item
	    'theme_options_display'     // The name of the function to call when rendering this menu's page
	);

    add_submenu_page( 
        'theme_options', 
        'Contact Details', 
        'Contact Details', 
        'manage_options', 
        'contact_details', 
        'contact_details_render' 
    );

} // end theme_options_menu

add_action('admin_menu', 'theme_options_menu');

function theme_options_display() { ?>
    <!-- Create a header in the default WordPress 'wrap' container -->
    <div class="wrap">
        <!-- Make a call to the WordPress function for rendering errors when settings are saved. -->
        <?php settings_errors(); ?>
        <!-- Create the form that will be used to render our options -->
        <form method="post" action="options.php">

        <?php
            settings_fields( 'general_settings_section' );
            do_settings_sections( 'theme_options' );

            submit_button(); ?>
        </form>
    </div><!-- /.wrap -->
<?php

} // end theme_options_display

// CONTACT DETAILS RENDER FUNCTION
function contact_details_render(){ ?>

<div class="wrap">
        <!-- Make a call to the WordPress function for rendering errors when settings are saved. -->
        <?php settings_errors(); ?>
        <!-- Create the form that will be used to render our options -->
        <form method="post" action="options.php">

        <?php
            settings_fields( 'contact_details_settings_section' );
            do_settings_sections( 'contact_details' );

            submit_button(); ?>
        </form>
    </div><!-- /.wrap -->

    <?php
}

/* ------------------------------------------------------------------------ *
 * Setting Registration - THEME OPTIONS
 * ------------------------------------------------------------------------ */

function initialize_theme_options() {

    // Registering General section

    add_settings_section(
        'general_settings_section',                 // ID used to identify this section and with which to register options
        'Theme Options',                            // Title to be displayed on the administration page
        'general_options_callback',                 // Callback used to render the description of the section
        'theme_options'                             // Page on which to add this section of options
    );

    // ----------------- LOGO IMAGE -----------------------//

    // Setting Fields - General Page
    add_settings_field(
        'logo_image',
        'Logo',
        'logo_image_callback',
        'theme_options',
        'general_settings_section',
        array(
            'Image for Logo in Header '
        )
    );

    // Registe Setting - General Options

    register_setting(
        'general_settings_section',
        'logo_image'
    );

     // ----------------- HOME PAGE SLIDER BACKGROUND IMAGE -----------------------//

    // Setting Fields - General Page
    add_settings_field(
        'homepage_slider_bg_img',
        'Homepage Slider BG',
        'homepage_slider_bg_img_callback',
        'theme_options',
        'general_settings_section',
        array(
            'Background Image for Homepage Slider'
        )
    );

    // Registe Setting - General Options

    register_setting(
        'general_settings_section',
        'homepage_slider_bg_img'
    );

    // ----------------- HOMEPAGE JOURNEY TITLE TEXT -----------------------//

    // Setting Fields - General Page
    add_settings_field(
        'homepage_journey_title',
        'Homepage Journey Title',
        'homepage_journey_title_callback',
        'theme_options',
        'general_settings_section',
        array(
            'Title for Jouney Section on Homepage'
        )
    );

    // Registe Setting - General Options

    register_setting(
        'general_settings_section',
        'homepage_journey_title'
    );


} // end initialize_theme_options


/* ------------------------------------------------------------------------ *
 * Setting Registration - CONTACT DETAILS
 * ------------------------------------------------------------------------ */

function initialize_contact_details_options() {
    
    // Registering General section

    add_settings_section(
        'contact_details_settings_section',                 // ID used to identify this section and with which to register options
        'Contact Details Options',                            // Title to be displayed on the administration page
        'contact_details_options_callback',                 // Callback used to render the description of the section
        'contact_details'                             // Page on which to add this section of options
    );

    // Setting Fields - Contact Title
    add_settings_field(
        'contact_title',
        'Contact Title',
        'contact_title_callback',
        'contact_details',
        'contact_details_settings_section',
        array(
            'Title for Contact Page'
        )
    );

    // Registe Setting - Contact Title

    register_setting(
        'contact_details_settings_section',
        'contact_title'
    );

    // Setting Fields - Contact Content
    add_settings_field(
        'contact_content',
        'Contact Content',
        'contact_content_callback',
        'contact_details',
        'contact_details_settings_section',
        array(
            'Title for Contact Page'
        )
    );

    // Registe Setting - Contact Title

    register_setting(
        'contact_details_settings_section',
        'contact_content'
    );


    // Setting Fields - Contact MAP
    add_settings_field(
        'contact_map',
        'Contact Map',
        'contact_map_callback',
        'contact_details',
        'contact_details_settings_section',
        array(
            'Iframe Code for Contact Page'
        )
    );

    // Registe Setting - Contact MAP

    register_setting(
        'contact_details_settings_section',
        'contact_map'
    );

    

} // end initialize_theme_options

add_action('admin_init', 'initialize_theme_options');

add_action('admin_init', 'initialize_contact_details_options');



/* ------------------------------------------------------------------------ *
 * Section Callbacks - Functions to render Secton Description
 * ------------------------------------------------------------------------ */

function general_options_callback() {
    echo '<p>set options value for the theme</p>';
}

function contact_details_options_callback() {
    echo '<p>Set Option values for Contact Details</p>';
}



/* ------------------------------------------------------------------------ *
 * Field Callbacks - Functions to render the Fields - THEME OPTIONS
 * ------------------------------------------------------------------------ */

// LOGO IMAGE
function logo_image_callback($args) {
    $html = '<img class="theme_options_logo" src="'. get_option('logo_image') . '">';
    $html .= '<input id="logo_image" class="facebook-url regular-text" type="hidden" name="logo_image" value="' . get_option('logo_image') . '" />';
    $html .= '<button class="upload_logo_button button button-primary">Upload</button>';
    $html .= '<p class="option-hint">' . $args[0] . '</p>';
    echo $html;
}

// HOMEPAGE SLIDER BG IMAGE
function homepage_slider_bg_img_callback($args) {
    $html = '<img class="theme_options_bg" src="'. get_option('homepage_slider_bg_img') . '">';
    $html .= '<input id="homepage_slider_bg_img" class="facebook-url regular-text" type="hidden" name="homepage_slider_bg_img" value="' . get_option('homepage_slider_bg_img') . '" />';
    $html .= '<button class="upload_bg_button button button-primary">Upload</button>';
    $html .= '<p class="option-hint">' . $args[0] . '</p>';
    echo $html;
}


//HOMEPAGE JOURNEY TITLE
function homepage_journey_title_callback($args) {
    $html = '<input type="text" class="regular-text" name="homepage_journey_title" value="'. get_option('homepage_journey_title') . '">';
    echo $html;
}

/* ------------------------------------------------------------------------ *
 * Field Callbacks - Functions to render the Fields - CONTACT DETAILS
 * ------------------------------------------------------------------------ */

//  CONTACT TITLE 
function contact_title_callback($args) {
    $html = '<input type="text" class="regular-text" name="contact_title" value="'. get_option('contact_title') . '">';
    echo $html;
}


//  CONTACT CONTENT 
function contact_content_callback($args) {
    $content =  get_option('contact_content');
    $editor_id = 'contact_content';

    echo wp_editor( $content, $editor_id );
}

//  CONTACT MAP 
function contact_map_callback($args) {
    $html = '<textarea name="contact_map" rows="10" cols="50" id="contact_map" class="large-text code">'. get_option('contact_map') . '</textarea>';
    echo $html;
}



