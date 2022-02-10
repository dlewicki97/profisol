<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

	public function get() {
		$data = $this->back_m->get_one('settings', 1);

		set_output($data);
	}
}