<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function loadRealizationsData() {
	$CI =& get_instance();
	$data = loadDefaultDataFront();
	
	$data['realizations_descriptions'] = $CI->back_m->get_one('realizations_descriptions', 1);
	$data['realizations'] = $CI->back_m->get_all('realizations');
	$data['realizations_categories'] = $CI->back_m->get_all('realizations_categories');
	$data['realizations_galleries'] = [];
	foreach ($data['realizations'] as $realization) {
		$data['realizations_galleries'][$realization->id] = $CI->back_m->get_images('gallery', 'realizations', $realization->id);
	}


	return $data;
}