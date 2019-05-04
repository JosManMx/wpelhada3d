<div class="footer-center col-xs-12 col-md-6">
  <?php dynamic_sidebar( 'footer_center' ); ?>

  <?php $wp_query = new WP_Query( array('post_type' => 'project', 'posts_per_page' => -1,)); ?>

  <?php if( $wp_query->have_posts() ):?> 

    <h3 class="trayectory-title">
      Trayectoria
    </h3>
    <div class="trayectory-icons">

      <?php while ($wp_query->have_posts()):?>

      <?php $wp_query->the_post(); ?>
        <?php if (metadata_exists('post', get_the_ID(), 'url') && get_post_meta( get_the_ID(), 'url', true) !== ''):?> 
          <a href="<?= get_post_meta( get_the_ID(), 'url', true)?>">  
        <?php endif; ?> 
        <?php if ( has_post_thumbnail() ) :?> 
          <img class="trayectory-img" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">        
        <?php endif; ?>
        <?php if (metadata_exists('post', get_the_ID(), 'url') && get_post_meta( get_the_ID(), 'url', true) !== ''):?> 
          </a>
        <?php endif; ?>

      <?php endwhile;?>  

    </div>
  <?php endif; ?>
  
  <?php // Limpiando el query
    wp_reset_postdata();
    wp_reset_query();
  ?>
</div>