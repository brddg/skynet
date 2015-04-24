<?php /* Template Name: Home */ get_header(); ?>

  <main role="main">
    <!-- section -->
    <section>


    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

      <?php require_once 'includes/home-hero.php'; ?>

      <!-- article -->
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        
          <div class="container">
            <div class="row">
              <div class="col-md-7 col-centered">
                <p><?php the_field('home_first_block_content'); ?></p>
              </div>
            </div>
          </div>
        
          <div class="container image-container">
            <div class="row">
              <div class="col-sm-4">
                <a class="image-block" href="<?php the_field("home_image_1_link"); ?>" style="background: url('<?php the_field("home_image_1"); ?>')">
                  <h2><?php the_field('home_image_1_text'); ?></h2>
                </a>
              </div>
              <div class="col-sm-4">
                <a class="image-block" href="<?php the_field("home_image_2_link"); ?>" style="background: url('<?php the_field("home_image_2"); ?>')">
                  <h2><?php the_field('home_image_2_text'); ?></h2>
                </a>
              </div>
              <div class="col-sm-4">
                <a class="image-block" href="<?php the_field("home_image_3_link"); ?>" style="background: url('<?php the_field("home_image_3"); ?>')">
                  <h2><?php the_field('home_image_3_text'); ?></h2>
                </a>
              </div>
            </div>
          </div>

          <div class="container">
            <div class="row">
              <div class="col-md-7 col-centered">
                <h2 class="darkblue"><?php the_field('home_second_block_title'); ?></h2>
                <p><?php the_field('home_second_block_content'); ?></p>
              </div>
            </div>
          </div>

          <?php the_content(); ?>

          <br class="clear">

          <?php edit_post_link(); ?>

        </div>

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