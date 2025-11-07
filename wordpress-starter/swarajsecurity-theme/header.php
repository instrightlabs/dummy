<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
  <div class="container">
    <h1 class="site-title"><a href="<?php echo home_url(); ?>" style="color:inherit; text-decoration:none;">SwarajSecurity</a></h1>
    <nav class="site-nav">
      <?php
      if ( has_nav_menu('primary') ) {
        wp_nav_menu(array('theme_location'=>'primary','container'=>'','menu_class'=>''));
      } else {
        echo '<a href="'.home_url('/').'">Home</a><a href="'.home_url('/about').'">About</a><a href="'.home_url('/services').'">Services</a><a href="'.home_url('/team').'">Team</a><a href="'.home_url('/request-a-call').'">Request a Call</a><a href="'.home_url('/contact').'">Contact</a>';
      }
      ?>
    </nav>
  </div>
</header>
