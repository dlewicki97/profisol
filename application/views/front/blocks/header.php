 <header>
 	<div class="header-contact flex-wrap">
 		<div class="col-12 col-lg-3 px-0"><?= lang($header_descriptions, 'title') ?></div>

 		<div class="d-flex justify-content-lg-end justify-content-start col-12 col-lg-9 flex-wrap px-0">
 			<a class="header-contact-link" href="tel:<?= $contact_settings->phone1 ?>">
 				<div><img class="header-contact-icon " src="<?= file_url(). $header_icons['phone']->photo ?>" alt="<?= $header_icons['phone']->alt ?>"><?= $contact_settings->phone1 ?></div>
 			</a>
 			<a class="header-contact-link" href="mailto:<?= $contact_settings->email1 ?>">
 				<div><img class="header-contact-icon lazy" data-src="<?= file_url(). $header_icons['email']->photo ?>" alt="<?= $header_icons['email']->alt ?>"><?= $contact_settings->email1 ?></div>
 			</a>
 			<a class="header-contact-link" target="_blank" href="https://www.google.pl/maps/place/<?= $contact_settings->address. ' '. $contact_settings->zip_code. ' '. $contact_settings->city ?>/@51.1688673,16.1720203,17z/data=!3m1!4b1!4m5!3m4!1s0x470f0dec6911bfa9:0xe0596ae783dbdd4d!8m2!3d51.1688673!4d16.174209">
 				<div><img class="header-contact-icon lazy" data-src="<?= file_url(). $header_icons['address']->photo ?>" alt="<?= $header_icons['address']->alt ?>"><?= $contact_settings->address. ' '. $contact_settings->zip_code. ' '. $contact_settings->city ?></div>
 			</a>
 		</div>
 	</div>

 	<nav class="navbar navbar-expand-lg navbar-light">
 		<div class="container-fluid px-0">
 			<a class="navbar-brand" href="<?= base() ?>"><img class="logo lazy" data-src="<?= file_url(). $settings->logo ?>" alt="logo"></a>

 			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
 				<i class="fas fa-bars"></i>
 			</button>

 			<div class="collapse navbar-collapse" id="navbarSupportedContent">
 				<ul class="navbar-nav mt-4 mt-lg-0 ml-lg-auto ml-0 mb-2 mr-auto mr-lg-0 mb-lg-0">
 					<?php foreach($subpages as $i => $subpage): ?>
 						<?php if($subpage->page != 'oferta'): ?>
 							<li class="nav-item">
 								<a class="nav-link <?= $subpage->page != $this->uri->segment($_SESSION['lang'] != 'pl' ? 2 : 1) ?: 'active' ?>" href="<?= base(). $subpage->page ?>"><?= lang($subpage, 'title') ?></a>
 							</li>
 							<?php else: ?>

 								<li class="nav-item dropdown">
 									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false" >
 										<?= lang($subpage, 'title') ?>
 									</a>
 									<ul class="dropdown-menu header" aria-labelledby="navbarDropdown">
 										<?php foreach($dropdown_offers as $dropdown_offer): ?>
 											<li class="dropdown-li"><a class="dropdown-item" href="<?= base(). "oferta/$dropdown_offer->id/". slug(strip_tags(lang($dropdown_offer, 'title')))  ?>"><?= lang($dropdown_offer, 'title') ?></a></li>
 										<?php endforeach ?>

 									</ul>
 								</li>
 							<?php endif; ?>
 						<?php endforeach; ?>

 						<li class="nav-item ml-5">
 							<a class="nav-link" href="<?= base(). 'lang/pl' ?>"><img class="lazy" style="border: 1px solid rgba(0,0,0,.3);" height="20px" data-src="<?= assets(). 'img/poland.png' ?>" alt=""></a>
 						</li>

 						<li class="nav-item">
 							<a class="nav-link" href="<?= base(). 'lang/en' ?>"><img class="lazy" style="border: 1px solid rgba(0,0,0,.3);" height="20px" data-src="<?= assets(). 'img/great_britain.png' ?>" alt=""></a>
 						</li>

 					</ul>


 				</div>
 			</div>
 		</nav>
 		<?php if($this->uri->segment($_SESSION['lang'] != 'pl' ? 2 : 1)): ?>
 			<div class="bg-picture lazy banner" data-bg="<?= file_url(). $current_subpage->photo ?>" title="<?= $current_subpage->alt ?>">
 				<div class="mask">
 					<?= $this->uri->segment($_SESSION['lang'] != 'pl' ? 3 : 2) ? strtoupper($meta_title) : lang($current_subpage, 'title') ?>
 					<?php if($this->uri->segment($_SESSION['lang'] != 'pl' ? 3 : 2)): ?>
 						<div class="custom-breadcrumb">
 							<div class="breadcrumb-category"><?= strtoupper($this->uri->segment($_SESSION['lang'] != 'pl' ? 2 : 1)) ?></div>
 							<div>/</div> 
 							<div class="breadcrumb-page"><?= strtoupper($meta_title) ?></div>
 						</div>
 					<?php endif; ?>
 				</div>
 			</div>
 		<?php endif; ?>

 		<?php if($this->session->flashdata('flashdata')) echo $this->session->flashdata('flashdata') ?>
 	</header>