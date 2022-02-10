<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    function set_output($data){
    	$CI =& get_instance();
    	
    	$CI->output->set_content_type('application/json');
		$CI->output->set_status_header(200);
		$CI->output->set_output(json_encode($data));
    }