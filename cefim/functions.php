<?php

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Custom size image

add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() {
    add_image_size( 'actuality-card', 405.33, 240, true );
    add_image_size( 'formation', 624, 240, true );
    add_image_size( 'student', 218, 218, true );
    add_image_size( 'actuality-single', 840, 540, true );
    add_image_size( 'student-single', 404, 404, true );
}

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

function cefim_register_assets(){

    wp_enqueue_style('main', get_template_directory_uri() . '/src/css/style.css');

    wp_enqueue_style('blocks', get_template_directory_uri() . '/src/css/blocks/blocks.css');

    wp_enqueue_script('main', get_template_directory_uri() . '/src/js/nav.js','', '', true);
}
add_action('wp_enqueue_scripts', 'cefim_register_assets');

register_nav_menus( array(
                        'main' => 'Menu Principal',
                        'footer' => 'Bas de page',
                        'social' => 'menu social'
                    ) );

function cefim_register_register_post_types(){

// CPT Formation
    $labels = array(
        'name' => 'formations',
        'all_items' => 'Toutes les formations',  // affiché dans le sous menu
        'singular_name' => 'Formation',
        'add_new_item' => 'Ajouter uner formation',
        'edit_item' => 'Modifier la formation',
        'menu_name' => 'Formation'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor','thumbnail' ),
        'menu_position' => 5,
        'menu_icon' => 'dashicons-book-alt',
    );

    register_post_type( 'formations', $args );

    // CPT Etudiants
    $labels = array(
        'name' => 'etudiants',
        'all_items' => 'Tous les étudiants',  // affiché dans le sous menu
        'singular_name' => 'Étudiant',
        'add_new_item' => 'Ajouter un étudiant',
        'edit_item' => 'Modifier l\'étudiant',
        'menu_name' => 'etudiants'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor','thumbnail', 'custom-fields' ),
        'menu_position' => 5,
        'menu_icon' => 'dashicons-welcome-learn-more',
    );

    register_post_type( 'etudiants', $args );
}
add_action('init', 'cefim_register_register_post_types');



// Pages d'options
if( function_exists( 'acf_add_options_page' ) ) {

    acf_add_options_page( array(
                              'page_title' 	=> 'Informations générales du CEFIM',
                              'menu_title'	=> 'Informations',
                              'menu_slug' 	=> 'theme-general-settings',
                              'capability'	=> 'edit_posts',
                              'icon_url' => 'dashicons-info-outline',
                              'redirect'		=> false,
                              'position'    	=> 2
                          ) );

    acf_add_options_page( array(
                              'page_title' 	=> 'Contenus des pages archives',
                              'menu_title'	=> 'Contenu',
                              'menu_slug' 	=> 'theme-general-setting',
                              'capability'	=> 'edit_posts',
                              'icon_url' => 'dashicons-editor-paste-text',
                              'redirect'		=> false,
                              'position'    	=> 2
                          ) );

}

add_filter('wpcf7_autop_or_not', '__return_false');

// Remove menu item admin bar

/**
 * Removes some menus by page.
 */
function wpdocs_remove_menus(){

    //remove_menu_page( 'index.php' );                  //Dashboard
    //remove_menu_page( 'jetpack' );                    //Jetpack*
    //remove_menu_page( 'edit.php' );                   //Posts
    //remove_menu_page( 'upload.php' );                 //Media
    //remove_menu_page( 'edit.php?post_type=page' );    //Pages
    remove_menu_page( 'edit-comments.php' );          //Comments
    //remove_menu_page( 'themes.php' );                 //Appearance
    //remove_menu_page( 'plugins.php' );                //Plugins
    //remove_menu_page( 'users.php' );                  //Users
    //remove_menu_page( 'tools.php' );                  //Tools
    //remove_menu_page( 'options-general.php' );        //Settings

}
add_action( 'admin_menu', 'wpdocs_remove_menus' );

// Création de block

add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a block article.
        acf_register_block_type(array(
                                    'name'              => 'block card article',
                                    'title'             => __('block_article'),
                                    'description'       => __('A custom block for custom post type.'),
                                    'render_template'   => 'parts/blocks/CPT/block_article.php',
                                    'category'          => 'formatting',
                                    'icon'              => 'admin-comments',
                                    'keywords'          => array( 'testimonial', 'quote' ),
                                    'enqueue_assets'    => function() {
                                        wp_enqueue_style( 'blocks-actuality', get_template_directory_uri() . '/src/css/blocks/blocks.css' );
                                    }
                                ));

        // register a block article.
        acf_register_block_type(array(
                                    'name'              => 'block card avatar',
                                    'title'             => __('block_avatar'),
                                    'description'       => __('A custom block for custom post type.'),
                                    'render_template'   => 'parts/blocks/CPT/block_avatar.php',
                                    'category'          => 'formatting',
                                    'icon'              => 'admin-comments',
                                    'keywords'          => array( 'testimonial', 'quote' ),
                                    'enqueue_assets'    => function() {
                                        wp_enqueue_style( 'blocks-avatar', get_template_directory_uri() . '/src/css/blocks/blocks.css' );
                                    }
                                ));

        // register a block card.
        acf_register_block_type(array(
                                    'name'              => 'block card',
                                    'title'             => __('block_card'),
                                    'description'       => __('A custom block for custom post type.'),
                                    'render_template'   => 'parts/blocks/CPT/block_card.php',
                                    'category'          => 'formatting',
                                    'icon'              => 'admin-comments',
                                    'keywords'          => array( 'testimonial', 'quote' ),
                                    'enqueue_assets'    => function() {
                                        wp_enqueue_style( 'blocks-card', get_template_directory_uri() . '/src/css/blocks/blocks.css' );
                                    }
                                ));
    }
}

function capitaine_override_query( $wp_query ) {
    if( $wp_query->is_main_query() && ! is_admin() && is_post_type_archive( 'formations' ) ):
        $wp_query->set( 'posts_per_page', 6 );
        $wp_query->set( 'order_by', "DESC" );
    elseif ($wp_query->is_main_query() && ! is_admin() && is_post_type_archive( 'etudiants' ) ):
        $wp_query->set( 'posts_per_page', 16 );
    endif;
}
add_action( 'pre_get_posts', 'capitaine_override_query' );


function acf_load_post_types($field)
{
    $args = array(
        'public'   => true,
    );

    $output = 'names'; // 'names' or 'objects' (default: 'names')
    $operator = 'and'; // 'and' or 'or' (default: 'and')

    $post_types = get_post_types( $args, $output, $operator );

    foreach ( $post_types as $post_type ) {
        $field['choices'][$post_type] = $post_type;
    }

    // return the field
    return $field;
}
add_filter('acf/load_field/name=check', 'acf_load_post_types');


function mytheme_setup_theme_supported_features()
{
    // Format large
    add_theme_support('align-wide');
}
add_action('after_setup_theme', 'mytheme_setup_theme_supported_features');
/**
 * Filter the except to X words.
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


// Disable message error login
function no_wordpress_errors(){
    return 'L\'accès n\'est pas autorisé';
}
add_filter( 'login_errors', 'no_wordpress_errors' );


