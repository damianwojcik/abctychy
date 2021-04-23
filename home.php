<?php get_header(); ?>

<?php
  $args = array('posts_per_page' => -1,
      'post_type' => 'slide',
      'orderby' => 'date',
      'order'=> 'ASC',);
  $posts_array = get_posts( $args );
?>

<div class="slider">
  <!-- Slider main container -->
  <div class="swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <?php foreach ($posts_array as $post) {
        $photo = get_field('photo');
      ?>
        <div class="swiper-slide" style="background-image: url('<?php echo $photo['url']; ?>');"></div>
      <?php } // END foreach ?>
    </div>
    <div class="container">
      <div class="swiper-button swiper-button-prev"></div>
      <div class="swiper-button swiper-button-next"></div>
    </div>
  </div>
  <div class="searchbox">
    <?php echo do_shortcode('[searchandfilter id="119"]'); ?>
  </div>
</div>
<!-- /.slider -->
<div class="main">
  <div class="container">
    <?php
      $args = array( 'numberposts' => '4', 'category' => '2' );
      $recent_posts = wp_get_recent_posts( $args );
      if ($recent_posts) :
    ?>
    <div class="offers">
      <h2 class="heading">Najnowsze oferty</h2>
      <ul>
      <?php
        foreach( $recent_posts as $recent ):
          $title = $recent['post_title'];
          $fields = get_field_objects($recent['ID']);
          $id = $recent['ID'];
          $image = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'large' );
          $price = $fields['price']['value'];
          $pricing = $fields['pricing']['value'];
          $rooms = $fields['rooms']['value'];
          $area = $fields['area']['value'];
          $location = $fields['location']['value'];
      ?>
        <li>
          <a href="<?php the_permalink($id); ?>" class="card">
            <div class="img-wrap">
            <img src="<?php echo $image[0]; ?>" alt="<?php echo $title; ?>">
              <div class="tags">
                <span class="price"><?php echo $price; ?> zł</span>
                <span class="meter"><?php echo $pricing; ?> zł/m<sup>2</sup></span>
              </div>
            </div>
            <div class="content-wrap">
              <h3 class="title"><?php echo $title; ?></h3>
              <h4 class="subtitle"><?php echo $location; ?></h4>
              <span class="meta"><?php echo $rooms; ?> pokoje | <?php echo $area; ?> m<sup>2</sup></span>
            </div>
          </a>
        </li>
        <?php endforeach; ?>
      </ul>
      <div class="row text-center">
        <?php $category_link = get_category_link(2); ?>
        <a href="<?php echo $category_link; ?>" class="btn btn-primary">Zobacz wszystkie</a>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.offers -->
    <?php endif; ?>
  </div>
  <!-- /.container -->
</div>
<!-- /.main -->

<?php get_footer(); ?>