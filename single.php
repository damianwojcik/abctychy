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
      <div class="row desktop">
        <div class="panel">
          <a href="javascript:if(window.print)window.print()" class="btn btn-sm btn-print" title="Drukuj">
            <span class="fas fa-print"></span>
          </a>
        </div>
        <!-- /.panel -->
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="left">
          <?php 
            $images = get_field('gallery');
            if( $images ): ?>
              <ul class="thumbnails">
                <?php foreach( $images as $image ): ?>
                  <li>
                    <a data-lightbox="gallery" href="<?php echo esc_url($image['url']); ?>">
                      <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </a>
                  </li>
                <?php endforeach; ?>
              </ul>
              <a data-lightbox="gallery" class="image-block" href="<?php echo esc_url($images[0]['url']); ?>">
                <img src="<?php echo esc_url($images[0]['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
              </a>
          <?php endif; ?>
          <div class="mobile">
            <?php
              $author_id = get_the_author_meta('ID');
              $author_firstname = get_the_author_meta('first_name');
              $author_lastname = get_the_author_meta('last_name');
              $author_email = get_the_author_meta('user_email');
              $author_phone = get_field('phone', 'user_'. $author_id );
              $author_photo = get_field('photo', 'user_'. $author_id );
              $author_posts_number = count_user_posts( $author_id );
              $author_posts_url = get_author_posts_url( $author_id );
            ?>
            <div class="agent">
              <div class="top">
                <div class="agent-avatar" style="background-image: url(<?php echo esc_url($author_photo['sizes']['thumbnail']); ?>)">
                  <a href="<?php echo $author_posts_url; ?>" class="agent-offers">
                    <span><?php echo $author_posts_number ?></span>
                    <strong>Ofert</strong>
                  </a>
                </div>
                <h2 class="agent-name"><?php echo $author_firstname." ".$author_lastname ?></h2>
                <small class="agent-position">Właściciel</small>
              </div>
              <div class="bottom">
                <div class="left">
                  <a href="tel: <?php echo $author_phone ?>"><?php echo $author_phone ?></a>
                </div>
                <div class="right">
                  <a href="mailto: <?php echo $author_email ?>" class="btn btn-gray">Wyślij wiadomość</a>
                </div>
              </div>
            </div>
            <!-- /.agent -->
            <?php 
              $fields = get_field_objects();
              if( $fields ): 
                function array_orderby()
                {
                  $args = func_get_args();
                  $data = array_shift($args);
                  foreach ($args as $n => $field) {
                        if (is_string($field)) {
                            $tmp = array();
                            foreach ($data as $key => $row)
                                $tmp[$key] = $row[$field];
                            $args[$n] = $tmp;
                            }
                    }
                    $args[] = &$data;
                    call_user_func_array('array_multisort', $args);
                    return array_pop($args);
                }
                $fields = array_orderby($fields, 'menu_order', SORT_ASC);
            ?>
              <ul class="props">
              <?php foreach( $fields as $name => $value ): 
                if ($name !== 'description' && $name !== 'gallery' && $value['value'] !== ''):
              ?>
                <li>
                  <b>
                    <?php echo $value['label']; ?>
                  </b>
                  <span>
                    <?php echo $value['value']; ?>
                    <?php if($name === 'price'): ?>&nbsp;zł<?php endif; ?>
                    <?php if($name === 'area'): ?>&nbsp;m<sup>2</sup><?php endif; ?>
                    <?php if($name === 'pricing'): ?>&nbsp;zł/m<sup>2</sup><?php endif; ?>
                  </span>
                </li>
              <?php 
                endif;
                endforeach; ?>
              </ul>
              <!-- /.props -->
            <?php endif; ?>
          </div>
          <!-- /.mobile -->
          <article>
            <?php the_content(); ?>
          </article>
        </div>
        <!-- /.left -->
        <div class="right desktop">
          <?php
              $author_id = get_the_author_meta('ID');
              $author_firstname = get_the_author_meta('first_name');
              $author_lastname = get_the_author_meta('last_name');
              $author_email = get_the_author_meta('user_email');
              $author_phone = get_field('phone', 'user_'. $author_id );
              $author_photo = get_field('photo', 'user_'. $author_id );
              $author_posts_number = count_user_posts( $author_id );
              $author_posts_url = get_author_posts_url( $author_id );
          ?>
          <div class="agent">
            <div class="top">
              <div class="agent-avatar" style="background-image: url(<?php echo esc_url($author_photo['sizes']['thumbnail']); ?>)">
                <a href="<?php echo $author_posts_url; ?>" class="agent-offers">
                  <span><?php echo $author_posts_number; ?></span>
                  <strong>Ofert</strong>
                </a>
              </div>
              <h2 class="agent-name"><?php echo $author_firstname." ".$author_lastname; ?></h2>
              <small class="agent-position">Właściciel</small>
            </div>
            <div class="bottom">
              <div class="left">
                <a href="tel: <?php echo $author_phone; ?>"><?php echo $author_phone; ?></a>
              </div>
              <div class="right">
                <a href="mailto: <?php echo $author_email; ?>" class="btn btn-gray">Wyślij wiadomość</a>
              </div>
            </div>
          </div>
          <!-- /.agent -->
          <?php 
              $fieldsDesktop = get_field_objects();
              if( $fieldsDesktop ): 
                $fieldsDesktop = array_orderby($fieldsDesktop, 'menu_order', SORT_ASC);
            ?>
              <ul class="props">
              <?php foreach( $fieldsDesktop as $name => $value ): 
                if ($name !== 'description' && $name !== 'gallery' && $value['value'] !== ''):
              ?>
                <li>
                  <b><?php echo $value['label']; ?></b>
                  <span>
                    <?php echo $value['value']; ?>
                    <?php if($name === 'price'): ?>&nbsp;zł<?php endif; ?>
                    <?php if($name === 'area'): ?>&nbsp;m<sup>2</sup><?php endif; ?>
                    <?php if($name === 'pricing'): ?>&nbsp;zł/m<sup>2</sup><?php endif; ?>
                  </span>
                </li>
              <?php 
                endif;
                endforeach; ?>
              </ul>
              <!-- /.props -->
            <?php endif; ?>
        </div>
        <!-- /.right -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.main -->

<?php endwhile; endif; ?>

<?php get_footer(); ?>