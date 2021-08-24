<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fivehdstarter
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

  <header id="masthead" class="site-header">
        <div class="mobile-menu">
          
    <div class="top-bar">
<div class="container">
<div class="site-branding">
      <div class="logo">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
        <img src="/wp-content/uploads/2021/08/LarraStaff-logo-1.svg"/>
      </a>
      </div>
    </div><!-- .site-branding -->
    <div class="hamburger-wrapper">
      <a class="hamburger-icon show" title="Menu">
        <span class="line line-1"></span>
        <span class="line line-2"></span>
        <span class="line line-3"></span>
      </a>
                        <div class="modal-overlay">
        <div class="modal navigation"><a class="close-modal"><svg viewBox="0 0 20 20">
            <path fill="#4a4a4c" d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z"></path>
          </svg></a>
          <div class="modal-content">
          <nav id="site-navigation" class="main-navigation">
      <?php
        wp_nav_menu( array(
          'theme_location'  => 'main-navigation',
        ) );
      ?>
    </nav><!-- #site-navigation -->
          </div>
        </div>
      </div>
      </div>
    </div>
    </div>
</div>
</div>

  <div class="desktop-menu">
     <div class="container">
  <div class="row align-bottom">
  <div class="column small">
        <div class="site-branding">
      <div class="logo">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
        <img src="/wp-content/uploads/2021/08/LarraStaff-logo-1.svg"/>
      </a>
      </div>
    </div><!-- .site-branding -->
    </div>
    <div class="column large">
      <div class="sub-nav">
        <div class="address">1500 Worcester Road, Suite F, Framingham, MA 01702</div>
      </div>
      <nav id="site-navigation" class="main-navigation">
      <?php
        wp_nav_menu( array(
          'theme_location'  => 'main-navigation',
        ) );
      ?>
    </nav><!-- #site-navigation -->
    </div>
  </div>
  </div>
</div>
  </header><!-- #masthead -->

  <div id="content" class="site-content">
