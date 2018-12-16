   <?php $args = [
      'theme_location' => 'footer',
   ] ?>
   <?php wp_nav_menu($args) ?>
   </div>
   <!-- [root element] ends here -->
<?php wp_footer() ?>
<script type="module" src="<?php echo get_template_directory_uri() ?>/src/js/app.js"></script>
</body>
</html>
