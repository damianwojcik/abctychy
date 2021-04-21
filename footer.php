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
        ?>
        <div class="agent">
          <div class="top">
            <div class="agent-avatar" style="background-image: url(<?php echo esc_url($author_photo['sizes']['thumbnail']); ?>)">
              <a href="#" class="agent-offers">
                <span><?php echo $author_posts_number ?></span>
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
    <form action="">
      <div class="left">
        <div class="input">
          <label for="name">Imię i nazwisko</label>
          <input type="text" name="name" placeholder="Imię i nazwisko">
        </div>
        <div class="input">
          <label for="email">Email</label>
          <input type="text" name="email" placeholder="Email">
        </div>
        <div class="input">
          <label for="phone">Telefon komórkowy</label>
          <input type="text" name="phone" placeholder="Telefon komórkowy">
        </div>
        <div class="input">
          <input type="text" value="CAPTCHA" placeholder="Przepisz kod z obrazka">
        </div>
        <div class="checkbox">
          <label for="checkbox1">
            <input id="checkbox1" type="checkbox" name="checkbox1">
            Wyrażam zgodę na przetwarzanie podanych przeze mnie w powyższym formularzu danych osobowych przez biuro ABC Nieruchomości w celu wyjaśnienie zgłoszonej przeze mnie sprawy.
          </label>
        </div>
        <div class="checkbox">
          <label for="checkbox2">
            <input id="checkbox2" type="checkbox" name="checkbox2">
            Wyrażam zgodę na przetwarzanie podanych przeze mnie w powyższym formularzu danych osobowych w celach marketingowych przez ABC Nieruchomości
          </label>
        </div>
        <div class="checkbox">
          <label for="checkbox3">
            <input id="checkbox3" type="checkbox" name="checkbox3">
            Wyrażam zgodę na otrzymywanie od ABC Nieruchomości,skierowanych do mnie informacji handlowych oraz materiałów promocyjnych i ofert/ogłoszeń drogą telefoniczną bądź elektroniczną.
          </label>
        </div>
        <div class="checkbox">
          <label for="checkbox4">
            <input id="checkbox4" type="checkbox" name="checkbox4">
            Zgadzam się na przetwarzanie moich danych osobowych w celu przedstawienia mi oferty handlowej przez biuro ABC Nieruchomości
          </label>
        </div>
      </div>
      <!-- /.left -->
      <div class="right">
        <div class="input">
          <label for="message">Wiadomość</label>
          <textarea placeholder="Wiadomość"></textarea>
        </div>
        <a href="#" class="btn btn-primary">Wyślij wiadomość</a>
      </div>
      <!-- /.right -->
    </form>
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
      <ul>
        <li><a href="#"><b>Mieszkania</b> na wynajem</a></li>
        <li><a href="#"><b>Domy</b> na wynajem</a></li>
        <li><a href="#"><b>Działki</b> na wynajem</a></li>
        <li><a href="#"><b>Lokale</b> na wynajem</a></li>
        <li><a href="#"><b>Hale</b> na wynajem</a></li>
        <li><a href="#"><b>Obiekty</b> na wynajem</a></li>
      </ul>
      <ul>
        <li><a href="#"><b>Mieszkania</b> na sprzedaż</a></li>
        <li><a href="#"><b>Domy</b> na sprzedaż</a></li>
        <li><a href="#"><b>Działki</b> na sprzedaż</a></li>
        <li><a href="#"><b>Lokale</b> na sprzedaż</a></li>
        <li><a href="#"><b>Hale</b> na sprzedaż</a></li>
        <li><a href="#"><b>Obiekty</b> na sprzedaż</a></li>
      </ul>
    </div>
  </div>
  <!-- /.container -->
</div>
<!-- /.footer -->
<div class="copyrights">
  <div class="container">
    <p>Wykonanie <a href="https://dwojcik.dev/" target="_blank" rel="noopener noreferrer">dwojcik.dev</a></p>
  </div>
  <!-- /.container -->
</div>
<!-- /.copyrights -->

<?php wp_footer(); ?>
</body>
</html>