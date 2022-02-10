<section class="jobs-page">
	<div class="d-flex flex-wrap">
		<?php foreach($jobs as $i => $job): ?>
			<div class="col-12 col-lg-4 wow fadeInLeft p-0 p-lg-3 mb-5 mb-lg-0" data-wow-delay="<?= 0.3 + $i/10 ?>s ">
				<div class="bg-picture lazy job-photo" title="<?= $job->alt ?>" data-bg="<?= file_url(). $job->photo ?>"></div>
				<h4 class="job-title"><?= lang($job, 'work_place') ?></h4>
				<div class="job-short-description"><?= lang($job, 'short_description') ?></div>
				<div>
					<a class="mr-2" href="<?= base(). 'kontakt' ?>"><button class="button success"><?= lang($job, 'button_name1') ?></button></a>
					<a href="<?= base(). "praca/$job->id/". slug(strip_tags(lang($job, 'work_place'))) ?>"><button class="button blue outline"><?= lang($job, 'button_name2') ?></button></a>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</section>