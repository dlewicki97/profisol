<section class="about-page">
	<div class="d-flex flex-wrap wow fadeInRight" data-wow-delay="0.3s">
		<div class="col-12 col-lg-6 pl-0 pl-lg-4 d-flex d-lg-none mb-3">
			<div class="bg-picture lazy" title="<?= $about->alt3 ?>" data-bg="<?= file_url(). $about->photo3 ?>"></div>
		</div>
		<div class="col-12 col-lg-6 pr-0 pr-lg-4">
			<h2 class="section-title text-left"><?= lang($about_descriptions, 'company') ?></h2>
			<div class="section-title-separator mr-auto"></div>
			<div class="single-job-description"><?= lang($about, 'company') ?></div>
		</div>
		<div class="col-12 col-lg-6 pl-0 pl-lg-4 d-none d-lg-flex">
			<div class="bg-picture lazy" title="<?= $about->alt3 ?>" data-bg="<?= file_url(). $about->photo3 ?>"></div>
		</div>
	</div>
	<div class="d-flex flex-wrap bg-grey wow fadeInLeft" data-wow-delay="0.3s">
		<div class="col-12 col-lg-6 pr-0 pr-lg-4 mb-3 mb-lg-0">
			<div class="bg-picture lazy" title="<?= $about->alt4 ?>" data-bg="<?= file_url(). $about->photo4 ?>"></div>
		</div>
		<div class="col-12 col-lg-6 pl-0 pl-lg-4">
			<h2 class="section-title text-left text-lg-right"><?= lang($about_descriptions, 'employees') ?></h2>
			<div class="section-title-separator ml-0 ml-lg-auto mr-auto mr-lg-0"></div>
			<div class="text-left text-lg-right single-job-description"><?= lang($about, 'employees') ?></div>
		</div>
	</div>
	<div class="d-flex flex-wrap wow fadeInRight" data-wow-delay="0.3s">
		<div class="col-12 col-lg-6 pl-0 pl-lg-4 d-flex d-lg-none mb-3">
			<div class="bg-picture lazy" title="<?= $about->alt5 ?>" data-bg="<?= file_url(). $about->photo5 ?>"></div>
		</div>
		<div class="col-12 col-lg-6 pr-0 pr-lg-4">
			<h2 class="section-title text-left"><?= lang($about_descriptions, 'eq') ?></h2>
			<div class="section-title-separator mr-auto"></div>
			<div class="text-left single-job-description"><?= lang($about, 'eq') ?></div>
		</div>
		<div class="col-12 col-lg-6 pl-0 pl-lg-4 d-none d-lg-flex">
			<div class="bg-picture lazy" title="<?= $about->alt5 ?>" data-bg="<?= file_url(). $about->photo5 ?>"></div>
		</div>
	</div>
</section>

<section id="counter_start" class="statistics bg-picture lazy" title="<?= $statistics_descriptions->alt ?>" data-bg="<?= file_url(). $statistics_descriptions->photo ?>">
	<?php foreach($statistics as $stat): ?>
		<div class="text-center">
			<h1 class="counter_number timer count-number" data-to="<?php echo $stat->number; ?>" data-speed="1500"><?php echo $stat->number; ?></h1>
			<div class="statistics-title"><?php echo lang($stat, 'title'); ?></div>
		</div>
	<?php endforeach; ?>
</section>

