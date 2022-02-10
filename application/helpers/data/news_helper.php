<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function loadNewsData() {
	$CI =& get_instance();
	$data = loadDefaultDataFront();
	
	$data['news_descriptions'] = $CI->back_m->get_one('news_descriptions', 1);
	$data['news'] = $CI->back_m->get_all('news');
	$data['news_length'] = count($data['news']);
	$arr = [];
	$row = 0;
	for($i=0 ;$i<count($data['news']) ; $i++) {
		if($row == 0) array_push($arr, []);
		array_push($arr[floor($i/6)], $data['news'][$i]);
		if($row < 5) $row++; 
		else $row = 0;
	}
	$data['news'] = $arr;

	return $data;
}

function loadSingleNewsData($id) {
	$CI =& get_instance();
	$data = loadDefaultDataFront();

	$data['news'] = $CI->back_m->get_one('news', $id);
	$data['gallery'] = $CI->back_m->get_images('gallery', 'news', $id);
	$data['meta_title'] = lang($data['news'], 'title');
	$data['meta_description'] = lang($data['news'], 'meta_description');

	return $data;
}