<main>
  <section class="slider">
    <div id="carousel-example-1z" class="carousel slide carousel-fade " data-ride="carousel">
      <ol class="carousel-indicators">
        <?php foreach($slider as $i => $slide): ?>
          <li class="bg-ad <?php if($i == 0) echo 'active' ?>" data-target="#carousel-example-1z" data-slide-to="<?= $i ?>"></li>
        <?php endforeach; ?>
      </ol>
      <div class="carousel-inner" role="listbox">
        <?php foreach($slider as $i => $slide): ?>
          <div class="carousel-item <?php if($i == 0) echo 'active' ?>">
            <div class="bg-picture d-flex align-items-center banner-img lazy" data-bg="<?= file_url(). $slide->photo ?>.webp">
              <div class="col-12 col-lg-7 slider-column wow fadeInDown" data-wow-delay="0.3s">
                <h1 class="slider-title"><?= lang($slide, 'title') ?></h1>
                <div class="slider-description"><?= lang($slide, 'description') ?></div>
                <a class="mr-3 mb-2" href="<?= base(). strip_tags($slide->link1) ?>">
                  <button class="button success mb-2"><?= lang($slide, 'button_name1') ?></button>
                </a>
                <a href="<?= base(). strip_tags($slide->link2) ?>">
                  <button class="button white outline"><?= lang($slide, 'button_name2') ?></button>
                </a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <!-- <section class="contact-us">
    <div class="contact-us-title"><?= lang($under_slider, 'title') ?></div>
    <a href="<?= base(). $under_slider->link ?>">
      <button class="button success"><?= lang($under_slider, 'button_name') ?></button>
    </a>
  </section> -->

  <section class="about">
    <h2 class="section-title"><?= lang($about, 'title') ?></h2>
    <div class="section-title-separator mx-auto"></div>

    <div class="d-flex flex-wrap">
      <div class="col-12 col-lg-6 wow fadeInLeft pr-0 pr-lg-5" data-wow-delay="0.3s">
        <div class="about-description"><?= lang($about, 'description') ?></div>
        <a href="<?= base(). $about->link ?>">
          <button class="button outline blue"><?= lang($about, 'button_name') ?></button>
        </a>
      </div>
      <div class="col-12 col-lg-6 position-relative pt-4 pt-lg-0 wow fadeInRight" data-wow-delay="0.3s">
        <img class="about-photo first lazy mb-3 mb-lg-0" data-src="<?= file_url(). $about->photo ?>" alt="<?= $about->alt ?>">
        <img class="about-photo second lazy" data-src="<?= file_url(). $about->photo2 ?>" alt="<?= $about->alt2 ?>">
      </div>
    </div>
  </section>

  <section class="offers">
    <div class="d-flex flex-wrap">
      <?php foreach($offers as $i => $offer): ?>
        <a data-wow-delay="<?= 0.3 + $i/10  ?>s" class="col-12 wow fadeInRight offer-col col-lg-3 text-center pt-3" href="<?= base(). "oferta/$offer->id/". slug(strip_tags(lang($offer, 'title'))) ?>">
          <div >
            <div class="bg-picture lazy offer-photo" data-bg="<?= file_url(). $offer->photo ?>"></div>
            <h4 class="offer-title"><?= lang($offer, 'title') ?></h4>
            <div class="offer-description"><?= substr(lang($offer, 'description'), 0, 100). '...' ?></div>
          </div>
        </a>
      <?php endforeach; ?>
    </div>
    <!-- <div class="text-center w-100 mt-4">
      <a href="<?= base(). 'oferta' ?>">
        <button class="button non-outline blue"><?= lang($offers_descriptions, 'button_name') ?></button>
      </a>
    </div> -->
  </section>

  <section class="realizations">
    <h2 class="section-title"><?= lang($realizations_descriptions, 'title') ?></h2>
    <div class="section-title-separator mx-auto"></div>

    <div class="d-flex flex-wrap">
      <div class="col-12 col-lg-4 pl-0 pr-0 pr-lg-3 wow fadeInLeft" data-wow-delay="0.3s">
        <div class="bg-picture lazy realizations-categories-photo first" title="<?= $realizations[0]->alt ?>" data-bg="<?= file_url(). $realizations[0]->photo ?>">
          <a data-lcl-title="<?= $realizations[0]->title ?>" data-lcl-txt="<?= $realizations[0]->subtitle ?>" class="elem-<?= $realizations[0]->id ?>" href="<?= file_url(). $realizations[0]->photo ?>">
            <div class="mask">
              <h4 class="realizations-title"><?= lang($realizations[0], 'title') ?></h4>
              <div class="realizations-subtitle"><?= lang($realizations[0], 'subtitle') ?></div>
              <img class="lazy" width="auto" height="20px" data-src="<?= file_url(). $realizations_descriptions->photo ?>" alt="<?= $realizations_descriptions->alt ?>">
            </div>
          </a>
        </div>
      </div>

      <div class="col-12 col-lg-4 px-0 px-lg-3 wow fadeIn" data-wow-delay="0.3s" data-wow-offset="300" data-wow-duration="3s">
        <div class="second">
          <div class="bg-picture lazy realizations-categories-photo" title="<?= $realizations[1]->alt ?>" data-bg="<?= file_url(). $realizations[1]->photo ?>">
            <a data-lcl-title="<?= $realizations[1]->title ?>" data-lcl-txt="<?= $realizations[1]->subtitle ?>" class="elem-<?= $realizations[1]->id ?>" href="<?= file_url(). $realizations[1]->photo ?>">
              <div class="mask">
                <h4 class="realizations-title"><?= lang($realizations[1], 'title') ?></h4>
                <div class="realizations-subtitle"><?= lang($realizations[1], 'subtitle') ?></div>
                <img class="lazy" width="auto" height="20px" data-src="<?= file_url(). $realizations_descriptions->photo ?>" alt="<?= $realizations_descriptions->alt ?>">
              </div>
            </a>
          </div>
        </div>
        <div class="third">
          <div class="bg-picture lazy realizations-categories-photo" title="<?= $realizations[2]->alt ?>" data-bg="<?= file_url(). $realizations[2]->photo ?>">
            <a data-lcl-title="<?= $realizations[2]->title ?>" data-lcl-txt="<?= $realizations[2]->subtitle ?>" class="elem-<?= $realizations[2]->id ?>" href="<?= file_url(). $realizations[2]->photo ?>">
              <div class="mask">
                <h4 class="realizations-title"><?= lang($realizations[2], 'title') ?></h4>
                <div class="realizations-subtitle"><?= lang($realizations[2], 'subtitle') ?></div>
                <img class="lazy" width="auto" height="20px" data-src="<?= file_url(). $realizations_descriptions->photo ?>" alt="<?= $realizations_descriptions->alt ?>">
              </div>
            </a>
          </div>
        </div>
      </div>

      <div class="col-12 col-lg-4 pr-0 pl-0 pl-lg-3 wow fadeInRight" data-wow-delay="0.3s">
        <div class="fourth">
          <div class="bg-picture lazy realizations-categories-photo" title="<?= $realizations[3]->alt ?>" data-bg="<?= file_url(). $realizations[3]->photo ?>">
            <a data-lcl-title="<?= $realizations[3]->title ?>" data-lcl-txt="<?= $realizations[3]->subtitle ?>" class="elem-<?= $realizations[3]->id ?>" href="<?= file_url(). $realizations[3]->photo ?>">
              <div class="mask">
                <h4 class="realizations-title"><?= lang($realizations[3], 'title') ?></h4>
                <div class="realizations-subtitle"><?= lang($realizations[3], 'subtitle') ?></div>
                <img class="lazy" width="auto" height="20px" data-src="<?= file_url(). $realizations_descriptions->photo ?>" alt="<?= $realizations_descriptions->alt ?>">
              </div>
            </a>
          </div>
        </div>
        <div class="fifth">
          <div class="bg-picture lazy realizations-categories-photo" title="<?= $realizations[4]->alt ?>" data-bg="<?= file_url(). $realizations[4]->photo ?>">
            <a data-lcl-title="<?= $realizations[4]->title ?>" data-lcl-txt="<?= $realizations[4]->subtitle ?>" class="elem-<?= $realizations[4]->id ?>" href="<?= file_url(). $realizations[4]->photo ?>">
              <div class="mask">
                <h4 class="realizations-title"><?= lang($realizations[4], 'title') ?></h4>
                <div class="realizations-subtitle"><?= lang($realizations[4], 'subtitle') ?></div>
                <img class="lazy" width="auto" height="20px" data-src="<?= file_url(). $realizations_descriptions->photo ?>" alt="<?= $realizations_descriptions->alt ?>">
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="w-100 text-center  mt-4">
      <a href="<?= base(). 'realizacje' ?>">
        <button class="button non-outline blue"><?= lang($realizations_descriptions, 'button_name') ?></button>
      </a>
    </div>
    <?php foreach($realizations as $realization): ?>
      <?php foreach($realizations_galleries[$realization->id] as $gallery): ?>
        <a class="elem-<?= $realization->id ?>" href="<?= file_url(). $gallery->photo ?>"></a>
      <?php endforeach; ?>
    <?php endforeach; ?>
  </section>

  <section class="news">
    <h2 class="section-title"><?= lang($news_descriptions, 'title') ?></h2>
    <div class="section-title-separator mx-auto"></div>

    <div class="d-flex flex-wrap news-row">
      <?php setlocale(LC_TIME, "pl_PL"); date_default_timezone_set('Europe/Warsaw'); foreach($news as $i => $info): ?>
      <div data-wow-delay="<?= 0.3 + $i/10  ?>s" class="col-12 col-lg-4 news-col wow fadeInRight <?php if($i==0) echo 'pl-0'; elseif($i==count($news)-1) echo 'pr-0' ?>">
        <div class="bg-picture lazy news-photo" title="<?= $info->alt ?>" data-bg="<?= file_url(). $info->photo ?>">
          <div class="mask">
            <div class="news-date-month"><?= format_month(date("m",strtotime($info->created))) ?></div>
            <div class="news-date-separator"></div>
            <div class="news-date-day"><?= date("d",strtotime($info->created)) ?></div>
          </div>

        </div>

        <h4 class="news-title"><?= lang($info, 'title') ?></h4>
        <div class="news-subtitle"><?= lang($info, 'subtitle') ?></div>
        <a href="<?= base(). "aktualnosci/$info->id/". slug(lang($info, 'title')) ?>">
          <button class="button non-outline blue" style="padding-left: 2.1rem; padding-right: 2.1rem"><?= lang($info, 'button_name') ?></button>
        </a>
      </div>
    <?php endforeach; ?>
  </div>


</section>

<?php $this->load->view('front/components/contact-form') ?>
<section class="job">
  <div class="bg-picture lazy job-bg" title="<?= $jobs_descriptions->alt?>" data-bg="<?= file_url(). $jobs_descriptions->photo ?>">
    <h2 class="job-banner-title"><?= $jobs_descriptions->title ?></h2>
    <a href="<?= base(). $jobs_descriptions->link ?>">
      <button class="button success"><?= $jobs_descriptions->button_name ?></button>
    </a>
  </div>
</section>
</main>