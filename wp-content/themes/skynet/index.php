<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
      
      <?php require_once 'includes/hero.php'; ?>
      
      <div id="posts-list" class="container">
        <div class="row">
          <div class="col-md-7 col-centered">

            <?php get_template_part('loop'); ?>

            <?php get_template_part('pagination'); ?>
            
          </div>
        </div>
      </div>

		</section>
		<!-- /section -->
	</main>
<?php get_footer(); ?>
