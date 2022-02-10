<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function format_month($month) {
	$result = '';
	$months = [
		'pl' => ['STY', 'LUT', 'MAR', 'KWI', 'MAJ', 'CZE', 'LIP', 'SIE', 'WRZ', 'PAŹ', 'LIS', 'GRU'],
		'en' => ['JAN', 'FEB', 'MAR', 'APR', 'MAI', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC']
	];
	if($month == '01') $result = $months[$_SESSION['lang']][0];
	elseif($month == '02') $result = $months[$_SESSION['lang']][1];
	elseif($month == '03') $result = $months[$_SESSION['lang']][2];
	elseif($month == '04') $result = $months[$_SESSION['lang']][3];
	elseif($month == '05') $result = $months[$_SESSION['lang']][4];
	elseif($month == '06') $result = $months[$_SESSION['lang']][5];
	elseif($month == '07') $result = $months[$_SESSION['lang']][6];
	elseif($month == '08') $result = $months[$_SESSION['lang']][7];
	elseif($month == '09') $result = $months[$_SESSION['lang']][8];
	elseif($month == '10') $result = $months[$_SESSION['lang']][9];
	elseif($month == '11') $result = $months[$_SESSION['lang']][10];
	elseif($month == '12') $result = $months[$_SESSION['lang']][11];

	return $result;
}