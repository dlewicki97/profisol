<section class="single-news bg-grey">
	<div class="d-flex flex-wrap news-row">
		<?php setlocale(LC_TIME, "pl_PL"); date_default_timezone_set('Europe/Warsaw');  ?>
		<div data-wow-delay="0.3s" class="col-12 mb-4 news-col wow fadeInRight">
			<div class="bg-picture lazy news-photo single" title="<?= $news->title ?>" data-bg="<?= file_url(). $news->photo ?>">
				<div class="mask">
					<div class="news-date-month"><?= format_month(date("m",strtotime($news->created))) ?></div>
					<div class="news-date-separator"></div>
					<div class="news-date-day"><?= date("d",strtotime($news->created)) ?></div>
				</div>
			</div>
			
		</div>

		<div class="col-12 p-0">
			<h3 class="single-news-subtitle"><?= lang($news, 'subtitle') ?></h3>

			<div class="news-description"><?= lang($news, 'description') ?></div>
		</div>	

	</div>
</section>