<?php 

require_once(ABSPATH.'wp-content/themes/udanoe/types/animal.php');

function blog_favicon() {

echo'<link rel="icon" type="image/png" href="'.get_bloginfo('template_directory').'/img/favicon.png" />
<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="'.get_bloginfo('template_directory').'/img/favicon.ico" /><![endif]-->';

}

add_action('wp_head', 'blog_favicon');


add_action('wp_enqueue_scripts', 'gkp_insert_css_in_head');
function gkp_insert_css_in_head() {
    // On ajoute le css general du theme
    wp_register_style('bootstrap.min', get_bloginfo('template_directory').'/css/bootstrap.min.css',false);
    wp_enqueue_style( 'bootstrap.min' );

    wp_register_style('magnific-popup', get_bloginfo('template_directory').'/vendor/magnific-popup/magnific-popup.css',false);
    wp_enqueue_style( 'magnific-popup' );

    wp_register_style('creative.css', get_bloginfo('template_directory').'/css/creative.css',false);
    wp_enqueue_style( 'creative.css' );

    wp_register_style('ihover.css', get_bloginfo('template_directory').'/css/ihover.css',false);
    wp_enqueue_style( 'ihover.css' );

    wp_register_style('style', get_bloginfo( 'stylesheet_url' ),'',false,'screen');
    wp_enqueue_style( 'style' );
 
} 
// enqueue javascript
 
function theme_js(){

wp_enqueue_script( 'jquery' );
 
wp_enqueue_script( 'bootstrap',
get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js',
array() );
 
wp_enqueue_script( 'jquery.easing.min.js',
'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js',
array() );
  
wp_enqueue_script( 'scrollreveal.min.js',
get_template_directory_uri() . '/vendor/scrollreveal/scrollreveal.min.js"',
array() );

wp_enqueue_script( 'hide.js',
get_template_directory_uri() . '/js/hide.js',
array() );

wp_enqueue_script( 'jquery.magnific-popup.min.js',
get_template_directory_uri() . '/vendor/magnific-popup/jquery.magnific-popup.min.js',
array() );

wp_enqueue_script( 'creative.min.js',
get_template_directory_uri() . '/js/creative.min.js',
array() );

//News Script
/*
wp_enqueue_script( 'analytics.js',
get_template_directory_uri() . '/js/analytics.js',
array() );*/
 
}
 
add_action( 'wp_footer', 'theme_js' );


add_theme_support( 'post-thumbnails' ); 

function get_the_content_with_formatting ($more_link_text = '(more...)', $stripteaser = 0, $more_file = '') {
    $content = get_the_content($more_link_text, $stripteaser, $more_file);
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]&gt;', $content);
    return $content;
}

if ( function_exists('register_sidebar') ) {
register_sidebar(array(
        'name' => 'Sidebar',
  'before_widget' => '<div class="widget_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
      ));
register_sidebar(array(
        'name' => 'Adresse Bas',
  'before_widget' => '<div class="col-lg-4 text-center nav-footer" id="%1$s">',
        'after_widget' => '</div><!-- Fin bloc Adresse -->',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
      ));   
register_sidebar(array(
        'name' => 'Réseaux Sociaux Bas',
  'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
      ));  
register_sidebar(array(
        'name' => 'Petite Phrase',
  'before_widget' => '<div class="col-lg-4" id="%1$s">',
        'after_widget' => '</div><!-- Fin petite phrase -->',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
      ));       
register_sidebar(array(
        'name' => 'Text contact',
  'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
      ));              
  }

register_nav_menus( array(
        'Primary' => 'Menu Haut',
        'Bottom' => 'Menu bas'
    ) );


function wpdocs_filter_wp_title( $title, $sep ) { //Fonction d'affichage de la balise title
    global $paged, $page;
 
    if ( is_feed() )
        return $title;
 
    // Add the site name.
    $title .= get_bloginfo( 'name' );
 
    // Add the site description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        $title = "$title $sep $site_description";
 
    // Add a page number if necessary.
    if ( $paged >= 2 || $page >= 2 )
        $title = "$title $sep " . sprintf( __( 'Page %s', 'twentytwelve' ), max( $paged, $page ) );
 
    return $title;
}
add_filter( 'wp_title', 'wpdocs_filter_wp_title', 10, 2 );



function scroll_initialise() {
    if (is_page(23) )    { // permet de charger les scripts jquery ci-dessous UNIQUEMENT sur la HOME page
        wp_enqueue_script('scrollReveal',  get_template_directory_uri() . '/js/scrollReveal.js');
        wp_enqueue_script('scrollReveal-1', get_template_directory_uri() . '/js/scrollReveal-1.js');
    }
    else{
        if(is_page(6)){
         wp_enqueue_script('scrollReveal',  get_template_directory_uri() . '/js/scrollReveal.js');
         wp_enqueue_script('scrollReveal-2', get_template_directory_uri() . '/js/scrollReveal-2.js');
        }
    }
}

add_action('wp_footer', 'scroll_initialise'); 


add_action( 'customize_register', 'bargeo_customize_register' );

function bargeo_customize_register($wp_customize) {
    
    // on ajoute une nouvelle section
    $wp_customize->add_section('bargeo_twitter', array(
        'title' => 'Twitter',
        'description' => 'Lien vers le compte Twitter',
        'priority' => 130
    ));
    
    // on ajoute une nouvelle option
    $wp_customize->add_setting( 'twitter' , array(
        'default'     => '@machin',
        'transport'   => 'refresh',
    ));
    
    // on ajoute l'option dans la section
    $wp_customize->add_control( 'twitter', array(
        'label'        => __( 'Pseudo du compte Twitter', 'bargeo' ),
        'section'    => 'bargeo_twitter',
        'settings'   => 'twitter',
    ));
}

function wpc_show_admin_bar() {
    return false;
}
add_filter('show_admin_bar' , 'wpc_show_admin_bar');


function gn_tinymce_filtre($arr){
    $arr['block_formats'] = 'Heading 2=h2;Heading 3=h3;';
    return $arr;
  }
add_filter('tiny_mce_before_init', 'gn_tinymce_filtre');


/*Redirection page 404*/
function page404_redirection()
{
 global $mapage;
 if(is_404())
 {
 wp_redirect(home_url("index.php/404-2"));
 exit;
 }
}
 
add_action('wp', 'page404_redirection',1);


?>
