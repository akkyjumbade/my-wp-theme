<!doctype html>
<html <?php language_attributes() ?>>
<head>
   <meta charset="<?php bloginfo('charset') ?>" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no, uc-fitscreen=yes" />
   <meta name="description" content="<?php bloginfo('description') ?>" />
   <meta name="author" content="<?php bloginfo('author') ?>" />

   <!-- Android  -->
   <meta name="theme-color" content="<?php echo get_theme_mod('lwp_link_color') ?>" />
   <meta name="mobile-web-app-capable" content="yes" />
   <!-- iOS -->
   <meta name="apple-mobile-web-app-title" content="<?php bloginfo('title') ?>" />
   <meta name="apple-mobile-web-app-capable" content="yes" />
   <meta name="apple-mobile-web-app-status-bar-style" content="default" />
   <!-- Windows  -->
   <meta name="msapplication-navbutton-color" content="<?php echo get_theme_mod('lwp_link_color') ?>" />
   <meta name="msapplication-TileColor" content="<?php echo get_theme_mod('lwp_link_color') ?>" />
   <!-- <meta name="msapplication-config" content="browserconfig.xml" /> -->
   <!-- Pinned Sites  -->
   <meta name="application-name" content="<?php bloginfo('title') ?>" />
   <meta name="msapplication-tooltip" content="<?php bloginfo('title') ?>" />
   <meta name="msapplication-starturl" content="./" />
   <!-- Tap highlighting  -->
   <meta name="msapplication-tap-highlight" content="no" />
   <!-- UC Mobile Browser  -->
   <meta name="full-screen" content="yes" />
   <meta name="browsermode" content="application" />
   <!-- Disable night mode for this page  -->
   <meta name="nightmode" content="enable/disable" />
   <!-- Fitscreen  -->
   <meta name="layoutmode" content="fitscreen/standard" />
   <!-- imagemode - show image even in text only mode  -->
   <meta name="imagemode" content="force" />
   <!-- Orientation  -->
   <meta name="screen-orientation" content="portrait" />

   <title><?php bloginfo('title') ?></title>
   <!-- Link [starts here] -->
   <!--
   <link rel="apple-touch-icon" href="" sizes="180x180" />
   <link rel="manifest" href="/manifest.json" />
   <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#563d7c" />
   <link rel="icon" href="/favicon.ico" />
   -->
   <!-- Link [ends here] -->

   <?php wp_head() ?>
</head>
<body <?php body_class() ?>>
   <a id="skippy" class="sr-only sr-only-focusable" href="#content">
      <div class="container">
         <span class="skiplink-text">Skip to main content</span>
      </div>
   </a>
   <!-- [root element] starts here -->
   <div id="rootEl" v-cloak class="position-relative">
   <?php if ( function_exists( 'the_custom_logo' ) ) { ?>
      <?php the_custom_logo(); ?>
   <?php } ?>
   <?php include_once 'template-parts/navbar.php' ?>
