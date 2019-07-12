<?php
// [add customizer] Starts here
function appConfig($wp_customize)
{
   // Section for customizing [starts here]
   $wp_customize->add_section('app', [
      'title' => __('Business Details'),
      'priority' => 40,
   ]);
   $wp_customize->add_setting('app.email', [
      'default' => 'info@website.com',
      'transparent' => 'refresh',
   ]);
   $wp_customize->add_control(new WP_Customize_Control(
      $wp_customize,
      'biz_email_ctrl', [
         'label' => __('Business Email'),
         'section' => 'app',
         'settings' => 'app.email',
      ]
   ));
   // end of item
   $wp_customize->add_setting('app.phone', [
      'default' => '+91 0987654321',
      'transparent' => 'refresh',
   ]);
   $wp_customize->add_control(new WP_Customize_Control(
      $wp_customize,
      'biz_phone_ctrl', [
         'label' => __('Business Phone'),
         'section' => 'app',
         'settings' => 'app.phone',
      ]
   ));
   // end of item
   $wp_customize->add_setting('app.address', [
      'transparent' => 'refresh',
   ]);
   $wp_customize->add_control(new WP_Customize_Control(
      $wp_customize,
      'biz_address_ctrl', [
         'label' => __('Business Address'),
         'type' => 'textarea',
         'section' => 'app',
         'settings' => 'app.address',
      ]
   ));
   // Section for customizing [ends here]
}
add_action('customize_register', 'appConfig');

