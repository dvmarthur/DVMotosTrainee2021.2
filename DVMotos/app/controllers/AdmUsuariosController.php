<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class AdmUsuariosController
{
    public function admUser()
    {
        $users = App::get('database') -> selectAll('users');

        $tables = [
            'users' => $users
        ];

        return view('/admin/adm-user', $tables);
    }


    
    public function show()
    {
        
    }

    public function create()
    {
        $parametros = [
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'senha' => $_POST['senha']
        ];

        App::get('database') -> insert('users', $parametros);
        header('Location: /adm-user');
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
        App::get('database')->delete('users', $_POST['id']);
        header('Location: /adm-user');
    }
}