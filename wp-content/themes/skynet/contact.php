<?php /* Template Name: Contact */ get_header(); ?>

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
        
        <div id="contact-form" class="container">
          <div class="row">
            <div class="col-md-8 col-centered">
              <h3>Contact Form</h3>
              <form class="form-horizontal" method="post" action="<?php echo get_template_directory_uri(); ?>/process.php">
                <div class="form-group">
                  <label for="name" class="col-sm-2 control-label">Name</label>
                  <div class="col-sm-10">
                    <input type="name" class="form-control" name="name" id="name" placeholder="Name" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="email" class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="message" class="col-sm-2 control-label">Message</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="message" id="message" placeholder="Let us know your needs..." required></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Submit</button>
                  </div>
                </div>
              </form>
            </div>
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