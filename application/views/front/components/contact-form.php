<section class="contact-form">
  <form id="contact-form" method="POST" action="<?= base(). 'mailer/send' ?>">
    <h2 class="section-title text-left"><?= lang($contact_descriptions, 'title') ?></h2>
    <div class="section-title-separator mr-auto mb-3" style="background-color: var(--blue); height: 3px"></div>

    <div class="d-flex flex-wrap">
      <div class="col-12 col-lg-6 pl-0 pr-0 pr-lg-3 wow fadeInLeft" data-wow-delay="0.3s">
        <div class="md-form mt-0 ">
          <input type="text" required id="name" required name="name" placeholder="<?= lang($contact_descriptions, 'name') ?>" class="form-control custom-input">
        </div>
        <div class="md-form mt-0 ">
          <input required type="email" id="email" required name="email" placeholder="<?= lang($contact_descriptions, 'email') ?>" class="form-control custom-input">
        </div>
        <div class="md-form mt-0 ">
          <input required type="text" id="phone" required name="phone" placeholder="<?= lang($contact_descriptions, 'phone') ?>" class="form-control custom-input">
        </div>
        <div class="md-form my-0" style="margin-bottom: 0!important">
          <input required type="text"  disabled placeholder="<?= lang($contact_descriptions, 'message') ?>" class="form-control mb-0 custom-input">
          <textarea required class="custom-textarea w-100 d-block" name="message" rows="4"></textarea>
        </div>

      </div>
      <?php if(!$this->uri->segment($_SESSION['lang'] != 'pl' ? 2 : 1)): ?>
        <div class="col-12 col-lg-6 pr-0 pl-lg-3 d-none d-lg-flex wow fadeInRight" data-wow-delay="0.3s">
          <iframe src="<?= $contact_settings->map ?>" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="col-12 col-lg-6 pl-0 pr-0 pr-lg-3 wow fadeInLeft" data-wow-delay="0.3">
          <button class="button success large my-3" style="padding-right: 2.5rem; padding-left: 2.5rem; border: 2px solid var(--success)"><?= lang($contact_descriptions, 'button_name') ?></button>
          <div class="custom-control custom-checkbox p-0 mb-2">
            <input type="checkbox" required name="rodo1" class="form-check-input" id="rodo1">
            <label class="form-check-label text-white checkbox-label" for="rodo1"><?= $settings->rodo ?></label>
          </div>
          <div class="custom-control custom-checkbox p-0">
            <input type="checkbox" required name="rodo2" class="form-check-input" id="rodo2">
            <label class="form-check-label text-white checkbox-label" for="rodo2"><?= $settings->rodo_tel ?></label>
          </div>
        </div>
        <div class="col-12 col-lg-6 pr-0 pl-0 pl-lg-3 d-flex d-lg-none">
          <iframe src="<?= $contact_settings->map ?>" width="100%" height="400px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <?php elseif($this->uri->segment($_SESSION['lang'] != 'pl' ? 2 : 1) == 'kontakt'): ?>
          <div class="col-12 col-lg-6 pl-0 pr-0 pr-lg-3 wow fadeInLeft d-block d-lg-none" data-wow-delay="0.3">
            <button class="button success large my-3" style="padding-right: 2.5rem; padding-left: 2.5rem; border: 2px solid var(--success)"><?= lang($contact_descriptions, 'button_name') ?></button>
            <div class="custom-control custom-checkbox p-0 mb-2">
              <input type="checkbox" required name="rodo1" class="form-check-input" id="rodo1a">
              <label class="form-check-label text-white checkbox-label" for="rodo1a"><?= $settings->rodo ?></label>
            </div>
            <div class="custom-control custom-checkbox p-0">
              <input type="checkbox" required name="rodo2" class="form-check-input" id="rodo2a">
              <label class="form-check-label text-white checkbox-label" for="rodo2a"><?= $settings->rodo_tel ?></label>
            </div>
          </div>
          <div class="col-12 col-lg-4 ml-auto pr-0 pl-lg-3 mt-4 mt-lg-0 flex-column wow fadeInRight contact-data" data-wow-delay="0.3s">
            <div class="d-flex mb-4">
              <div><img class="contact-form-main-icon lazy"   data-src="<?= file_url(). $header_icons['address']->photo ?>" alt="<?= $header_icons['address']->alt ?>"></div>
              <div>
                <h4 class="contact-form-title"><?= lang($contact_descriptions, 'address') ?></h4>
                <div><a target="_blank" class="d-flex flex-column address" href="https://www.google.pl/maps/place/<?= $contact_settings->address. ' '. $contact_settings->zip_code. ' '. $contact_settings->city ?>/@51.1688673,16.1720203,17z/data=!3m1!4b1!4m5!3m4!1s0x470f0dec6911bfa9:0xe0596ae783dbdd4d!8m2!3d51.1688673!4d16.174209">
                  <div><?= $contact_settings->address ?></div>
                  <div><?= $contact_settings->zip_code. ' '. $contact_settings->city ?></div>
                </a></div>
              </div>
            </div>

            <div class="d-flex mb-4">
              <div><img class="contact-form-main-icon lazy"   data-src="<?= file_url(). $header_icons['phone']->photo ?>" alt="<?= $header_icons['phone']->alt ?>"></div>
              <div>
                <h4 class="contact-form-title"><?= lang($contact_descriptions, 'phone_us') ?></h4>
                <div class="d-flex flex-column phones">
                  <a href="tel:<?= $contact_settings->phone2 ?>"><?= $contact_settings->phone2 ?></a> 
                  <a href="tel:<?= $contact_settings->phone3 ?>"><?= $contact_settings->phone3 ?></a>
                </div>
              </div>
            </div>

            <div class="d-flex mb-4">
              <div><img class="contact-form-main-icon lazy"   data-src="<?= file_url(). $header_icons['facebook']->photo ?>" alt="<?= $header_icons['facebook']->alt ?>"></div>
              <div>
                <h4 class="contact-form-title"><?= lang($contact_descriptions, 'socials') ?></h4>
                <div class="d-flex">
                  <?php foreach($social_icons as $icon): ?>
                  <div class="social-contact-icon-container">
                    <a  target="_blank" href="<?= $icon->link ?>">
                      <img class="social-contact-icon" src="<?= file_url(). $icon->photo ?>" alt="<?= $icon->alt ?>">
                    </a>
                  </div>
                <?php endforeach; ?>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 pl-0 pr-0 pr-lg-3 wow fadeInLeft d-none d-lg-block" data-wow-delay="0.3">
            <button class="button success large my-3" style="padding-right: 2.5rem; padding-left: 2.5rem; border: 2px solid var(--success)"><?= lang($contact_descriptions, 'button_name') ?></button>
            <div class="custom-control custom-checkbox p-0 mb-2">
              <input type="checkbox" required name="rodo1" class="form-check-input" id="rodo1b">
              <label class="form-check-label text-white checkbox-label" for="rodo1b"><?= $settings->rodo ?></label>
            </div>
            <div class="custom-control custom-checkbox p-0">
              <input type="checkbox" required name="rodo2" class="form-check-input" id="rodo2b">
              <label class="form-check-label text-white checkbox-label" for="rodo2b"><?= $settings->rodo_tel ?></label>
            </div>
          </div>
        <?php endif; ?>

      </div>
    </form>
  </section>