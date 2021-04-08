<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="fh5co-page" id="fh5co-page">
  <header id="fh5co-header" role="banner">
    <div class="container">
      <div class="header-inner">
        <?php
        has_custom_logo();
          echo '<h1>' . '<i class="sl-icon-energy"></i>' . get_custom_logo() . 
          '<a href="' . get_home_url() . '" class="logo-name">' . get_bloginfo( 'name' ) . '</a></h1>'; 
        
        wp_nav_menu( [
          'theme_location'  => 'header_menu',
          'container'       => 'nav', 
          'container_class' => 'navigation', 
          'echo'            => true,
        ] );
      ?>
      </div>
      <!-- /.header-inner -->
    </div>
    <!-- /.container -->
  </header>
</div>
<!-- /.fh5co-page -->