<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>

    <?php require_once 'includes/hero.php'; ?>
      
      <div id="post" class="container">
        <div class="row">
          <div class="col-md-7 col-centered">
            <?php if (have_posts()): while (have_posts()) : the_post(); ?>

              <!-- article -->
              <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <!-- post title -->
                <h2>
                  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                </h2>
                <!-- /post title -->

                <!-- post details -->
                <h5><?php the_time('F j, Y'); ?></h5>
                <!-- /post details -->
                
                <div id="social-sharing">
                  <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" id="facebook-share" class="icon-fb">Facebook</a>
                  <a target="_blank" href="http://twitter.com/home?status=<?php the_title(); ?>+<?php the_permalink(); ?>" id="twitter-share" class="icon-twitter">Twitter</a>
                  <a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&source=<?php bloginfo('url'); ?>" id="linkedin-share" class="icon-linkdin">LinkedIn</a>
                  <a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" id="googleplus-share" class="icon-post-gplus">Google Plus</a>
                </div>

                <?php the_content(); // Dynamic Content ?>

                <?php edit_post_link(); // Always handy to have Edit Post Links available ?>

              </article>
              <!-- /article -->

            <?php endwhile; ?>

            <?php else: ?>

              <!-- article -->
              <article>

                <h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

              </article>
              <!-- /article -->

            <?php endif; ?>
          </div>
        </div>
    </div>

	</section>
	<!-- /section -->
	</main>

<?php get_footer(); ?>
