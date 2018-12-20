<?php

// Our widgets [starts here]
function ourWidgetsInit()
{
   register_sidebar([
      'name' => 'Sidebar',
      'id' => 'sidebar',
      'before_widget' => '<div class="widget-item">',
      'after_widget' => '</div>',
   ]);
   // Footer
   register_sidebar([
      'name' => 'Footer area 1',
      'id' => 'footer_area_1',
      'before_widget' => '<div class="widget-item">',
      'after_widget' => '</div>',
   ]);
   register_sidebar([
      'name' => 'Footer area 2',
      'id' => 'footer_area_2',
      'before_widget' => '<div class="widget-item">',
      'after_widget' => '</div>',
   ]);
   register_sidebar([
      'name' => 'Footer area 3',
      'id' => 'footer_area_3',
      'before_widget' => '<div class="widget-item">',
      'after_widget' => '</div>',
   ]);
   register_sidebar([
      'name' => 'Footer area 4',
      'id' => 'footer_area_4',
      'before_widget' => '<div class="widget-item">',
      'after_widget' => '</div>',
   ]);
   register_sidebar([
      'name' => 'Footer note',
      'id' => 'footer_note',
      'before_widget' => '<div class="widget-item">',
      'after_widget' => '</div>',
   ]);
}
add_action('widgets_init', 'ourWidgetsInit');

// Our widgets [ends here]
