<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <header>
        <div class="main-header">
            <div class="logo">
                <?php the_custom_logo();  ?>
            </div>
             <div class="right">
            <div class="menu">
                <?php
                 wp_nav_menu( $args = array(
                    'menu'              => "header", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
                    'menu_class'        => "", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
                    
                ) );?>
                 
          

                
                <!-- <img src="/images/logo-mit-2020.png" alt="first-logo" > -->
            </div>
            <div class="logo-image">
            <img class="header1-images" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-catolica-2020.png" alt="dsfdf">
            <img class="header1-images" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-nova-2020.png" alt="dsfdf">
            <img class="header1-images" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-mit-2020.png" alt="dsfdf">
            
            </div>
             </div>
             <div class="header2">
             <?php
                 wp_nav_menu( $args = array(
                    'menu'              => "header2", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
                    'menu_class'        => "", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
                    
                ) );?>
                </div>
        </div>
    </header>



