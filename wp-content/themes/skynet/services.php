<?php
setlocale(LC_ALL, 'en_US.UTF8');
function toAscii($str, $replace=array(), $delimiter='-') {
 if( !empty($replace) ) {
  $str = str_replace((array)$replace, ' ', $str);
 }

 $clean = iconv('UTF-8', 'ASCII//TRANSLIT', $str);
 $clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
 $clean = strtolower(trim($clean, '-'));
 $clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);

 return $clean;
}
?>

<?php /* Template Name: Services */ get_header(); ?>

  <main role="main">
    <!-- section -->
    <section>


    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

      <?php require_once 'includes/hero.php'; ?>

      <!-- article -->
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <img class="img-responsive" src="<?php the_field('first_block_image'); ?>" />
            </div>
            <div class="col-md-6">
              <h2 class="darkblue"><?php the_field('first_block_title'); ?></h2>
              <?php the_field('first_block_content'); ?>
            </div>
          </div>
        </div>
        
        <?php if (have_rows('icon_block')): ?>
        <div class="icon-block-wrapper">
          <div class="container icon-block">
            <div class="row">
              
              <?php while (have_rows('icon_block')): the_row(); ?>
              
                <div class="col-md-4">
                  <a href="#" data-toggle="modal" data-target="#services-<?php echo toAscii(get_sub_field('title')); ?>" class="services-icon <?php the_sub_field('icon_class'); ?>"></a>
                  <h4><?php the_sub_field('title'); ?></h4>
                  <p class="small">
                    <?php the_sub_field('content'); ?>
                  </p>
                </div>
              
                <div class="modal fade" id="services-<?php echo toAscii(get_sub_field('title')); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      </div>
                      <div class="modal-body">
                        <div class="services-icon <?php the_sub_field('icon_class'); ?>"></div>
                        <h2 class="brightblue"><?php the_sub_field('title'); ?></h2>
                        <p><?php the_sub_field('expanded_content'); ?></p>
                        <a href="#" class="cta-btn">Get Started Today</a>
                      </div>
                    </div>
                  </div>
                </div>
              
              <?php endwhile; ?>
              
            </div>
          </div>
        </div>
        <?php endif; ?>
        
        <div class="container">
          <div class="row">
            <div class="col-md-7 col-centered services-bottom">
              <h3><?php the_field('second_block_title'); ?></h3>
              <a href="<?php the_field('second_block_button_link'); ?>" class="cta-btn">
                <?php the_field('second_block_button_text'); ?>
              </a>
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