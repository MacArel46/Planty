<?php
/**
** activation theme
**/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

//rajout de menu header jg
add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu(){
    register_nav_menu( 'header-menu', 'Header menu' );
}
 
//condition pour afficher le lien vers l'administration quand connecté
if ( is_user_logged_in() ) {

    add_filter( 'wp_nav_menu_items', 'nav_menu_add_admin', 10, 2 );
}


function nav_menu_add_admin( $items, $args ) {
	if ( 'header-menu' == $args->theme_location ) {
		$admin = '<li><a href= "/wp-admin/index.php">Admin</a> </li>';
	

		$items .= $admin;
	}
	return $items;
}

//widget mentions pour footer jg
add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {
    register_sidebar(array(
        'name'=>'Footer-Legal',
        'id'  => 'footer-legal',
        'class' => 'legal',
        'description' => __( 'Widget mentions légales Footer' ),
        'before_widget' => '<div >', /* id se repete si je mets 2 widgets dans la zone*/
        'after_widget' => '</div>',
      
    ));
}
