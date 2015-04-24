<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

      <div class="row">
        
        <div class="col-md-4">
          <!-- post thumbnail -->
          <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
              <?php the_post_thumbnail('medium'); // Declare pixel size you need inside the array ?>
            </a>
          <?php endif; ?>
          <!-- /post thumbnail -->
        </div>
        
        <div class="col-md-8">
          <h3>
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
          </h3>
          <h5>
            <?php the_time('F j, Y'); ?>
          </h5>
          <?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>

        </div>
        
      </div>
		
	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
