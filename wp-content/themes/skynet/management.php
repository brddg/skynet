<?php /* Template Name: Management */ get_header(); ?>

  <main role="main">
    <!-- section -->
    <section>


    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

      <?php require_once 'includes/hero.php'; ?>

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
          <div class="row" style="width:100%;margin-left:0;">

            <?php while (have_rows('team')): the_row(); ?>

              <div class="col-sm-4">
                <div class="image-block" style="background-image: url('<?php the_sub_field("image"); ?>')">
                </div>
                <h2 class="darkblue"><?php the_sub_field('name'); ?></h2>
                <h5 style="text-align: center;"><?php the_sub_field('title'); ?></h5>
                <p><?php the_sub_field('bio'); ?></p>
                <p class="small"><?php the_sub_field('contact'); ?></p>
              </div>

            <?php endwhile; ?>

          </div>
        </div>

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
