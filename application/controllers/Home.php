<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
		parent::__construct();
		if (!$this->db->table_exists('users')){
			$this->base_m->create_base();
		}
		$this->load->helper('data/home');
		if(!isset($_SESSION['lang'])) $_SESSION['lang'] = 'pl';
		if($_SESSION['lang'] == 'en' && $this->uri->segment(1) != 'en') redirect('en');
	}

	public function index() {
		echo loadViewsFront('index', loadHomeData());
	}
}