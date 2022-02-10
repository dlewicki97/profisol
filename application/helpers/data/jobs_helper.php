<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function loadJobsData() {
	$CI =& get_instance();
	$data = loadDefaultDataFront();

	$data['jobs'] = $CI->back_m->get_all('jobs');

	return $data;
}

function loadSingleJobData($id) {
	$CI =& get_instance();
	$data = loadDefaultDataFront();

	$data['job'] = $CI->back_m->get_one('jobs', $id);
	$data['jobs_requirements'] = $CI->back_m->get_all_where('jobs_requirements', 'job_id', $id);
	$data['jobs_descriptions'] = $CI->back_m->get_one('jobs_descriptions', 1);
	$data['meta_title'] = lang($data['job'], 'work_place');

	return $data;
}