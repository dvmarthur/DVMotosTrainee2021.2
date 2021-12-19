<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class AdmCategoriasController
{
    public function admCategorias()
    {
        return view('/admin/adm-categorias');
    }

    public function pesquisa()
    {
        $pesquisa = $_GET['pesquisa'];
        $categorias = App::get('database') -> pesquisa('categorias', $pesquisa);
        $tables = [
            'categorias' => $categorias
        ];
        return view('/admin/adm-categorias', $tables);
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