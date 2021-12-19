<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class AdmCategoriasController
{
    public function admCategorias()
    {
        $categorias = App::get('database') -> selectAll('categorias');

        return view('/admin/adm-categorias',compact('categorias'));
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
        $parameters = [
            'nome' => $_POST['categoryName'],
        ];

        App::get('database') -> insertCategorias('categorias', $parameters);

        header('location: /adm-categorias');
    }

    public function store()
    {


    }

    public function edit()
    {

    }

    public function updateCategorias()
    {
        $parametros = [
            'id' => $_POST['id'],
            'nome' => $_POST['nome']
        ];
        
        App::get('database')->edit('categorias', $parametros);

        header('location: /adm-categorias');
    }

    public function delete()
    {
        App::get('database') -> delete('categorias', $_POST['id']);

        header('location: /adm-categorias');
 
    }
}