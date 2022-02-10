<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function loadContactData() {
	$CI =& get_instance();
	$data = loadDefaultDataFront();

	$data['contact_descriptions'] = $CI->back_m->get_one('contact_descriptions', 1);
	
	return $data;
}