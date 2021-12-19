<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class ProdutosController
{
    public function produtos()
    {   
        $produtos = App::get('database') -> selectAll('produtos');

        $tables = [
            'produtos' => $produtos
        ];
        return view('/site/produtos', $tables);
    }

    public function pesquisa()
    {
        $pesquisa = $_GET['pesquisa'];
        $produtos = App::get('database') -> pesquisa('produtos', $pesquisa);
        $tables = [
            'produtos' => $produtos
        ];
        return view('/site/produtos', $tables);
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