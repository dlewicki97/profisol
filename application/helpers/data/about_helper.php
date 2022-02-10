<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function loadAboutData() {
	$CI =& get_instance();
	$data = loadDefaultDataFront();

	$data['about'] = $CI->back_m->get_one('about', 1);
	$data['about_descriptions'] = $CI->back_m->get_one('about_descriptions', 1);
	$data['statistics'] = $CI->back_m->get_all('statistics');
	$data['statistics_descriptions'] = $CI->back_m->get_one('statistics_descriptions', 1);

	return $data;
}