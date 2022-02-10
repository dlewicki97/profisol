<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function loadDefaultData() {
	$CI = &get_instance();
	$data['mails'] = $CI->back_m->get_all('mails');
	$data['user'] = $CI->back_m->get_one('users', $_SESSION['id']);
	$data['media'] = $CI->back_m->get_all('media');
	$data['settings'] = $CI->back_m->get_one('settings', 1);
	$data['contact'] = $CI->back_m->get_one('contact_settings', 1);
	$data['api_gallery'] = apiGalleryRows();
	
	return $data;
}

function get_header_icons() {
	$CI = &get_instance();
	$icons = $CI->back_m->get_all('header_icons');
	$data['email'] = $icons[0];
	$data['phone'] = $icons[1];
	$data['address'] = $icons[2];
	$data['phone2'] = $icons[3];
	$data['facebook'] = $icons[4];

	return $data;
}

function loadDefaultDataFront() {
    $CI = &get_instance();
	$data['settings'] = $CI->back_m->get_one('settings', 1);
	$data['contact_settings'] = $CI->back_m->get_one('contact_settings', 1);
	$data['subpages'] = $CI->back_m->get_all('subpages');
	$data['current_subpage'] = $CI->back_m->get_subpage($CI->uri->segment($_SESSION['lang'] != 'pl' ? 2 : 1) == null ? '' : $CI->uri->segment($_SESSION['lang'] != 'pl' ? 2 : 1));
	$data['header_icons'] = get_header_icons();
	$data['hours'] = $CI->back_m->get_all('hours');
	$data['hours_descriptions'] = $CI->back_m->get_one('hours_descriptions', 1);
	$data['jobs_descriptions'] = $CI->back_m->get_one('jobs_descriptions', 1);
	$data['footer_descriptions'] = $CI->back_m->get_one('footer_descriptions', 1);
	$data['header_descriptions'] = $CI->back_m->get_one('header_descriptions', 1);
	$data['social_icons'] = $CI->back_m->get_all('social_icons');
	$data['meta_title'] = lang($data['current_subpage'], 'title');
	$data['meta_description'] = lang($data['current_subpage'], 'description');
	$data['dropdown_offers'] = $CI->back_m->get_all('offers');	
	
    return $data;
}
