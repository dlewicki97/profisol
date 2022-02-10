<section class="news-page">
	<div id="carousel-example-1z" class="carousel slide d-flex w-100" data-ride="carousel">
		<div class="carousel-control">
			<a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
				<img class="lazy" data-src="<?= file_url(). $news_descriptions->photo2 ?>" alt="<?= $news_descriptions->alt2 ?>">
			</a>
		</div>
		<div class="carousel-inner" role="listbox">
			<?php for($j=0 ; $j<$news_length/6 ; $j++): ?>
				<div class="carousel-item <?php if($j == 0) echo 'active' ?>">
					<div class="d-flex flex-wrap news-row">
						<?php setlocale(LC_TIME, "pl_PL"); date_default_timezone_set('Europe/Warsaw'); $row=0; for($i=0; $i<count($news[$j]) ; $i++): ?>
						<div data-wow-delay="<?= 0.3 + $row/10  ?>s" class="col-12 mb-4 col-lg-4 news-col wow fadeInRight">
							<div class="bg-picture lazy news-photo" title="<?= $news[$j][$i]->title ?>" data-bg="<?= file_url(). $news[$j][$i]->photo ?>">
								<div class="mask">
									<div class="news-date-month"><?= format_month(date("m",strtotime($news[$j][$i]->created))) ?></div>
									<div class="news-date-separator"></div>
									<div class="news-date-day"><?= date("d",strtotime($news[$j][$i]->created)) ?></div>
								</div>
							</div>
							<h4 class="news-title"><?= lang($news[$j][$i], 'title') ?></h4>
							<div class="news-subtitle"><?= lang($news[$j][$i], 'subtitle') ?></div>
							<a href="<?= base(). 'aktualnosci/'. $news[$j][$i]->id. '/'. slug(strip_tags(lang($news[$j][$i], 'title'))) ?>">
								<button class="button non-outline blue" style="padding-left: 2.1rem; padding-right: 2.1rem"><?= lang($news[$j][$i], 'button_name') ?></button>
							</a>
						</div>

						<?php if($row==2) $row=0; else $row++; endfor; ?>
					</div>
				</div>
			<?php endfor; ?>
		</div>
		<div class="carousel-control">
			<a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
				<img class="lazy" data-src="<?= file_url(). $news_descriptions->photo ?>" alt="<?= $news_descriptions->alt ?>">
			</a>
		</div>
	</div>

	</section>