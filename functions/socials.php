<?php
// Social Channels
function socialChannels($wp_customize)
{
   $wp_customize->add_section('social_channel_section', [
      'title' => __('Social Channels'),
      'priority' => 50,
   ]);
   $wp_customize->add_setting('social.facebook', [
      'transparent' => 'refresh',
   ]);
   $wp_customize->add_control(new WP_Customize_Control(
      $wp_customize,
      'social_fb_ctrl', [
         'label' => __('Facebook URL'),
         'section' => 'social_channel_section',
         'settings' => 'social.facebook',
      ]
   ));
   // end of item
   $wp_customize->add_setting('social.twitter', [
      'transparent' => 'refresh',
   ]);
   $wp_customize->add_control(new WP_Customize_Control(
      $wp_customize,
      'social_twitter_ctrl', [
         'label' => __('Twitter URL'),
         'section' => 'social_channel_section',
         'settings' => 'social.twitter',
      ]
   ));
   // end of item
   $wp_customize->add_setting('social.linkedin', [
      'transparent' => 'refresh',
   ]);
   $wp_customize->add_control(new WP_Customize_Control(
      $wp_customize,
      'social_linkedin_ctrl', [
         'label' => __('LinkedIn URL'),
         'section' => 'social_channel_section',
         'settings' => 'social.linkedin',
      ]
   ));
   // end of item
   $wp_customize->add_setting('social.instagram', [
      'transparent' => 'refresh',
   ]);
   $wp_customize->add_control(new WP_Customize_Control(
      $wp_customize,
      'social_instagram_ctrl', [
         'label' => __('Instagram URL'),
         'section' => 'social_channel_section',
         'settings' => 'social.instagram',
      ]
   ));
   // end of item
   $wp_customize->add_setting('social.whatsappNumber', [
      'transparent' => 'refresh',
   ]);
   $wp_customize->add_control(new WP_Customize_Control(
      $wp_customize,
      'social_whatsappNumber_ctrl', [
         'label' => __('WhatsApp Number'),
         'section' => 'social_channel_section',
         'settings' => 'social.whatsappNumber',
      ]
   ));
   // end of item
}
add_action('customize_register', 'socialChannels');
