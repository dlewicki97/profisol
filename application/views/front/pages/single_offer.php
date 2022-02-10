<section class="single-offer">
	<div class="d-flex flex-wrap wow fadeInRight" data-wow-delay="0.3s">
		<div class="col-12 col-lg-6 pl-0 pl-lg-4 d-flex d-lg-none position-relative">

			<?php if($video): ?>
				<?php
				$full_path = explode('/', $video->full_path);
				$path = $full_path[count($full_path) - 2] . '/'. $full_path[count($full_path) - 1];
				?>
				<video class="offer-video lazy" data-src="<?= file_url(). $path ?>"></video>
				<div class="play-container">
					<img class="lazy play" data-src="<?= file_url(). $offers_descriptions->photo4 ?>" alt="<?= $offers_descriptions->alt4 ?>">
				</div>
				<img class="lazy fullscreen" data-src="<?= file_url(). $offers_descriptions->photo5 ?>" alt="<?= $offers_descriptions->alt5 ?>">
				<?php else: ?>
					<div class="offers-photos w-100">
						<div class="bg-picture lazy h-<?= $offer->photo2 ? '50' : '100' ?>" title="<?= $offer->alt ?>" data-bg="<?= file_url(). $offer->photo ?>"></div>
						<?php if($offer->photo2): ?>
							<div class="bg-picture lazy h-50" title="<?= $offer->alt2 ?>" data-bg="<?= file_url(). $offer->photo2 ?>"></div>
						<?php endif; ?>
					</div>
				<?php endif; ?>
			</div>
			<div class="col-12 col-lg-6 pr-0 pr-lg-4 mt-3 mt-lg-0">
				<h2 class="section-title text-left"><?= lang($offer, 'title_description') ?></h2>
				<div class="section-title-separator mr-auto"></div>
				<div class="single-job-description"><?= lang($offer, 'description') ?></div>
			</div>
			<div class="col-12 col-lg-6 pl-0 pl-lg-4 d-none d-lg-flex position-relative">
				<?php if($video): ?>
					<?php
					$full_path = explode('/', $video->full_path);
					$path = $full_path[count($full_path) - 2] . '/'. $full_path[count($full_path) - 1];
					?>
					<video class="offer-video lazy" data-src="<?= file_url(). $path ?>"></video>
					<div class="play-container">
						<img class="lazy play" data-src="<?= file_url(). $offers_descriptions->photo4 ?>" alt="<?= $offers_descriptions->alt4 ?>">
					</div>
					<img class="lazy fullscreen" data-src="<?= file_url(). $offers_descriptions->photo5 ?>" alt="<?= $offers_descriptions->alt5 ?>">
					<?php else: ?>
						<div class="h-100 w-100">
							<div class="bg-picture lazy h-<?= $offer->photo2 ? '50' : '100' ?>" title="<?= $offer->alt ?>" data-bg="<?= file_url(). $offer->photo ?>"></div>
							<?php if($offer->photo2): ?>
							<div class="bg-picture lazy h-50" title="<?= $offer->alt2 ?>" data-bg="<?= file_url(). $offer->photo2 ?>"></div>
							<?php endif; ?>
						</div>
					<?php endif; ?>
				</div>
				<?php if($offer->button_name): ?>
					<div class="col-12 col-lg-6 pr-0 pr-lg-4">
						<a download class="text-white" href="<?= file_url(). $offer->file ?>">
							<button class="button yellow w-100 d-flex align-items-center justify-content-center">
								<?= lang($offer, 'button_name') ?>
								<img class="download-icon lazy pl-2" data-src="<?= file_url(). $offers_descriptions->photo ?>" alt="<?= $offers_descriptions->alt ?>">
							</button>
						</a>
					</div>
				<?php endif; ?>
			</div>

			<div class="d-flex flex-wrap offer-special-section">
				<div class="w-100">
					<h2 class="section-title text-center"><?= lang($offers_descriptions, 'special') ?></h2>
					<div class="section-title-separator mx-auto"></div>
				</div>
				<?php foreach($offers_specials as $i => $special): ?>
					<?php if($i%2==0): ?>
						<div class="col-12 col-lg-6 wow fadeInLeft d-flex d-lg-none" data-wow-delay="0.3s">
							<div class="bg-picture lazy special-photo" data-bg="<?= file_url(). $special->photo ?>"></div>
						</div>
						<div class="col-12 col-lg-6 wow fadeInLeft mb-5 mb-lg-0" data-wow-delay="0.3s">
							<h2 class="offer-special-title text-center blue"><?= implode('<br>', explode(' ', lang($special, 'title'))) ?></h2>
							<div class="offers-specials-list">
								<?php foreach($offers_specials_list[$special->id] as $item): ?>
									<div>
										<div class="square mr-5"></div>
										<div><?= lang($item, 'title') ?></div>
									</div>
								<?php endforeach; ?>
							</div>
						</div>
						<div class="col-12 col-lg-6 wow fadeInLeft d-none d-lg-flex" data-wow-delay="0.3s">
							<div class="bg-picture lazy special-photo" data-bg="<?= file_url(). $special->photo ?>"></div>
						</div>
						<?php else: ?>
							<div class="col-12 col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
								<div class="bg-picture lazy special-photo" data-bg="<?= file_url(). $special->photo ?>"></div>
							</div>
							<div class="col-12 col-lg-6 text-right wow fadeInRight" data-wow-delay="0.3s">
								<h2 class="offer-special-title text-center green"><?= implode('<br>', explode(' ', lang($special, 'title'))) ?></h2>
								<div class="offers-specials-list invert">
									<?php foreach($offers_specials_list[$special->id] as $item): ?>
										<div>
											<div><?= lang($item, 'title') ?></div>
											<div class="square ml-5"></div>
										</div>
									<?php endforeach; ?>
								</div>
							</div>
						<?php endif; ?>
					<?php endforeach; ?>
				</div>

				<div class="d-flex flex-wrap">
					<div id="carouselExampleControls" class="carousel slide w-100 wow fadeInRight" data-wow-delay="0.3s" data-ride="carousel">
						<div class="carousel-inner">

							<?php $i=0; foreach ($gallery as $photo):?>
							<div class="carousel-item <?= ($i == 0 ? 'active' : '') ?> ">
								<div class="lazy bg-picture offer-slider-photo" data-bg="<?= file_url(). $photo->photo ?>"></div>
							</div>
							<?php $i++; endforeach; ?>
						</div>
						<div class="offer-slider-controls">
							<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
								<img class="slider-control lazy" data-src="<?= file_url(). $offers_descriptions->photo2 ?>" alt="<?= $offers_descriptions->alt2 ?>">
							</a>
							<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
								<img class="slider-control lazy" data-src="<?= file_url(). $offers_descriptions->photo3 ?>" alt="<?= $offers_descriptions->alt3 ?>">
							</a>
						</div>
					</div>


				</div>
			</section>


			<script>
				function setClasses(video, playContainer) {
					if(video.paused) {
						playContainer.classList.remove('d-none');
						video.style.cursor = 'unset';
					} else {
						playContainer.classList.add('d-none');

						video.style.cursor = 'pointer';
					}
				}

				let videos = [...document.getElementsByTagName('video')];

				videos.forEach((video, i) => {
					console.log(video.paused)
					let playContainer = document.getElementsByClassName('play-container')[i];

					playContainer.addEventListener('click', () => {video.play(); setClasses(video, playContainer)});
					video.addEventListener('click', () => {video.pause(); setClasses(video, playContainer)});

					let fullscreen = document.getElementsByClassName('fullscreen')[i];

					fullscreen.addEventListener('click', () => {
						if (video.requestFullscreen) {
							video.requestFullscreen();
						} else if (video.webkitRequestFullscreen) { 
							video.webkitRequestFullscreen();
						} else if (video.msRequestFullscreen) {
							video.msRequestFullscreen();
						}
					})
				})


			</script>