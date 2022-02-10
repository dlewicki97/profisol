<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lang extends CI_Controller {

	function __construct() {
		parent::__construct();
		if (!$this->db->table_exists('users')){
			$this->base_m->create_base();
		}
	}

	public function set_lang($prefix) {
		$_SESSION['lang'] = $prefix;
		$segments = explode('/', $_SERVER['HTTP_REFERER']);
		if($prefix != 'pl') {
			if($segments[3] != 'en') array_splice($segments, 3, 0, [$prefix]);
		} else {
			if($segments[3] == 'en') array_splice($segments, 3, 1);
		}
		redirect(implode('/', $segments));
	}

	
	
}