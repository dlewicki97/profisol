<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function loadSingleOfferData($id) {
	$CI =& get_instance();
	$data = loadDefaultDataFront();

	$data['offer'] = $CI->back_m->get_one('offers', $id);
	$data['offers_descriptions'] = $CI->back_m->get_one('offers_descriptions', 1);
	$data['video'] = $CI->back_m->get_images('media', 'offers', $id);
	if(!empty($data['video'])) $data['video'] = $data['video'][0];
	$data['meta_title'] = lang($data['offer'], 'title');

	$data['offers_specials'] = $CI->back_m->get_all_where('offers_specials', 'offer_id', $id);
	$data['offers_specials_list'] = [];
	foreach ($data['offers_specials'] as $special) {
		$data['offers_specials_list'][$special->id] = $CI->back_m->get_all_where('offers_specials_list', 'offer_special_id', $special->id);
	}

	$data['gallery'] = $CI->back_m->get_images('gallery', 'offers', $id);

	return $data;
}