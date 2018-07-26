<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package W3CSS-Architect
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <?php wp_head(); ?>
  </head>
<body <?php body_class(); ?>>
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', '_s' ); ?></a>
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
          <?php
            the_custom_logo();
            if ( is_front_page() && is_home() ) :
              ?>
              <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="w3-bar-item w3-button"><?php bloginfo( 'name' ); ?></a></h1>
              <?php
            else :
              ?>
              <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="w3-bar-item w3-button"><?php bloginfo( 'name' ); ?></a></p>
              <?php
            endif;
            $_s_description = get_bloginfo( 'description', 'display' );
            if ( $_s_description || is_customize_preview() ) :
              ?>
              <p class="site-description"><?php echo $_s_description; /* WPCS: xss ok. */ ?></p>
            <?php endif; ?>

    
    <!-- Float links to the right. Hide them on small screens -->

    <div class="w3-right w3-hide-small">
      <a href="#projects" class="w3-bar-item w3-button">Projects</a>
      <a href="#about" class="w3-bar-item w3-button">About</a>
      <a href="#contact" class="w3-bar-item w3-button">Contact</a>
    </div>
  </div>
</div>

