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
</div>
<!-- /.slider -->
<div class="main">
  <div class="container">
    <div class="search">
      <h2 class="heading">Search</h2>
    </div>
    <!-- /.search -->
    <div class="offers">
      <h2 class="heading">Najnosze oferty</h2>
      <ul>
        <li>
          <a href="#" class="card">
            <div class="img-wrap">
              <img src="assets/img/offer-1.jpg" alt="Offer 1">
              <div class="tags">
                <span class="price">199 000 zł</span>
                <span class="meter">4 111,56 zł/m<sup>2</sup></span>
              </div>
            </div>
            <div class="content-wrap">
              <h3 class="title">Tychy, O</h3>
              <h3 class="title">Mieszkanie na sprzedaż</h3>
              <span class="meta">2 pokoje | 50,60 m<sup>2</sup></span>
            </div>
          </a>
        </li>
        <li>
          <a href="#" class="card">
            <div class="img-wrap">
              <img src="assets/img/offer-2.jpg" alt="Offer 2">
              <div class="tags">
                <span class="price">299 000 zł</span>
                <span class="meter">4 211,56 zł/m<sup>2</sup></span>
              </div>
            </div>
            <div class="content-wrap">
              <h3 class="title">Tychy, O</h3>
              <h3 class="title">Mieszkanie na sprzedaż</h3>
              <span class="meta">3 pokoje | 55,60 m<sup>2</sup></span>
            </div>
          </a>
        </li>
        <li>
          <a href="#" class="card">
            <div class="img-wrap">
              <img src="assets/img/offer-1.jpg" alt="Offer 1">
              <div class="tags">
                <span class="price">199 000 zł</span>
                <span class="meter">4 111,56 zł/m<sup>2</sup></span>
              </div>
            </div>
            <div class="content-wrap">
              <h3 class="title">Tychy, O</h3>
              <h3 class="title">Mieszkanie na sprzedaż</h3>
              <span class="meta">2 pokoje | 50,60 m<sup>2</sup></span>
            </div>
          </a>
        </li>
      </ul>
      <div class="row">
        <a href="#" class="btn btn-primary">Zobacz wszystkie</a>
      </div>
      <!-- /.row -->
    </div>
      <!-- /.offers -->
  </div>
  <!-- /.container -->
</div>
<!-- /.main -->

<?php get_footer(); ?>