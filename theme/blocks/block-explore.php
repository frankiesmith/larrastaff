<?php
$block_color = block_value( 'white-background' );

$class = 'explore';
if ( block_value( 'white-background' ) ) {
  $class .= ' white-background';
}
?>

<section id="explore" class="white-text <?php echo $class; ?>">
  <div class="container">
   <div class="row padded">
     <div class="column forty">
       <h2><?php block_field( 'headline' ); ?></h2>
       <?php block_field( 'copy' ); ?>
       <a href="<?php block_field( 'button-link' ); ?>" class="button blue"><?php block_field( 'button-text' ); ?></a>
     </div>
     <div class="column sixty circle-column">
       <div class="half-circle-image">
         <img src="<?php block_field( 'image' ); ?>"/>
     </div>
     </div>
   </div>
  </div>
</section>