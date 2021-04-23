<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <?php
    $title = get_the_title();
  ?>

  <div class="main">
    <div class="container">
      <div class="row">
        <h2 class="heading"><?php echo $title; ?></h2>
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="left">
          <article>
            <?php the_content(); ?>
          </article>
        </div>
        <!-- /.left -->
        <div class="right">
          <div class="searchbox">
            <?php echo do_shortcode('[searchandfilter id="119"]'); ?>
          </div>
        </div>
        <!-- /.right -->
      </div>
    </div>
    <!-- /.container -->
  </div>
  <!-- /.main -->

<?php endwhile; endif; ?>

<?php get_footer(); ?>