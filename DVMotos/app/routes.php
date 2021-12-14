<?php

use App\Controllers\HomeController;
use App\Controllers\QuemSomosController;
use App\Controllers\ContatoController;
use App\Controllers\LoginController;
use App\Controllers\ProdutosControllerController;
use App\Controllers\ProdutoControllerController;
use App\Controllers\AdmDashboardController;
use App\Controllers\AdmUsuariosController;
use App\Controllers\AdmCategoriasController;
use App\Controllers\AdmProdutosController;


$router->get('','HomeController@index');
$router->get('quem-somos', 'QuemSomosController@index');
$router->get('contato', 'ContatoController@contato');
$router->get('login', 'LoginController@login');
$router->get('produtos', 'ProdutosController@produtos');
$router->get('produto', 'ProdutoController@produto');

$router->get('adm-dashboard', 'AdmDashboardController@admDashboard');
$router->get('adm-user', 'AdmUsuariosController@admUser');
$router->get('adm-categorias', 'AdmCategoriasController@admCategorias');
$router->get('adm-produtos', 'AdmProdutosController@admProdutos');

$router->post('users/create', 'AdmUsuariosController@createUsers');
$router->post('users/update', 'AdmUsuariosController@updateUsers');
$router->post('users/delete', 'AdmUsuariosController@delete');