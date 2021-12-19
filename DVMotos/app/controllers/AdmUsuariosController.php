<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class AdmUsuariosController
{
    public function admUser()
    {
        return view('/admin/adm-user');
    }

    public function pesquisa()
    {
        $pesquisa = $_GET['pesquisa'];
        $produtos = App::get('database') -> pesquisa('user', $pesquisa);
        $tables = [
            'produtos' => $produtos
        ];
        return view('/site/adm-users', $tables);
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