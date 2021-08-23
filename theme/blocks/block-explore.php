<section id="explore" class="white-text">
  <div class="container padded">
   <div class="row">
     <div class="column forty">
       <h2><?php block_field( 'headline' ); ?></h2>
       <?php block_field( 'copy' ); ?>
       <a href="<?php block_field( 'button-link' ); ?>" class="button blue"><?php block_field( 'button-text' ); ?></a>
     </div>
     <div class="column sixty img-column">
       <div class="half-circle-image">
         <img src="<?php block_field( 'image' ); ?>"/>
     </div>
     </div>
   </div>
  </div>
</section>