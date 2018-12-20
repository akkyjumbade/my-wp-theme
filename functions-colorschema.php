<?php
// [add customizer] Starts here
function customColorSchema_customize_register($wp_customize)
{
   // Section for customizing colors and theme var [starts here]
   $wp_customize->add_section('color_scheme_section', [
      'title' => __('Color Scheme'),
      'priority' => 30,
   ]);
   // Fields for customizing [starts here]
   $wp_customize->add_setting('var_primary_font', [
      'default' => 'Segoe UI',
      'transparent' => 'refresh',
   ]);
   $wp_customize->add_control(new WP_Customize_Control(
      $wp_customize,
      'primary_font_ctrl', [
         'label' => __('Primary Font'),
         'description' => __('Will use font from Google fonts.'),
         'section' => 'color_scheme_section',
         'settings' => 'var_primary_font',
      ]
   ));
   // field
   $wp_customize->add_setting('var_primary_color', [
      'default' => '#1e73be',
      'transparent' => 'refresh',
   ]);
   $wp_customize->add_control(new WP_Customize_Color_Control(
      $wp_customize,
      'primary_color_ctrl', [
         'label' => __('Link Color'),
         'section' => 'color_scheme_section',
         'settings' => 'var_primary_color',
      ]
   ));
   // field item
   $wp_customize->add_setting('lwp_btn_color', [
      'default' => 'blue',
      'transparent' => 'refresh',
   ]);
   $wp_customize->add_control(new WP_Customize_Color_Control(
      $wp_customize,
      'lwp_btn_color_control', [
         'label' => __('Button Color'),
         'section' => 'color_scheme_section',
         'settings' => 'lwp_btn_color',
      ]
   ));
   // Fields for customizing [ends here]
   // Section for customizing colors and theme var [ends here]
}
add_action('customize_register', 'customColorSchema_customize_register');
// [add customizer] Ends here
