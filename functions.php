<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}
?>
<?php
function wpb_widgets_init() {
 
 register_sidebar( array(
     'name'          => 'Custom Header Widget Area',
     'id'            => 'custom-header-widget',
     'before_widget' => '<div class="chw-widget">',
     'after_widget'  => '</div>',
     'before_title'  => '<h2 class="chw-title">',
     'after_title'   => '</h2>',
 ) );

}
add_action( 'widgets_init', 'wpb_widgets_init' );
?>