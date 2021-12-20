<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class AdmUsuariosController
{
    public function admUser()
    {
        $users = App::get('database') -> selectAll('users');

        $table = [
            'users' => $users
        ];

        return view('admin/adm-user', $table);
    }

    public function pesquisa()
    {
        $pesquisa = $_GET['pesquisa'];
        $produtos = App::get('database') -> pesquisa('users', $pesquisa);
        $tables = [
            'produtos' => $produtos
        ];
        return view('/site/adm-users', $tables);
    }
    
    public function show()
    {
        
    }

    public function createUsers()
    {
        $parametros = [
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'senha' => hash("sha512", $_POST['senha'])
        ];

        App::get('database') -> insertUsuarios('users', $parametros);
        header('Location: /adm-user');
    }

    public function store()
    {

    }

    public function updateUsers()
    {
        $parametros = [
            'id' => $_POST['id'],
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'senha' => $_POST['senha']
        ];

        App::get('database')->edit('users', $parametros);
        header('Location: /adm-user');
    }

    public function delete()
    {
        App::get('database')->delete('users', $_POST['id']);
        header('Location: /adm-user');
    }
}