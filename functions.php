<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    $parenthandle = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . './style.css', 
        array(),  // if the parent theme code has a dependency, copy it to here
        $theme->parent()->get('Version')
    );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version') // this only works if you have Version in the style header
    );
    wp_enqueue_style( 'stylesheet', get_stylesheet_directory_uri() .'/assets/style.css');
    wp_enqueue_style( 'stylesheet', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    
}

 
    function my_custom_sidebar(){
        register_sidebar(
            array(
                'name'=>_('custom-sidebar'),
                'id'=>'sidebar',
                'description'=>_('my-first-custom-sidebar'),
                'before_widget'=>'<div class="widget-content">',
                'after_widget'=>"</div>",
                'before_title'=>'<h3 class="widget-title">',
                'after_title'=>'</h3>'
            )
            );

            register_sidebar(
                array(
                    'name'=>_('footer-sidebar'),
                    'id'=>'foosidebar',
                    'description'=>_('my-first-custom-sidebar'),
                    'before_widget'=>'<div class="widget-content">',
                    'after_widget'=>"</div>",
                    'before_title'=>'<h3 class="widget-title">',
                    'after_title'=>'</h3>'
                )
                );
            register_sidebar(
                array(
                    'name'=>_('About us'),
                    'id'=>'aboutus',
                    'description'=>_('my-first-custom-sidebar'),
                    'before_widget'=>'<div class="widget-content">',
                    'after_widget'=>"</div>",
                    'before_title'=>'<h3 class="widget-title">',
                    'after_title'=>'</h3>'
                )
                );
            register_sidebar(
                array(
                    'name'=>_('Contact us'),
                    'id'=>'contactus',
                    'description'=>_('my-first-custom-sidebar'),
                    'before_widget'=>'<div class="widget-content">',
                    'after_widget'=>"</div>",
                    'before_title'=>'<h3 class="widget-title">',
                    'after_title'=>'</h3>'
                )
                );
            register_sidebar(
                array(
                    'name'=>_('Join Our Community'),
                    'id'=>'join',
                    'description'=>_('my-first-custom-sidebar'),
                    'before_widget'=>'<div class="widget-content">',
                    'after_widget'=>"</div>",
                    'before_title'=>'<h3 class="widget-title">',
                    'after_title'=>'</h3>'
                )
                );

    }
add_action('widgit_inits',my_custom_sidebar());




// create a custom Post type



 