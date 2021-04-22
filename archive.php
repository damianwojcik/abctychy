<?php get_header(); ?>

<div class="main">
  <div class="container">
    <div class="row">
      <?php $title = get_the_archive_title();
            $pieces = explode(":", $title);
      ?>
      <h2 class="heading">
      <?php if(is_author()) { echo 'Oferty agenta: '; }?>
      <?php if(is_search()) { echo 'Wyniki wyszukiwania: '; }?>
      <?php echo $pieces[1]; ?>
      </h2>
    </div>
    <!-- /.row -->
    <div class="row">
      <div class="offers">
        <ul>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <?php
            $title = get_the_title();
            $fields = get_field_objects();
            $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
            $price = $fields['price']['value'];
            $pricing = $fields['pricing']['value'];
            $rooms = $fields['rooms']['value'];
            $area = $fields['area']['value'];
          ?>
            <li>
              <a href="<?php the_permalink(); ?>" class="card">
                <div class="img-wrap">
                  <img src="<?php echo $image[0]; ?>" alt="<?php echo $title; ?>">
                  <div class="tags">
                    <span class="price"><?php echo $price; ?> zł</span>
                    <span class="meter"><?php echo $pricing; ?> zł/m<sup>2</sup></span>
                  </div>
                </div>
                <div class="content-wrap">
                  <h3 class="title"><?php echo $title; ?></h3>
                  <span class="meta"><?php echo $rooms; ?> pokoje | <?php echo $area; ?> m<sup>2</sup></span>
                </div>
              </a>
            </li>
          <?php endwhile; endif; ?>
        </ul>
        <?php if ( !have_posts() ) : ?>
          <p>Nie znaleziono żadnych ofert spełniających kryteria.</p>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <!-- /.container -->
</div>
<!-- /.main -->

<?php get_footer(); ?>