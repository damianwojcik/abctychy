<div class="team">
  <div class="container">
    <h2 class="heading">Nasz zespół</h2>
    <div class="row">
      <?php
        $args = array(
            'role'    => 'editor',
            'order'   => 'ASC'
        );
        $users = get_users( $args );
        foreach ( $users as $user ) :
          $author_phone = get_field('phone', 'user_'. $user->ID );
          $author_photo = get_field('photo', 'user_'. $user->ID );
          $author_posts_number = count_user_posts( $user->ID );
          $author_posts_url = get_author_posts_url( $user->ID );
        ?>
        <div class="agent">
          <div class="top">
            <div class="agent-avatar" style="background-image: url(<?php echo esc_url($author_photo['sizes']['thumbnail']); ?>)">
              <a href="<?php echo $author_posts_url; ?>" class="agent-offers">
                <span><?php echo $author_posts_number; ?></span>
                <strong>Ofert</strong>
              </a>
            </div>
            <h2 class="agent-name"><?php echo esc_html( $user->display_name ); ?></h2>
            <small class="agent-position">Właściciel</small>
          </div>
          <div class="bottom">
            <div class="left">
              <a href="tel: <?php echo esc_html( $author_phone ); ?>"><?php echo esc_html( $author_phone ); ?></a>
            </div>
            <div class="right">
              <a href="mailto: <?php echo esc_html( $user->user_email ); ?>" class="btn btn-gray">Wyślij wiadomość</a>
            </div>
          </div>
        </div>
        <!-- /.agent -->
        <?php endforeach; ?>
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</div>
<!-- /.team -->
<div class="contact">
  <div class="container">
    <h2 class="heading">Napisz do nas</h2>
    <?php if( function_exists('ninja_forms_display_form') ){ ninja_forms_display_form(1); } ?>
  </div>
  <!-- /.container -->
</div>
<!-- /.contact -->
<div id="map">
  <iframe loading="lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJ40_7jv-3FkcRMjulaqUMU6o&key=AIzaSyCSuLhzk1FnhhnESF9Hy5tfCnww5F2DDQU"></iframe>
</div>
<!-- /#map -->
<div class="footer">
  <div class="container">
    <div class="left">
      <p class="address">
        <strong>ABC Nieruchomości</strong>
        ul. Darwina 19
      </p>
      <p>
        Zapraszamy do naszego biura w każdy dzień <br />
        od Poniedziałku do Piątku w godzinach od 9.00 - 17.00
      </p>
    </div>
    <div class="right">
      <?php $category_link = get_category_link(2); ?>
      <ul>
        <li><a href="<?php echo $category_link; ?>"><b>Mieszkania</b> na wynajem</a></li>
        <li><a href="<?php echo $category_link; ?>"><b>Domy</b> na wynajem</a></li>
        <li><a href="<?php echo $category_link; ?>"><b>Działki</b> na wynajem</a></li>
        <li><a href="<?php echo $category_link; ?>"><b>Lokale</b> na wynajem</a></li>
        <li><a href="<?php echo $category_link; ?>"><b>Hale</b> na wynajem</a></li>
        <li><a href="<?php echo $category_link; ?>"><b>Obiekty</b> na wynajem</a></li>
      </ul>
      <ul>
        <li><a href="<?php echo $category_link; ?>"><b>Mieszkania</b> na sprzedaż</a></li>
        <li><a href="<?php echo $category_link; ?>"><b>Domy</b> na sprzedaż</a></li>
        <li><a href="<?php echo $category_link; ?>"><b>Działki</b> na sprzedaż</a></li>
        <li><a href="<?php echo $category_link; ?>"><b>Lokale</b> na sprzedaż</a></li>
        <li><a href="<?php echo $category_link; ?>"><b>Hale</b> na sprzedaż</a></li>
        <li><a href="<?php echo $category_link; ?>"><b>Obiekty</b> na sprzedaż</a></li>
      </ul>
    </div>
  </div>
  <!-- /.container -->
</div>
<!-- /.footer -->
<div class="copyrights">
  <div class="container">
    <p>ABC Nieruchomośći | 2021 Wykonanie: <a href="https://dwojcik.dev/" target="_blank" rel="noopener noreferrer">dwojcik.dev</a></p>
  </div>
  <!-- /.container -->
</div>
<!-- /.copyrights -->

<?php wp_footer(); ?>
</body>
</html>