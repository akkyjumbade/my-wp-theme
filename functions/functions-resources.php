<?php
// add resources for theme
function themeResources()
{
   // CSS
   wp_enqueue_style('bootstrap', get_template_directory_uri().'/src/vendors/bootstrap.min.css', null, '4');
   wp_enqueue_style('font_awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', null, '4');
   wp_enqueue_style('style', get_stylesheet_uri());
   wp_enqueue_style('style_at_tablet', get_template_directory_uri().'/src/css/style@tablet.css');
   wp_enqueue_style('style_at_mobile', get_template_directory_uri().'/src/css/style@mobile.css');

   // JS in Footer
   wp_enqueue_script('TweenMax', get_template_directory_uri().'/src/vendors/TweenMax.min.js', null, '2', true);
   wp_enqueue_script('VueJs', get_template_directory_uri().'/src/vendors/vue.min.js', null, '2', true);
}
// invoke to action
add_action('wp_enqueue_scripts', 'themeResources');
