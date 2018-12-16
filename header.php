<!doctype html>
<html <?php language_attributes() ?>>
<head>
   <meta charset="<?php bloginfo('charset') ?>" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
   <meta name="description" content="" />
   <meta name="author" content="" />
   <meta name="generator" content="" />
   <title><?php bloginfo('title') ?></title>
   <!-- Favicons -->
   <!-- <link rel="apple-touch-icon" href="" sizes="180x180" />
   <link rel="icon" href="/favicon-32x32.png" sizes="32x32" type="image/png" />
   <link rel="icon" href="/favicon-16x16.png" sizes="16x16" type="image/png" />
   <link rel="manifest" href="/manifest.json" />
   <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#563d7c" />
   <link rel="icon" href="/favicon.ico" />
   <meta name="msapplication-config" content="/browserconfig.xml" /> -->
   <meta name="theme-color" content="#563d7c" />
   <?php wp_head() ?>
</head>
<body <?php body_class() ?>>
   <a id="skippy" class="sr-only sr-only-focusable" href="#content">
      <div class="container">
         <span class="skiplink-text">Skip to main content</span>
      </div>
   </a>
   <!-- [root element] starts here -->
   <div id="rootEl" v-cloak>
   <?php include_once 'template-parts/navbar.php' ?>