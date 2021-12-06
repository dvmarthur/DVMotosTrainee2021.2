<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class AdmUsuariosController
{
    public function admUser()
    {
        $user = App::get('database') ->selectAll('user');
        $tables = ['user' => $user];

        return view('/admin/adm-user', $tables);
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