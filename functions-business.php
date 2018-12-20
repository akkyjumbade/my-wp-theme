<?php
// [add customizer] Starts here
function bizConfig($wp_customize)
{
   // Section for customizing [starts here]
   $wp_customize->add_section('biz_section', [
      'title' => __('Business Details'),
      'priority' => 40,
   ]);
   $wp_customize->add_setting('var_biz_email', [
      'default' => 'info@website.com',
      'transparent' => 'refresh',
   ]);
   $wp_customize->add_control(new WP_Customize_Control(
      $wp_customize,
      'biz_email_ctrl', [
         'label' => __('Business Email'),
         'section' => 'biz_section',
         'settings' => 'var_biz_email',
      ]
   ));
   // end of item
   $wp_customize->add_setting('var_biz_phone', [
      'default' => '+91 0987654321',
      'transparent' => 'refresh',
   ]);
   $wp_customize->add_control(new WP_Customize_Control(
      $wp_customize,
      'biz_phone_ctrl', [
         'label' => __('Business Phone'),
         'section' => 'biz_section',
         'settings' => 'var_biz_phone',
      ]
   ));
   // end of item
   $wp_customize->add_setting('var_biz_address', [
      'transparent' => 'refresh',
   ]);
   $wp_customize->add_control(new WP_Customize_Control(
      $wp_customize,
      'biz_address_ctrl', [
         'label' => __('Business Address'),
         'type' => 'textarea',
         'section' => 'biz_section',
         'settings' => 'var_biz_address',
      ]
   ));
   // Section for customizing [ends here]
}
add_action('customize_register', 'bizConfig');

// Social Channels
function socialChannels($wp_customize)
{
   $wp_customize->add_section('social_channel_section', [
      'title' => __('Social Channels'),
      'priority' => 50,
   ]);
   $wp_customize->add_setting('var_social_fb', [
      'transparent' => 'refresh',
   ]);
   $wp_customize->add_control(new WP_Customize_Control(
      $wp_customize,
      'social_fb_ctrl', [
         'label' => __('Facebook URL'),
         'section' => 'social_channel_section',
         'settings' => 'var_social_fb',
      ]
   ));
   // end of item
   $wp_customize->add_setting('var_social_twitter', [
      'transparent' => 'refresh',
   ]);
   $wp_customize->add_control(new WP_Customize_Control(
      $wp_customize,
      'social_twitter_ctrl', [
         'label' => __('Twitter URL'),
         'section' => 'social_channel_section',
         'settings' => 'var_social_twitter',
      ]
   ));
   // end of item
   $wp_customize->add_setting('var_social_linkedin', [
      'transparent' => 'refresh',
   ]);
   $wp_customize->add_control(new WP_Customize_Control(
      $wp_customize,
      'social_linkedin_ctrl', [
         'label' => __('LinkedIn URL'),
         'section' => 'social_channel_section',
         'settings' => 'var_social_linkedin',
      ]
   ));
   // end of item
   $wp_customize->add_setting('var_social_google_plus', [
      'transparent' => 'refresh',
   ]);
   $wp_customize->add_control(new WP_Customize_Control(
      $wp_customize,
      'social_google_plus_ctrl', [
         'label' => __('Google Plus URL'),
         'section' => 'social_channel_section',
         'settings' => 'var_social_google_plus',
      ]
   ));
   // end of item
   $wp_customize->add_setting('var_social_instagram', [
      'transparent' => 'refresh',
   ]);
   $wp_customize->add_control(new WP_Customize_Control(
      $wp_customize,
      'social_instagram_ctrl', [
         'label' => __('Instagram URL'),
         'section' => 'social_channel_section',
         'settings' => 'var_social_instagram',
      ]
   ));
}
add_action('customize_register', 'socialChannels');
