      <footer class="footer bg-light position-absolute w-100">
         <div class="container py-5">
            <div class="row">
               <div class="col-sm-3">
                  <div class="biz-card">
                     <h3 class="m-0 h5"><?php echo bloginfo('name') ?></h3>
                     <p class="text-muted"><?php echo bloginfo('description') ?></p>
                     <div class="media  ">
                        <div class="media-left mr-2">
                           <h3 class="font-weight-bold m-0 h1">&#9743;</h3>
                        </div>
                        <div class="media-body">
                           <p class="mb-1">Got questions? Call us now</p>
                           <h3 class="h5 font-weight-bold">
                              <a href="tel:+91 0987654321">+91 0987654321</a>
                           </h3>
                           <p>
                              <a class="text-dark" href="mailto:<?php echo get_theme_mod('var_biz_email') ?>"><?php echo get_theme_mod('var_biz_email') ?></a>
                           </p>
                        </div>
                     </div>
                     <!-- end of media card -->
                     <div class="btn-group btn-group-sm d-flex align-items-center">
                        <a href="<?php echo get_theme_mod('var_social_fb') ?>" class="btn btn-outline-primary">
                           <i class="fa fa-facebook"></i>
                        </a>
                        <a href="<?php echo get_theme_mod('var_social_twitter') ?>" class="btn btn-outline-primary">
                           <i class="fa fa-twitter"></i>
                        </a>
                        <a href="<?php echo get_theme_mod('var_social_linkedin') ?>" class="btn btn-outline-primary">
                           <i class="fa fa-linkedin"></i>
                        </a>
                        <a href="<?php echo get_theme_mod('var_social_google_plus') ?>" class="btn btn-outline-primary">
                           <i class="fa fa-google-plus"></i>
                        </a>
                     </div>
                  </div>
                  <!-- end of col -->
               </div>
               <div class="col-sm-3">
                  <?php wp_nav_menu([
                     'theme_location' => 'footer',
                  ])?>
                  <!-- end of col -->
               </div>
               <div class="col-sm-3">
                  <?php wp_nav_menu([
                     'theme_location' => 'footer',
                  ])?>
                  <!-- end of col -->
               </div>
               <div class="col-sm-3">
                  <?php wp_nav_menu([
                     'theme_location' => 'social_nav',
                  ])?>
                  <!-- end of col -->
               </div>
            </div>
            <!-- footer container -->
         </div>
         <div class="bg-dark text-white">
            <div class="container py-3">
               <?php if(is_active_sidebar('footer_note')) { ?>
                  <?php dynamic_sidebar('footer_note'); ?>
               <?php } else { ?>
                  <p class="mb-0">
                     Copyright &copy;. All rights reserved.
                     Developed &amp; Maintained by <a href="//creativewavetech.in" class="text-warning" target="_blank"><b>CreativeWaveTech</b></a>
                  </p>
               <?php } ?>
            </div>
         </div>
      </footer>
   </div>
   <!-- [root element] ends here -->
<?php wp_footer() ?>
<script type="module" src="<?php echo get_template_directory_uri() ?>/src/js/main.js"></script>
</body>
</html>
