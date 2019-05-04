<div class="footer-right col-xs-12 col-md-3">
  <?php $wp_query = new WP_Query( array('post_type' => 'sponsor','posts_per_page' => -1,)); ?>

  <?php if( $wp_query->have_posts() ):?> 

    <div class="sponsors">
      <h4 class="sponsors-title">Patrocinios</h4>

      <?php while ($wp_query->have_posts()):?>

        <?php $wp_query->the_post(); ?>

        <?php if ( has_post_thumbnail() ) :?> 

          <?php if (metadata_exists('post', get_the_ID(), 'url') && get_post_meta( get_the_ID(), 'url', true) !== ''):?> 
            <a href="<?= get_post_meta( get_the_ID(), 'url', true)?>">  
          <?php endif; ?> 

          <img class="sponsor-img" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">   

          <?php if (metadata_exists('post', get_the_ID(), 'url') && get_post_meta( get_the_ID(), 'url', true) !== ''):?> 
          </a>
          
        <?php endif; ?>     
        <?php endif; ?>

      <?php endwhile;?>  

    </div>
  <?php endif; ?>

  <?php // Limpiando el query
    wp_reset_postdata();
    wp_reset_query();
  ?>

  <?php dynamic_sidebar( 'footer_right' ); ?>

  
</div>