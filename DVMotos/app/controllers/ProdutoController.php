<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class ProdutoController
{
    public function produto()
    {   
        $produtos = App::get('database') -> select('produtos', $_GET['id']);

        return view('/site/produto', compact('produtos'));
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