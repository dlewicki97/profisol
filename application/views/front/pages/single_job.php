<section class="single-job">
	<?php if(!empty($jobs_requirements)): ?>
		<div class="d-flex flex-wrap wow fadeInRight" data-wow-delay="0.3s">
			<div class="col-12 col-lg-6 pl-0 pl-lg-4 d-flex d-lg-none mb-3">
				<div class="bg-picture lazy" title="<?= $job->alt3 ?>" data-bg="<?= file_url(). $job->photo3 ?>"></div>
			</div>
			<div class="col-12 col-lg-6 pr-0 pr-lg-4">
				<h2 class="section-title text-left"><?= lang($jobs_descriptions, 'requirements') ?></h2>
				<div class="section-title-separator mr-auto"></div>
				<ul class="job-requirements">
					<?php foreach($jobs_requirements as $requirement): ?>
						<li><?= lang($requirement, 'title') ?></li>
					<?php endforeach; ?>
				</ul>
			</div>
			<div class="col-12 col-lg-6 pl-0 pl-lg-4 d-none d-lg-flex">
				<div class="bg-picture lazy" title="<?= $job->alt3 ?>" data-bg="<?= file_url(). $job->photo3 ?>"></div>
			</div>
		</div>
	<?php endif; ?>

	<?php if($job->hours): ?>
		<div class="d-flex flex-wrap bg-grey wow fadeInLeft" data-wow-delay="0.3s">
			<div class="col-12 col-lg-6 pr-0 pr-lg-4 mb-3 mb-lg-0">
				<div class="bg-picture lazy" title="<?= $job->alt2 ?>" data-bg="<?= file_url(). $job->photo2 ?>"></div>
			</div>
			<div class="col-12 col-lg-6 pl-0 pl-lg-4">
				<h2 class="section-title text-left text-lg-right"><?= lang($jobs_descriptions, 'hours') ?></h2>
				<div class="section-title-separator ml-0 ml-lg-auto mr-auto mr-lg-0"></div>
				<div class="text-left text-lg-right single-job-description"><?= lang($job, 'hours') ?></div>
			</div>
		</div>
	<?php endif; ?>

	<?php if($job->earnings): ?>
		<div class="d-flex flex-wrap wow fadeInRight" data-wow-delay="0.3s">
			<div class="col-12 col-lg-6 pl-0 pl-lg-4 d-flex d-lg-none mb-3">
				<div class="bg-picture lazy" title="<?= $job->alt ?>" data-bg="<?= file_url(). $job->photo ?>"></div>
			</div>
			<div class="col-12 col-lg-6 pr-0 pr-lg-4">
				<h2 class="section-title text-left"><?= lang($jobs_descriptions, 'earnings') ?></h2>
				<div class="section-title-separator mr-auto"></div>
				<div class="single-job-description"><?= lang($job, 'earnings') ?></div>
			</div>
			<div class="col-12 col-lg-6 pl-0 pl-lg-4 d-none d-lg-flex">
				<div class="bg-picture lazy" title="<?= $job->alt ?>" data-bg="<?= file_url(). $job->photo ?>"></div>
			</div>
		</div>
	<?php endif; ?>
	

</section>