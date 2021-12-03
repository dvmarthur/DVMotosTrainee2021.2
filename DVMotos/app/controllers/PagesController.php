<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class PagesController
{
    public function index()
    {
        return view('/site/home');
    }

    public function quemsomos()
    {
        return view('/site/quemsomos');
    }

    public function contato()
    {
        return view('/site/contato');
    }

    public function login()
    {
        return view('/site/login');
    }

    public function produtos()
    {
        return view('/site/produtos');
    }

    public function produto()
    {
        return view('/site/produto');
    }



    public function admDashboard()
    {
        return view('/admin/adm-dashboard');
    }

    public function admCategorias()
    {
        return view('/admin/adm-categorias');
    }

    public function admProdutos()
    {
        return view('/admin/adm-produtos');
    }

    public function admUser()
    {
        return view('/admin/adm-user');
    }


    
    public function show()
    {
        
    }

    public function create()
    {
 
    }

    public function store()
    {

    }

    public function edit()
    {
  
    }

    public function update()
    {
        
    }

    public function delete()
    {
 
    }
}