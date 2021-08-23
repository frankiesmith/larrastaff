 <section id="mission" class="white-text" style="background-image: url(<?php block_field( 'background-image' ); ?>);">
   <div class="container padded">
   <div class="row">
     <div class="column forty">
       <h2><?php block_field( 'headline' ); ?></h2>
       <?php block_field( 'copy' ); ?>
       <a href="<?php block_field( 'button-link' ); ?>" class="button"><?php block_field( 'button-text' ); ?></a>
     </div>
     <div class="column sixty">
       <div class="featured-icons">
       <div class="row thirds">
         <div class="column">
           <div class="icon who-we-are">
            <?php echo file_get_contents( get_template_directory() . '/img/who-we-are.svg' ); ?>
           </div>
           <h3 class="icon-title"><?php block_field( 'icon-1-title' ); ?></h3>
         </div>
         <div class="column">
           <div class="icon current-listings">
             <?php echo file_get_contents( get_template_directory() . '/img/current-listings.svg' ); ?>
           </div>
           <h3 class="icon-title"><?php block_field( 'icon-2-title' ); ?></h3>
         </div>
         <div class="column">
           <div class="icon get-started">
             <?php echo file_get_contents( get_template_directory() . '/img/get-started.svg' ); ?>
           </div>
           <h3 class="icon-title"><?php block_field( 'icon-3-title' ); ?></h3>
         </div>
       </div>
     </div>
     </div>
   </div>
   </div>
  </section>