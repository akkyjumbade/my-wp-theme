<?php get_header() ?>
<?php
if (have_posts()) {
   while (have_posts()) {
      the_post();
?>
<article>
   <h3><?php the_title() ?></h3>
   <?php the_time() ?>
   <?php the_content() ?>
</article>
<?php
   }
}
?>
<?php get_footer() ?>
