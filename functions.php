<?php
require __DIR__.'/functions-business.php';
require __DIR__.'/functions-resources.php';
require __DIR__.'/functions-colorschema.php';
require __DIR__.'/functions-widgets.php';

// theme support
function themeSetup()
{
   add_theme_support('post-thumbnails');
   add_image_size('small-thumbnail', 180, 120, true);
   add_image_size('banner-image', 920, 210, true);
   // post formats
   add_theme_support( 'post-formats', [
      'aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio', 'chat',
   ]);
   add_theme_support( 'custom-logo', array(
		'flex-width' => true,
		'flex-height' => true,
   ) );

   add_theme_support( 'gutenberg', array(
      'colors' => array(
         '#617958',
      ),
   ) );
   add_theme_support( 'align-wide' );
   add_theme_support( 'customize-selective-refresh-widgets' );
   add_editor_style( array( 'src/css/editor-style.css') );
}
add_action('after_setup_theme', 'themeSetup');

// register menus
register_nav_menus([
   'primary' => __('Primary Menu'),
   'footer' => __('Footer Menu'),
   'social_links' => __('Social Links'),
]);



function customColorSchema_customize_css()
{

?>
<style>
   /* Import Google Font [starts here] */
   @import url('https://fonts.googleapis.com/css?family=<?php echo str_replace(' ', '+', get_theme_mod('var_primary_font')) ?>');
   /* Import Google Font [ends here] */
   :root {
      /* Color scheme vars [starts here] */
      --primary_color: <?php echo get_theme_mod('var_primary_color') ?>;
      --link_color: <?php echo get_theme_mod('var_primary_color') ?>;
      /* Color scheme vars [ends here] */

      /* Font Variants [starts here] */
      --primary_font: <?php echo get_theme_mod('var_primary_font') ?>, sans-serif;
      /* Font Variants [ends here] */
   }
   a:link,
   a:visited {
      color: var(--link_color);
   }
</style>
<?php
}

add_action('wp_head', 'customColorSchema_customize_css');
