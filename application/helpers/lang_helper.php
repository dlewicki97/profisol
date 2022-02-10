<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function lang($object, $field) {
	$array = get_object_vars($object);
	$prefix = $_SESSION['lang'] != 'pl' ? $_SESSION['lang']. '_' : '';

	return isset($array[$prefix. $field]) ? $array[$prefix. $field] : $array[$field] ; 
}