<?php /* Template Name: Support */ get_header(); ?>

  <main role="main">
    <!-- section -->
    <section>


    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

      <!-- article -->
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <div class="container">
          <div class="row">
            <div class="col-md-7 col-centered">
              <h2 class="darkblue"><?php the_field('header'); ?></h2>
            </div>
          </div>
        </div>     
        
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-centered">
              <p><?php the_field('content'); ?></p>
            </div>
          </div>
        </div> 
        
        <?php if (have_rows('pdfs')): ?>
          <div class="container file-container">
            <div class="row">
              
              <?php while (have_rows('pdfs')): the_row(); ?>
              
                <div class="col-md-4">
                  <a href="<?php the_sub_field('file'); ?>" target="_blank" class="file-block" style="background: url('<?php the_sub_field('image'); ?>')">
                    <h2><?php the_sub_field('title'); ?></h2>
                  </a>
                </div>
              
              <?php endwhile; ?>
              
            </div>
          </div>
        <?php endif; ?>
         
          <?php the_content(); ?>

          <br class="clear">

          <?php edit_post_link(); ?>


      </article>
      <!-- /article -->

    <?php endwhile; ?>

    <?php else: ?>

      <!-- article -->
      <article>

        <div class="container">
          <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
        </div>

      </article>
      <!-- /article -->

    <?php endif; ?>

    </section>
    <!-- /section -->
  </main>

<?php get_footer(); ?>