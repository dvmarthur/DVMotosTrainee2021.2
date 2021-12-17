<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class HomeController
{
    public function index()
    {
        $produtos = App::get('database') -> selectAll('produtos');

        $tables = [
            'produtos' => $produtos
        ];

        return view('/site/home', $tables);
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