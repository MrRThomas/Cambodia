<?php get_header()?>

<section>
  <!-- Start of main column -->
  <div class="column-one"><center>

    
        
       <!-- Start the Loop. -->
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <!-- Box -->
                  <div class="box">         
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_content(); ?></p>
          <p>Posted: <?php the_date(); ?> by <?php the_author(); ?></p>
                  </div>
          <!-- End Box -->
          <BR><BR><BR>
              <?php endwhile; ?> 

          <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your critera.' ); ?></p>
                    
                <?php endif; ?>

    <!-- End the Loop. -->  


<BR><BR><BR>
  </center>
  </div>
  <!-- End of main column -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>