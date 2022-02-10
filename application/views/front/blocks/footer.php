<footer>
  <section class="footer">
    <div class="d-flex flex-wrap">
      <div class="col-12 col-lg-3 pl-0 wow fadeInRight" data-wow-delay="0.3s">
        <div class="footer-head">
          <a href="<?= base() ?>">
            <img class="lazy" width="auto" height="40px" data-src="<?= file_url(). $settings->logo ?>" alt="logo">
          </a>
        </div>
        <div class="footer-description"><?= $settings->description ?></div>
        <div class="mt-2">
          <?php foreach($social_icons as $icon): ?>
            <a target="_blank" href="<?= $icon->link ?>">
              <img width="auto" height="20px" class="lazy" data-src="<?= file_url(). $icon->photo ?>" alt="<?= $icon->alt ?>">
            </a>
          <?php endforeach; ?>
          
        </div>
      </div>

      <div class="col-12 col-lg-3 wow fadeInRight" data-wow-delay="0.4s">
        <div class="footer-head text"><?= lang($footer_descriptions, 'links') ?></div>
        <ul class="footer-links">
          <?php foreach($subpages as $subpage): ?>
            <?php if($subpage->page != 'oferta'): ?>
              <li><a class="footer-link" href="<?= base(). $subpage->page ?>"><?= lang($subpage, 'title') ?></a></li>
              <?php else: ?>
                <li class="footer-link dropdown">
                  <a class="footer-link dropdown-toggle" href="#" id="footerOffer" role="button" data-toggle="dropdown" aria-expanded="false" >
                    <?= lang($subpage, 'title') ?>
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="footerOffer">
                    <?php foreach($dropdown_offers as $dropdown_offer): ?>
                      <li class="dropdown-li"><a class="dropdown-item" href="<?= base(). "oferta/$dropdown_offer->id/". slug(strip_tags(lang($dropdown_offer, 'title')))  ?>"><?= lang($dropdown_offer, 'title') ?></a></li>
                    <?php endforeach ?>

                  </ul>
                </li>
              <?php endif; ?>
            <?php endforeach ?>
          </ul>
        </div>

        <div class="col-12 col-lg-3 wow fadeInRight" data-wow-delay="0.5s">
          <div class="footer-head not-text"><?= lang($footer_descriptions, 'contact') ?></div>
          <ul class="footer-links contact">
            <li>
              <img class="lazy footer-icon" width="auto" height="20px" data-src="<?= file_url(). $header_icons['phone']->photo ?>" alt="<?= $header_icons['phone']->alt ?>">
              <a class="footer-link" href="tel:<?= $contact_settings->phone2 ?>"><?= $contact_settings->phone2 ?></a>,
              <a class="footer-link" href="tel:<?= $contact_settings->phone3 ?>"><?= $contact_settings->phone3 ?></a>
            </li>
            <li>
              <img class="lazy footer-icon" width="auto" height="20px" data-src="<?= file_url(). $header_icons['phone2']->photo ?>" alt="<?= $header_icons['phone2']->alt ?>">
              <a class="footer-link" href="tel:<?= $contact_settings->phone1 ?>"><?= $contact_settings->phone1 ?></a>
            </li>
            <li>
              <img class="lazy footer-icon" width="auto" height="20px" data-src="<?= file_url(). $header_icons['email']->photo ?>" alt="<?= $header_icons['email']->alt ?>">
              <a class="footer-link" href="mailto:<?= $contact_settings->email1 ?>"><?= $contact_settings->email1 ?></a>
            </li>
            <li>
              <img class="lazy footer-icon" width="auto" height="20px" data-src="<?= file_url(). $header_icons['address']->photo ?>" alt="<?= $header_icons['address']->alt ?>">
              <a target="_blank" class="footer-link" href="https://www.google.pl/maps/place/<?= $contact_settings->address. ' '. $contact_settings->zip_code. ' '. $contact_settings->city ?>/@51.1688673,16.1720203,17z/data=!3m1!4b1!4m5!3m4!1s0x470f0dec6911bfa9:0xe0596ae783dbdd4d!8m2!3d51.1688673!4d16.174209"><?= $contact_settings->address. ' '. $contact_settings->zip_code. ' '. $contact_settings->city ?></a>
            </li>
          </ul>
        </div>
        <div class="col-12 col-lg-3 pr-0 wow fadeInRight" data-wow-delay="0.6s">
          <div class="footer-head not-text"><?= lang($footer_descriptions, 'hours') ?></div>
          <div class="footer-description mb-2"><?= lang($hours_descriptions, 'description') ?></div>
          <?php foreach($hours as $hour): ?>
            <div class="d-flex justify-content-between mb-2">
              <div class="footer-description"><?= lang($hour, 'title') ?></div>
              <div class="footer-description bold"><?= lang($hour, 'subtitle') ?></div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
    <section class="adw-footer">
      <div class="adw-footer-content">Copyright © 2020 Projekt i realizacja <a target="_blank" href="https://agencjamedialna.pro/">AdAwards</a></div>
    </section>
  </footer>     

  <script type="text/javascript" src="<?= assets() ?>js/jquery.min.js"></script>
  <script type="text/javascript" src="<?= assets() ?>js/popper.min.js"></script>
  <script type="text/javascript" src="<?= assets() ?>js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?= assets() ?>js/mdb.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.3.0/dist/lazyload.min.js"></script>
  <script  type="text/javascript" src="<?= assets() ?>dist/lc_lightbox/lc_lightbox.lite.js"></script>
  <script async type="text/javascript" src="<?= assets() ?>dist/lc_lightbox/alloy_finger.min.js"></script>
  <script>

    [...document.getElementsByTagName('p')].forEach(p => {
      if(p.innerText == '') p.style.height = '1rem';
    })
    window.addEventListener("load", function(){
      window.cookieconsent.initialise({
        "palette": {
          "popup": {
            "background": "var(--success)",
            "text": "#fff"
          },
          "button": {
            "background": "var(--success)",
            "text": "white",
            "border": "2px solid var(--success)"
          }
        },
        "type": "opt-out",
        "content": {
          "message": "Nasza strona internetowa korzysta z plików cookie. Dzięki temu możemy zapewnić naszym użytkownikom satysfakcjonujące wrażenia z przeglądania naszej witryny i jej prawidłowe funkcjonowanie.",
          "dismiss": "Rozumiem",
          "deny": "",
          "allow": "Rozumiem",
          "link": "Czytaj więcej...",
          "href": "<?= file_url(). $settings->privace ?>"
        }
      })});
    </script>
  <!-- <?php if($this->uri->segment($_SESSION['lang'] != 'pl' ? 2 : 1) == 'o-nas'): ?>
    <script async src="<?= assets(). 'js/counter.js' ?>"></script>

    <script>
      $(document).ready(function() {
        var executed = false;
        var NavY = $('#counter_start').offset().top;
        var counterStart = function() {
          var ScrollY = $(window).scrollTop() + $(window).height();
          if (ScrollY > NavY && executed == false) {
            startWhen();
            executed = true;
          }
        };
        counterStart();
        $(window).scroll(function() {
          counterStart();
        });
      });
    </script>
    <?php endif; ?> -->
    <script>
      $( document ).ready(function() {
        new WOW().init();
        $('.carousel').carousel({
          pause: "false"
        });
      });
      var lazyLoadInstance = new LazyLoad({});
    </script>

    <script>

     <?php if($this->uri->segment($_SESSION['lang'] != 'pl' ? 2 : 1) == '' || $this->uri->segment($_SESSION['lang'] != 'pl' ? 2 : 1) == 'realizacje'): ?>
     $(document).ready(function() {
      <?php foreach($realizations as $realization): ?>
        lc_lightbox('.elem-<?= $realization->id  ?>', {
          wrap_class: 'lcl_fade_oc',
          gallery: true,
          thumb_attr: 'data-lcl-thumb',
          skin: 'minimal',
          radius: 0,
          padding: 0,
          border_w: 0,
          title_attr: 'data-lcl-title',
          txt_attr: 'data-lcl-txt'
        });
      <?php endforeach; ?>
    });
   <?php endif; ?>
 </script>
 <?php if(!$this->uri->segment($_SESSION['lang'] != 'pl' ? 2 : 1) || $this->uri->segment($_SESSION['lang'] != 'pl' ? 2 : 1) == 'kontakt'): ?>
 <script async defer src="https://www.google.com/recaptcha/api.js?render=<?= $settings->captcha ?>"></script>
 <script async>
  $('#contact-form').submit(function(event) {
    event.preventDefault();
    grecaptcha.ready(function() {
      grecaptcha.execute('<?= $settings->captcha ?>', {action: 'mailer/send'}).then(function(token) {
        $('#contact-form').prepend(`<input type="hidden" name="token" value="${token}">`);
        $('#contact-form').unbind('submit').submit();
      });;
    });
  });
</script>
<?php endif; ?>
</body>
</html>