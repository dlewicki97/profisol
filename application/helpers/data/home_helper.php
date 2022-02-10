<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function loadHomeData() {
	$CI =& get_instance();
	$data = loadDefaultDataFront();

	$data['slider'] = $CI->back_m->get_all('slider');
	$data['about'] = $CI->back_m->get_one('about', 1);
	$data['offers'] = $CI->back_m->get_all('offers');
	$data['realizations_descriptions'] = $CI->back_m->get_one('realizations_descriptions', 1);
	// $data['realizations'] = $CI->back_m->get_random('realizations', 5);
	$data['realizations'] = $CI->back_m->get_with_limit('realizations', 5);
	$data['realizations_galleries'] = [];
	foreach ($data['realizations'] as $realization) {
		$data['realizations_galleries'][$realization->id] = $CI->back_m->get_images('gallery', 'realizations', $realization->id);
	}

	$data['news_descriptions'] = $CI->back_m->get_one('news_descriptions', 1);
	$data['news'] = $CI->back_m->get_with_limit('news', 3);
	$data['contact_descriptions'] = $CI->back_m->get_one('contact_descriptions', 1);
	$data['offers_descriptions'] = $CI->back_m->get_one('offers_descriptions', 1);
	$data['under_slider'] = $CI->back_m->get_one('under_slider', 1);

	return $data;
}