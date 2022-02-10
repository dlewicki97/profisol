<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function base() {
	return base_url(). ($_SESSION['lang'] != 'pl' ? $_SESSION['lang']. '/' : '');
}

function assets() {
	return base_url(). 'assets/front/';
}

function file_url() {
	return base_url(). 'uploads/';
}