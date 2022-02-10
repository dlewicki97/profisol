<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function addVideo($table, $model, $video) {
	$CI = &get_instance();
	$now = date('Y-m-d');
	if (!is_dir('uploads/'.$now)) {
		mkdir('./uploads/' . $now, 0777, TRUE);
	}
	$config['upload_path'] = './uploads/'.$now;
	$config['allowed_types'] = '*';
	$config['max_size'] = 0;
	$config['max_width'] = 0;
	$config['max_height'] = 0;
	$CI->load->library('upload',$config);
	$CI->upload->initialize($config);

	$name = $video['name'];
	$name = slug_photo($name);
	$_FILES['video']['name'] = $name;
	$_FILES['video']['type'] = $video['type'];
	$_FILES['video']['tmp_name'] = $video['tmp_name'];
	$_FILES['video']['error'] = $video['error'];
	$_FILES['video']['size'] = $video['size'];
	if(!($CI->upload->do_upload('video')) || $video['error'] != 0) {
		echo $CI->upload->display_errors();
	} else {
		$data = $CI->upload->data();

		if($data['file_size'] > 1440) {
			resizeImg($data['file_name'], $now, '1440');
		}
		if (!$CI->db->field_exists('table_name', 'media')) {
			$CI->base_m->create_column('media', 'table_name');
		}  
		if (!$CI->db->field_exists('item_id', 'media')) {
			$CI->base_m->create_column('media', 'item_id');
		} 
		$data['table_name'] = $table;
		$data['item_id'] = $model->id;
		addMedia($data, true);
	}
}