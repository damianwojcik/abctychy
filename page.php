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
        <article>
          <?php the_content(); ?>
        </article>
      </div>
    </div>
    <!-- /.container -->
  </div>
  <!-- /.main -->

<?php endwhile; endif; ?>

<?php get_footer(); ?>