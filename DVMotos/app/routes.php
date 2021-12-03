<?php

use App\Controllers\PagesController;

$router->get('','PagesController@index');
$router->get('quem-somos', 'PagesController@quemsomos');
$router->get('contato', 'PagesController@contato');
$router->get('login', 'PagesController@login');
$router->get('produtos', 'PagesController@produtos');
$router->get('produto', 'PagesController@produto');

$router->get('adm-dashboard', 'PagesController@admDashboard');
$router->get('adm-usuarios', 'PagesController@admUser');
$router->get('adm-categorias', 'PagesController@admCategorias');
$router->get('adm-produtos', 'PagesController@admProdutos');