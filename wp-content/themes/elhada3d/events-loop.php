<?php
  $wp_query = new WP_Query( array(
    'post_type' => 'events',
    'tax_query' => array(
      array(
        'taxonomy' => 'type_event',
        'field'    => 'slug',
        'terms'    => 'evento-digital',
      ),
    ),
  ) );
?>

<?php if( $wp_query->have_posts() ):?> 
<div class="event-table">
  <header>
    <div class="event-table__header">
      <?php _e('Evento Digitales', 'jts-hada3d')?> 
    </div>
  </header>
  <?php while ($wp_query->have_posts()):?>
    <?php $wp_query->the_post(); ?>

    <div class="event">
      <p class="event-info">
        <?php the_title() ?>
        <br>
        <?php if (get_post_meta( get_the_ID(), 'date', true ) !=''): ?>
          <?php _e('Fecha: ', 'jts-hada3d')?>
          <?php echo get_post_meta( get_the_ID(), 'date', true ); ?>
          <br>
        <?php endif; ?>
        <?php _e('Hora: ', 'jts-hada3d')?>
        <?php echo get_post_meta( get_the_ID(), 'hour', true ); ?>
        <br>
        <?php if (get_post_meta( get_the_ID(), 'platform', true ) !=''): ?>
          <?php _e('Plataforma: ', 'jts-hada3d')?>
          <?php echo get_post_meta( get_the_ID(), 'platform', true ); ?>
          <br>
        <?php endif; ?>
        <?php if (get_post_meta( get_the_ID(), 'disponibility', true ) !=''): ?>
          <?php _e('Cupos: ', 'jts-hada3d')?>
          <?php echo get_post_meta( get_the_ID(), 'disponibility', true ); ?>
          <br>
        <?php endif; ?>
      </p>
      <?php 
      
      if (metadata_exists( 'post', get_the_ID(), 'link' ) && (get_post_meta( get_the_ID(), 'link', true ) !== '' ) ):
      ?>
        <a href="<?php echo get_post_meta( get_the_ID(), 'link', true ); ?>" class="button event-button">
          <?php echo get_post_meta( get_the_ID(), 'text_button', true ); ?>
        </a>
      <?php endif; ?>
    </div>

  <?php endwhile;?>
</div>

<?php endif; ?>

<?php 
// Limpiando el query
wp_reset_postdata();
wp_reset_query();
?>


<?php
  $wp_query = new WP_Query( array(
    'post_type' => 'events',
    'tax_query' => array(
      array(
        'taxonomy' => 'type_event',
        'field'    => 'slug',
        'terms'    => 'en-vivo',
      ),
    ),
  ) );
?>

<?php if( $wp_query->have_posts() ):?> 
<div class="event-table">
  <header>
     <div class="event-table__header -live">
       Evento 
     <div class="live-flag">
       <div class="live-icon"></div>
       <div class="live-text">
         en vivo
       </div>
     </div>
     </div>
   </header>
  <?php while ($wp_query->have_posts()):?>
    <?php $wp_query->the_post(); ?>

    <div class="event">
      <p class="event-info">
        <?php the_title() ?>
        <br>
        <?php if (get_post_meta( get_the_ID(), 'date', true ) !=''): ?>
          <?php _e('Fecha: ', 'jts-hada3d')?>
          <?php echo get_post_meta( get_the_ID(), 'date', true ); ?>
          <br>
        <?php endif; ?>
        <?php _e('Hora: ', 'jts-hada3d')?>
        <?php echo get_post_meta( get_the_ID(), 'hour', true ); ?>
        <br>
        <?php if (get_post_meta( get_the_ID(), 'platform', true ) !=''): ?>
          <?php _e('Plataforma: ', 'jts-hada3d')?>
          <?php echo get_post_meta( get_the_ID(), 'platform', true ); ?>
          <br>
        <?php endif; ?>
        <?php if (get_post_meta( get_the_ID(), 'disponibility', true ) !=''): ?>
          <?php _e('Cupos: ', 'jts-hada3d')?>
          <?php echo get_post_meta( get_the_ID(), 'disponibility', true ); ?>
          <br>
        <?php endif; ?>
      </p>
      <?php 
      
      if (metadata_exists( 'post', get_the_ID(), 'link' ) && (get_post_meta( get_the_ID(), 'link', true ) !== '' ) ):
      ?>
        <a href="<?php echo get_post_meta( get_the_ID(), 'link', true ); ?>" class="button event-button">
          <?php echo get_post_meta( get_the_ID(), 'text_button', true ); ?>
        </a>
      <?php endif; ?>
    </div>

  <?php endwhile;?>
</div>

<?php endif; ?>

<?php 
// Limpiando el query
wp_reset_postdata();
wp_reset_query();
?>