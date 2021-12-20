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

$router->get('produtos', 'ProdutosController@paginacao');
$router->get('produto', 'ProdutoController@produto');

$router->post('produtos/create', 'AdmProdutosController@createProduto');
$router->post('produtos/update', 'AdmProdutosController@updateProduto');
$router->post('produtos/delete', 'AdmProdutosController@delete');
$router->get('produtos/pesquisa', 'ProdutosController@pesquisa');

$router->get('adm-produtos', 'AdmProdutosController@admProdutos');
$router->get('adm-produtos/pesquisa', 'AdmProdutosController@pesquisa');

$router->post('users/create', 'AdmUsuariosController@createUsers');
$router->post('users/update', 'AdmUsuariosController@updateUsers');
$router->post('users/delete', 'AdmUsuariosController@delete');

$router->get('adm-user', 'AdmUsuariosController@admUser');
$router->get('adm-user/pesquisa', 'AdmUsuariosController@pesquisa');

$router->get('adm-categorias', 'AdmCategoriasController@admCategorias');

$router->get('quemsomos', 'QuemSomosController@index');
$router->get('contato', 'ContatoController@contato');
$router->post('contato/disparar', 'ContatoController@sendEmail');

$router->get('adm-dashboard', 'AdmDashboardController@admDashboard');

$router->get('adm-categorias/pesquisa', 'AdmCategoriasController@pesquisa');
$router->post('createCategoria', 'AdmCategoriasController@create');
$router->post('categorias/update', 'AdmCategoriasController@updateCategorias');
$router->post('delete', 'AdmCategoriasController@delete');

$router->get('login', 'LoginController@login');
$router->post('login/entrar', 'LoginController@entrar');
$router->get('login/deslogar', 'LoginController@deslogar');
 
