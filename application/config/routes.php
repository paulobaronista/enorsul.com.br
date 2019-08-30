<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 | -------------------------------------------------------------------------
 | URI ROUTING
 | -------------------------------------------------------------------------
 | This file lets you re-map URI requests to specific controller functions.
 |
 | Typically there is a one-to-one relationship between a URL string
 | and its corresponding controller class/method. The segments in a
 | URL normally follow this pattern:
 |
 |	example.com/class/method/id/
 |
 | In some instances, however, you may want to remap this relationship
 | so that a different class/function is called than the one
 | corresponding to the URL.
 |
 | Please see the user guide for complete details:
 |
 |	http://codeigniter.com/user_guide/general/routing.html
 |
 | -------------------------------------------------------------------------
 | RESERVED ROUTES
 | -------------------------------------------------------------------------
 |
 | There area two reserved routes:
 |
 |	$route['default_controller'] = 'welcome';
 |
 | This route indicates which controller class should be loaded if the
 | URI contains no data. In the above example, the "welcome" class
 | would be loaded.
 |
 |	$route['404_override'] = 'errors/page_missing';
 |
 | This route will tell the Router what URI segments to use if those provided
 | in the URL cannot be matched to a valid route.
 |
 */

$route['default_controller'] = "home";
$route['institucional'] = "home/institucional";
$route['institucional/politicadequalidade'] = "home/politicadequalidade";
$route['institucional/focosdeatuacao'] = "home/focosdeatuacao";
$route['institucional/quemsomos'] = "home/quemsomos";
$route['institucional/historico'] = "home/historico";
$route['institucional/premios'] = "home/premios";
$route['institucional/noticias'] = "home/noticias";
$route['institucional/compliance'] = "home/compliance";
$route['servicos'] = "home/servicos";
$route['automacao'] = "home/automacao"; 
$route['desenvolvimentooperacional'] = "home/desenvolvimentooperacional";
$route['desenvolvimentocomercial'] = "home/desenvolvimentocomercial";   
$route['prestacaodeservicoseobras'] = "home/prestacaodeservicoseobras"; 
$route['concessoes'] = "home/concessoes";
$route['clientes'] = "home/clientes";
$route['faleconosco'] = "home/faleconosco";
$route['enderecos'] = "home/enderecos";
$route['trabalheconosco'] = "home/trabalheconosco";


$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */