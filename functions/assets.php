<?php
$assets = [
   'styles' => [
      get_template_directory_uri().'/assets/styles/app.css',
   ],
   'scripts' => [
      get_template_directory_uri().'/assets/scripts/app.js',
   ],
];
// inject styles in theme by wp hook [starts_here]
function add_theme_styles()
{
   global $assets;
   foreach ($assets['styles'] as $key => $value) {
      wp_enqueue_style('akkk-'.$key, $value);
   }

}
add_action('wp_enqueue_scripts', 'add_theme_styles');
// inject styles in theme by wp hook [ends_here]

// inject styles in theme by wp hook [starts_here]
function add_theme_scripts()
{
   global $assets;
   foreach ($assets['scripts'] as $key => $value) {
      wp_enqueue_script('akkk-'.$key, $value, null, '1', true);
   }

}
add_action('wp_enqueue_scripts', 'add_theme_scripts');
// inject styles in theme by wp hook [ends_here]
