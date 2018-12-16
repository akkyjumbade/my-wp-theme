<?php
// add resources for theme
function themeResources()
{
   wp_enqueue_style('style', get_stylesheet_uri());
   wp_enqueue_script('VueJs', get_template_directory_uri().'/src/vendors/vue.min.js', null, '2', true);
   wp_enqueue_script('TweenMax', get_template_directory_uri().'/src/vendors/TweenMax.min.js', null, '2', true);
}
// invoke to action
add_action('wp_enqueue_scripts', 'themeResources');

// register menus
register_nav_menus([
   'primary' => __('Primary Menu'),
   'footer' => __('Footer Menu'),
]);

// [add customizer] Starts here
function customColorSchema_customize_register($wp_customize)
{
   $wp_customize->add_setting('lwp_link_color', [
      'default' => 'blue',
      'transparent' => 'refresh',
   ]);
   $wp_customize->add_setting('lwp_btn_color', [
      'default' => 'blue',
      'transparent' => 'refresh',
   ]);
   $wp_customize->add_section('lwp_standard_colors', [
      'title' => __('Standard Colors', 'customColorSchema'),
      'priority' => 30,
   ]);

   $wp_customize->add_control(new WP_Customize_Color_Control(
      $wp_customize,
      'lwp_link_color_control', [
         'label' => __('Link Color', 'customColorSchema'),
         'section' => 'lwp_standard_colors',
         'settings' => 'lwp_link_color',
      ]
   ));
   $wp_customize->add_control(new WP_Customize_Color_Control(
      $wp_customize,
      'lwp_btn_color_control', [
         'label' => __('Button Color', 'customColorSchema'),
         'section' => 'lwp_standard_colors',
         'settings' => 'lwp_btn_color',
      ]
   ));
}
add_action('customize_register', 'customColorSchema_customize_register');
// [add customizer] Ends here

function customColorSchema_customize_css()
{ ?>
<style>
   a:link,
   a:visited {
      color: <?php echo get_theme_mod('lwp_link_color') ?>
   }
</style>   
<?php
}

add_action('wp_head', 'customColorSchema_customize_css');
