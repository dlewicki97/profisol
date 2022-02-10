<?php
defined('BASEPATH') OR exit('No direct script access allowed');



$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['realizacje'] = 'realizations';
$route['aktualnosci'] = 'news';
$route['aktualnosci/(.*)/(.+)'] = 'news/show/$1';
$route['praca'] = 'jobs';
$route['o-nas'] = 'about';
$route['kontakt'] = 'contact';
$route['praca/(.*)/(.+)'] = 'jobs/show/$1';
$route['oferta/(.*)/(.+)'] = 'offers/show/$1';
$route['lang/(.*)'] = 'lang/set_lang/$1';

$route['en'] = 'home';
$route['en/realizacje'] = 'realizations';
$route['en/aktualnosci'] = 'news';
$route['en/aktualnosci/(.*)/(.+)'] = 'news/show/$1';
$route['en/praca'] = 'jobs';
$route['en/o-nas'] = 'about';
$route['en/kontakt'] = 'contact';
$route['en/praca/(.*)/(.+)'] = 'jobs/show/$1';
$route['en/oferta/(.*)/(.+)'] = 'offers/show/$1';
$route['en/lang/(.*)'] = 'lang/set_lang/$1';


//SCIAGA
// $route['odziez/(.*)/(.+)'] = 'home/odziez/$1/$2';
// $route['obuwie/(.*)/(.+)'] = 'home/obuwie/$1/$2';
// $route['akcesoria/(.*)/(.+)'] = 'home/akcesoria/$1/$2';
// $route['kolekcje/(.*)/(.+)'] = 'home/kolekcje/$1/$2';
// $route['gazetka/(.*)/(.+)'] = 'home/gazetka/$1/$2';
// $route['produkt/(.*)/(.+)'] = 'home/produkt/$1/$2';
// $route['o_nas'] = 'home/o_nas';
// $route['wydarzenia'] = 'home/wydarzenia';
// $route['wpis'] = 'home/wpis';
// $route['aktualnosci'] = 'p/aktualnosci';
// $route['uzywane_podglad/(.*)/(.+)'] = 'p/uzywane_podglad/$1/$2';
// $route['promocje'] = 'p/promocje';
// $route['promocja/(.*)/(.+)'] = 'p/promocja/$1/$2';
// $route['uslugi'] = 'p/uslugi';
// $route['usluga/(.*)/(.+)'] = 'p/usluga/$1/$2';
// $route['o-nas/(.*)/(.+)'] = 'p/o_nas/$1/$2';
// $route['kontakt/(.*)/(.+)'] = 'p/kontakt/$1/$2';
// $route['media'] = 'p/media';
// $route['nowe/(.*)/(.+)'] = 'p/nowe/$1/$2';
// $route['nowe'] = 'p/nowe';
// $route['akcesoria/(.*)'] = 'p/akcesoria/$1';
