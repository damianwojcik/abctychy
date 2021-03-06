var swiper = new Swiper('.swiper-container', {
  loop: true,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  autoplay: {
    delay: 3000,
  },
});

jQuery(document).ready(function () {
  var body = jQuery('body'),
    $wind = jQuery(window),
    windW = $wind.width();

  $wind.on('resize', function () {
    windW = $wind.width()
    windH = $wind.height()

    if (windW > 1020) {
      jQuery('.nav ul').removeClass('opened')
      jQuery('.toggle').removeClass('opened')
      body.removeClass('menu--open')
    }
  })

  // inits
  mobile_menu()
  handle_gallery_thumbnails()
  handle_searchbox_expand();

  function mobile_menu() {
    var btn = jQuery('.toggle')
    var menuWrapper = jQuery('.nav .menu')

    btn.on('click', function () {
      menuWrapper.toggleClass('opened')
      btn.toggleClass('opened')
      body.toggleClass('menu--open')
      var menuLinks = jQuery('.nav ul.opened a')

      menuLinks.on('click', function() {
        menuWrapper.removeClass('opened')
        btn.removeClass('opened')
        body.removeClass('menu--open')
      })

      jQuery(document).click(function(event) {
        if(!jQuery(event.target).closest('.nav').length) {
          menuWrapper.removeClass('opened')
          btn.removeClass('opened')
          body.removeClass('menu--open')
        }
      });
    })

    if (windW < 1020) {
      menuWrapper.removeClass('opened')
      btn.removeClass('opened')
    }
  }

  function handle_gallery_thumbnails() {
    var image = document.querySelector('.image-block')

    if (!image) return;

    var thumbnails = document.querySelectorAll('.thumbnails li')

    thumbnails.forEach(function (thumbnail) {
      var imgSrc = thumbnail.querySelector('a').href;
      thumbnail.addEventListener('mouseover', function() {
        image.href = imgSrc
        image.querySelector('img').src = imgSrc
      })
    })
  }

  function handle_searchbox_expand() {
    var btn = document.querySelector('.search-filter-reset');

    if(!btn) return;

    var elements = [];

    elements[0] = document.querySelector('.searchandfilter .sf-field-post-meta-rooms');
    elements[1] = document.querySelector('.searchandfilter .sf-field-post-meta-floor');
    elements[2] = document.querySelector('.searchandfilter .sf-field-post-meta-area');
    elements[3] = document.querySelector('.searchandfilter .sf-field-post-meta-pricing');
    elements[4] = document.querySelector('.searchandfilter .sf-field-post-meta-building');

    btn.addEventListener('click', function() {
      elements.forEach(function(element) {
        if (element.style.display === "block") {
          element.style.display = "none";
        } else {
          element.style.display = "block";
        }
      })
    })
  }
})
