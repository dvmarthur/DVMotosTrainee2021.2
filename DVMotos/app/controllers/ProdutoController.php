<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class ProdutoController
{
    public function produto()
    {   
        $produtos = App::get('database') -> select('produtos', '17');

        $tables = [
            'produtos' => $produtos
        ];

        return view('/site/produto', $tables);
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