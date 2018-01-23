<?php 
// nav menu hook
add_action('add_menu_hook','add_menu_hook');

function add_menu_hook(){
 
  wp_nav_menu(array(
    'container_class' => 'col-xs-10 text-right menu-1',
    'theme_location' =>'primary'
                               

    ));

}
