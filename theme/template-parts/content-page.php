<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fivehdstarter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <?php the_post_thumbnail('large'); ?>

  <div class="entry-content">
    <?php the_content(); ?>
  </div><!-- .entry-content -->

  <?php if ( get_edit_post_link() ) : ?>
  <?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
